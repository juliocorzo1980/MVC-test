<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-0" />
    <title>Sistema de gestion</title>
    <link rel="stylesheet" href="estilosVentas.css" />
</head>

<body>
    <div id="container">
        <header>
            <script src="main.js"></script>
            <h1>Reporte de ventas</h1>
        </header>
       
        <section id="content">
            <h3>Ingres el nombre de la empresa y presione continuar para generar el reporte de ventas</h3>
            <p> . </p>
            <h3>Nombre de la empresa:</h3>
            <br><input type="text" name="Empresa" id="empresa" placeholder="Empresa" /><br><br>
            <input type="button" name="Continuar" onclick="reporteVentas()" value="Continuar" /><br><br>
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