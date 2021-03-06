<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Test Depresion</title>
</head>

<body>
    <h1 class="text-center py-5 info fw-light">Test Depresion</h1>
    <div class="container">
        <p class="parrafo py-5">Las siguientes frases describen problemas que usted puede haber padecido. Recapacite sobre
            las ocasiones en
            que
            los ha sufrido durante las 2 últimas semanas, e indique cuál de las 4 opciones describe mejor la frecuencia
            con
            la que se ha enfrentado a esos problemas.</p>
        <form action="../../controller/proceso-depre.php" method="POST" class="py-1" id="form">
            <div class="info">

            </div>
            <label class="parrafo" for="nombre" style="color:rgb(0, 90, 23);">1. Tener poco interés o placer en hacer las cosas.</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_1" id="pregunta_1" value="1">
                <label class="form-check-label">Nunca</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_1" value="2">
                <label class="form-check-label" for="flexRadioDefault1">Casi nunca</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_1" value="3">
                <label class="form-check-label">Varias veces</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_1" value="4">
                <label class="form-check-label">Muchas veces</label>
            </div>
            <hr class="info">
            <label class="py-1 parrafo" for="nombre" style="color:rgb(0, 90, 23);">2. Sentirse desanimado/a, deprimido/a, o sin esperanza.</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_2" value="1">
                <label class="form-check-label">Nunca</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_2" value="2">
                <label class="form-check-label" for="flexRadioDefault1">Casi nunca</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_2" value="3">
                <label class="form-check-label">Varias veces</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_2" value="4">
                <label class="form-check-label">Muchas veces</label>
            </div>
            <hr class="info">
            <label class="py-1" for="nombre" style="color:rgb(0, 90, 23);">3. Con problemas en dormirse o en mantenerse dormido/a, o en dormir demasiado.</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_3" value="1">
                <label class="form-check-label">Nunca</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_3" value="2">
                <label class="form-check-label" for="flexRadioDefault1">Casi nunca</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_3" value="3">
                <label class="form-check-label">Varias veces</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_3" value="4">
                <label class="form-check-label">Muchas veces</label>
            </div>
            <hr class="info">
            <label class="py-1" for="nombre" style="color:rgb(0, 90, 23);">4. Sentirse cansado/a o tener poca energía.</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_4" value="1">
                <label class="form-check-label">Nunca</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_4" value="2">
                <label class="form-check-label" for="flexRadioDefault1">Casi nunca</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_4" value="3">
                <label class="form-check-label">Varias veces</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_4" value="4">
                <label class="form-check-label">Muchas veces</label>
            </div>
            <hr class="info">
            <label class="py-1" for="nombre" style="color:rgb(0, 90, 23);">5. Se mueve o habla tan lentamente que otra gente se podría dar cuenta o de lo contrario, está tan agitado/a o inquieto/a que se mueve mucho más de lo acostumbrado.</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_5" value="1">
                <label class="form-check-label">Nunca</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_5" value="2">
                <label class="form-check-label" for="flexRadioDefault1">Casi nunca</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_5" value="3">
                <label class="form-check-label">Varias veces</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_5" value="4">
                <label class="form-check-label">Muchas veces</label>
            </div>
            <hr class="info">
            <label class="py-1" for="nombre" style="color:rgb(0, 90, 23);">6. Sentir falta de amor propio o que sea un fracaso que decepcionara a si mismo/a a su familia.</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_6" value="1">
                <label class="form-check-label">Nunca</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_6" value="2">
                <label class="form-check-label" for="flexRadioDefault1">Casi nunca</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_6" value="3">
                <label class="form-check-label">Varias veces</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pregunta_6" value="4">
                <label class="form-check-label">Muchas veces</label>
            </div>
            <hr class="info">
            <button type="submit" class="btn info" id="enviar" onclick="alerta()">Aceptar</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>