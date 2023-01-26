
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1>Hello World!</h1>
  <form action="">
        <input type="radio" name="operador">Sumar
        <input type="radio" name="operador">Restar
        <input type="radio" name="operador">Multiplicar
        <input type="radio" name="operador">Dividir


        <br><input type="text" name="numero1" id="numero1">
        <input type="text" name="numero2" id="numero2">
        <button type="submit" onclick="sumar()">Sumar</button>
    </form>
</div>


</body>
</html>

<script>
    $(document).ready(function(){
        // alert();

        // var num1 = document.getElementById('numero3');
        // console.log(num1);

    })

    function operaciones(){
        var a = parseInt(documente.getElementById('numero1').value);
        var b = parseInt(documente.getElementById('numero2').value);
        var operacion = 
        
    }

function sumar(){
    var a = documente.getElementById('numero1').value;
    var b = documente.getElementById('numero2').value;
    var suma = parseInt(a) + parseInt(b);
    return alert(sumar);
}

</script>