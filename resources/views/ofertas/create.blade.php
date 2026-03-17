<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Oferta</title>
    <style>
        body { font-family: sans-serif; padding: 40px; background-color: #f4f4f4; }
        .form-container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); max-width: 400px; }
        input { width: 100%; padding: 8px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        button { background: #28a745; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; width: 100%; }
        button:hover { background: #218838; }
        .back-link { display: block; margin-bottom: 20px; color: #666; text-decoration: none; }
    </style>
</head>
<body>

    <div class="form-container">
        <a href="{{ route('ofertas.index') }}" class="back-link">← Volver al listado</a>
        <h2>Nueva Oferta</h2>

        <form action="{{ route('ofertas.store') }}" method="POST">
            @csrf <label>Título de la oferta:</label>
            <input type="text" name="titulo" placeholder="Ej. Laptop Gamer 20% off" required>

            <label>Tienda:</label>
            <input type="text" name="tienda" placeholder="Ej. Best Buy" required>

            <label>vigencia:</label>
            <input type="date" name="vigencia" required>

            <label>Precio Original:</label>
            <input type="number" step="0.01" name="precio_original" placeholder="0.00" required>

            <label>Precio con Descuento:</label>
            <input type="number" step="0.01" name="precio_descuento" placeholder="0.00" required>

            <button type="submit">Guardar Oferta</button>
        </form>
    </div>

</body>
</html>