<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../MR/Styles/admin.css">
    <script src="https://kit.fontawesome.com/122542a012.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <nav id="nav-bar">
        <div id="nav-search">
            <div id="site-name">MR</div>
            <input type="text" placeholder="Buscar...">
        </div>

        <div class="nav-links">
            <div class="dropdown" data-dropdown>
                <img src="../MR/img/HEN.png" alt="Profile-picture" class="profile-img" data-dropdown-btn>
                <div class="dropdown-menu">
                    <div class="triangle"></div>
                    <ul>
                        <li><a id="show-login" class="profile-tab" href="#">Iniciar Sesión</a></li>
                        <li><a class="profile-tab" id="show-register" href="#">Registrarse</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="input-section">
        <table>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Contraseña</th>
                <th>Commandos</th>
            </tr>
            <?php
                    include "../MR/Db/selectUsuarios.php";                           
                    
                    while($mostrar = mysqli_fetch_array($resultado_consulta)){                        
                ?>     
                    <tr>
                    <td><?php echo $mostrar['id']?></td>            
                    <td><?php echo $mostrar['username']?></td>            
                    <td><?php echo $mostrar['email']?></td>            
                    <td><?php echo $mostrar['password']?></td>
                    <td class="command">
                        <a href="../MR/Db/eliminar.php?id=<?php echo $mostrar['id']?>" id="basura" class="table-info basura-actualizar">Borrar</a>   
                        <a href="../MR/Db/actualizar.php?id=<?php echo $mostrar['id']?>" id="actualizar" class="table-info basura-actualizar">Modificar</a> 
                    </td>
                    </tr>
                <?php   
                    
                    }
                    
                ?>
            
        </table>

    </div>

</body>

</html>