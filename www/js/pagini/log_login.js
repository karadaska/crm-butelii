$(document).ready(function () {

    $('#form_raport > div > select').on('change', function () {
        $('#form_raport').submit();
    });

    //define chart clolors ( you maybe add more colors if you want or flot will add it automatic )
    var chartColours = ['#62aeef', '#d8605f', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'];

    //generate random number for charts
    randNum = function () {
        return (Math.floor(Math.random() * (1 + 40 - 20)) ) + 20;
    }

    //check if element exist and draw chart
    if ($(".chart").length) {



        var options = {
            grid: {
                show: true,
                aboveData: true,
                color: "#3f3f3f",
                labelMargin: 5,
                axisMargin: 0,
                borderWidth: 0,
                borderColor: null,
                minBorderMargin: 5,
                clickable: true,
                hoverable: true,
                autoHighlight: true,
                mouseActiveRadius: 20
            },
            series: {
                lines: {
                    show: true,
                    fill: false,
                    lineWidth: 2,
                    steps: false
                },
                points: {show: true}
            },
            legend: {
                position: "ne",
                margin: [0, -25],
                noColumns: 0,
                labelBoxBorderColor: null,
                labelFormatter: function (label, series) {
                    // just add some space to labes
                    return label + '&nbsp;&nbsp;';
                },
                width: 40,
                height: 1
            },
            yaxis: { min: 0 },
            xaxis: {ticks: 11, tickDecimals: 0},
            colors: chartColours,
            shadowSize: 1,
            tooltip: true, //activate tooltip
            tooltipOpts: {
                content: "%s : %y.0",
                shifts: {
                    x: -30,
                    y: -50
                },
                defaultTheme: false
            }
        };

        $.plot($(".chart"), [
            {
                label: "Logins",
                data: d1
            }
        ], options);

    }//End .chart if


});