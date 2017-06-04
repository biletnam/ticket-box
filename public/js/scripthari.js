// Create the chart
Highcharts.chart('container3', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Statistik berdasarkan waktu'
    },
    subtitle: {
        text: 'Pantau dan analisa jumlah member berdasarkan waktu pendaftaran'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total member selama satu bulan'
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
        name: 'Time',
        colorByPoint: true,
        data: [{
            name: 'Minggu 1',
            y: 10.33,
            drilldown: 'Microsoft Internet Explorer'
        }, {
            name: 'Minggu 2',
            y: 24.03,
            drilldown: 'Chrome'
        }, {
            name: 'Minggu 3',
            y: 5.38,
            drilldown: 'Firefox'
        }, {
            name: 'Minggu 4',
            y: 49.77,
            drilldown: 'Safari'
        }]
    }],
    drilldown: {
        series: [{
            name: 'Jumlah Peserta',
            id: 'Microsoft Internet Explorer',
            data: [
                [
                    'Senen',
                    1.13
                ],
                [
                    'Selasa',
                    2.2
                ],
                [
                    'Rabu',
                    3.11
                ],
                [
                    'Kamis',
                    10.33
                ],
                [
                    'Jumat',
                    13.06
                ],
                [
                    'Sabtu',
                    8.5
                ],
                [
                    'Minggu',
                    20.5
                ]
            ]
        }, {
            name: 'Jumlah Peserta',
            id: 'Chrome',
            data: [
                [
                    'Senen',
                    20
                ],
                [
                    'Selasa',
                    21.32
                ],
                [
                    'Rabu',
                    15.68
                ],
                [
                    'Kamis',
                    20.96
                ],
                [
                    'Jumat',
                    22.53
                ],
                 [
                    'Sabtu',
                    9.53
                ], 
                 [
                    'Minggu',
                    10.53
                ],   
               ]
        }, {
            name: 'Jumlah Peserta',
            id: 'Firefox',
            data: [
                [
                    'Senen',
                    2.76
                ],
                [
                    'Selasa',
                    6.32
                ],
                [
                    'Rabu',
                    8.31
                ],
                [
                    'Kamis',
                    12.27
                ],
                [
                    'Jumat',
                    13.02
                ],
                 [
                    'Sabtu',
                    19.02
                ],
                 [
                    'Minggu',
                    12.02
                ],
               ]
        }, {
            name: 'Jumlah Peserta',
            id: 'Safari',
            data: [
                [
                    'Senen',
                    28.56
                ],
                [
                    'Selasa',
                    22.77
                ],
                [
                    'Rabu',
                    24.42
                ],
                [
                    'Kamis',
                    25.3
                ],
                [
                    'Jumat',
                    21.29
                ],
                [
                    'Sabtu',
                    23.29
                ],
                [
                    'Minggu',
                    29.29
                ],
            ]
        }]
    }
});