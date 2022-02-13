<?php include 'cabeceraV.php';

$sql = "SELECT * FROM cliente";
$sentencia = $pdo->prepare($sql);
$sentencia->execute();

$resultados = $sentencia->fetchAll();

// var_dump($resultados);

$articulo_x_pagina = 8;

$total_eventos_db = $sentencia->rowCount();
// echo $total_eventos_db;
$paginas = $total_eventos_db/8;
$paginas = ceil($paginas);
// echo $paginas
$pagina = 0;
?>

<div class="botones-eventos">
    <!-- <button type="submit" class="btn btn-primary"><i class="bi bi-plus-lg"></i>Nuevo</button> -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
        data-bs-whatever="@getbootstrap"><i class="bi bi-plus-lg"></i>Nuevo</button>
    <button type="button" class="btn btn-warning" onclick="location.reload()" data-bs-toggle="tooltip"
        data-bs-placement="left" title="Refrescar pagina"><i class="bi bi-arrow-clockwise"></i></button>
    <?php include "../ficheros/modals.php";?>

    <!-- <button type="submit" class="btn btn-danger"><i class="bi bi-plus-lg"></i>Nuevo</button> -->
</div>
<div class="tabla-eventos">
    <div id="table-wrapper">
        <div id="table-scroll">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Contacto</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!$_GET) {
              header('location: http://localhost:3000/views/clientes.php?pagina=1');
            }if($_GET['pagina']>$paginas || $_GET['pagina']<=0){
              header('location: http://localhost:3000/views/clientes.php?pagina=1');
            }

            $iniciar = ($_GET['pagina']-1)*$articulo_x_pagina;

            $sql_eventos = 'SELECT * FROM cliente LIMIT :iniciar,:narticulos';

            $sentencia_eventos = $pdo->prepare($sql_eventos);
            $sentencia_eventos->bindParam(':iniciar', $iniciar,PDO::PARAM_INT);
            $sentencia_eventos->bindParam(':narticulos', $articulo_x_pagina,PDO::PARAM_INT);
            $sentencia_eventos->execute();

            $resultado_eventos = $sentencia_eventos->fetchAll();

            ?>
           
                    <?php foreach ($resultado_eventos as $event): ?>
                    <tr>
                        <td><?php echo $event ['nombre']?></td>
                        <td><?php echo $event ['direccion']?></td>
                        <td><?php echo $event ['contacto']?></td>
                        <td>
                            <a href="http://localhost/ElMariana/evento?id=<?php echo $event ['id']; ?>" class=" btn btn-danger del_product" ><i
                                    class="bi bi-trash-fill" title="Eliminar"></i></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
  <?php

include('../config/config.php');

$id = $_GET["id"];
$eliminar = "DELETE FROM `eventos` WHERE `id` = '$id'";
$resultadoEliminar = mysqli_query($conexion, $eliminar);

// if($resultadoEliminar = true){
//     echo "<script>aler('Se elimino correctamente')</script>";
//  }else{
//      echo "<script>alert('No se ha eliminado la faccion con exito');window.history.go(-1);</script>";
//  }
//  print_r($value);

?>
    <!-- End of Main Content -->
    <!-- <div class="mt-3" id="respuesta">
    <div class="alert alert-primary" role="alert">
    Llena todos los campos
    </div>
</div> -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item <?php echo $_GET['pagina']<=1? 'disabled' : '' ?>">
                <a class="page-link" href="<?= BASE_URL ?>evento?pagina=<?php echo $_GET['pagina']-1?>" tabindex="-1"
                    aria-disabled="true">Anterior</a>
            </li>
            <?php for ($i=0; $i < $paginas; $i++):?>

            <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'e' : '' ?>"><a class="page-link"
                    href="<?= BASE_URL ?>evento?pagina=<?php echo $i+1 ?>"><?php echo $i+1 ?></a></li>

            <?php endfor ?>
            <li class="page-item <?php echo $_GET['pagina']>=$paginas? 'disabled' : '' ?>">
                <a class="page-link" href="<?= BASE_URL ?>evento?pagina=<?php echo $_GET['pagina']+1?>">Siguiente</a>
            </li>
        </ul>
    </nav>


</body>

</html>