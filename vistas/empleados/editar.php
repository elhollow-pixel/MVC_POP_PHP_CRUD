<!-- bs5-card-head-foot-->
<br/>
<div class="card">
    <div class="card-header">
        Editar empleado
    </div>
    <div class="card-body">
        <form action="" method="post">
            <!--reyonly no deja editar el input -->
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input readonly type="text" class="form-control" name="id"  value="<?php echo $b_empleado->id;?>" id="nombre" aria-describedby="helpId" placeholder="Nombre del empleado">
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombres</label>
                <input required type="text" class="form-control" name="nombre"  value="<?php echo $b_empleado->nombre;?>" id="nombre" aria-describedby="helpId" placeholder="Nombre del empleado">
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellidos</label>
                <input required type="text" class="form-control"  value="<?php echo $b_empleado->apellido;?>" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido del empleado">
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input required type="email" class="form-control"  value="<?php echo $b_empleado->correo;?>"name="correo" id="correo" aria-describedby="emailHelpId" placeholder="example@hotmail.com">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Modificar empleado">
            <a href="?controlador=empleados&accion=inicio" class="btn btn-danger">Cancelar</a>
            
        </form>
        
    </div>
</div>