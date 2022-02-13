<?php include 'config/config.php';
                        $evento = "SELECT * FROM cliente";

                        //Llamar a todos los eventos


                        $sql = "SELECT * FROM cliente";
                        $sentencia = $pdo->prepare($sql);
                        $sentencia->execute();

                        $resultados = $sentencia->fetchAll();

                        // var_dump($resultados);

                        $articulo_x_pagina = 8;

                        $total_eventos_db = $sentencia->rowCount();
                        // echo $total_eventos_db;?>
<?php include 'config/config.php';
                        $evento = "SELECT * FROM `proveedor` ";

                        //Llamar a todos los eventos


                        $sql = "SELECT * FROM `proveedor`";
                        $sentencia2 = $pdo->prepare($sql);
                        $sentencia2->execute();

                        $resultados = $sentencia2->fetchAll();

                        // var_dump($resultados);

                        $articulo_x_pagina = 8;

                        $total_banners_db = $sentencia2->rowCount();
                        // echo $total_eventos_db;?>