<html>
<head>
    <title>Agencia de Viajes - Cotización de Hoteles</title>
</head>
<body>
    <h1>Agencia de Viajes - Cotización de Hoteles</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ciudad = $_POST["ciudad"];
        
        // Aquí puedes realizar las operaciones de cotización de hoteles según la ciudad seleccionada
        
        echo "<h2>Cotización de hoteles:</h2>";
        echo "<p>Ciudad: $ciudad</p>";
        echo "<p>¡Cotización de hoteles para esta ciudad!</p>";
    } else {
        echo "<p>No se han recibido datos del formulario.</p>";
    }
    ?>
</body>
</html>