<?php
if (isset($_POST['calcular'])) {
    $numero = $_POST['numero'];
    $raiz = sqrt($numero);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cálculo de Raíz Cuadrada</title>
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

<?php
echo '<div class="container">
    <h2>Cálculo de Raíz Cuadrada</h2>

    <form method="post" action="">
        <label>Ingrese un número:</label>
        <input type="number" name="numero" required ><br>
        
        <input type="submit" name="calcular" value="Calcular Raíz Cuadrada" style="margin-top: 30px;">
    </form>
    
    <form method="post" action="index.php">
        <input type="submit" name="volver" value="Volver al Menú Principal"  style="margin-top:10px; " >
    </form>';

if (isset($_POST['calcular'])) {
    echo '<p>La raíz cuadrada de ' . $numero . ' es: ' . $raiz . '</p>';
}

echo '</div>
</body>
</html>';
?>
