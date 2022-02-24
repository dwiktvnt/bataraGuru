<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Mengahitung Gaji</h1>
    <form action="" method="POST">
        <label for="nama">Nama karyawan:</label><br>
        <input type="text" id="nama" name="nama"><br>

        <!-- Form Gaji -->
        <label for="gaji">Gaji karyawan:</label><br>
        <input type="number" id="gaji" name="gaji"><br>

        <!-- Form Regional -->
        <p>Regional</p>
        <select name="reg">
            <option value="jkt">Jakarta</option>
            <option value="bdg">Bandung</option>
            <option value="lain">Lainnya</option>
        </select><br>

        <!-- Form Level Jabatan -->
        <p>Jabatan</p>
        <select name="jbt">
            <option value="manager">Manager</option>
            <option value="ass_manager">Ass. Manager</option>
            <option value="sen_Manager">Senior Manager</option>
            <option value="mid_manager">Middle Manager</option>
            <option value="jun_manager">Junior Manager</option>
        </select><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    $gaji = $_POST['gaji'];
    $jbt = $_POST['jbt'];
    $reg = $_POST['reg'];

    //Tunjangan Gaji
    if ($gaji > 15000000) {
        $gajit = $gaji * 10 / 100;
    } elseif ($gaji > 10000000) {
        $gajit = $gaji * 12 / 100;
    } else {
        $gajit = $gaji * 15 / 100;
    };
    $totalGaji = $gaji + $gajit;

    //Potongan Regional
    if ($reg = "jkt") {
        $gajiReg = $totalGaji - 2.5 / 100;
    } elseif ($reg = "bdg") {
        $gajiReg = $totalGaji - 2 / 100;
    } else {
        $gajiReg = $totalGaji - 1.8 / 100;
    };

    // //Bonus Jabatan
    if ($jbt = "manager") {
        $gajiTotal = $gajiReg + 250000;
    } elseif ($jbt = "ass_manager") {
        $gajiTotal = $gajiReg + 175000;
    } elseif ($jbt = "sen_manager") {
        $gajiTotal = $gajiReg + 150000;
    } elseif ($jbt = "mid_manager") {
        $gajiTotal = $gajiReg + 125000;
    } else {
        $gajiTotal = $gajiReg + 100000;
    }




    echo "gaji : " . $gaji . "<br>";
    echo "Tunjangan : " . $gajit . "<br>";
    echo "Total Gaji dan Tunjangan Gaji : " . $totalGaji . "<br>";
    echo "Total Gaji dan Tunjangan Regional : " . round($gajiReg, 2) . "<br>";
    echo "Total Gaji yang Didapat : " . round($gajiTotal, 2);
    // if ($gaji > 15000000) {
    //     $gajit = $gaji * 10 / 100;
    // } elseif ($gaji > 10000000) {
    //     $gajit = $gaji * 12 / 100;
    // } else {
    //     $gajit = $gaji * 15 / 100;
    // };

    // if ($reg = "")
    ?>
</body>

</html>
<?php
