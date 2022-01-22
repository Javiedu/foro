<?php 
    require "../back/funciones.php";
    requerir_sesion();
?>

<html>
    <head>
        <title><?php echo $_SESSION["ID"]; ?></title>
        <link rel="stylesheet" href="../estilos/panel.css">
        <script src="https://kit.fontawesome.com/d065ecc10d.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="lateral">
            <div class="main_iconos">
                <div class="logo"><a href="#"><i class="fas fa-signature"></i></a></div>
                <div class="div_paginas"><a href="#"><i class="fas fa-clock paginas"></i></a></div>
                <div class="div_paginas"><a href="#"><i class="fas fa-fire paginas"></i></a></div>
                <div class="div_paginas"><a href="#"><i class="fas fa-folder paginas"></i></a></div>
            </div>
            <div class="main_opciones">
                <div class="caja_opciones">
                    <div class="div_opciones"><a href="#"><i class="fas fa-cog opciones"></i></a></div>
                    <div class="div_opciones"><a href="../back/back_unlogin.php"><i class="fas fa-sign-out-alt opciones"></i></a></div>
                </div>
            </div>
        </div>
        <div class="principal">
            <div class="superior">
                <div class="perfil">
                    <p><?php echo $_SESSION["nombre"] . " " . $_SESSION["apellidos"] ?></p>
                    <?php echo "<img src='../imagenes_perfil/" . $_SESSION["ID"] . ".png'>" ?>
                </div>
            </div>
            <div class="panel">
                <div class="panel_interior">
                    <div class="trend">
                        <div class="trend_superior">
                            <div><i class="fas fa-fire"></i></div>
                            <div class="trend_perfil">
                                <p>por Marcos Correa Perez</p>
                                <img src="../imagenes/perfil2.png">
                            </div>
                        </div>
                        <div class="trend_separador"></div>
                        <div class="trend_inferior">
                            <h1>¿Que es mejor FlexBox o CSS Grid?</h1>
                            <h5>Entra y da tu opinion de que es mejor, FlexBox o CSS Grid</h5>
                        </div>
                    </div>
                    <div class="recientes">
                        <div class="entrada">
                            <div class="entrada_superior">
                                <img src="../imagenes/perfil3.png">
                            </div>
                            <div class="entrada_separador"></div>
                            <div class="entrada_inferior">
                                <h4>OpenVPN la mejor VPN del momento para sistemas operativos linux</h4>
                            </div>
                        </div>
                        <div class="entrada">
                            <div class="entrada_superior">
                                <img src="../imagenes/perfil3.png">
                            </div>
                            <div class="entrada_separador"></div>
                            <div class="entrada_inferior">
                                <h4>OpenVPN la mejor VPN del momento para sistemas operativos linux</h4>
                            </div>
                        </div>
                        <div class="entrada">
                            <div class="entrada_superior">
                                <img src="../imagenes/perfil3.png">
                            </div>
                            <div class="entrada_separador"></div>
                            <div class="entrada_inferior">
                                <h4>OpenVPN la mejor VPN del momento para sistemas operativos linux</h4>
                            </div>
                        </div>
                        <div class="entrada">
                            <div class="entrada_superior">
                                <img src="../imagenes/perfil3.png">
                            </div>
                            <div class="entrada_separador"></div>
                            <div class="entrada_inferior">
                                <h4>OpenVPN la mejor VPN del momento para sistemas operativos linux</h4>
                            </div>
                        </div>
                        <div class="entrada">
                            <div class="entrada_superior">
                                <img src="../imagenes/perfil3.png">
                            </div>
                            <div class="entrada_separador"></div>
                            <div class="entrada_inferior">
                                <h4>OpenVPN la mejor VPN del momento para sistemas operativos linux</h4>
                            </div>
                        </div>
                        <div class="entrada">
                            <div class="entrada_superior">
                                <img src="../imagenes/perfil3.png">
                            </div>
                            <div class="entrada_separador"></div>
                            <div class="entrada_inferior">
                                <h4>OpenVPN la mejor VPN del momento para sistemas operativos linux</h4>
                            </div>
                        </div>
                        <div class="entrada">
                            <div class="entrada_superior">
                                <img src="../imagenes/perfil3.png">
                            </div>
                            <div class="entrada_separador"></div>
                            <div class="entrada_inferior">
                                <h4>OpenVPN la mejor VPN del momento para sistemas operativos linux</h4>
                            </div>
                        </div>
                        <div class="entrada">
                            <div class="entrada_superior">
                                <img src="../imagenes/perfil3.png">
                            </div>
                            <div class="entrada_separador"></div>
                            <div class="entrada_inferior">
                                <h4>OpenVPN la mejor VPN del momento para sistemas operativos linux</h4>
                            </div>
                        </div>
                        <div class="entrada">
                            <div class="entrada_superior">
                                <img src="../imagenes/perfil3.png">
                            </div>
                            <div class="entrada_separador"></div>
                            <div class="entrada_inferior">
                                <h4>OpenVPN la mejor VPN del momento para sistemas operativos linux</h4>
                            </div>
                        </div>
                        <div class="entrada">
                            <div class="entrada_superior">
                                <img src="../imagenes/perfil3.png">
                            </div>
                            <div class="entrada_separador"></div>
                            <div class="entrada_inferior">
                                <h4>OpenVPN la mejor VPN del momento para sistemas operativos linux</h4>
                            </div>
                        </div>
                        <div class="entrada">
                            <div class="entrada_superior">
                                <img src="../imagenes/perfil3.png">
                            </div>
                            <div class="entrada_separador"></div>
                            <div class="entrada_inferior">
                                <h4>OpenVPN la mejor VPN del momento para sistemas operativos linux</h4>
                            </div>
                        </div>
                        <div class="entrada">
                            <div class="entrada_superior">
                                <img src="../imagenes/perfil3.png">
                            </div>
                            <div class="entrada_separador"></div>
                            <div class="entrada_inferior">
                                <h4>OpenVPN la mejor VPN del momento para sistemas operativos linux</h4>
                            </div>
                        </div>
                        <div class="entrada">
                            <div class="entrada_superior">
                                <img src="../imagenes/perfil3.png">
                            </div>
                            <div class="entrada_separador"></div>
                            <div class="entrada_inferior">
                                <h4>OpenVPN la mejor VPN del momento para sistemas operativos linux</h4>
                            </div>
                        </div>
                        <div class="entrada">
                            <div class="entrada_superior">
                                <img src="../imagenes/perfil3.png">
                            </div>
                            <div class="entrada_separador"></div>
                            <div class="entrada_inferior">
                                <h4>OpenVPN la mejor VPN del momento para sistemas operativos linux</h4>
                            </div>
                        </div>
                        <div class="entrada">
                            <div class="entrada_superior">
                                <img src="../imagenes/perfil3.png">
                            </div>
                            <div class="entrada_separador"></div>
                            <div class="entrada_inferior">
                                <h4>OpenVPN la mejor VPN del momento para sistemas operativos linux</h4>
                            </div>
                        </div>
                        <div class="entrada">
                            <div class="entrada_superior">
                                <img src="../imagenes/perfil3.png">
                            </div>
                            <div class="entrada_separador"></div>
                            <div class="entrada_inferior">
                                <h4>OpenVPN la mejor VPN del momento para sistemas operativos linux</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> 