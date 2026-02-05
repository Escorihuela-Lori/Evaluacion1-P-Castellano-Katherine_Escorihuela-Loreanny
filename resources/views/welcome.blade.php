<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Inicio</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }
        .presentacion {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #e0effd;
        }
        .bienvenido {
            text-align: center;
            background-color: #f1f8ff;
            margin: 8rem;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .bienvenido h1 {
            margin: 0;
            font-size: 2.5em;
            color: #333;
        }
        .bienvenido button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.5em;
            color: #fff;
            background-color: #4aa1ff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .bienvenido button:hover {
            background-color: #072f63;
        }
        .texto{
            color: #555;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <div class="presentacion">
        <div class="bienvenido">
            <p class="texto">¡Bienvenido!</p>
            <p class="texto">Por favor presiona "Iniciar" para ver el listado de Propiedades</p>
            <button onclick="location.href='/propiedades'">Iniciar</button>
        </div>
    </div>
</body>
</html>