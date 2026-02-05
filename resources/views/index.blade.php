<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Propiedades</title>
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
        .btn{
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #4aa1ff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn:hover {
            background-color: #072f63;
        }
        .agregar{
            display: inline-block;
            margin-bottom: 1rem;
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #4aa1ff;
            border: none;
            border-radius: 10px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .agregar:hover {
            background-color: #072f63;
        }
        .texto{
            color: #555;
            font-size: 2rem;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        .table th,
        .table td {
            border: 1px solid #e5e7eb;
            padding: 0.6rem 0.75rem;
            text-align: left;
        }
        .table thead th {
            background-color: #112b64; 
            color: #ffffff;
            font-weight: 600;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f9fafb;
        }
        .table tbody tr:hover {
            background-color: #f3f4f6;
        }
    </style>
</head>
    <body>
        <div class="presentacion">
            <div class="bienvenido">
                <p class="texto">Lista de Propiedades</p>
                <a class="agregar" href="{{ route('propiedades.create') }}">Agregar Propiedad</a>

                @if($propiedades->isEmpty())
                    <p >No hay propiedades registradas.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Dirección</th>
                                <th>Metros Cuadrados</th>
                                <th>Habitaciones</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($propiedades as $propiedad)
                                <tr>
                                    <td>{{ $propiedad->direccion }}</td>
                                    <td>{{ $propiedad->MetrosCuadrados }}m²</td>
                                    <td>{{ $propiedad->habitaciones }}</td>
                                    <td>{{ $propiedad->usado_texto }}</td>
                                    <td>
                                        <form action="{{ route('propiedades.destroy', $propiedad->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn" type="submit">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" >No hay datos</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </body>
</html>






