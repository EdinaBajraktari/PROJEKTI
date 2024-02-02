<?php
require_once('newsclass.php');
$dhenat=new Lajmet();
$all=$dhenat->lexoDhenat();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href ="css/displayStyle.css" />
<title>Shfaq dhenat</title>
</head>
<body>
<div id="a1">
<header>
<h3>Ju lutem shtype per te regjistruar te dhenat ne Sistem</h3>
<a href="insert.php"><Button id='r'>Regjistrohu</Button></a>
</header>
<table>
<hr>
<p>Lista e te dhenave:</p>
<tr>
<th>Titulli</th>
<th>Permbajtja</th>
<th>Departamenti</th>
<th>Fotografia</th>
<th>Action</th>
</tr>
<tr>
<?php
foreach($all as $key=>$value){
?>
<td><?php echo $value['titulli']?></td>
<td><?php echo $value['permbajtja']?></td>
<td><?=$value['data_e_publikimit']?></td>
<td><?=$value['fotografia']?></td>
<td id='de'><a href="delete.php?id=<?php echo $value['id']?>"><button id="d">DELETE</button></a>
<a href="edit.php?id=<?php echo $value['id']?>"><button id='e'>EDIT</button></td></a>
</tr>
<?php
}
?>
</table>
</div>
</body>
</html>
