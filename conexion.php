<?php
$varConexion=mysqli_connect('localhost','root','','bd_deportes');
if($varConexion->connect_error){
    echo "error de conexion";
}

/*if($result=mysqli_query($varConexion,"SELECT * FROM categorias")){
    $e=array();
    while ($row=$result->fetch_array(MYSQLI_NUM)){
    ?>
    <li><a class="dropdown-item" href="<?php echo $row[2]?>"><?php echo $row[1]?></a></li>
<?php 
}
array_push($array,$e);
}*/
?>