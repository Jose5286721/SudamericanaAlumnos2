<?php 
class AlumnosModel{
    public $conexion;
    
    public function __construct(){
        $this->conexion = Conexion::conectar(); 
    }

    public static function getNombreDatos($nombre) {
        $resultadoHTML = '';
        $result = mysqli_query(Conexion::conectar(),"select cod_persona,persona from alumnos where persona like '%".$nombre."%' limit 25");
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $resultadoHTML .= '<tr>';
                $resultadoHTML .= '<th>'.$row["cod_persona"].'</th>';
                $resultadoHTML .= '<td>'.$row["persona"].'</td>';
                $resultadoHTML .= '<td></td>';
                $resultadoHTML .= '<td></td>';
                $resultadoHTML .= '</tr>';
            }
            return $resultadoHTML;
        } else {
            echo "<tr></tr>";
        }
        
    }

    public static function getIdDatos($id) {
        $resultadoHTML = '';
        $result = mysqli_query(Conexion::conectar(),"select cod_persona,persona,mail_institucional,password from alumnos where cod_persona = '".$id."' limit 1");
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $resultadoHTML .= '<tr>';
                $resultadoHTML .= '<th>'.$row["cod_persona"].'</th>';
                $resultadoHTML .= '<td>'.$row["persona"].'</td>';
                $resultadoHTML .= '<td>'.$row["mail_institucional"].'</td>';
                $resultadoHTML .= '<td>'.$row["password"].'</td>';
                $resultadoHTML .= '</tr>';
            }
            return $resultadoHTML;
        } else {
            echo "<tr></tr>";
        }
        
    }
    public static function getIdNombreDatos($id,$nombre) {
        $resultadoHTML = '';
        $result = mysqli_query(Conexion::conectar(),"select cod_persona,persona,mail_institucional,password from alumnos where persona like '%".$nombre."%' and cod_persona = '".$id."' limit 1");
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $resultadoHTML .= '<tr>';
                $resultadoHTML .= '<th>'.$row["cod_persona"].'</th>';
                $resultadoHTML .= '<td>'.$row["persona"].'</td>';
                $resultadoHTML .= '<td>'.$row["mail_institucional"].'</td>';
                $resultadoHTML .= '<td>'.$row["password"].'</td>';
                $resultadoHTML .= '</tr>';
            }
            return $resultadoHTML;
        } else {
            echo "<tr></tr>";
        }
        
    }

}