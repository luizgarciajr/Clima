<?php
  // Receber os dados vindos do JS
  $latitude = $_GET["lat"];
  $longitude = $_GET["lon"];
  $key = "763ca3093e068ddb05a2cbb7a1cf247e";
  
  // Criar a URL
  $url = "https://api.openweathermap.org/data/2.5/weather?lat=$latitude&lon=$longitude&appid=$key";

  // Solicitar o serviço
  $response = file_get_contents($url);

  // Mandar o resultado para o JS
  print $response;
?>