
<!DOCTYPE html>
<head>
    <title>BIBLIOTECA | AUTORES</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link href="../css/style_sect.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
    <!---------------------------------------------------------------------------CABECERA-->
    <header>
        <div class="cabecera">
            <div id="logo">
                <h2>BIBLIOTECA</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="../index.php#autores">home</a></li>
                    <li><a href="javascript:history.go(-1)">volver</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="fondo_claro">
        <div class="conte">
            <div class="buscador">
               <input type="text" id="myInput" placeholder="buscar autor..." onkeyup="myfunction()"
                      title="Type in a name" autofocus>
           </div>
            <hr>
            <div class="gal_total">
                <?php include '../inc/autores.php';?>
            </div>
            
        </div>
    </section>
    </body>
        <script>
        function showTtl(id){document.getElementById(id).style.display="block";}
    </script>
    <script>
        function hideTtl(id){document.getElementById(id).style.display="none";}
    </script>
</html>
