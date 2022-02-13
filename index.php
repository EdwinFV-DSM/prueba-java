<?php include 'config/config.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>LAS AMERICAS</title>
</head>

<body>
    <?php include "ficheros/consultaB.php";?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="views/clientes.php">Clientes</a></li>
                            <li><a class="dropdown-item" href="views/proveedores.php">Proveedores</a></li>
                            <li><a class="dropdown-item" href="views/productos.php">Productos</a></li>
                            <li><a class="dropdown-item" href="views/trabajadores.php">Trabajadores</a></li>
                            <li><a class="dropdown-item" href="views/pedidos.php">Pedidos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="views/sucursales.php">Sucursales</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <section id="views_report" class="container" style="text-align:center;">
        <div class="card_inicio">
            <div class="cards shadow p-3 mb-5 bg-body rounded">
                <h3>Clientes</h3>
                <p><?php echo $total_cliente_db;?></p>
            </div>
            <div class="cards shadow p-3 mb-5 bg-body rounded">
                <h3>Proveedores</h3>
                <p><?php echo $total_proveedor_db;?></p>
            </div>
            <div class="cards shadow p-3 mb-5 bg-body rounded">
                <h3>Productos</h3>
                <p><?php echo $total_productos_db;?></p>
            </div>
            <div class="cards shadow p-3 mb-5 bg-body rounded">
                <h3>Trabajadores</h3>
                <p><?php echo $total_trabajadores_db;?></p>
            </div>
            <div class="cards shadow p-3 mb-5 bg-body rounded">
                <h3>Pedidos</h3>
                <p><?php echo $total_pedidos_db;?></p>
            </div>
            <div class="cards shadow p-3 mb-5 bg-body rounded">
                <h3>Sucursales</h3>
                <p><?php echo $total_sucursales_db;?></p>
            </div>
    </section>
    </div>
    <div class="botones_accesso">
        <section class="container">
            <div class="row">
                <div class="card-group">
                    <div class="card">
                        <img src="https://www.transelca.com.co/clientes/Imagenes%20Coporativas%20Clientes/banner-clientes.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div style="text-align:center;">
                                <h5 class="card-title">Clientes</h5>
                            </div>
                            <p class="card-text">
                                <li>Crea una alta</li>
                                <li>Elimina a un usuario</li>
                                <li>Actualiza los datos</li>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><a href="views/clientes.php"><button type="submit" class="btn btn-primary"><i
                                            class="bi bi-plus-lg"></i>Ingresar</button></a></small>
                            <small class="text-muted"><a href=""><button type="submit" class="btn btn-success"><i
                                            class="bi bi-file-earmark-pdf-fill"></i>Reporte</button></a></small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://www.atlas.com.co/portals/0/banner-proveedores.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <div style="text-align:center;">
                                <h5 class="card-title">Proveedores</h5>
                            </div>
                            <p class="card-text">
                                <li>Crea una alta de proveedor</li>
                                <li>Elimina a un proveeodr</li>
                                <li>Actualiza los datos del proveedor</li>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><a href="views/proveedores.php"><button type="submit" class="btn btn-primary"><i
                                            class="bi bi-plus-lg"></i>Ingresar</button></a></small>
                            <small class="text-muted"><a href=""><button type="submit" class="btn btn-success"><i
                                            class="bi bi-file-earmark-pdf-fill"></i>Reporte</button></a></small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <div style="text-align:center;">
                                <h5 class="card-title">Pedidos</h5>
                            </div>
                            <p class="card-text">
                                <li>Crea un pedido</li>
                                <li>Cancela un pedido</li>
                                <li>Actualiza los datos</li>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><a href="views/pedidos.php"><button type="submit" class="btn btn-primary"><i
                                            class="bi bi-plus-lg"></i>Ingresar</button></a></small>
                            <small class="text-muted"><a href=""><button type="submit" class="btn btn-success"><i
                                            class="bi bi-file-earmark-pdf-fill"></i>Reporte</button></a></small>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sucursal</h5>
                            <p class="card-text">
                                <li>Alta de una sucursal</li>
                                <li>Elimina una sucursal</li>
                                <li>Actualiza los datos</li>
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="card-footer">
                                <small class="text-muted"><a href="views/sucursales.php"><button type="submit" class="btn btn-primary"><i
                                                class="bi bi-plus-lg"></i>Ingresar</button></a></small>
                                <small class="text-muted"><a href=""><button type="submit" class="btn btn-success"><i
                                                class="bi bi-file-earmark-pdf-fill"></i>Reporte</button></a></small>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Productos</h5>
                            <p class="card-text">
                                <li>Crea un alta de productos</li>
                                <li>Elimina un producto</li>
                                <li>Actualiza los datos</li>
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="card-footer">
                                <small class="text-muted"><a href="views/productos.php"><button type="submit" class="btn btn-primary"><i
                                                class="bi bi-plus-lg"></i>Ingresar</button></a></small>
                                <small class="text-muted"><a href=""><button type="submit" class="btn btn-success"><i
                                                class="bi bi-file-earmark-pdf-fill"></i>Reporte</button></a></small>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Trabajadores</h5>
                            <p class="card-text">
                                <li>Crea un alta de trabajadores</li>
                                <li>Elimina a un trabajador</li>
                                <li>Actualiza los datos</li>
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="card-footer">
                                <small class="text-muted"><a href="views/trbajadores.php"><button type="submit" class="btn btn-primary"><i
                                                class="bi bi-plus-lg"></i>Ingresar</button></a></small>
                                <small class="text-muted"><a href=""><button type="submit" class="btn btn-success"><i
                                                class="bi bi-file-earmark-pdf-fill"></i>Reporte</button></a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>