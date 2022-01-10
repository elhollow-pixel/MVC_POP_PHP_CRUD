<br/>
<div class="card">
    <div class="card-header">  
        <a name="" id="" class="btn btn-success" href="?controlador=empleados&accion=crear" role="button">Agregar empleado</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($empleado as $n_empleado){ ?>
                        <tr>
                            <th scope="row"><?php echo $n_empleado->id;?></th>
                            <td><?php echo $n_empleado->nombre;?></td>
                            <td><?php echo $n_empleado->apellido;?></td>
                            <td><?php echo $n_empleado->correo;?></td>
                            <td width="10px">
                                <!-- bs5-bg deffault-->
                                <div class="btn-group" role="group" aria-label="botones de acciones">
                                    <a href="?controlador=empleados&accion=editar&id=<?php echo $n_empleado->id;?>" class="btn btn-info">Editar</a>
                                    <a href="?controlador=empleados&accion=borrar&id=<?php echo $n_empleado->id;?>" class="btn btn-danger">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>

</div>




