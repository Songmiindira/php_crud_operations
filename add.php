
<?php  include 'db.php';

if(isset($_POST['send'])){
	$name = $_POST['task']; 

	$sql="insert into task (name) values ('$name')";
	$val = $db->query($sql);
	if ($val) {
		#echo "<h1> inserted </h1>";
		header('location:index.php');
	}
}
?>