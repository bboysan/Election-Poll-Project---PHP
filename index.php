<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	
}
?>
<?php global $msg; echo $msg;?>
<html> 
<style>
h1 {text-align : center;}

</style>
<h1>Welcome</h1>
<body>This is anonline voting system</body>
</html>


