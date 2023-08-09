<?php
if (isset($_POST['valor'])) {
    $suma = 0;
    for ($i = 1; $i <= 10; $i++) {
        $promedio = $_POST["promedio$i"];
        $suma += $promedio;
    }

    $promedioTotal = $suma / 10;
    $resultadoMensaje = "El promedio es: $promedioTotal";
} else {
    $resultadoMensaje = "";
}

echo '<!DOCTYPE html>
<html>
<head>
    <title>Promedio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #258cd1;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Promedio</h1>

    <form method="post" action="">';

for ($i = 1; $i <= 10; $i++) {
    echo '<div class="form-group">';
    echo '<label>Ingrese el ' . $i . ' número:</label>';
    echo '<input type="number" name="promedio' . $i . '" step="1" required>';
    echo '</div>';
}

echo '<input type="submit" name="valor" value="Calcular Promedio">
    </form>

    <p>' . $resultadoMensaje . '</p>

    <form method="post" action="index.php">
        <input type="submit" name="volver" value="Volver al Menú Principal">
    </form>
</div>

</body>
</html>';
?>
