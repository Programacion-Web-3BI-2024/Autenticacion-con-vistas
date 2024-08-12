@include("base.header")

    <h3>Crear una pizza</h3>


    <form action="/crear" method="post">
        @csrf
        Nombre: <input type="text" name="nombre"> <br>
        Precio: <input type="text" name="precio"> <br><br>
        <input type="submit" value="Enviar">
    </form>
    
    
@include("base.footer")
