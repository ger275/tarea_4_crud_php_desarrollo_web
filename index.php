<!doctype html>
<html lang="en">
  <head>
    <title>Estudiantes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <header>
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Gerson López</a>
                    <button class="navbar-toggler" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contacto</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#"
                                    id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Sub Menu
                                </a>
                                <ul class="dropdown-menu"
                                    aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another
                                            action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something
                                            else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Ubicación</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search"
                                placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success"
                                type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
    
      <div class="container">


    <!-- MODAL -->
    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalEstudiante">Nuevo</button>

<div class="modal fade" id="modalEstudiante" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Datos del Estudiante</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="crud_estudiante.php" method="post">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Id:</label>
                        <input type="text" class="form-control" id="txt_id" name="txt_id">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Carné:</label>
                        <input type="text" class="form-control" id="txt_carne" name="txt_carne">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombres:</label>
                        <input type="text" class="form-control" id="txt_nombres" name="txt_nombres">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="txt_apellidos" name="txt_apellidos">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Dirección:</label>
                        <input type="text" class="form-control" id="txt_direccion" name="txt_direccion">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Telefóno:</label>
                        <input type="text" class="form-control" id="txt_telefono" name="txt_telefono">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Correo Electrónico:</label>
                        <input type="text" class="form-control" id="txt_correo" name="txt_correo">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Sangre:</label>
                        <input type="text" class="form-control" id="txt_sangre" name="txt_sangre">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="txt_fechanac" name="txt_fechanac">
                    </div>
                    <button type="submit" class="btn btn-info" id="btn_agregar" name="btn_agregar" value="agregar" onclick="return validarCarne()">Agregar</button>
                    <button type="submit" class="btn btn-primary" id="btn_modificar" name="btn_modificar" value="modificar">Modificar</button>
                    <input type="submit" name="btn_eliminar" id="btn_eliminar" class="btn btn-danger" onclick="javascript:if(!confirm('¿Desea Eliminar?'))return false" value = "Eliminar">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- FIN MODAL -->

    <table class="table table-striped table-inverse table-responsive">
      <thead class="thead-inverse">
        <tr>
          <th>Carné</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Direccion</th>
          <th>Telefono</th>
          <th>Correo</th>
          <th>Tipo de Sangre</th>
          <th>Fecha de Nacimiento</th>
        </tr>
        </thead>
        <tbody id="tbl_estudiantes">
         <?php 
         include("datos_conexion.php");
         $db_conexion = mysqli_connect($db_host,$db_usr,$db_pass,$db_nombre);
         $db_conexion -> real_query ("SELECT e.id_estudiante as id,e.carne,e.nombres,e.apellidos,e.direccion,
         e.telefono,e.correo_electronico,s.sangre,e.fecha_nacimiento,s.id_tipo_sangre FROM estudiantes as e inner join tipos_sangre as s on 
         e.id_tipo_sangre = s.id_tipo_sangre;");
        $resultado = $db_conexion -> use_result();
        while ($fila = $resultado ->fetch_assoc()){
          echo "<tr data-id=". $fila['id']." data-ids=". $fila['id_tipo_sangre'].">";
          echo "<td>". $fila['carne']."</td>";
          echo "<td>". $fila['nombres']."</td>";
          echo "<td>". $fila['apellidos']."</td>";
          echo "<td>". $fila['direccion']."</td>";
          echo "<td>". $fila['telefono']."</td>";
          echo "<td>". $fila['correo_electronico']."</td>";
          echo "<td>". $fila['sangre']."</td>";
          echo "<td>". $fila['fecha_nacimiento']."</td>";
          echo "</tr>";

        }
        $db_conexion ->close();
         ?>
        </tbody>
    </table>
          
      </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript">

    function limpiar(){
        $("#txt_id").val(0);
        $("#txt_codigo").val('');
        $("#txt_nombres").val('');
        $("#txt_apellidos").val('');
        $("#txt_direccion").val('');
        $("#txt_telefono").val('');
        $("#txt_fn").val('');
        $("#drop_puesto").val(1);
        
    }
    $('#tbl_estudiantes').on('click','tr td',function(evt){
        var target,id,ids,carne,nombres,apellidos,direccion,telefono,correo,nacimiento;
        target = $(event.target);
        id = target.parent().data('id');
        ids = target.parent().data('ids');
        carne = target.parent("tr").find("td").eq(0).html();
        nombres = target.parent("tr").find("td").eq(1).html();
        apellidos =  target.parent("tr").find("td").eq(2).html();
        direccion = target.parent("tr").find("td").eq(3).html();
        telefono = target.parent("tr").find("td").eq(4).html();
        correo = target.parent("tr").find("td").eq(5).html();
        nacimiento  = target.parent("tr").find("td").eq(7).html();
        $("#txt_id").val(id);
        $("#txt_carne").val(carne);
        $("#txt_nombres").val(nombres);
        $("#txt_apellidos").val(apellidos);
        $("#txt_direccion").val(direccion);
        $("#txt_telefono").val(telefono);
        $("#txt_correo").val(correo);
        $("#txt_fechanac").val(nacimiento);
        $("#txt_sangre").val(ids);
        $("#modalEstudiante").modal('show');
        
    });
</script>
  </body>
</html>