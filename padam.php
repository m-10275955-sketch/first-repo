<?php
include("config.php");
$no_matrik=$_GET['no_matrik'];

$row=mysqli_query($connect,"DELETE FROM maklumat WHERE no_matrik=$no_matrik");
echo "<script>alert('HAPUS MAKLUMAT BERJAYA');"
."window.location='index.php'</script>";

?>