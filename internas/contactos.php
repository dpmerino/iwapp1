<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera app</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>

<body>
    <header class="cabeceraPrincipal">
        <h1>Villonaco</h1>
        <section><img src="" alt="logo"></section>
        <section>
            <p>Register | Login</p>
            <input type="search" placeholder="Buscar">
        </section>
    </header>
    <nav class="menuPrincipal">
        <a href="">INICIO</a>
        <a href="../prueba.php">SERVICIOS</a>
        <a href="">PORTAFOLIO</a>
        <a href="">CLIENTES</a>
        <a href="internas/contactos.php">CONTACTO</a>
    </nav>
    <main>
        <h2 class="h2Home">CONTACTOS</h2>
        <form method="post" action="procesar.php">
            <div class="grupoInput">
                <label for="nombres">Nombres</label>
                <input type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre">
            </div>
            <div class="grupoInput">
            <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese su apellido">
            </div>
            <div class="grupoInput">
            <label for="correo">Correo</label>
                <input type="email" name="correo" id="correo" placeholder="Ingrese su correo">
            </div>
            <div class="grupoInput">
            <label for="tipouser">Tipo de usuario</label>
                <!--<input type="number" name="edad" id="edad" placeholder="Ingrese su edad" required> -->
                <select name="tipoUser" id="tipoUser">
                    <option value="1">Administrador</option>
                    <option value="2">Visitante</option>
                </select>
            </div>
            <div class="grupoInput">
                <button type ="submit" value = "Procesar"> Procesar</button>
            </div>
        </form>  
    </main>
    <footer class="piePagina">
        <h6>Derechos Reservados 2022</h6>
    </footer>
</body>

</html>