@include("base.header")

    <h3>Crear una pizza</h3>


    <form action="/modificar" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $pizza -> id }}">
        Nombre: <input type="text" name="nombre" value="{{ $pizza -> nombre }}"> <br>
        Precio: <input type="number" name="precio" value="{{ $pizza -> precio }}"> <br><br>
        <input type="submit" value="Enviar">
    </form>
    
    
@include("base.footer")
