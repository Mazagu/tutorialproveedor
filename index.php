<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="robot.png" type="image/png">
    <!-- Favicon image: https://favicon.io/ -->
    <title>Obtener Datos Proveedor</title>
    <style>
        body {
            background: aliceblue;
        }

        #container {
            width: 320px;
            margin: 10px auto;
            font-family: Arial;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 1px 15px 5px 15px;
            background: burlywood;
            border-radius: 5px;
            border: 1px solid #a7804f;
            margin-bottom: 5px;
        }

        p {
            text-align: justify;
        }

        a>img {
            display: inline-block;
            width: 1em;
            margin: 2px;
        }

        a,
        a:visited {
            text-decoration: none;
            color: #2a99fa;
            font-weight: bold;
        }

        a:hover {
            color: #1068b6;
        }

        h1 {
            font-size: 2em;
            color: #64b7ff;
            text-align: center;
            text-shadow: 1px 1px 0px black;
        }

        select {
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            margin-bottom: 5px;
        }

        button {
            width: 100%;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div id="container">
        <h1>Procesar datos</h1>
        <p>El objetivo de nuestro script es servir los datos del proveedor para que posteriormente se haga algo con ellos, normalmente actualizar nuestra base de datos con ellos. En este caso lo único que haremos será mostrar los datos en pantalla.</p>
        <div id="datos-proveedor"></div>
        <?php require "proveedores.php"; ?>
        <button onclick="obtenerDatosProveedor()">Obtener Datos Proveedor</button>
        <a href="proveedor/index.html">Lista de proveedores</a>
    </div>
    <script>
        function obtenerDatosProveedor() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    loadData(JSON.parse(this.responseText));
                }
            };
            xhttp.open("GET", "scriptProveedor.php", true);
            xhttp.send();
        }

        function loadData(data) {
            var list = document.createElement("ul");

            for (element in data) {
                let el = document.createElement("li");
                el.innerHTML = element + ": " + data[element].uds;
                list.appendChild(el);
            }

            document.getElementById("datos-proveedor").innerHTML = "";
            document.getElementById("datos-proveedor").appendChild(list);
        }
    </script>
</body>

</html>