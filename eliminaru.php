<?php session_start(); 
 
	include ("conexion.php");
	 $idusuario=$_SESSION['usuario'][0]['id'];
 	 $nivelp=$_SESSION['nivelp'][0]['nivelp'];
	if(($idusuario!='') && ($nivelp==2)) {
	 $ide=$_GET['x'];
	if($ide!=$idusuario){

	   $sql=" Delete from encargadorm where idencargadoRM=$ide";
      $query1 = $con -> query($sql);

      if($query1!==False){
		echo "<script>alert('El usuario se ha eliminado exitosamente !');window.location='usuarios.php';</script>";
		}else
		{
		echo "<script>alert('El usuario que intenta eliminar tiene registrados algunos reportes, intente más tarde ');window.location='usuarios.php';</script>";
		}
	}else{
		echo "<script>alert('No puedes eliminar el usuario actual, cambia de usuario e intenta nuevamente ');window.location='usuarios.php';</script>";

	}

    } else{ 
    	
    
    }


	 

          


