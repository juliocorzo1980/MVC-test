<!DOCTYPE html>
<html>
<head>
<meta charset="utf-0" />
    <title>Sistema de gestion</title>
<script>
    function index() {
    self.location.href = 'index.php';
}

function reporteVentas() {
    self.location.href = 'index.php?action=reporteVentas';
}

function mantenimientoClientes() {
    self.location.href = 'index.php?action=mantenimientoClientes';
}

function mantenimientoProductos() {
    self.location.href = 'index.php?action=mantenimientoProductos';
}

function creaFactura() {
    self.location.href = 'index.php?action=factura';
}

function generarFactura() {

    var nitCliente;
    var nombreCliente;
    var direccionCliente;
    var telefonoCliente;
    var nombreProducto;
    var precio;
    var cantidad;
    var total;
    var subtotal;
    var iva;
    var subtotalP = 0;
    var fecha = new Date();

    nitCliente = document.getElementById("nitCliente").value;
    nombreCliente = document.getElementById("nombreCliente").value;
    direccionCliente = document.getElementById("direccionCliente").value;
    telefonoCliente = document.getElementById("telefonoCliente").value;

    document.write(fecha.getDate() + "/" + (fecha.getMonth() + 1) + "/" + fecha.getFullYear() + "</br>" + "</br>" + "</br>");
    document.write("Nit del Cliente:" + '&nbsp;' + nitCliente + "<br>" + "<br>");
    document.write("Nombre del Cliente:" + '&nbsp;' + nombreCliente + "<br>" + "<br>");
    document.write("Direccion:" + '&nbsp;' + direccionCliente + "<br>" + "<br>");
    document.write("Telefono:" + '&nbsp;' + telefonoCliente + "<br>" + "<br>" + "<br>");

    for (subtotal = 0; nombreProducto != "*"; subtotal++) {

        nombreProducto = prompt('Ingrese Nombre del Producto');
        document.write("Venta de: " + '&nbsp;' + nombreProducto + '&nbsp;' + '&nbsp;');

        precio = parseFloat(prompt('Ingrese Precio'));
        document.write("a un precio individual de:  " + '&nbsp;' + precio + '&nbsp;' + '&nbsp;');

        cantidad = parseInt(prompt('Ingrese Cantidad'));
        document.write("y la cantidad de:  " + '&nbsp;' + cantidad + '&nbsp;' + '&nbsp;');

        nombreProducto = prompt('Ingrese * Para terminar o presione aceptar para continuar');

        subtotal = precio * cantidad;
        subtotalP = subtotalP + parseInt(subtotal);
        iva = subtotalP * 0.12;
        total = subtotalP + iva;

        document.write("unidades para un sub-total sin IVA de: Q." + '&nbsp;' + subtotal + "<br>" + "<br>" + "<br>");
        document.write("Subtotal : " + '&nbsp;' + subtotalP + "<br>" + "<br>");
        document.write("Iva 12% :" + '&nbsp;' + iva + "<br>" + "<br>");
        document.write("Total: Q. " + '&nbsp;' + total + "<br>" + "<br>");
        document.write('<button onclick="window.print()">Imprimir Factura</button>' + "<br>" + "<br>");

    }
    document.write('<button onclick="index()">Inicio</button>');
    document.write('<button onclick="reporteVentas()">Reporte de Ventas</button>');
    document.write('<button onclick="mantenimientoClientes()">Mantenimiento de clientes</button>');
    document.write('<button onclick="mantenimientoProductos()">Mantenimiento de productos</button>');
    document.write('<button onclick="creaFactura()">Nueva Factura</button>' + "<br>" + "<br>");
    generarFactura()
}

function factura() {
    self.location.href = 'factura.html';
}

function validarFormulario() {
    let x = document.forms["formulario"]["nombre"].value;
    let y = document.forms["formulario"]["apellido"].value;
    if (x == "") {
        alert("Debe de ingresar un nombre");
        return false;
    }
    if (y == "") {
        alert("Debe de ingresar un apellido");
        return false;
    }
}

