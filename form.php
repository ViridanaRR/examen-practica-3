<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Formulario</title>

    <style>
        body{
            background-color: #F4F4F4;
        }
        .ex{
            padding: 3vh 3vh 0;
            text-align: left;
        }
        .ex img{
            height: 3vh;
            width: 3vh;
        }
        .carta{
            
            background-color: rgb(255, 255, 255);
            width: 50vw;
            height: 70vh;
            margin: 15vh 0;
            border-radius: 5%;
            box-shadow: 0 .5vh 1vw rgba(0, 0, 0, 0.342);
            
        }
        h1{
            color: #8c0909;
            font-size: 5vh;
            padding: 0 0 3vh;
        }
        .form1 .for1{
            display: inline-block;
            width: 12.5vw;
            height: 4vh;
            background-color: #b90b0b4f;
            border: 0;
            border-radius: .9vh;
            margin-bottom: 3vh;
            color: #ffffff;
            padding: 0 .8vh;
        }
        ::placeholder{
            color: #550505;
        }
        .form2 .for2{
            width: 19vw;
            height: 4.2vh;
            background-color: #b90b0b9a;
            border: 0;
            border-radius: .9vh;
            margin-bottom: 3vh;
            color: white;
            padding: 0 .8vh;
        }
        .form3 .for3{
            width: 38.2vw;
            height: 8vh;
            background-color: #8d0909c5;
            border: 0;
            border-radius: .9vh;
            margin-bottom: 3vh;
            color: white;
            padding: 1vh .8vh;
        }
        .bttn{
            width: 15%;
            height: 4vh;
            border-radius: 2vh;
            border: 0;
            background-color: #8d0909;
            color: white;
        }
        tr{
            background-color:black;
        }
    </style>
  </head>
  <body>
    <center> <div class="carta" >
        <form method="post">
            <div class="ex" >
                <a href="index.html"><img src="img/proximo.png" alt="" ></a>
            </div>
            <h1>Formulario</h1>
            <div class="form1">
                <input class="for1" type="text" name="matricula" placeholder="Matricula">
                <input class="for1" type="text" name="nombre" placeholder="Nombre completo">
                <input class="for1" type="text" name="gg" placeholder="Grado y grupo" ">
            </div>

            <div class="form2">
                <input class="for2" type="email" name="correo" placeholder="Correo electronico">
                <input class="for2" type="password" name="contrasena" placeholder="Contraseña">
            </div>
            <div class="form3">
                <textarea class="for3" name="mensaje" placeholder="Mensaje (opcional)"></textarea>
            </div>
                <button class="bttn" type="submit" name="enviar">Enviar</button>
            <div class = "form2">
                <input class="for2" type="email" name="correo_dato" placeholder="Correo electronico" style="margin-top: 3vh; width: 23vw;">
                <button class="bttn" type="submit" name="consultar" >Consultar</button>
                <button class="bttn" type="submit" name="borrar">Borrar</button>
            </div>
            
               
        </form>
        <?php
            include("registro.php");
            
        ?>
        
    </div> </center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>