function clima(){
  // pegar os valores dos inputs
  var lt = document.getElementById("lat").value;
  var lg = document.getElementById("lon").value;

  // requisição ajax para o back
  new Ajax.Request("server.php",
    {
      method: "get",
      parameters : {lat : lt, lon : lg},
      onSuccess : ajaxSuccess
    }
  );
}

// pegar o resultado e mostrar ao usuario
function ajaxSuccess(response){
  var obj = JSON.parse(response.responseText);
  document.getElementById("resultado").innerHTML = "Cidade = " + obj.name + "<br>";
  document.getElementById("resultado").innerHTML +=  "Temp = " + (obj.main.temp - 273).toFixed(2) + "°";
  document.getElementById("icon").src = "http://openweathermap.org/img/w/" + obj.weather[0].icon + ".png"
}