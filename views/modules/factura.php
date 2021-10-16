<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-0" />
    <title>Sistema de gestion</title>

</head>

<body>

    <body>
        <div id="container">
            <header>
                <script src="main.js"></script>
                <h1>Emision de factura</h1>
            </header>
            
                <section id="content">
                    Nit del cliente <br><input type="text" name="nitCliente" id="nitCliente" placeholder="Ingrese Nit" /><br><br> Nombre Cliente <br><input type="text" name="nombreCliente" id="nombreCliente" placeholder="ingrese nombre" /><br><br> Direccion
                    <br><input type="text" name="direccionCliente" id="direccionCliente" placeholder="Ingrese direccion" /><br><br> Telefono <br><input type="text" name="telefonoCliente" id="telefonoCliente" placeholder="Ingrese telefono" /><br><br>
                    <input type="button" name="Continuar" onclick="generarFactura()" value="Continuar" />

                </section>
                <aside>
            <h1 id="h2">Soporte:</h1><br>
            <br>
            <h3>jcorzoo@miung.edu.gt</h3><br>
        </aside>
        <footer>
            Carnet: 5990-01-2560
        </footer>
    </body>


</html>