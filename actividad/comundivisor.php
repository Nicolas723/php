<?php
function calcularMCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

if (isset($_POST['calcular'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $mcd = calcularMCD($numero1, $numero2);

    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Cálculo del MCD</title>
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
        <h2>Cálculo del Máximo Común Divisor (MCD)</h2>
        
        <form method="post" action="">
            <label>Ingrese el primer número:</label>
            <input type="number" name="numero1" required><br>
            
            <label>Ingrese el segundo número:</label>
            <input type="number" name="numero2" required style="margin-top: 10px;"><br>
            
            <input type="submit" name="calcular" value="Calcular MCD">
        </form>
        
        <p>El Máximo Común Divisor de ' . $numero1 . ' y ' . $numero2 . ' es: ' . $mcd . '</p>
        
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
        <title>Cálculo del MCD</title>
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
        <h2>Cálculo del Máximo Común Divisor (MCD)</h2>
        
        <form method="post" action="">
            <label>Ingrese el primer número:</label>
            <input type="number" name="numero1" required><br>
            
            <label>Ingrese el segundo número:</label>
            <input type="number" name="numero2" required style="margin-top: 10px;"><br>
            
            <input type="submit" name="calcular" value="Calcular MCD">
        </form>
        
        <form method="post" action="menu.php">
            <input type="submit" name="volver" value="Volver al Menú Principal">
        </form>
    </div>
    
    </body>
    </html>';
}
?>
