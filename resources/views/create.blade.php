<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Propiedad</title>
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
        label{ 
            display:block; 
            margin-bottom:6px;
            color:#0f172a; 
            text-align: left;
        }
        input{
            width:90%;
            padding:10px 12px;
            margin: 0;
            margin-bottom:10px;
            border:1px solid #bdbdbd;
            border-radius:8px;
            background:#fbfdff;
            font-size:0.98rem;
            transition:box-shadow .15s ease, 
        }

        .form-row{ 
            display:grid; 
            grid-template-columns:1fr 1fr; 
            gap:12px; 
        }
        .form-row .full{ 
            grid-column:1/-1; 
        }

        .btn{
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #4aa1ff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
        }
        .btn:hover {
            
            background-color: #072f63;
            transform:translateY(-1px);
        }
        .texto{
            color: #555;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="presentacion">
        <div class="bienvenido">
            <p class="texto">Formulario para crear una nueva propiedad</p>

            <form action="/propiedades" method="POST">
                @csrf
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" required>

                <label for="MetrosCuadrados">Metros Cuadrados:</label>
                <input type="number" id="MetrosCuadrados" name="MetrosCuadrados" step="0.01" min="0" required><br>

                <label for="habitaciones">Número de Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" min="0" required><br>
                
                <input type="submit" value="Crear Propiedad" class="btn">
            </form>
        </div>
    </div>        
        <script>
            document.addEventListener('DOMContentLoaded', function(){
                document.querySelectorAll('input[type="number"]').forEach(function(inp){
                    inp.addEventListener('input', function(){
                        if (this.value === '' ) return;
                        var v = parseFloat(this.value);
                        if (!isNaN(v) && v < 0) this.value = Math.abs(v);
                    });
                });
            });
        </script>
</body>
</html>