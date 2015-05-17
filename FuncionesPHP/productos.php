<?php
	include_once("bdconnect.php");
	include_once("bdaccess.php");

	function mostrarProductos()      { 
    	   $pconexion = abrirConexion();
    	   seleccionarBaseDatos($pconexion);
    
    	   $cquery = "SELECT * FROM productos ORDER BY fecha DESC";
  
    	   $lresult = mysqli_query($pconexion, $cquery); 
   
    	   if (!$lresult)    {
        	$cerror = "No fue posible recuperar la información de la base de datos.<br>";
        	$cerror .= "SQL: $cquery <br>";
        	$cerror .= "Descripción: ".mysqli_connect_error($pconexion);
        	die($cerror);
    	   } 
    	
	   else	   { 
        	if (mysqli_num_rows($lresult) > 0) {
            	   while ($adatos = mysqli_fetch_array($lresult, MYSQLI_BOTH))	{
					   
					   if($adatos["color"] == 1)	{
							echo  '<table id="PostNote">
                        		<td> <br>"' . $adatos["status"] . 
								'"<br><p id="autor"> <a href="Desktop.php?cid_user=' . $adatos["id_usuario"]. '"> ' . 
								$adatos["nombre_usuario"] . ' </a><p><br><br>f - t</td>
								</table>';                
                    	}
						
						elseif($adatos["color"] == 2)	{
							$ruta = "<img src='../themobys/Imagenes/UserPics/" . $adatos["status"] . "' height='300'/>";
							echo  '<table id="PostPhoto">
                        		<td> ' . $ruta . 
								'<br>' . $adatos["comment"] . '<p id="autor"> <a href="Desktop.php?cid_user=' . $adatos["id_usuario"]. '"> ' . 
								$adatos["nombre_usuario"] . ' </a><p></td>
								</table>';                
                    	}
						
						elseif($adatos["color"] == 3)	{
							echo  '<table id="PostVideo">
                        		<td>' . $adatos["status"] . $adatos["comment"] .
								'<br><p id="autor"> <a href="Desktop.php?cid_user=' . $adatos["id_usuario"]. '"> ' . 
								$adatos["nombre_usuario"] . ' </a><p></td>
								</table>';                
                    	}
						
						elseif($adatos["color"] == 4)	{
							echo  '<table id="PostInvite">
                        		<td> "' . $adatos["status"] . 
								'"<br><p id="autor"> <a href="Desktop.php?cid_user=' . $adatos["id_usuario"]. '"> ' . 
								$adatos["nombre_usuario"] . ' </a><p></td>
								</table>';                
                    	}            
				   	}
              }

                else  {
                    "No aparecen resultados. Intenta más tarde";
                }   
 	  }   
 
    mysqli_free_result($lresult);  
    cerrarConexion($pconexion); 
}

//+++++++++++++++++++++++++++++++++ NOTAS ++++++++++++++++++++++++++++++++++++

function actualizarStatusNote($id,$nom)	{
	
	$cmensaje = "";
 		if ( isset($_POST["btn_grabarNote"]) && $_POST["btn_grabarNote"] == "GrabarNote")	{
	 
			$url = 'theMobys.php';
			echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
			
		   	$noteStatus = $_POST["note_stat"];
		   
		   	$pconexion = abrirConexion();
		   	seleccionarBaseDatos($pconexion);
		   
		   	$cquery = "SELECT status FROM userstatus";
		   	$cquery .= " WHERE status = '$noteStatus'";
		   
			$cquery = "UPDATE userstatus SET ";
			$cquery .= "nombre_usuario = '$nom', status = '$noteStatus', color = 1 ";
			$cquery .= "WHERE id_usuario = $id";
	   
	   		if (insertarDatos($pconexion, $cquery) )	{
	     		$cmensaje = "Compartiendo nota...";
	   		}
	   		
			else	{
	     		$cmensaje = "No fue posible compartir la nota.";	 
           }
		    
   cerrarConexion($pconexion);
    
 }

 return $cmensaje;
}

//+++++++++++++++++++++++++++++++++ FOTOS ++++++++++++++++++++++++++++++++++++

