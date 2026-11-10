

// RPS JS
  function rock() {
    //your Move
    document.getElementById('yourMove').innerHTML = `You Select: <b>Rock</b>`;
    document.getElementById('imgYourMove').src = `/images/rock.png`;

    //Computer Move

    let computerMove = '';

    let randomNumber = Math.random().toFixed(4);
    if (randomNumber >= 0 && randomNumber < 1 / 3) {
      computerMove = 'Rock';
      document.getElementById('imgComputerMove').src = `/images/rock.png`;
    } else if (randomNumber >= 1 / 3 && randomNumber < 2 / 3) {
      computerMove = 'Paper';
      document.getElementById('imgComputerMove').src = `/images/paper.png`;
    } else if (randomNumber >= 2 / 3 && randomNumber <= 1) {
      computerMove = 'Scissors';
      document.getElementById('imgComputerMove').src = `/images/Scissors.png`;
    }

    document.getElementById('computerMove').innerHTML = `Computer Select: <b>${computerMove} ${randomNumber}</b>`;

    //Result
    let result = '';
    if (computerMove === 'Rock') {
      result = 'Tie';
    } else if (computerMove === 'Paper') {
      result = 'You Lose';
    } else if (computerMove === 'Scissors') {
      result = 'You Win';
    }
    document.getElementById('result').innerHTML = `Result: ${result}`;

    //Score
    let score = JSON.parse(localStorage.getItem('score')) || {
      wins: 0,
      losses: 0,
      ties: 0
    };

    if (result === 'You Win') {
      score.wins += 1;
    } else if (result === 'You Lose') {
      score.losses += 1;
    } else if (result === 'Tie') {
      score.ties += 1;
    }
    localStorage.setItem('score', JSON.stringify(score));

    document.getElementById('score').innerHTML = `Wins: ${score.wins} Losses: ${score.losses}. Ties: ${score.ties}`;
  }


  // paper
  function paper() {
    //your Move
    document.getElementById('yourMove').innerHTML = `You Select: <b>Paper</b>`;
    document.getElementById('imgYourMove').src = `/images/paper.png`;

    //Computer Move

    let computerMove = '';

    let randomNumber = Math.random().toFixed(4);
    if (randomNumber >= 0 && randomNumber < 1 / 3) {
      computerMove = 'Rock';
      document.getElementById('imgComputerMove').src = `/images/rock.png`;
    } else if (randomNumber >= 1 / 3 && randomNumber < 2 / 3) {
      computerMove = 'Paper';
      document.getElementById('imgComputerMove').src = `/images/paper.png`;
    } else if (randomNumber >= 2 / 3 && randomNumber <= 1) {
      computerMove = 'Scissors';
      document.getElementById('imgComputerMove').src = `/images/Scissors.png`;
    }

    document.getElementById('computerMove').innerHTML = `Computer Select: <b>${computerMove} ${randomNumber}</b>`;

    //Result
    let result = '';
    if (computerMove === 'Rock') {
      result = 'You Win';
    } else if (computerMove === 'Paper') {
      result = 'Tie';
    } else if (computerMove === 'Scissors') {
      result = 'You Lose';
    }
    document.getElementById('result').innerHTML = `Result: ${result}`;

    //Score
    let score = JSON.parse(localStorage.getItem('score')) || {
      wins: 0,
      losses: 0,
      ties: 0
    };

    if (result === 'You Win') {
      score.wins += 1;
    } else if (result === 'You Lose') {
      score.losses += 1;
    } else if (result === 'Tie') {
      score.ties += 1;
    }
    localStorage.setItem('score', JSON.stringify(score));

    document.getElementById('score').innerHTML = `Wins: ${score.wins} Losses: ${score.losses}. Ties: ${score.ties}`;
  }


  // Scissor
  function scissor() {
    //your Move
    document.getElementById('yourMove').innerHTML = `You Select: <b>Scissor</b>`;
    document.getElementById('imgYourMove').src = `/images/scissors.png`;

    //Computer Move

    let computerMove = '';

    let randomNumber = Math.random().toFixed(4);
    if (randomNumber >= 0 && randomNumber < 1 / 3) {
      computerMove = 'Rock';
      document.getElementById('imgComputerMove').src = `/images/rock.png`;
    } else if (randomNumber >= 1 / 3 && randomNumber < 2 / 3) {
      computerMove = 'Paper';
      document.getElementById('imgComputerMove').src = `/images/paper.png`;
    } else if (randomNumber >= 2 / 3 && randomNumber <= 1) {
      computerMove = 'Scissors';
      document.getElementById('imgComputerMove').src = `/images/Scissors.png`;
    }

    document.getElementById('computerMove').innerHTML = `Computer Select: <b>${computerMove} ${randomNumber}</b>`;

    //Result
    let result = '';
    if (computerMove === 'Rock') {
      result = 'You Lose';
    } else if (computerMove === 'Paper') {
      result = 'You Lose';
    } else if (computerMove === 'Scissors') {
      result = 'Tie';
    }
    document.getElementById('result').innerHTML = `Result: ${result}`;

    //Score
    let score = JSON.parse(localStorage.getItem('score')) || {
      wins: 0,
      losses: 0,
      ties: 0
    };

    if (result === 'You Win') {
      score.wins += 1;
    } else if (result === 'You Lose') {
      score.losses += 1;
    } else if (result === 'Tie') {
      score.ties += 1;
    }
    localStorage.setItem('score', JSON.stringify(score));

    document.getElementById('score').innerHTML = `Wins: ${score.wins} Losses: ${score.losses}. Ties: ${score.ties}`;
  }
