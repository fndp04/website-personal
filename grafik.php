<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Januari'],
      datasets: [{
        label: 'roller',
        data: [10],
        borderWidth: 1
      },
      {
        label: 'kampas ganda',
        data: [10],
        borderWidth: 1
      },
      {
        label: 'oli mesin',
        data: [10],
        borderWidth: 1
      }
    ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>