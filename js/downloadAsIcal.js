function downloadTableAsIcal(table) {
    var $ = jQuery;
    var cal = ics();
    $(table).find('tbody').eq(0).find('tr').each(function (index, tr) {
        var time = $(tr).find('td')[1].innerHTML;
        var startDate = moment($(tr).find('td')[0].innerHTML + " " + time.substring(0, time.length - 3)).format();
        var endDate = moment(startDate).add(90, 'minutes').format();
        var liga = $(tr).find('td')[2].innerHTML;
        var teamA = $(tr).find('td')[3].innerHTML;
        var teamB = $(tr).find('td')[4].innerHTML;
        var place = $(tr).find('td').eq(5).text().trim();
        cal.addEvent(teamA + ' vs. ' + teamB + " (" +  liga + ")", "Hopp Münsige!!", place , startDate, endDate);
    });
    cal.download('games');
}
