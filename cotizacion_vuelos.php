<html>
<head>
    <title>Agencia de Viajes - Cotización de Vuelos</title>
</head>
<body>
    <h1>Agencia de Viajes - Cotización de Vuelos</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $origen = $_POST["origen"];
        $destino = $_POST["destino"];
        
        // Realiza aquí la lógica de cotización de vuelos
        
        // Define un arreglo con las tarifas de vuelo entre las capitales
        $tarifas = array(
            "bogota-buenosaires" => 500,
            "bogota-santiago" => 600,
            "bogota-lima" => 400,
            "bogota-quito" => 300,
            "bogota-asuncion" => 550,
            "bogota-brasilia" => 250,
            "bogota-montevideo" => 600,
            "bogota-lapaz" => 450,
            "bogota-caracas" => 350
        );
        
        // Verifica si la combinación origen-destino existe en el arreglo de tarifas
        $ruta = $origen . "-" . $destino;
        if (array_key_exists($ruta, $tarifas)) {
            $tarifa = $tarifas[$ruta];
            
            echo "<h2>Cotización de vuelos:</h2>";
            echo "<p>Origen: $origen</p>";
            echo "<p>Destino: $destino</p>";
            echo "<p>Tarifa: $tarifa USD</p>";
            echo "<p>¡Cotización de vuelos para esta ruta!</p>";
        } else {
            echo "<p>No se encontró tarifa para la ruta seleccionada.</p>";
        }
    } else {
        echo "<p>No se han recibido datos del formulario.</p>";
    }
    ?>
</body>
</html>