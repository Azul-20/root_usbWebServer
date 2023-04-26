function mostrarDatos() {

    var nombre = document.getElementById("nombre").value;
    var email = document.getElementById("email").value;

    var datosDiv = document.getElementById("datos");
    datosDiv.innerHTML = "<p>Nombre: " + nombre + "</p><p>Email: " + email + "</p>";
}

function calcular() {
  
  var num1 = parseFloat(document.getElementById("num1").value);
  var num2 = parseFloat(document.getElementById("num2").value);
  var num3 = parseFloat(document.getElementById("num3").value);
  var num4 = parseFloat(document.getElementById("num4").value);
  
  var suma = num1 + num2;
  var producto = num3 * num4;
  var resultadosDiv = document.getElementById("resultados");
  resultadosDiv.innerHTML = "<p>La suma de los dos primeros números es: " + suma + "</p><p>El producto del tercer y cuarto número es: " + producto + "</p>";
}

function comparar() {
  
  var num1 = parseFloat(document.getElementById("numero1").value);
  var num2 = parseFloat(document.getElementById("numero2").value);
  
  if (num1 > num2) {
    var suma = num1 + num2;
    var diferencia = num1 - num2;
    var resultadosDiv = document.getElementById("compara");
    resultadosDiv.innerHTML = "<p>La suma de los dos números es: " + suma + "</p><p>La diferencia de los dos números es: " + diferencia + "</p>";
  } else {
    var producto = num1 * num2;
    var division = num1 / num2;
    var resultadosDiv = document.getElementById("compara");
    resultadosDiv.innerHTML = "<p>El producto de los dos números es: " + producto + "</p><p>La división del primer número respecto al segundo es: " + division + "</p>";
  }
}

function calcularPromedio() {
 
  var nota1 = parseFloat(document.getElementById("nota1").value);
  var nota2 = parseFloat(document.getElementById("nota2").value);
  var nota3 = parseFloat(document.getElementById("nota3").value);
  var promedio = (nota1 + nota2 + nota3) / 3;
  var resultadoDiv = document.getElementById("promedio");
  if (promedio >= 12) {
    resultadoDiv.innerHTML = "<p>Su promedio es " + promedio.toFixed(2) + ". Regular.</p>";
  } else {
    resultadoDiv.innerHTML = "<p>Su promedio es " + promedio.toFixed(2) + ". Reprobado.</p>";
  }
}

function encontrarNumeroMayor() {
  
  var numero1 = parseFloat(document.getElementById("number1").value);
  var numero2 = parseFloat(document.getElementById("number2").value);
  var numero3 = parseFloat(document.getElementById("number3").value);
  var numeroMayor = numero1;
  if (numero2 > numeroMayor) {
    numeroMayor = numero2;
  }
  if (numero3 > numeroMayor) {
    numeroMayor = numero3;
  }
  var resultadoDiv = document.getElementById("mayor");
  resultadoDiv.innerHTML = "<p>El número mayor es " + numeroMayor + ".</p>";
}