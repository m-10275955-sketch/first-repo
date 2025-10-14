
<?php
    include('config.php');
?>

<html>
    <head>
        <title>MAKLUMAT PELAJAR</title>
    </head>
    <style>
        h2{
            text-align:center;
            padding-top: 20px;
        }
        body{
            background-color: #08abb1;
            font-family: Arial, Helvetica, sans-serif;
        }
        button{
            cursor: pointer;
            background-color: aqua;
            padding: 5px 10px 5px 10px;
            border-radius: 15px;
            padding: 7px 9px 7px 9px;

        }
        button:hover{
            background-color: rgb(0, 83, 83);
            transition-delay: 0.15s;
        }
        tr th{
            padding-right: 20px;
            padding-left: 20px;
        }
    </style>

    <body>
    <h2>REKOD MAKLUMAT PELAJAR</h2>
    <center>
        <table border="1" cellpadding=5 cellspacing=0 bgcolor=white>
            <tr>
                <th>NO MATRIK</th>
                <th>NAMA PELAJAR</th>
                <th>NO IC</th>
                <th>PROGRAM</th>
                <th>EMAIL</th>
                <th>CATATAN</th>
                <th>PADAM</th>

            </tr>

<?php
$papar=mysqli_query($connect, 'SELECT * FROM maklumat');
while($row=mysqli_fetch_array($papar)){

    echo"
    <tr>
    <td align='center'>".$row['no_matrik']."</td>
    <td align='center'>".$row['nama_pelajar']."</td>
    <td align='center'>".$row['no_ic']."</td>
    <td align='center'>".$row['program']."</td>
    <td align='center'>".$row['email']."</td>
    <td align='center'>".$row['catatan']."</td>
    <td align='center'><a href='padam.php?no_matrik=$row[no_matrik]'>Padam</a></td>
    </tr>
    ";
}
?>

        </table>
        <p><a href="tambah.php"><button name='tambah' type="submit">&#43;
    </center>
    </body>
</html>