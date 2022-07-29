<?php
/**
 * Created by PhpStorm.
 * User: janik
 * Date: 14.04.2018
 * Time: 14:41
 */

// no shortcode. get results and games from api
function getDataFromApi($teamid, $status, $limit)
{
    if ($status == 'played') {
        $order = 'desc';
    } else {
        $order = 'asc';
    }

    if (strlen($teamid) == 0 || $teamid == 'all') {
        $url = "https://api.handball.ch/rest/v1/clubs/140336/games?status=$status&limit=$limit&order=$order";
    } else {
        $url = "https://api.handball.ch/rest/v1/clubs/140336/teams/$teamid/games?status=$status&limit=$limit&order=$order";
    }

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "authorization: Basic MTQwMzM2OmJ4S2duM3pX",
            "cache-control: no-cache",
            "content-type: application/json"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    } else {
        return $response;
    }
}

function get_games($request) {

    $limit = $request->get_params()['limit'];
    $teamid = $request->get_params()['teamid'];
    $status = $request->get_params()['status'];

    $response = getDataFromApi($teamid, $status, $limit);
// generate random id for using in calender export
    $id = $status . '_game_table' . rand();
    $detailsLink = get_page_link(371);

    // desktop version
    $str = '<div class="game_table_wrapper hide-on-small-only"><table class="game_table ' . $status . '_game_table" id="' . $id . '">
                <thead><tr>
                <td>Datum</td>
                <td>Zeit</td>
                <td>Liga</td>
                <td>Team Heim</td>
                <td>Team Gast</td>
                <td>Sporthalle</td>';
    if ($status == 'played') {
        $str = $str . '
                <td>Resultat</td>
                <td></td>';
    }
    $str = $str . '</tr></thead><tbody>';

    $response = json_decode($response);

    foreach ($response as $game) {

        // check if münsingen is winner
        if ($game->teamAScoreFT == $game->teamBScoreFT) {
            $smile = '/wp-content/uploads/2018/04/neutral.png';
            $won = 'draw';
        } elseif (($game->teamAScoreFT > $game->teamBScoreFT && strpos($game->teamAName, 'Münsingen')) ||
            ($game->teamAScoreFT < $game->teamBScoreFT && strpos($game->teamBName, 'Münsingen'))) {
            $smile = '/wp-content/uploads/2018/04/happy.png';
            $won = 'true';
        } else {
            $smile = '/wp-content/uploads/2018/04/sad.png';
            $won = 'false';
        }


        // create fields. ATTENTION: IF YOU CHANGE THIS, YOU HAVE TO CHANGE CALENDER EXPORT JS FUNCTION TOO
        $str = $str . '<tr onclick="window.location.href = \'' . $detailsLink . '?game=' . urlencode(serialize($game)) . '&status=' . $status .  '\'">
                            <td>' . date('d. M. Y', strtotime($game->gameDateTime)) . '</td>
                            <td>' . date('H:i', strtotime($game->gameDateTime)) . ' Uhr</td>
                            <td>' . $game->leagueShort . '</td>
                            <td>' . $game->teamAName . '</td>
                            <td>' . $game->teamBName . '</td>
                            <td><a target="_blank" href="https://www.google.ch/maps/place/' . $game->venueAddress . ' ' . $game->venueCity . '">
                            ' . $game->venue . '
                            </a></td>';
        if ($status == 'played') {
            $str = $str . '<td>' . $game->teamAScoreFT . ':' . $game->teamBScoreFT . '</td>
                              <td><img class="won_' . $won . '" src="' . $smile . '" alt="won_' . $won . '"></td>';
        }
        $str = $str . '</tr>';
    }

    $str = $str . '</tbody></table>';

    if (sizeof($response) == 0) {
        $str = $str . '<p>Bisher keine Resultate</p>';
    }

    $str = $str . '</div>';



    // mobile version
    $str = $str . '<div class="mobile_game_table_wrapper results_table show-on-small-only">';

    $lastGameDate = '';
    foreach ($response as $game) {


        // check if münsingen is winner
        if ($game->teamAScoreFT == $game->teamBScoreFT) {
            $smile = '/wp-content/uploads/2018/04/neutral.png';
            $won = 'draw';
        } elseif (($game->teamAScoreFT > $game->teamBScoreFT && strpos($game->teamAName, 'Münsingen')) ||
            ($game->teamAScoreFT < $game->teamBScoreFT && strpos($game->teamBName, 'Münsingen'))) {
            $smile = '/wp-content/uploads/2018/04/happy.png';
            $won = 'true';
        } else {
            $smile = '/wp-content/uploads/2018/04/sad.png';
            $won = 'false';
        }

        if (date('d. M. Y', strtotime($game->gameDateTime)) != $lastGameDate) {
            $str = $str . '<p class="dateHeader">' . date('d. M. Y', strtotime($game->gameDateTime)) . '</p>';
            $lastGameDate = date('d. M. Y', strtotime($game->gameDateTime));
        }
        $str = $str . '<div class="result" onclick="window.location.href = \'' . $detailsLink . '?game=' . urlencode(serialize($game)) . '&status=' . $status .  '\'">'
            . '<p class="teamRow">'
            . $game->teamAName . " : " . $game->teamBName . ' <span>('. $game->leagueShort .')</span></p>';

        if ($status == 'planned') {
            $str = $str . '<p>' . date('H:i', strtotime($game->gameDateTime)) . ' - ';
            $str = $str . '<a target="_blank" href="https://www.google.ch/maps/place/' . $game->venueAddress . ' ' . $game->venueCity . '">
        ' . $game->venue . '
                            </a></p>';
        } else {
            $str = $str . '<p>' . $game->teamAScoreFT . ':' . $game->teamBScoreFT . '</p>' .
                '<img class="won_' . $won . '" src="' . $smile . '" alt="won_' . $won . '">';
        }
        $str = $str . "</div>";
    }

    if ($status == 'planned' && sizeof($response) > 0) {
        $str = $str . '</div><p><a href="/meisterschaft/kalender-exportieren">Kalender exportieren oder zu Smartphone Kalender hinzufügen</a></p>';
    }

    if (sizeof($response) == 0) {
        $str = $str . '<p>Bisher keine Resultate</p>';
    }

    return $str;
}

