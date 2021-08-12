<html>
  <head>
    <title>Olha o Clima</title>
    <script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
    <script src="script.js"> </script>
  </head>
  <body>
    <h3> Descubra o seu clima: </h3>
    <div>
      <p>Insira sua latitude :  <input id="lat" type="number" name="latitude"></p>
      <p>Insira sua longitude: <input id="lon" type="number" name="Longitude"></p>
      <button onclick="clima();">Descobrir</button>
    </div>
    <div id="resultado">
    </div>
    <img id="icon" src="">
  </body>
</html>