window.onload = function() {
  var ctx = document.getElementById("myBarChart");
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Fiction", "Non-Fiction", "Education & Academic", "Children's Books", "Technology & Science"],
      datasets: [{
        label: "Books Borrowed",
        backgroundColor: "rgba(75, 192, 192, 0.8)",
        borderColor: "rgba(75, 192, 192, 1)",
        data: [150, 200, 180, 250, 300],
      }],
    },
    options: {
      scales: {
        xAxes: [{
          type: 'category',
          gridLines: {
            display: false
          },
          ticks: {
            maxTicksLimit: 6
          }
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 350,
            stepSize: 50
          },
          gridLines: {
            display: true
          }
        }],
      },
      legend: {
        display: false
      },
      title: {
        display: false
      }
    }
  });
}
