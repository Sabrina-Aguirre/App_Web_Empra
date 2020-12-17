<?php
include "header.php";
include "admin/conexion.php";
include "function.php";

?>
       
       <?php
       if(isset($_GET['page'])){
        $page=$_GET['page'].".php";
       }else{
           $page="ingreso.php";
       }
    
       include cargarPagina($page);
       ?>      

<?php
include "footer.php";
?>
