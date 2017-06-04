// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Statistik berdasarkan umur member'
    },
    subtitle: {
        text: 'Pantau dan analisa jumlah member berdasarkan umur mereka'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total Statistik member yang terdaftar'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [{
        name: 'Umur',
        colorByPoint: true,
        data: [{
            name: '10 - 15 tahun',
            y: 2.03,
            drilldown: 'Umur Member'
        }, {
            name: '16 - 20 tahun',
            y: 14.03,
            drilldown: 'Umur Member'
        }, {
            name: '21 - 25 tahun',
            y: 40.38,
            drilldown: 'Umur Member'
        }, {
            name: '26 - 30 tahun',
            y: 55.77,
            drilldown: 'Umur Member'
        }, {
            name: '31 - 35',
            y: 30,
            drilldown: 'Umur Member'
        }, {
            name: 'Umur Member',
            y: 21.05,
            drilldown: null
        }]
    }],
    drilldown: {
        series: [{
            name: 'Umur Member',
            id: 'Umur Member',
            data: [
                [
                    '10 tahun',
                    0.13
                ],
                [
                    '11 tahun',
                    0.91
                ],
                [
                    '12 tahun',
                    1.11
                ],
                [
                    '13 tahun',
                    1.33
                ],
                [
                    '14 tahun',
                    1.06
                ],
                [
                    '15 tahun',
                    3.5
                ]
            ]
        }, {
            name: 'Umur Member',
            id: 'Umur Member',
            data: [
                [
                    '16 tahun',
                    5
                ],
                [
                    '17 tahun',
                    4.32
                ],
                [
                    '18 tahun',
                    3.68
                ],
                [
                    '19 tahun',
                    2.96
                ],
                [
                    '20 tahun',
                    2.53
                ],  
               ]
        }, {
            name: 'Umur Member',
            id: 'Umur Member',
            data: [
                [
                    '21 tahun',
                    2.76
                ],
                [
                    '22 tahun',
                    2.32
                ],
                [
                    '23 tahun',
                    2.31
                ],
                [
                    '24 tahun',
                    1.27
                ],
                [
                    '25 tahun',
                    1.02
                ],
               ]
        }, {
            name: 'Umur Member',
            id: 'Umur Member',
            data: [
                [
                    '26 tahun',
                    2.56
                ],
                [
                    '27 tahun',
                    0.77
                ],
                [
                    '28 tahun',
                    0.42
                ],
                [
                    '29 tahun',
                    0.3
                ],
                [
                    '30 tahun',
                    0.29
                ],
            ]
        }, {
            name: 'Umur Member',
            id: 'Umur Member',
            data: [
                [
                    '31 tahun',
                    0.34
                ],
                [
                    '32 tahun',
                    0.24
                ],
                [
                    '33 tahun',
                    0.17
                ],
                [
                    '34 tahun',
                    0.16
                ],
                [
                    '35 tahun',
                    0.16
                ]
            ]
        }]
    }
});