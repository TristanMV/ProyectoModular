<form action="{{ route('ofertas.update', $oferta) }}" method="POST">
    @csrf
    @method('PUT') 
    <input type="text" name="titulo" value="{{ $oferta->titulo }}">
    <input type="text" name="tienda" value="{{ $oferta->tienda }}">
    <button type="submit">Actualizar</button>
</form>