function reporteVentas() {

    var Producto1;
    var empresa;
    var precio1;
    var cantidad1;
    var total1;
    var subtotal1;
    var iva1;
    var subtotalP1 = 0
    var fecha1 = new Date();

    empresa = document.getElementById("empresa").value;
    document.write(fecha1.getDate() + "/" + (fecha1.getMonth() + 1) + "/" + fecha1.getFullYear() + "</br>" + "</br>" + "</br>");
    document.write("Nombre de la empresa:" + '&nbsp;' + empresa + "<br>" + "<br>");

    document.write("<h2>----------- Detalle deproductos vendidos -----------</h2>");
    for (subtotal1 = 0; Producto1 != "*"; subtotal1++) {
        document.write("<h2>----------- informe financiero-----------</h2>");
        Producto1 = prompt('Ingrese el nombre del producto');
        document.write("Se realizo la venta de: " + '&nbsp;' + Producto1 + '&nbsp;' + '&nbsp;');
        precio1 = parseFloat(prompt('Ingrese el precio unitario del producto'));
        document.write("a un precio individual de: Q." + '&nbsp;' + precio1 + '&nbsp;' + '&nbsp;');
        cantidad1 = parseInt(prompt('Ingrese la cantidad de productos vendidos'));
        document.write("y la cantidad de: " + '&nbsp;' + cantidad1 + '&nbsp;' + '&nbsp;');
        Producto1 = prompt('Ingrese * Para visualizar el reporte o presione aceptar para registrar ventas');

        subtotal1 = precio1 * cantidad1;
        subtotalP1 = subtotalP1 + parseInt(subtotal1);
        iva1 = subtotalP1 * 0.12;
        total1 = subtotalP1 + iva1;

        document.write("por un sub-total sin IVA de: Q. " + '&nbsp;' + subtotal1 + "<br>" + "<br>" + "<br>");
        document.write("Sub total: Q. " + '&nbsp;' + subtotalP1 + "<br>" + "<br>");
        document.write("Iva: Q. " + '&nbsp;' + iva1 + "<br>" + "<br>");
        document.write("Total: Q. " + '&nbsp;' + total1 + "<br>" + "<br>");
        document.write('<button onclick="window.print()">Imprimir reporte de ventas</button>' + "<br>" + "<br>");

    }
    document.write('<button onclick="index()">Inicio</button>');
    document.write('<button onclick="reporteVentas()">Reporte de Ventas</button>');
    document.write('<button onclick="mantenimientoClientes()">Mantenimiento de clientes</button>');
    document.write('<button onclick="mantenimientoProductos()">Mantenimiento de productos</button>');
    document.write('<button onclick="creaFactura()">Generar Factura</button>' + "<br>" + "<br>");

    reporteVentas()
}

function inventario() {

    var Producto2;
    var departamento;
    var cantidad2;
    var subtotal2;
    var fecha2 = new Date();

    departamento = document.getElementById("departamento").value;
    document.write(fecha2.getDate() + "/" + (fecha2.getMonth() + 1) + "/" + fecha2.getFullYear() + "</br>" + "</br>" + "</br>");
    document.write("Nombre del departamento:" + '&nbsp;' + departamento + "<br>" + "<br>");

    document.write("<h2>----------- Detalle de productos en existencia -----------</h2>");
    for (subtotal2 = 0; Producto2 != "*"; subtotal2++) {
        document.write("<h2>-------------------------- Inventario--------------------------</h2>");
        Producto2 = prompt('Ingrese el nombre del producto');
        document.write("Se tiene el producto de: " + '&nbsp;' + Producto2 + '&nbsp;' + '&nbsp;');
        cantidad2 = parseInt(prompt('Ingrese la cantidad de productos'));
        document.write(" y la cantidad de: " + '&nbsp;' + cantidad2 + '&nbsp;' + '&nbsp;');
        Producto2 = prompt('Ingrese * Para visualizar el inventario o presione aceptar para registrar mas productos');

        total2 = cantidad2;

        document.write("disponibles para la venta. " + '&nbsp;' + "<br>" + "<br>" + "<br>");
        document.write('<button onclick="window.print()">Imprimir Inventario</button>' + "<br>" + "<br>");

    }
    document.write('<button onclick="reporteVentas()">Inicio</button>');
    document.write('<button onclick="=reporteVentas()">Reporte de Ventas</button>');
    document.write('<button onclick="mantenimientoClientes()">Mantenimiento de clientes</button>');
    document.write('<button onclick="mantenimientoProductos()">Mantenimiento de productos</button>');
    document.write('<button onclick="creaFactura()">Generar factura</button>' + "<br>" + "<br>");
    inventario()

}

</script>

</head>
<body>
    <div>
    <header>
            <h1>Sistema de gestion</h1>
        </header>
        
<?php
            include "modules/navegacion.php";
            
        ?>
        <section>
        <?php
            $mvc = new MvcController();
            $mvc -> enlacesPaginasControlles();
        ?>    
        </section>
        
    </body>
</html>