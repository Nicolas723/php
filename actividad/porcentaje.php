<?php

class CalculadoraPorcentaje {
    public function calcular30Porciento($numero) {
        $porcentaje = $numero * 0.3;
        return $porcentaje;
    }
}

if (isset($_POST['calcular'])) {
    $numeroIngresado = $_POST['numero'];

    $calculadora = new CalculadoraPorcentaje();
    $resultado = $calculadora->calcular30Porciento($numeroIngresado);

    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Calculadora de Porcentaje</title>
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
            h2 {
                text-align: center;
                margin-bottom: 20px;
            }
            form {
                text-align: center;
                margin-bottom: 20px;
            }
            label {
                display: block;
                font-weight: bold;
                margin-bottom: 5px;
            }
            input[type="number"], input[type="submit"] {
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            input[type="submit"]:hover {
                background-color: #258cd1;
                color: white;
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
        <h2>Calculadora de 30%</h2>
        
        <form method="post" action="">
            <label>Ingrese un número:</label>
            <input type="number" name="numero" required><br>
            <input type="submit" name="calcular" value="Calcular 30%">
        </form>
        
        <p>El 30% de ' . $numeroIngresado . ' es: ' . $resultado . '</p>
        
        <form method="post" action="menu.php">
            <input type="submit" name="volver" value="Volver al Menú Principal">
        </form>
    </div>
    
    </body>
    </html>';
} else {
    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Calculadora de Porcentaje</title>
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
            h2 {
                text-align: center;
                margin-bottom: 20px;
            }
            form {
                text-align: center;
                margin-bottom: 20px;
            }
            label {
                display: block;
                font-weight: bold;
                margin-bottom: 5px;
            }
            input[type="number"], input[type="submit"] {
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            input[type="submit"]:hover {
                background-color: #258cd1;
                color: white;
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
        <h2>Calculadora de 30%</h2>
        
        <form method="post" action="">
            <label>Ingrese un número:</label>
            <input type="number" name="numero" required><br>
            <input type="submit" name="calcular" value="Calcular 30%">
        </form>
        
        <form method="post" action="index.php">
            <input type="submit" name="volver" value="Volver al Menú Principal">
        </form>
    </div>
    
    </body>
    </html>';
}

?>
