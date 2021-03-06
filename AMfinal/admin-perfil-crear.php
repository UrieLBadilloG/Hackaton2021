<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style-admin.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="wrapper">
        <div class="navegacion">
            <ul class="in">
                <li><h2>Admin</h2></li>
                <li><a href="admin-perfil-crear.php">- Perfil -</a></li>
                <li><a href="admin-general-agregar.php">General</a></li>
                <li><a href="admin-notificaciones.php">Notificaciones</a></li>

            </ul>
        </div>
        <div class="container">
            <div class="inner">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a style="border: 1px solid grey;" class="nav-link link-dark" aria-current="page" href="admin-perfil-crear.php">Crear</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-dark" href="admin-perfil-modificar.php">Modificar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-dark" href="admin-perfil-eliminar.php">Eliminar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-dark" href="admin-perfil-usuarios.php">Usuarios</a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <div class="block">
                    <p><h1>Crear un usuario</h1></p>
                    <p>ID del usuario</p>
                    <form action="CRUD/crear.php" method="post" name="form-work">
                    <div class="input-group mb-3">
                        <input type="text" name="Nombre"  class="form-control" placeholder="ID usuario" aria-label="Nombre de usuario" aria-describedby="basic-addon1">
                    </div>
                    <p>Nombre completo</p>
                    <div class="input-group mb-3">
                        <input   type="text" name="Nombree" class="form-control" placeholder="Nombre completo" aria-label="Nombre completo" aria-describedby="basic-addon1">
                    </div>
                    <p>Contase??a</p>
                    <form action="CRUD/crear.php" method="post" name="form-work">
                    <div class="input-group mb-3">
                        <input type="text" name="Contrase??a" class="form-control" placeholder="Contase??a" aria-label="Contase??a" aria-describedby="basic-addon1">
                    </div>
                    <form action="CRUD/crear.php" method="post" name="form-work">
                    <p>Departamento</p>
                    <select name="de" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        
                            <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM Departamento";
                            $ejecutar = sqlsrv_query ($con, $consulta);

                            while($fila=sqlsrv_fetch_array($ejecutar)){
                             $id=$fila['ID_depto'];
                            echo "<option value=".$fila['ID_depto'].">".$fila['ID_depto']."</option>";
                            } 

                            ?>

                    </select>
                    <p>Edad</p>
                    <form action="CRUD/crear.php" method="post" name="form-work">
                    <div class="input-group mb-3">
                        <input type="text" name="eda" class="form-control" placeholder="Edad" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <p>Direccion</p>
                    <form action="CRUD/crear.php" method="post" name="form-work">
                    <div class="input-group mb-3">
                        <input type="text" name="dir" class="form-control" placeholder="Direccion" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <p>Rango</p>
                    <select name="ran" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>

                    </select>
                    <p>Correo</p>
                    <form action="CRUD/crear.php" method="post" name="form-work">
                    <div class="input-group mb-3">
                        <input type="email" name="Corre" class="form-control" placeholder="Correo" aria-label="Contase??a" aria-describedby="basic-addon1">
                    </div>
                    <button type="submit" class="btn btn-outline-secondary">Crear</button>
                    </form>
                    </form>
                    </form>
                    </form>
                    </form>
                    </form>
                    
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>