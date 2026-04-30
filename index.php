<?php
/**
 * PRÁCTICA SEMANA 11 - Gaming Center
 * Estudiante: Carlos Garcia
 */

// --- DATOS DINÁMICOS PHP ---
$titulo_app = "Game Center";
$ejecutar_alerta = false;

// Lista de juegos dinámica
$videojuegos = [
    ["nombre" => "Minecraft", "info" => "166M Jugadores", "peso" => "1 GB"],
    ["nombre" => "Roblox", "info" => "200M+ Jugadores", "peso" => "2 GB"],
    ["nombre" => "League of Legends", "info" => "150M Jugadores", "peso" => "16 GB"],
    ["nombre" => "Fortnite", "info" => "230M Jugadores", "peso" => "26 GB"]
];

// Lógica para el Pop-up (Acción X)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ejecutar_alerta = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Requisito: Diseño responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo_app; ?></title>
    
    <!-- Enlace al archivo de estilos externo -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1><?php echo $titulo_app; ?></h1>
    </header>

    <main>
        <div class="lista-contenedor">
            <?php foreach ($videojuegos as $j): ?>
                <div class="card">
                    <h3><?php echo $j['nombre']; ?></h3>
                    <p><?php echo $j['info']; ?> | <?php echo $j['peso']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Botón de interacción -->
        <form method="POST">
            <button type="submit" class="btn-accion">
                Seleccionar juego
            </button>
        </form>
    </main>

    <!-- Pop-up de error disparado por PHP -->
    <?php if ($ejecutar_alerta): ?>
        <script>
            alert("⚠️ SISTEMA FUERA DE SERVICIO\nIntente nuevamente más tarde.");
        </script>
    <?php endif; ?>

</body>
</html>