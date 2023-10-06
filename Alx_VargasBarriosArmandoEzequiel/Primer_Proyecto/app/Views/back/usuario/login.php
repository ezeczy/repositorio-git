<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 50%; height:40%;">
        <div class="card-header text-center">
            <h2>Iniciar sesion</h2>
        </div>
        <!-- Mensaje de error -->
        <?php if (!empty(session()->getFlashdata('msg'))) : ?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>
        <!-- Mensaje de exito -->
        <?php if (session()->has('success')) : ?>
            <div class="alert alert-success">
                <?= session('success') ?>
            </div>
        <?php endif; ?>

        <!-- Inicio de formulario de login -->

        <form method="post" action="<?php echo base_url('/enviarlogin'); ?>">
            <?= csrf_field(); ?>
            <div class="card-body" media="(max-width:768px)">
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Correo</label>
                    <input name="email" type="text" class="form-control" placeholder="Correo">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input name="pass" type="password" class="form-control" placeholder="Contraseña">
                </div>
                <input type="submit" value="Ingresar" class="btn btn-success">
                <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
                <br><span>¿Aún no se registró? <a href="<?php echo base_url('/registro'); ?>">Registrarse aquí</a></span>
            </div>
        </form>

    </div>
</div>