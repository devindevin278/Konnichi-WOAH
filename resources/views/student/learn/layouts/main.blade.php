<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('learn.css') }}">

    {{-- <link rel="stylesheet" href="node_modules/aos/dist/aos.css"> --}}
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;400&family=Sora:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

</head>

<body>

    @include('partials.navbarStudent')

    {{-- <div id="user_id" data-data="{{ auth()->user()->id }}"></div> --}}

    <div class="container-fluid margin-top">
        <div class="row">
            @include('student.learn.layouts.sidebar')

            <div class="col-md-2"></div>
            @yield('learnContent')

            @include('partials.footer')

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"
        integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="{{ asset('js/graph.js') }}"></script> --}}
</body>

<script>
    // Graphs
    let ctx = document.getElementById('myChart')
    // eslint-disable-next-line no-unused-vars
    let myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                'Sunday',
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday'
            ]
    //         datasets: [{
    //             data: [
    //                 15339,
    //                 21345,
    //                 18483,
    //                 24003,
    //                 23489,
    //                 24092,
    //                 12034
    //             ],
    //             fill: true,
    //             lineTension: 0,
    //             backgroundColor: '#88bffa',
    //             borderColor: '#007bff',
    //             borderWidth: 4,
    //             pointBackgroundColor: '#007bff'
    //         }]
        }
    //     options: {
    //         plugins: {
    //             legend: {
    //                 display: false
    //             },
    //             tooltip: {
    //                 boxPadding: 3
    //             }
    //         }
    //     }
    })

    // let userid = document.getElementById('user_id');
    // let user_id = JSON.parse(userid.dataset.data);
    // console.log(user_id)

    let weekBtn = document.getElementById('weekBtn');
    let monthBtn = document.getElementById('monthBtn');
    let yearBtn = document.getElementById('yearBtn');

    $(document).ready(function() {

        $('#weekBtn').on('click', function() {

            weekBtn.classList.add('btn-primary');
            monthBtn.classList.remove('btn-primary');
            yearBtn.classList.remove('btn-primary');

                $.ajax({
                    url: '/weekChart',
                    method: 'GET',

                    success: function(response) {


                        // console.log(response);
                        const options = {
                            weekday: 'long'
                        };

                        let daysName = [];

                        response.forEach(function(element, index) {
                            console.log(element)
                            let date = new Date(element['date(created_at)'])
                            let dayName = date.toLocaleDateString('en-US', options);

                            daysName[index] = dayName;

                        });

                        // myChart.data.labels.forEach(function(element) {
                        //     response.forEach(function(element2, index) {
                        //         // console.log('index'+index)
                        //         // console.log('element'+element)
                        //         // console.log('element2'+element2['sum(total_xp)'])
                        //         let date = new Date(element2['date(created_at)'])
                        //         let dayName = date.toLocaleDateString('en-US', options);
                        //         // console.log(dayName);
                        //         // if(dayName == element) {
                        //         //     data_xp[] =
                        //         // }

                        //     });
                        // })

                        let days = myChart.data.labels;
                        let length = Object.keys(response).length;
                        // console.log(length)
                        data_xp = []
                        let flag = 0;
                        // senin, selasa, rabu
                        for(let i=flag; i<7; i++) {
                            for(let j=0; j<length; j++) {
                                if(days[i] == daysName[j]) {
                                    data_xp[i] = response[j]['sum(total_xp)'];
                                    console.log(data_xp[i]);
                                    flag = j+1;
                                    break;
                                } else {
                                    data_xp[i] = 0;
                                }
                            }
                        }

                        console.log(data_xp)

                        var existingChart = Chart.getChart('myChart');
                        if (existingChart) {
                            existingChart.destroy();
                        }

                        let new_myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: [
                                    'Sunday',
                                    'Monday',
                                    'Tuesday',
                                    'Wednesday',
                                    'Thursday',
                                    'Friday',
                                    'Saturday'
                                ],
                                datasets: [{
                                    data: data_xp   ,
                                    fill: true,
                                    lineTension: 0,
                                    backgroundColor: '#88bffa',
                                    borderColor: '#007bff',
                                    borderWidth: 2,
                                    pointBackgroundColor: '#007bff'
                                }]
                            },
                            options: {
                                plugins: {
                                    legend: {
                                        display: false
                                    },
                                    tooltip: {
                                        boxPadding: 3
                                    }
                                }
                            }
                        })


                    },


                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            // }
        });

        $('#monthBtn').on('click', function() {
            // console.log("month")
            // var csrfToken = $('meta[name="csrf-token"]').attr('content');
            weekBtn.classList.remove('btn-primary');
            monthBtn.classList.add('btn-primary');
            yearBtn.classList.remove('btn-primary');
            // if (value) {
                $.ajax({
                    url: '/monthChart',
                    method: 'GET',

                    success: function(response) {


                        console.log(response);

                        let days = []

                        response.forEach(function(element, index) {
                            console.log(element)
                            let date = new Date(element['date(created_at)'])
                            let day = date.getDate();
                            days[index] = day;

                        });

                        data_xp = [];
                        labels = [];

                        let length = Object.keys(response).length;

                        let maxDate = getDaysInCurrentMonth();

                        for(let i = 0; i < maxDate; i++) {
                            labels[i] = i+1;
                            for(let j=0; j<length; j++) {
                                if(i+1 == days[j]) {
                                    data_xp[i] = response[j]['sum(total_xp)'];
                                    console.log(data_xp[i]);
                                    flag = j+1;
                                    break;
                                } else {
                                    data_xp[i] = 0;
                                }
                            }
                        }


                        console.log(data_xp)

                        var existingChart = Chart.getChart('myChart');
                        if (existingChart) {
                            existingChart.destroy();
                        }

                        let new_myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: labels,
                                datasets: [{
                                    data: data_xp,
                                    fill: true,
                                    lineTension: 0,
                                    backgroundColor: '#88bffa',
                                    borderColor: '#007bff',
                                    borderWidth: 2,
                                    pointBackgroundColor: '#007bff'
                                }]
                            },
                            options: {
                                plugins: {
                                    legend: {
                                        display: false
                                    },
                                    tooltip: {
                                        boxPadding: 3
                                    }
                                }
                            }
                        })


                    },


                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            // }
        });

        $('#yearBtn').on('click', function() {
            weekBtn.classList.remove('btn-primary');
            monthBtn.classList.remove('btn-primary');
            yearBtn.classList.add('btn-primary');
            $.ajax({
                    url: '/yearChart',
                    method: 'GET',

                    success: function(response) {


                        console.log(response);

                        // let daysName = [];

                        let months = [];

                        response.forEach(function(element, index) {
                            console.log(element)
                            // let date = new Date()
                            // let month = date.getMonth();
                            months[index] = element['month(created_at)'];
                            // daysName[index] = dayName;
                        });

                        // myChart.data.labels.forEach(function(element) {
                        //     response.forEach(function(element2, index) {
                        //         // console.log('index'+index)
                        //         // console.log('element'+element)
                        //         // console.log('element2'+element2['sum(total_xp)'])
                        //         let date = new Date(element2['date(created_at)'])
                        //         let dayName = date.toLocaleDateString('en-US', options);
                        //         // console.log(dayName);
                        //         // if(dayName == element) {
                        //         //     data_xp[] =
                        //         // }

                        //     });
                        // })

                        // let days = myChart.data.labels;
                        let length = Object.keys(response).length;
                        console.log(months)
                        data_xp = []
                        let flag = 0;
                        // senin, selasa, rabu
                        for(let i=flag; i<12; i++) {
                            for(let j=0; j<length; j++) {
                                if(i+1 == months[j]) {
                                    data_xp[i] = response[j]['sum(total_xp)'];
                                    console.log(data_xp[i]);
                                    flag = j+1;
                                    break;
                                } else {
                                    data_xp[i] = 0;
                                }
                            }
                        }

                        console.log(data_xp)

                        var existingChart = Chart.getChart('myChart');
                        if (existingChart) {
                            existingChart.destroy();
                        }

                        let new_myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: [
                                    'January',
                                    'February',
                                    'March',
                                    'April',
                                    'May',
                                    'June',
                                    'July',
                                    'August',
                                    'September',
                                    'October',
                                    'November',
                                    'December'
                                ],
                                datasets: [{
                                    data: data_xp   ,
                                    fill: true,
                                    lineTension: 0,
                                    backgroundColor: '#88bffa',
                                    borderColor: '#007bff',
                                    borderWidth: 2,
                                    pointBackgroundColor: '#007bff'
                                }]
                            },
                            options: {
                                plugins: {
                                    legend: {
                                        display: false
                                    },
                                    tooltip: {
                                        boxPadding: 3
                                    }
                                }
                            }
                        })


                    },


                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
        })

        $('#weekBtn').trigger('click');
    });

    function getDaysInCurrentMonth() {
        const date = new Date();

        return new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
    }
</script>

</html>
