<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../MR/Styles/style.css">
    <script src="https://kit.fontawesome.com/4796f673c0.js" crossorigin="anonymous"></script>
    <title>Manga Rating</title>
</head>
<body>
    <script src="index.js" defer></script>

    <nav id = "nav-bar">
        <div id = "nav-search">
            <div id = "site-name">MR</div>
            <input type="text" placeholder="Buscar...">
        </div>

        <div id = "nav-btn">
            
            <div class="nav-links">
                <a href="#top">Top Comics</a>
                <a href="/MR/admin.php">Comunidad</a>
                <a href="">Mis Comics</a>
            </div>
            <div class="dropdown" data-dropdown>
                <img src="../MR/img/HEN.png" alt="Profile-picture" class = "profile-img" data-dropdown-btn>
                <div class="dropdown-menu">
                    <div class="triangle"></div>
                    <ul>
                        <li><a id="show-login" class="profile-tab" href="#">Iniciar Sesión</a></li>
                        <li><a class="profile-tab" id="show-register" href="#">Registrarse</a></li>
                    </ul>
                </div>
                </div>
            </ul>
        </div>
    </nav>


    

    <section class = "top-comics">

        <h1 id = "top-header">Top Comics</h1>

        <div class = "top-table" id="top-one">
            <div class="manga-container">
                <img src="../MR/img/Uta_Cover.png" alt="yofukashinouta Cover">
                <div class="manga-title">Yofukashi no Uta</div>
            </div>
    
            <div class="manga-container" id="top-two">
                <img src="../MR/img/Chainsaw_Cover.jpg" alt="Chainsaw man Cover">
                <div class="manga-title">Chainsaw man</div>
            </div>

            <div class="manga-container" id="top-three">
                <img src="../MR/img//jUJUTSU_Cover.jpg" alt="Jujutsu Cover">
                <div class="manga-title">Jujutsu Kaisen</div>
            </div>

            <div class="manga-container" id="top-four">
                <img src="../MR/img/Doll_Cover.png" alt="sono bisque doll wa koi wo suru Cover">
                <div class="manga-title">Sono bisque doll</div>
            </div>

            <div class="manga-container" id = "top-five"> 
                <img src="../MR/img/Revengers_Cover.jpg" alt="Tokyo revengers">
                <div class="manga-title">Tokyo Revengers</div>
            </div>

        </div>
        
    </section>

    <div class = "figure">
        <div class="custom-shape-divider-top-1648267889">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M602.45,3.86h0S572.9,116.24,281.94,120H923C632,116.24,602.45,3.86,602.45,3.86Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <section class="ratings" id="top">
        <h2 id = "rating-header">Comics populares</h2>

        <div id = rating-container>
            <div id = "rating-full">
                <div class="graph">
            
                    <div class="container"> 
                        <div class="bar one" data-bar></div>
                        <div class="bar two" data-bar></div>
                        <div class="bar three" data-bar></div>
                        <div class="bar four" data-bar></div>
                        <div class="bar five" data-bar></div>
            
                        <ul class="n-views">
                            <li><div>40M</div></li>
                            <li><div>30M</div></li>
                            <li><div>20M</div></li>
                            <li><div>10M</div></li>
                        </ul>
                        
                    </div>
            
                </div>

                <div class="comic-list">
                    <ol>
                        <li><a href=""> <div class = "rating-item">Yofukashi no Uta</a> <div><i class="fa-solid fa-book-open-reader"> </i> 35,484 </div></div></li>
                        <li><a href=""> <div class = "rating-item">Chainsaw Man</a> <div><i class="fa-solid fa-book-open-reader"> </i> 30,522 </div></div></li>
                        <li><a href=""> <div class = "rating-item">Jujutsu Kaisen</a> <div><i class="fa-solid fa-book-open-reader"> </i> 28,210 </div></div></li>
                        <li><a href=""> <div class = "rating-item">Sono bisque no doll wo koi wo suru</a> <div><i class="fa-solid fa-book-open-reader"> </i> 23,268 </div></div></li>
                        <li><a href=""> <div class = "rating-item">Tokyo Revengers</a> <div><i class="fa-solid fa-book-open-reader"> </i> 20,931 </div></div></li>
                        <li><a href=""> <div class = "rating-item">Batman: The Ankh</a> <div><i class="fa-solid fa-book-open-reader"> </i> 19,541 </div></div></li>
                        <li><a href=""> <div class = "rating-item">Invincible</a> <div><i class="fa-solid fa-book-open-reader"> </i> 19,341 </div></div></li>
                        <li><a href=""> <div class = "rating-item">Shingeki no kyojin</a> <div><i class="fa-solid fa-book-open-reader"> </i> 18,931 </div></div></li>
                        <li><a href=""> <div class = "rating-item">Spiderman & Punisher</a> <div><i class="fa-solid fa-book-open-reader"> </i> 18,731 </div></div></li>
                        <li><a href=""> <div class = "rating-item">Aku no hana</a> <div><i class="fa-solid fa-book-open-reader"> </i> 17,931 </div></div></li>
                        <li><a href=""> <div class = "rating-item">Haikyuu</a> <div><i class="fa-solid fa-book-open-reader"> </i> 17,843 </div></div></li>
                        <li><a href=""> <div class = "rating-item">Ijiranaide nagatoro san</a> <div><i class="fa-solid fa-book-open-reader"> </i> 17,580 </div></div></li>
                        <li><a href=""> <div class = "rating-item">Tomo chan wa onnanoko</a> <div><i class="fa-solid fa-book-open-reader"> </i> 17,300 </div></div></li>
                        <li><a href=""> <div class = "rating-item">Totsu no kuni no shoujou</a> <div><i class="fa-solid fa-book-open-reader"> </i> 16,931 </div></div></li>
                        </ol>

                    </div>
                </div>

            </div>

        </div>


    </section>

    <div class = "figure">
        <div class="custom-shape-divider-bottom-1648267195">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <section class = "about">
        <h4 id = "about-header">¿Qué somos?</h4>
        <div id = "funcion">
            <div class="about-us">
                <p>
                    En MR puedes registrar tus comics para mantener una biblioteca de lecturas y interactuar con la comunidad por medio de reseñas o posts sobre tus capitulos favoritos. 
                </p>
                <p>
                    Usamos la información de las librerias de nuestros usuarios para crear estadisticas sobre rating y la cantidad de lectores.
                </p>
            </div>
            
            <i class="fa-solid fa-book-bookmark"></i>

        </div>
    </section>

