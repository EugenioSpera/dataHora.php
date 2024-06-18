<?php
// //comando para trazer a data atual do servidor
// echo "Data Atual:".date("Y-m-d");
// echo "<br>";

// //comando para trazer a hora de uma localidade
// $timezone = new DateTimeZone('America/Sao_Paulo');
// $date = new DateTime('now', $timezone);
// echo 'Hora atual em São Paulo: ' . $date->format('Y-m-d H:i:s') . '<br>';

// echo "<br>";

// $timezone = new DateTimeZone('Europe/London');
// $date = new DateTime('now', $timezone);
// echo 'Hora atual em Londres: ' . $date->format('Y-m-d H:i:s') . '<br>';


// echo "<br>";

//Comando para trazer a hora atual
// echo "Data e Hora Atual: ". $date->format("d-m-y H:i:s");


?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

  <h1>Horário mundial:</h1>

  <!-- //Sempre criar um formulario para usar no JS ou PHP -->

  <form action="horarioLocal.php" method="POST">

    <div class="select_area">
      <label for="cidade">Digite uma cidade para saber a hora:</label>
      <select name="cidade" id="cidade">
        <!-- Colocar as opções de cidades para o usuario escolher -->
        <option value="">Selecione uma opção</option>
        <option value="Sao Paulo">Sao Paulo</option>
        <option value="New York">New York</option>
        <option value="London">Londres</option>
      </select>
      <button class="button-area" type="submit">Verificar hora local</button>
    </div>

  </form>




  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./style.css">
</body>

</html>