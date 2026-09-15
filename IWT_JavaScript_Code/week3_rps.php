<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Document</title>
  <style>

    .mainContainer{
      padding: 20px;
      width:700px;
      height: 300px;
    }
    .container1{
      border: 2px solid black;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      font-size: 25px;
     
    }

      .container1 img{
      width: 100px;
      height: 100px
    }
      .container2{
       border: 2px solid black;
       padding: 20px;
       text-align: center;
       font-size: 25px;
      }

      .container3{
        border: 2px solid black;
        padding: 20px;
        text-align: center;
      }
    .container3 button{
      font-size: 25px;
      width: 150px;
      border-radius: 20px;
    }
  </style>
</head>
<body>
 <?php include '../header.php'; ?>

  <h1>Rock Paper Scissor Game</h1>

  <div class="mainContainer">
  <div class="container1">
    <div>
    <p id="yourMove">Your Move</p>
    <img src="" alt="Your Move" id="imgYourMove">
    </div>

    <div>
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
  
    <script>
      function rock(){
        //your Move
        document.getElementById('yourMove').innerHTML = `You Select: <b>Rock</b>`;
        document.getElementById('imgYourMove').src = `/images/rock.png`;
      
      //Computer Move

      let computerMove = '';

      let randomNumber = Math.random().toFixed(4);
      if(randomNumber >= 0 && randomNumber < 1/3){
        computerMove = 'Rock';
        document.getElementById('imgComputerMove').src = `/images/rock.png`;
      }
      else if(randomNumber >= 1/3 && randomNumber <2/3){
        computerMove = 'Paper';
        document.getElementById('imgComputerMove').src = `/images/paper.png`;
      }
      else if(randomNumber >= 2/3 && randomNumber <=1){
        computerMove = 'Scissors';
        document.getElementById('imgComputerMove').src = `/images/Scissors.png`;
      }

      document.getElementById('computerMove').innerHTML = `Computer Select: <b>${computerMove} ${randomNumber}</b>`;
    
      //Result
      let result = '';
      if(computerMove === 'Rock'){
        result = 'Tie';
      }
      else if(computerMove === 'Paper'){
        result = 'You Lose';
      }
      else if(computerMove === 'Scissors'){
        result = 'You Win';
      }
      document.getElementById('result').innerHTML = `Result: ${result}`;
   
   //Score
   let score = JSON.parse(localStorage.getItem('score')) || {wins:0, losses:0, ties:0};

   if(result === 'You Win'){
    score.wins += 1;
   }
   else if(result === 'You Lose'){
    score.losses +=1;
   }
   else if(result === 'Tie'){
    score.ties +=1;
   }
   localStorage.setItem('score', JSON.stringify(score));

   document.getElementById('score').innerHTML = `Wins: ${score.wins} Losses: ${score.losses}. Ties: ${score.ties}`;
    }


// paper
    function paper()
    {
        //your Move
        document.getElementById('yourMove').innerHTML = `You Select: <b>Paper</b>`;
        document.getElementById('imgYourMove').src = `/images/paper.png`;
      
      //Computer Move

      let computerMove = '';

      let randomNumber = Math.random().toFixed(4);
      if(randomNumber >= 0 && randomNumber < 1/3){
        computerMove = 'Rock';
        document.getElementById('imgComputerMove').src = `/images/rock.png`;
      }
      else if(randomNumber >= 1/3 && randomNumber <2/3){
        computerMove = 'Paper';
        document.getElementById('imgComputerMove').src = `/images/paper.png`;
      }
      else if(randomNumber >= 2/3 && randomNumber <=1){
        computerMove = 'Scissors';
        document.getElementById('imgComputerMove').src = `/images/Scissors.png`;
      }

      document.getElementById('computerMove').innerHTML = `Computer Select: <b>${computerMove} ${randomNumber}</b>`;
    
      //Result
      let result = '';
      if(computerMove === 'Rock'){
        result = 'You Win';
      }
      else if(computerMove === 'Paper'){
        result = 'Tie';
      }
      else if(computerMove === 'Scissors'){
        result = 'You Lose';
      }
      document.getElementById('result').innerHTML = `Result: ${result}`;
   
   //Score
   let score = JSON.parse(localStorage.getItem('score')) || {wins:0, losses:0, ties:0};

   if(result === 'You Win'){
    score.wins += 1;
   }
   else if(result === 'You Lose'){
    score.losses +=1;
   }
   else if(result === 'Tie'){
    score.ties +=1;
   }
   localStorage.setItem('score', JSON.stringify(score));

   document.getElementById('score').innerHTML = `Wins: ${score.wins} Losses: ${score.losses}. Ties: ${score.ties}`;
  }


   // Scissor
    function scissor(){
        //your Move
        document.getElementById('yourMove').innerHTML = `You Select: <b>Scissor</b>`;
        document.getElementById('imgYourMove').src = `/images/scissors.png`;
      
      //Computer Move

      let computerMove = '';

      let randomNumber = Math.random().toFixed(4);
      if(randomNumber >= 0 && randomNumber < 1/3){
        computerMove = 'Rock';
        document.getElementById('imgComputerMove').src = `/images/rock.png`;
      }
      else if(randomNumber >= 1/3 && randomNumber <2/3){
        computerMove = 'Paper';
        document.getElementById('imgComputerMove').src = `/images/paper.png`;
      }
      else if(randomNumber >= 2/3 && randomNumber <=1){
        computerMove = 'Scissors';
        document.getElementById('imgComputerMove').src = `/images/Scissors.png`;
      }

      document.getElementById('computerMove').innerHTML = `Computer Select: <b>${computerMove} ${randomNumber}</b>`;
    
      //Result
      let result = '';
      if(computerMove === 'Rock'){
        result = 'You Lose';
      }
      else if(computerMove === 'Paper'){
        result = 'You Lose';
      }
      else if(computerMove === 'Scissors'){
        result = 'Tie';
      }
      document.getElementById('result').innerHTML = `Result: ${result}`;
   
   //Score
   let score = JSON.parse(localStorage.getItem('score')) || {wins:0, losses:0, ties:0};

   if(result === 'You Win'){
    score.wins += 1;
   }
   else if(result === 'You Lose'){
    score.losses +=1;
   }
   else if(result === 'Tie'){
    score.ties +=1;
   }
   localStorage.setItem('score', JSON.stringify(score));

   document.getElementById('score').innerHTML = `Wins: ${score.wins} Losses: ${score.losses}. Ties: ${score.ties}`;
    }
  
    </script>

    
  <?php include '../footer.php'; ?>
</body>
</html>