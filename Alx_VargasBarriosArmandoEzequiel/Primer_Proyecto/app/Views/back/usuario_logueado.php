<div class="contenedor mt-5">
    <div class="fila justificar-content-md-center">
        <div clase="col-5">
            <?php if(session()->getFlashdata('msg')): ?>
                <div class="alerta alerta-advertencia">
                    <?= session()->getFlashdata('msg') ?>
                </div>
                <?php endif; ?>
                <br><br>
                <?php if(sesión()->perfil_id1): ?>
                <div>
                    <img class="center" height="100px" width="100px" src="<?php echo base_url ('activos/img/admin.png'); ?>">
                </div>
                <?php elseif(sesión()->perfil_id 2): ?>
                <div>
                    <img class="center" height="100px" width="100px" src="<?php echo base_url('activos/img/cliente.png'); ?>">
                </div>
                <?php endif; ?>
        </div>
    </div>
</div>