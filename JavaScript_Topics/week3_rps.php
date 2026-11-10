<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Rock Paper Scissor Game using JavaScript</title>
  <style>
    .mainContainer {
      padding: 20px;
      width: 100%;
      height: auto;
      /* align-items: center; */
      justify-self: center;
    }

    .container1 {
      border: 2px solid black;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      /* font-size: 25px; */

    }

    .container1 img {
      width: 50px;
      height: 50px
    }

    .container2 {
      border: 2px solid black;
      padding: 10px;
      text-align: center;
      /* font-size: 25px; */
    }

    .container3 {
      border: 2px solid black;
      padding: 10px;
      text-align: center;
    }

    .container3 button {
      /* font-size: 25px; */
      width: 5rem;
      border-radius: 1rem;
    }
  </style>

  <script src="../js/script.js"></script>
</head>

<body>
  <?php include '../include/header.php'; ?>

  <div class="aside-main">
    <main>
        <fieldset>
          <legend>Rock Paper Scissor Game</legend>
          <div class="mainContainer">
            <div class="container1">
              <div style="border: 2px solid black; padding: 0.5rem; width: 7rem;">
                <p id="yourMove">Your Move</p>
                <img src="" alt="Your Move" id="imgYourMove">
              </div>

              <div style="border: 2px solid black; padding: 0.5rem; width: 7rem;">
                <p id="computerMove">Computer Move</p>
                <img src="" alt="Computer Move" id="imgComputerMove">
              </div>
            </div>

            <div class="container2">
              <p id="result">Result</p>
              <p id="score">Score</p>
            </div>

            <div class="container3">
              <button onclick="rock()">Rock</button>
              <button onclick="paper()">Paper</button>
              <button onclick="scissor()">Scissors</button>
            </div>
          </div>
        </fieldset>
    </main>
  </div>
  <?php include '../include/footer.php'; ?>
</body>

</html>

