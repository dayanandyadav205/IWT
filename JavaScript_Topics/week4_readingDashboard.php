<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Reading Dashboard using JavaScript</title>

  <style>
    li {
      padding: 10px;
    }

    .latestReading {
      background-color: lightgreen;
      font-weight: bold;
    }
  </style>

</head>

<body>
 <?php include '../include/header.php'; ?>

  <h1><img src="/images/real-time.jpg" alt="" height="50" width="50">Real Time Reading Dashboard</h1>
  <h2>Unshift() array method</h2>
  <h5>Latest Reading</h5>
  <ul id="readingList">
    <!-- li -->
  </ul>

  <script>
    //Realtime Reading Dashboard
    let readings = [];

    function addReadings(index) {
      let value = (Math.random() * 100).toFixed(2);
      let timeStamp = new Date().toLocaleTimeString();

      let newReading = `Reading: ${value}. Time: ${timeStamp}`;

      readings.unshift(newReading);

      if (readings.length > 5) {
        readings.pop();
      }
      renderReadings();
    }

    function renderReadings() {
      let readingList = document.getElementById('readingList');
      document.getElementById('readingList').innerHTML = "";

      readings.forEach((readings, index) => {
        let li = document.createElement('li');
        li.textContent = readings;
        if (index === 0) li.classList.add('latestReading');
        readingList.appendChild(li);
      });
    }
    setInterval(addReadings, 1000)
    renderReadings();

  </script>

  <?php include '../include/footer.php'; ?>

</body>

</html>