function get_ranking($request) {

    $teamid = $request->get_params()['teamid'];

    $url = "https://api.handball.ch/rest/v1/teams/$teamid/group";

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "authorization: Basic MTQwMzM2OmJ4S2duM3pX",
            "cache-control: no-cache",
            "content-type: application/json"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    } else {

        $response = json_decode($response);

        // mobile version

        $str = '<div class="ranking_table_wrapper show-on-small-only">'
        . '<p class="ranking_header">Rangliste ' . $response->groupText . '</p>'
        . '<table class="ranking_table">'
        . '<tbody>';


        foreach ($response->ranking as $key=>$rank) {

            $candidate = '';
            // check which candidate
            if ($key < $response->directPromotion) {
                $candidate = 'directPromotion';
            } elseif ($key < $response->promotionCandidate + $response->directPromotion) {
                $candidate = 'promotionCandidate';
            } elseif ($key >= (count($response->ranking) - $response->directRelegation)) {
                $candidate = 'directRelegation';
            } elseif ($key >= (count($response->ranking) - $response->relegationCandidate - $response->directRelegation)) {
                $candidate = 'relegationCandidate';
            }

            $muensingen = '';
            // check if muensingen
            if (strpos($rank->teamName, 'Münsingen')) {
                $muensingen = 'muensingen';
            }

            $str = $str . '<tr class="' . $candidate . ' ' . $muensingen . '">
<td>' . $rank->rank . '</td>
<td>' . $rank->teamName . '</td>
<td>(' . $rank->totalPoints . '/' . $rank->totalGames . '</td>
<td>(' . $rank->totalWins . '|' . $rank->totalDraws . '|' . $rank->totalLoss . ')</td>
<td>' . $rank->totalScoresDiff . '</td>
</tr>';
        }

        $str = $str . '</tbody></table></div>';

        // desktop version

        $str = $str . '<div class="ranking_table_wrapper hide-on-small-only"><table class="ranking_table">
<thead><tr>
<td></td>
<td>Team</td>
<td>Gruppe</td>
<td>Spiele</td>
<td>Siege</td>
<td>Unent</td>
<td>Nied</td>
<td>T+</td>
<td>T-</td>
<td>TD+-</td>
<td>Punkte</td>
</tr></thead>
<tbody>';


        foreach ($response->ranking as $key=>$rank) {

            $candidate = '';
            // check which candidate
            if ($key < $response->directPromotion) {
                $candidate = 'directPromotion';
            } elseif ($key < $response->promotionCandidate + $response->directPromotion) {
                $candidate = 'promotionCandidate';
            } elseif ($key >= (count($response->ranking) - $response->directRelegation)) {
                $candidate = 'directRelegation';
            } elseif ($key >= (count($response->ranking) - $response->relegationCandidate - $response->directRelegation)) {
                $candidate = 'relegationCandidate';
            }

            $muensingen = '';
            // check if muensingen
            if (strpos($rank->teamName, 'Münsingen')) {
                $muensingen = 'muensingen';
            }

            $str = $str . '<tr class="' . $candidate . ' ' . $muensingen . '">
<td>' . $rank->rank . '</td>
<td>' . $rank->teamName . '</td>
<td>' . $response->groupText . '</td>
<td>' . $rank->totalGames . '</td>
<td>' . $rank->totalWins . '</td>
<td>' . $rank->totalDraws . '</td>
<td>' . $rank->totalLoss . '</td>
<td>' . $rank->totalScoresPlus . '</td>
<td>' . $rank->totalScoresMinus . '</td>
<td>' . $rank->totalScoresDiff . '</td>
<td>' . $rank->totalPoints . '</td>
</tr>';
        }

        $str = $str . '</tbody></table></div>';
        return $str;
    }
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'hbcresults/v1', '/games/', array(
        'methods' => 'GET',
        'callback' => 'get_games'
    ) );
} );

add_action( 'rest_api_init', function () {
    register_rest_route( 'hbcresults/v1', '/ranking/', array(
        'methods' => 'GET',
        'callback' => 'get_ranking'
    ) );
} );