function actualizarStatusPhoto($id,$nom)	{
 	
	if ( isset($_POST["btn_grabarPhoto"]) && $_POST["btn_grabarPhoto"] == "Subir Foto")	{
	
		$url = 'theMobys.php';
   		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
		
		$comment = $_POST["commentP"];
	
		if ($_FILES["photo_stat"]["error"] > 0)	{
			echo "ha ocurrido un error";
		}
	
		else {
	
			$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
			$limite_kb = 1000;
	
				if (in_array($_FILES['photo_stat']['type'], $permitidos) && $_FILES['photo_stat']['size'] <= $limite_kb * 1024)	{
					$ruta = "../themobys/Imagenes/UserPics/" . $_FILES['photo_stat']['name'];
				
						if (!file_exists($ruta))	{
							$resultado = @move_uploaded_file($_FILES['photo_stat']["tmp_name"], $ruta);
						
								if ($resultado)	{
									$nombre = $_FILES['photo_stat']['name'];
									@mysql_query("UPDATE userstatus SET nombre_usuario = '$nom', status = '$nombre', color = 2, comment = '$comment' WHERE id_usuario = $id") ;
									
								}
						}
					
				else	{
					echo $_FILES['photo_stat']['name'] . ", este archivo existe";
				}
			}
			
			else	{
				echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
			}
		}	 
 	}
}

//+++++++++++++++++++++++++++++++++ VIDEOS ++++++++++++++++++++++++++++++++++++

function actualizarStatusVideo($id,$nom)	{
	
 	$cmensaje = "";
 		if ( isset($_POST["btn_grabarVideo"]) && $_POST["btn_grabarVideo"] == "GrabarVideo")	{
	 
			$url = 'theMobys.php';
			echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
			
			$principioRuta = '<iframe width="420" height="315" src="//www.youtube.com/embed/';
			$finalRuta = '" frameborder="0" allowfullscreen></iframe>';
			
			$commentV = $_POST["commentV"];
			
		   	$noteStatus = $_POST["video_stat"];			
			$noteStatus = stristr($noteStatus, '=');			
			$noteStatus = str_replace("=","",$noteStatus);
			
			$noteStatus = $principioRuta . $noteStatus . $finalRuta;
			
		   	$pconexion = abrirConexion();
		   	seleccionarBaseDatos($pconexion);
		   
		   	$cquery = "SELECT status FROM userstatus";
		   	$cquery .= " WHERE status = '$noteStatus'";
		   
		   	$cquery = "UPDATE userstatus SET ";
			$cquery .= "nombre_usuario = '$nom', status = '$noteStatus', color = 3, comment = '$commentV' ";
	   		$cquery .= "WHERE id_usuario = $id";
	   
	   		if (insertarDatos($pconexion, $cquery) )	{
	     		$cmensaje = "Compartiendo nota...";
	   		}
	   		else	{
	     		$cmensaje = "No fue posible compartir la nota.";	 
           }
		    
   	cerrarConexion($pconexion);
    
}

 return $cmensaje;
}

//+++++++++++++++++++++++++++++++++ INVITACIONES ++++++++++++++++++++++++++++++++++++

function actualizarStatusInvite($id,$nom)	{
	
 	$cmensaje = "";
 		if ( isset($_POST["btn_grabarInvite"]) && $_POST["btn_grabarInvite"] == "GrabarInvite")	{
	 
		$url = 'theMobys.php';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
 	
	   	$noteStatus = $_POST["invite_stat"];
	   
	   	$pconexion = abrirConexion();
	   	seleccionarBaseDatos($pconexion);
	   
	   	$cquery = "SELECT status FROM userstatus";
	   	$cquery .= " WHERE status = '$noteStatus'";
	   
   		$cquery = "UPDATE userstatus SET ";
	   	$cquery .= "nombre_usuario = '$nom', status = '$noteStatus', color = 4 ";
	   	$cquery .= "WHERE id_usuario = $id";
	   
	   	if (insertarDatos($pconexion, $cquery) )	{
	     	$cmensaje = "Compartiendo nota...";
	   }
	   else	{
	    	$cmensaje = "No fue posible compartir la nota.";	 
      	}
		    
   		cerrarConexion($pconexion);
    
 	}

 	return $cmensaje;
}

?>