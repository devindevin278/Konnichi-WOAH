<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"> --}}

</head>

<body>

    <div class="greyy" id="barrier"></div>

    @include('partials.navbarStudent')



    {{-- <div id="user_id" data-data="{{ auth()->user()->id }}"></div> --}}

    <div class="container-fluid">
        <div class="row">
            @include('student.learn.layouts.sidebar')

            <div class="col-md-2"></div>
            @yield('learnContent')
            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="popover" title="Popover 1" data-content="Content for Popover 1">Open Popover 1</button>

<button type="button" class="btn btn-primary" data-bs-toggle="popover" title="Popover 2" data-content="Content for Popover 2">Open Popover 2</button>

<button type="button" class="btn btn-primary" data-bs-toggle="popover" title="Popover 3" data-content="Content for Popover 3">Open Popover 3</button> --}}

            @include('partials.footer')

        </div>
    </div>



    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"
        integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    {{-- <script     src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}

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
        }
    })



    let weekBtn = document.getElementById('weekBtn');
    let monthBtn = document.getElementById('monthBtn');
    let yearBtn = document.getElementById('yearBtn');

    $(document).ready(function() {

        $('#weekBtn').on('click', function() {
 
            weekBtn.classList.add('timeActive');
            monthBtn.classList.remove('timeActive');
            yearBtn.classList.remove('timeActive');

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
                    for (let i = flag; i < 7; i++) {
                        for (let j = 0; j < length; j++) {
                            if (days[i] == daysName[j]) {
                                data_xp[i] = response[j]['sum(total_xp)'];
                                console.log(data_xp[i]);
                                flag = j + 1;
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
                                data: data_xp,
                                fill: true,
                                lineTension: 0,
                                backgroundColor: 'rgba(255, 200, 0, .1)',
                                borderColor: '#FFC800',
                                borderWidth: 2,
                                pointBackgroundColor: 'rgba(255, 200, 0, .5)'
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
            weekBtn.classList.remove('timeActive');
            monthBtn.classList.add('timeActive');
            yearBtn.classList.remove('timeActive');
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

                    for (let i = 0; i < maxDate; i++) {
                        labels[i] = i + 1;
                        for (let j = 0; j < length; j++) {
                            if (i + 1 == days[j]) {
                                data_xp[i] = response[j]['sum(total_xp)'];
                                console.log(data_xp[i]);
                                flag = j + 1;
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
                                backgroundColor: 'rgba(255, 200, 0, .1)',
                                borderColor: '#FFC800',
                                borderWidth: 2,
                                pointBackgroundColor: 'rgba(255, 200, 0, .5)'
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
            weekBtn.classList.remove('timeActive');
            monthBtn.classList.remove('timeActive');
            yearBtn.classList.add('timeActive');
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
                    for (let i = flag; i < 12; i++) {
                        for (let j = 0; j < length; j++) {
                            if (i + 1 == months[j]) {
                                data_xp[i] = response[j]['sum(total_xp)'];
                                console.log(data_xp[i]);
                                flag = j + 1;
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
                                data: data_xp,
                                fill: true,
                                lineTension: 0,
                                backgroundColor: 'rgba(255, 200, 0, .1)',
                                borderColor: '#FFC800',
                                borderWidth: 2,
                                pointBackgroundColor: 'rgba(255, 200, 0, .5)'
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



    // chest pop up level

    function showDiv(id, int) {
        console.log(int);
        var div = document.getElementById(id + ' ' + int);
        var barr = document.getElementById('barrier');
        div.style.display = 'flex';
        barr.style.display = 'flex';
    }

    function HidDiv(id) {
        var div = document.getElementById(id);
        var barr = document.getElementById('barrier');
        div.style.display = 'none';
        barr.style.display = 'none';
    }

    // chest pop up ends


    // level pop up starts
        function levelshow(id, int) {
            var div = document.getElementById(id + ' ' + int);
            var barr = document.getElementById('barrier');
            div.style.display = 'flex';
            barr.style.display = 'flex';
        }

        function levelhide(id, int){
            var div = document.getElementById(id + ' ' + int);
            var barr = document.getElementById('barrier');
            div.style.display = 'none';
            barr.style.display = 'none';
        }

        // level pop up ends


</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
