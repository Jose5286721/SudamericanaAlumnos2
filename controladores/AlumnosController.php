<?php
class AlumnosController
{
    public function formularios()
    {
            echo '
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        Buscador de codigo de alumno
                        </div>
                        <div class="card-body">
                            <form method="POST" id="formulario" action="">
                                <h3>Filtrar por:</h3>
                                <div class="form-group">
                                    <div class="form-label"></div>
                                    <input type="number" name="id" placeholder="Introduzca el id del alumno" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <div class="form-label"></div>
                                    <input type="text" name="nombre" placeholder="Introduzca el nombre del alumno" class="form-control"/>
                                </div>
                                <button type="submit" class="btn btn-success">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nombre Alumno</th>
                                        <th>Email</th>
                                        <th>Contraseña</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    '.$this->procesarElExcelYTraerTodosLosRegistros().'
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            ';
    }
    public function procesarElExcelYTraerTodosLosRegistros(){
        if((isset($_POST['nombre']) && !empty($_POST['nombre']))){
            return AlumnosModel::getNombreDatos($_POST['nombre']);
        }else if((isset($_POST['id']) && !empty($_POST['id']))){
            return AlumnosModel::getIdDatos($_POST['id']);
        }else if((isset($_POST['nombre']) && !empty($_POST['nombre'])) && (isset($_POST['id']) && !empty($_POST['id']))){
            return AlumnosModel::getIdNombreDatos($_POST['id'],$_POST['nombre']);
        }else{
            return '';
        }
    }
}

