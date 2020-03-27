<?php
    require "vistas/layouts/header.php";
?>
<div class="container-fluid">
    <?php (new AlumnosController())->formularios();?>
</div>