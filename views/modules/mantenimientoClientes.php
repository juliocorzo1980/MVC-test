<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-0" />
    <title>Sistema de gestion</title>
    <link rel="stylesheet" href="estilosMantenimientoClientes.css" />
    <script src="main.js"></script>
</head>

<body>
    <div id="container">
        <header>
            <h1>Mantenimiento de clientes</h1>
        </header>
        
        <section id="content">
            <article class="article">
                <h2> Busqueda de clientes </h2>
                <h3> Al ingresar el nombre y apellido sera redireccionado.</h3><br>
                <h3> Si hace falta el nombre o apellido brindara mensaje de error para al busqueda de clientes</h3><br>
            </article>
            <form name="formulario" action="Index.php" onsubmit="return validarFormulario()" method="post"><br>
                <table>
                    <tr>
                        <td>Nombre:</td>
                        <td> <input type="text" name="nombre"></td>
                    </tr>
                    <tr>
                        <td>Apellido:</td>
                        <td> <input type="text" name="apellido"></td>
                        <tr>
                            <input type="submit" value="Buscar"><br>
                </table>
            </form>
        </section>
        <aside>
            <h1 id="h2">Soporte:</h1><br>
            <br>
            <h3>jcorzoo@miung.edu.gt</h3><br>
        </aside>
        <footer>
            Carnet: 5990-01-2560
        </footer>
    </div>
</body>

</html>