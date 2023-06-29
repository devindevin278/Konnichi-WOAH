// Graphs
const ctx = document.getElementById('myChart')
// eslint-disable-next-line no-unused-vars
const myChart = new Chart(ctx, {
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
      data: [
        15339,
        21345,
        18483,
        24003,
        23489,
        24092,
        12034
      ],
      fill: true,
      lineTension: 0,
      backgroundColor: '#88bffa',
      borderColor: '#007bff',
      borderWidth: 4,
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

let weekBtn = document.getElementById('weekBtn')
let monthBtn = document.getElementById('monthBtn')

// $(document).ready(function () {
    $(weekBtn).on('click', function () {
        console.log("week")

        // var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '/weekChart',
            method: 'GET',



            success: function (response) {
                console.log(response);
            },


            error: function (xhr, status, error) {
                console.log('Week error');
            }
        });
    })


    $(monthBtn).on('click', function () {
        console.log("month")
    })
// })
