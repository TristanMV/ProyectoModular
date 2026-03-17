<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Ofertas</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        .btn { padding: 5px 10px; text-decoration: none; border-radius: 3px; background: #eee; color: black; }
    </style>
</head>
<body>

    <h1>Ofertas Capturadas</h1>

    <a href="{{ route('ofertas.create') }}" style="margin-bottom: 20px; display: inline-block;">+ Crear Nueva Oferta</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Tienda</th>
                <th>Vigencia</th>
                <th>Precio Original</th>
                <th>Precio Descuento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ofertas as $oferta)
            <tr>
                <td>{{ $oferta->id }}</td>
                <td>{{ $oferta->titulo }}</td>
                <td>{{ $oferta->tienda }}</td>
                <td>{{ $oferta->vigencia }}</td>
                <td>${{ $oferta->precio_original }}</td>
                <td>${{ $oferta->precio_descuento }}</td>
                <td>
                    <a href="{{ route('ofertas.show', $oferta) }}" class="btn">Ver</a>
                    <a href="{{ route('ofertas.edit', $oferta) }}" class="btn">Editar</a>

                    <form action="{{ route('ofertas.destroy', $oferta) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>