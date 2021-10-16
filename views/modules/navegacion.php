<style>
    * {
    margin: 0px;
    padding: 0px;
}

body {
    background: white;
    font-family: Arial, Helvetica, sans-serif;
}

#container {
    width: 1100px auto;
    margin: 0px auto;
    border: 0px solid black;
}

header {
    background: red;
    height: 100px;
    width: 100%;
    margin: 0px;
    text-align: center;
    color: black;
    line-height: 100px;
    border-bottom: white 10px solid;
}

ul {
    list-style-type: none;
    font-size: 20px;
    margin: 0;
    padding: 0;
}

li {
    float: left;
    list-style: none;
    margin: 10px;
    line-height: 30px;
}

nav {
    background: lightblue;
    text-align: center;
    color: white;
    height: 50px;
    border-bottom: 1px solid white;
}

#content {
    float: left;
    width: calc(80% - 80px);
    background: green;
    border-right: white 10px solid;
    border-top: white 10px solid;
    border-bottom: white 10px solid;
    min-height: 370px;
    padding: 40px;
}

h2 {
    text-align: center;
}

.article {
    color: black;
}

aside {
    float: left;
    width: calc(18% - 18px);
    border-right: white 10px solid;
    border-top: white 10px solid;
    border-bottom: white 10px solid;
    background: orange;
    min-height: 430px;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 20px;
}

footer {
    background: black;
    color: white;
    text-align: center;
    line-height: 50px;
    border-right: white 10px solid;
}
</style>
<nav>
    <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php?action=reporteVentas">Reporte de ventas</a></li>
                <li><a href="index.php?action=mantenimientoClientes">Mantenimiento de clientes</a></li>
                <li><a href="index.php?action=mantenimientoProductos">Mantenimiento de productos</a></li>
                <li><a href="index.php?action=factura">Generador de facturas</a></li>

    </ul>
</nav>
