<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Dashboard - Torneo de Artes Marciales</title>
    <style>
    /* Estilos generales */
    body {
        font-family: 'Comic Sans MS', cursive, sans-serif; /* Fuente más amigable */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        color: #d800d8; /* Color morado pastel */
    }

    /* Estilos del contenedor principal */
    .dashboard-container {
        width: 80%;
        max-width: 1000px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        justify-items: center;
        position: relative; /* Para el efecto de chispa */
        overflow: hidden; /* Para que los efectos no salgan del contenedor */
    }

    /* Efecto de chispa (simulando energía) */
    .dashboard-container::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1), rgba(0, 191, 255, 0) 70%);
        animation: pulse 3s infinite; /* Animación de pulso */
        opacity: 0.5;
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }

    /* Estilos de las fichas */
    .card {
        width: 100%;
        background: linear-gradient(135deg, rgba(255, 105, 180, 0.9), rgba(0, 191, 255, 0.9)); /* Degradado vibrante */
        border-radius: 16px; /* Bordes más redondeados */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3); /* Sombra más fuerte */
        padding: 20px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative; /* Para el efecto de energía */
        overflow: hidden; /* Para que el efecto de energía no sobresalga */
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }

    .card h3 {
        margin: 20px 0;
        color: #00bfff; /* Color del título en azul brillante */
        text-shadow: 1px 1px 0 rgba(0, 191, 255, 0.5); /* Sombra de texto brillante */
    }

    .card p {
        color: #333; /* Texto más oscuro para contraste */
    }

    /* Botón en cada ficha */
    .card a {
        display: inline-block;
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #ff6f91; /* Color del botón en rosa vibrante */
        color: white;
        text-decoration: none;
        border-radius: 20px; /* Bordes redondeados para un look más suave */
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .card a:hover {
        background-color: #ff4d6d; /* Color del botón al pasar el mouse */
        transform: scale(1.05); /* Efecto de zoom al pasar el mouse */
    }

    /* Ajustes para dispositivos pequeños */
    @media (max-width: 600px) {
        .dashboard-container {
            grid-template-columns: 1fr;
        }
    }
</style>


</head>
<body>

<div class="dashboard-container">
    <!-- Ficha de Perfil de Personaje -->
    <div class="card">
        <h3>Perfil de Personajes</h3>
        <p>Gestiona tu personaje, entrena y mejora tus atributos.</p>
        <a href="dashboardCharacters.php">Ver Perfil</a>
    </div>

    <!-- Ficha de Torneos del Dragón -->
    <div class="card">
        <h3>Torneos del Dragón</h3>
        <p>Participa en torneos épicos y enfrenta a otros guerreros.</p>
        <a href="dashboardTournaments.php">Ver Torneos</a>
    </div>

    <!-- Ficha de Tabla de Clasificaciones -->
    <div class="card">
        <h3>Tabla de Clasificaciones</h3>
        <p>Consulta la lista de los guerreros más poderosos.</p>
        <a href="leaderboard.php">Ver Clasificaciones</a>
    </div>

    <!-- Ficha de Cerrar Sesión -->
    <div class="card">
        <h3>Cerrar Sesión</h3>
        <p>Sal de la aplicación y vuelve más tarde.</p>
        <a href="logout.php">Cerrar Sesión</a>
    </div>

    <!-- Checar cuenta -->
    <div class="card">
        <h3>Info Cuenta</h3>
        <p>Mantente informado de tu cuenta.</p>
        <a href="checkAccount.php">Cuenta</a>
    </div>
</div>

</body>
</html>
