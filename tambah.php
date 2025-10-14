<html>
    <head>
        <title>Rekod Maklumat Pelajar</title>
</head>

<style>
    h2 {
        Text-align: center;
        padding-top: 20px;
    }
    body {
        background-color: #7FFFD4
    }
</style>
<body>
    <center>
        <h2>Borang Rekod Maklumat Pelajar</h2>

        <table border=0 cellpadding=5 cellspacing=1 bgcolor=white style="padding-20px;
        border-top:1px solid black; border-left:2px solid black; border-right:2px
        solid black; border bottom:1px solid black; border-radius:10px">

        <form action="" method="post">
            <tr>
                <td>No Matrik</td><td>:</td><td> <input type="text" name="no_matrik" required><br><br><td>
</tr>
<tr>
    <td>Nama Pelajar</td><td>:</td><td> <input type="text" name="nama_pelajar" required><br><br><td>
</tr>
<tr>
    <td>No IC</td><td>:</td><td> <input type="text" name="no_ic" required><br><br><td>
</tr>
<tr>
    <td>Program</td><td>:</td><td> <input type="text" name="program" required><br><br><td>
</tr>
<tr>
    <td>Email</td><td>:</td><td> <input type="text" name="email" required><br><br><td>
</tr>
<tr>
    <td>Catatan</td><td>:</td><td> <input type="text" name="catatan" required><br><br><td>

<td colspan=3><center><input type="Submit" name="hantar" value="hantar"><br><br><td>
</tr>
</table>
</body>

<?php
include('config.php');
if (isset($_POST['hantar'])){
    $no_matrik=$_POST['no_matrik'];
    $nama_pelajar=$_POST['nama_pelajar'];
    $no_ic=$_POST['no_ic'];
    $program=$_POST['program'];
    $email=$_POST['email'];
    $catatan=$_POST['catatan'];

    $edit=mysqli_query($connect, "INSERT INTO maklumat SET  nama_pelajar='$nama_pelajar', no_ic='$no_ic', program='$program', email='$email', catatan='$catatan', no_matrik='$no_matrik'");

    header('location:index.php');
}
?>
</html>


