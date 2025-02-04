<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuessNumber</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./js/index.js" defer></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <a href="#"><h1>GuessNumber</h1></a>
    </header>

    <main class="container">
      <form id="form">
        <label for="kick">Digite um número (0 - 10):</label>
        <input type="number" id="kick" min="0" max="10" placeholder="0">

        <button type="submit">Jogar!</button>
      </form>

      <section class="result-box" id="result">
        <h2 id="status">Adivinhe o número sorteado!</h2>
        <span id="attempt">Tentativas: 0</span>
      </section>

      <button id="btnRestart" onclick="restart()">Jogar de novo!</button>
    </main>

    <footer>
      <p>GuessNumber, 2022 &copy;</p>
    </footer>
  </body>
</html>

