<!-- navegacion -->
<!-- <nav class="navbar navbar-expand-lg bg-body-dark"> -->

<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-light navbar-expand-lg" style="background-color: #009b61;">
    <div class="container-fluid">
        <div class="nabvar-header">
            <a class="nabvar-barnd me-auto barra btn btn-outline-success" href="<?php echo base_url('principal') ?>">
                <!-- logo/marca de la empresa -->
                <img src="<?php echo base_url('assets/img/Logo.png') ?>" alt="marca" width="70" height="50" class="img-fluid/">
            </a>
        </div>
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if (session()->perfil_id == 1) : ?>
            <div class="btn btn-info active btnUser tbn-sm">
                <a herf="">Cliente: <?php echo session('nombre'); ?> </a>
            </div>
            
            <a class="navbar-brand" href="#"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success" aria-current="page" href="<?php echo base_url('quienes_somos') ?>">Quiénes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success" href="#">Catalogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success" href="<?php echo base_url('logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
            <!-- Estas linas es para cuando el logeado es cliente -->
        <?php elseif (session()->perfil_id == 2) : ?>
            <div class="btn btn-info active btnUser tbn-sm">
                <a herf="">Cliente: <?php echo session('nombre'); ?> </a>
            </div>
            
            <a class="navbar-brand" href="#"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success" aria-current="page" href="<?php echo base_url('quienes_somos') ?>">Quiénes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success" href="<?php echo base_url('acerca_de') ?>">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success" href="#">Catalogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success" href="<?php echo base_url('logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>

        <?php else : ?>
            <!-- NAVBAR PARA CLIENTES no logueados     -->
            <a class="navbar-brand" href="#"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success" aria-current="page" href="<?php echo base_url('quienes_somos') ?>">Quiénes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success" href="<?php echo base_url('acerca_de') ?>">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success" href="<?php echo base_url('registro') ?>">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success" href="<?php echo base_url('login') ?>">Login</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex" role="Buscar">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        <?php endif ?>
    </div>
    </div>
</nav>

<!-- fin barra de navegacion -->