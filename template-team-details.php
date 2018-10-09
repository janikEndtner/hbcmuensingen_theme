<?php
/**
 * Template name: Team-Details
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Milestonez Pro
 */

get_header(); ?>

    <div class="container content-area">
        <div class="middle-align">
            <div class="site-main sitefull">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content', 'page'); ?>

                    <?php


                    $details = unserialize(str_replace('\"', '"', $_GET['game']));
                    $status = $_GET['status'];


                    $str = '
                    <div class="team-details-wrapper">
                    <table><thead>'
                        . '<tr><td>Spielnummer:</td><td>' . $details->gameNr . '</td></tr>'
                        . '<tr><td>Datum:</td><td>' . date('d. M. Y', strtotime($details->gameDateTime)) . '</td></tr>'
                        . '<tr><td>Uhrzeit:</td><td>' . date('H:i', strtotime($details->gameDateTime)) . '</td></tr>'
                        . '<tr><td>Match:</td><td>' . $details->teamAName . ' : ' . $details->teamBName . '</td></tr>'
                        . '<tr><td>Liga:</td><td>' . $details->leagueLong . '</td></tr>';
                        $str = $str . '<tr><td>Halle:</td><td>' . $details->venue . '</td></tr>'
                        . '<tr><td>Adresse:</td><td><a target="_blank" href="https://www.google.ch/maps/place/' . $details->venueAddress . ' ' . $details->venueCity . '">'
                        . $details->venueAddress . ', ' . $details->venueZip . ' ' . $details->venueCity
                        . '</a></td></tr>';
                        if ($status == 'played') {
                            $str = $str . '<tr><td>Halbzeitresultat:</td><td>' . $details->teamAScoreHT . ':' . $details->teamBScoreHT . '</td></tr>'
                            . '<tr><td>Schlussresultat:</td><td>' . $details->teamAScoreFT . ':' . $details->teamAScoreFT . '</td></tr>'
                            . '<tr><td>Zuschauer:</td><td>' . $details->spectators . '</td></tr>';
                        };
                        $str = $str . '</thead></table>';

                        $str = $str . '<br><a style="cursor: pointer;" onclick="window.history.go(-1);">zurück</a>
                        </div>';


                    echo $str;

                    ?>
                <?php endwhile; // end of the loop. ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>

<?php get_footer(); ?>