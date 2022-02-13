<?php include 'config/config.php';
                        $evento = "SELECT * FROM cliente";

                        //Llamar a todos los eventos


                        $sql = "SELECT * FROM cliente";
                        $sentencia = $pdo->prepare($sql);
                        $sentencia->execute();

                        $resultados = $sentencia->fetchAll();

                        // var_dump($resultados);

                        $articulo_x_pagina = 8;

                        $total_cliente_db = $sentencia->rowCount();
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

                        $total_proveedor_db = $sentencia2->rowCount();
                        // echo $total_eventos_db;?>
<?php include 'config/config.php';
                        $evento = "SELECT * FROM `productos` ";

                        //Llamar a todos los eventos


                        $sql = "SELECT * FROM `productos`";
                        $sentencia2 = $pdo->prepare($sql);
                        $sentencia2->execute();

                        $resultados = $sentencia2->fetchAll();

                        // var_dump($resultados);

                        $articulo_x_pagina = 8;

                        $total_productos_db = $sentencia2->rowCount();
                        // echo $total_eventos_db;?>
<?php include 'config/config.php';
                        $evento = "SELECT * FROM `trabajadores` ";

                        //Llamar a todos los eventos


                        $sql = "SELECT * FROM `Trabajadores`";
                        $sentencia2 = $pdo->prepare($sql);
                        $sentencia2->execute();

                        $resultados = $sentencia2->fetchAll();

                        // var_dump($resultados);

                        $articulo_x_pagina = 8;

                        $total_trabajadores_db = $sentencia2->rowCount();
                        // echo $total_eventos_db;?>
<?php include 'config/config.php';
                        $evento = "SELECT * FROM `pedidos` ";

                        //Llamar a todos los eventos


                        $sql = "SELECT * FROM `pedidos`";
                        $sentencia2 = $pdo->prepare($sql);
                        $sentencia2->execute();

                        $resultados = $sentencia2->fetchAll();

                        // var_dump($resultados);

                        $articulo_x_pagina = 8;

                        $total_pedidos_db = $sentencia2->rowCount();
                        // echo $total_eventos_db;?>
<?php include 'config/config.php';
                        $evento = "SELECT * FROM `sucursales` ";

                        //Llamar a todos los eventos


                        $sql = "SELECT * FROM `sucursales`";
                        $sentencia2 = $pdo->prepare($sql);
                        $sentencia2->execute();

                        $resultados = $sentencia2->fetchAll();

                        // var_dump($resultados);

                        $articulo_x_pagina = 8;

                        $total_sucursales_db = $sentencia2->rowCount();
                        // echo $total_eventos_db;?>