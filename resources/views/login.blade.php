@include("base.header")

<h2>Login</h2>
<form action="/login" method="post">
    @csrf
    Nombre: <input type="text" name="email"> <br>
    Password: <input type="password" name="password" > <br>
    <input type="submit" value="Iniciar sesion">


</form>

    @if(session("failed"))
        <b>Credenciales invalidas</b> <br>
    @endif
    
@include("base.footer")
