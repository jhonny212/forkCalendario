<?php 
session_start();
$user=$_SESSION['username'];
$rol=$_SESSION['rol'];

if($user==null || $rol ==null){
    header('location: ../index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Rueda calendarica</title>
</head>

<body>
    <style>
        .content-wheel {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 120px 1fr auto;
            grid-gap: 20px;
            grid-template-areas: "navbar navbar navbar"
                "mainText mainText image"
                "textExtra textExtra textExtra ";
            background-color: rgb(42, 42, 99);
            height: 100%;
            width: 100%;
            margin: auto;

        }

        .image-container {
            grid-column-start: image;
            grid-column-end: image;
            border: 1px solid gray;
            margin-right: 10px;
            background-color: rgb(219, 219, 224);
        }

        .image-container img {
            width: 100%;
            height: 100%;
        }

        .main-container {
            padding: 10px 20px;
            grid-column-start: mainText;
            grid-column-end: mainText;
            grid-row-start: mainText;
            grid-row-end: mainText;
            text-align: justify;
        }

        .tst {

            grid-column-start: textExtra;
            grid-column-end: textExtra;
            text-align: justify;
            padding: 15px 35px;
            border: solid gray 2px;
            margin:  30px;
            background-color: rgb(76, 76, 138);

        }

        .header {
            grid-column-start: navbar;
            grid-column-end: navbar;
            grid-row-start: navbar;
            grid-row-end: navbar;
        }

        .nav-menu>li>a {
            color: rgb(196, 196, 199);
        }

        body {
            background-color: rgb(42, 42, 99);
        }

        @media screen and (max-width: 700px) {
            .content-wheel {
                grid-template-areas:
                    "navbar navbar navbar"
                    "image image image"
                    "mainText mainText mainText"
                    "textExtra textExtra textExtra";
            }
        }
    </style>

    <div class="content-wheel">
        <div class="header">
            <header id="header">
                <div class="container">
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"> <a href="#hero" style="color: gray;font-size: 23px;"><strong>TIEMPO</strong> MAYA</a></li>
                            <li><a href="../LineaDeTiempo.php">Linea del Tiempo</a></li>
                            <li><a href="../CalendarioHaab.php">Calendario Haab</a></li>
                            <li><a href="../CalendarioCholqij.php">Calendario Cholquij</a></li>
                            <li><a href="#">Rueda Calendarica</a></li>
                            <li><a href="nahuales.php">Nahuales</a></li>
                            <li><a href="../backed_sesion/cerrarSesion.php">Cerrar Sesion</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>
        <div class="main-container">
            <p style="color: white;">
            Aunque el tzolk???in ritual y el haab profano eran calendarios independientes 
            entre s??, los mayas los fundieron en un ciclo superior que se conoce 
            t??cnicamente con el nombre de ???rueda calend??rica???. Entonces, s??lo 
            cada 18.980 d??as coincide uno de los 260 d??as del tzolk???in con otro 
            de los 365 d??as del haab. 
            <br>
            La raz??n aritm??tica est?? en el m??nimo com??n m??ltiplo de ambos ciclos, para cuyo c??lculo 
            s??lo se tienen en cuenta una sola vez todos los factores de los dos n??meros: 
            260, se resuelve en 13x5x4 y 365 en 73x5 d??as.
            <br>
            Este ciclo de la rueda calend??rica estaba extendido en toda el ??rea centroamericana y constitu??a una nueva base 
            para los pron??sticos del calendario. Seg??n los mayas, el d??a de la 
            creaci??n del mundo coincid??a con la combinaci??n de la rueda calend??rica 4 ajaw 8 kumk???u.
            <br>
            El diagrama de la derecha refleja el acoplamiento del calendario ritual tzolk???in con el a??o ordinario haab, de 365 d??as. El primero 
            consta de los n??meros del 1 al 13 (rueda A) y de los 20 signos del d??a (rueda B); el segundo tiene 18 meses de 20 d??as 
            y un ap??ndice de 5 d??as al final del a??o. Para mayor claridad, 
            no se reproduce la rueda completa, sino s??lo el mes keh, de 20 d??as de duraci??n 
            (rueda C). La conjunci??n de las tres ruedas indica la fecha. En total, para que 
            una fecha concreta se repita han de pasar 18.980 d??as o 52 a??os haab.
            </p>

        </div>
        <div class="image-container">
            <img src="https://mayanpeninsula.com/wp-content/uploads/2019/09/Rueda-calendario-Maya-1024x741.png" alt="No image" srcset="">
        </div>
        <div class="tst">
                <div class="content-date">
                     <label style="color:white">Fecha</label>
                     <input type="date" name="" id="date">
                </div>
                <br>
                <div class="ruedas">
                    <label style="color:white">Haab</label>
                    &nsup;&nsup; <input type="text" name="" id="hab">
                    <br><br>
                    <label style="color:white">Tzolkin</label>
                    &nsup; <input type="text" name="" id="tzo">
                </div>
                <div class="calc">
                    <br>
                    <input type="button" id="btn-calc" style="width: 100%; " value="Calcular fecha">
                </div>
                <br><br>
                <section>
               <article>
                   <h1 style="color:white">
                   El Calendario de 260 d??as: Tzolkin
                   </h1>
                   <p style="color: black; text-align: justify;">
                   El calendario Tzolkin de 260 d??as era el m??s usado por los pueblos del mundo maya.
                   Lo usaban para regir los tiempos de su quehacer agr??cola, su ceremonial religioso y sus costumbres 
                   familiares, pues la vida del hombre maya estaba predestinada por el d??a del Tzolkin que correspond??a a la fecha de su nacimiento.
                   Esta cuenta consta de los n??meros del 1 al 13 y 20 nombres para los d??as representados asimismo por glifos 
                   individuales. Al llegar al decimocuarto d??a, el n??mero del d??a regresa al 1 continuando la sucesi??n del 1 al 13 una y otra vez. El d??a 21 se repite la sucesi??n de los nombres de los d??as y as?? sucesivamente. Ambos ciclos contin??an de esta manera hasta los 260 d??as sin que se repita la combinaci??n de n??mero y nombre pues 260 es el m??nimo com??n m??ltiplo de 13 y 20. Despu??s el ciclo de 260 d??as a su vez se repite.
                   </p>
               </article>
               <article>
                   <h1 style="color:white">El calendario de 365 d??as: Haab</h1>
                   <p style="color: black; text-align: justify;">
                   El calendario llamado Haab se basa en el recorrido anual de la Tierra alrededor del Sol en 365 d??as. 
                   Los mayas dividieron el a??o de 365 d??as en 18 "meses" llamados Uinal, de 20 d??as cada uno y 5 d??as 
                   sobrantes que se les denominaba Wayeb. Cada d??a se escribe usando un n??mero del 0 al 19 y un nombre 
                   del Uinal representado por un glifo, con la excepci??n de los d??as del Wayeb (considerados de mala suerte) 
                   que se acompa??an de n??meros del 0 al 4.
                   </p>
               </article>
               </section>
            </div>

        </div>


    </div>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script type="module" src="backend_ruedaCalendarica/index.js"></script>
    
    

</body>

</html>