<footer>
    
    <div id = "socials">
        <p> Nuestras redes sociales:</p>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-solid fa-mug-hot"></i>
        <i class="fa-brands fa-patreon"></i>
    </div>

    <div id = "copyright">© 2020 Johnathan Moreno Gutierrez</div>
    
</footer>

<div class="pop-up">
    <div class="close-btn">&times;</div>
    <div class="form">
        <h5>Log in</h5>
        <div class="form-element">
            <label for="email">Email</label>
            <input type="text" id="email" placeholder="Ingresa su correo">
        </div>
        <div class="form-element">
            <label for="password">Contraseña</label>
            <input type="password" id="password" placeholder="Ingrese su contraseña">
        </div>
        <div class="form-element" id ="remember">
            <input type = "checkbox" id="remember-me">
            <label for="remember-me">Recuérdame</label>
        </div>

        <button type="submit">Iniciar sesión</button>

        <div class="form-element">
            <a href = "#">Olvidé mi contraseña</a>
        </div>
    </div>
</div>

<div class="pop-up-register">
    <div class="close-btn-register">&times;</div>
    <form class="form" id="form-reg" method="post">
        <h1>Registro</h1>
        <div class="form-element">
            <label for="username">Nombre de Usuario</label>
            <input id="username" name="username" type="text">
            <div class="error"></div>
        </div>
        <div class="form-element">
            <label for="remail">Email</label>
            <input id="remail" name="email" type="text">
            <div class="error"></div>
        </div>
        <div class="form-element">
            <label for="rpassword">Contraseña</label>
            <input id="rpassword" name="password" type="password">
            <div class="error"></div>
        </div>
        <div class="form-element">
            <label for="rpassword2">Repita Contraseña</label>
            <input id="rpassword2">
            <div class="error"></div>
        </div>
        <button id ="register-btn" type="submit" name="registrar">Registrarse</button>
    </form>
    <?php include "./Db/insert.php"; ?>
    </div>
</div>


</body>

</html>