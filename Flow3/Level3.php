<!DOCTYPE html>
<html>
<head>
    <title>Mencari Sisi Segitiga</title>
</head>
<body>
    <center>
    <h2>Masukkan panjang sisi segitiga</h2>
    <form action="Level3proses.php" method="post">
        Sisi 1: <input type="text" name="sisi1"><br>
        Sisi 2: <input type="text" name="sisi2"><br>
        Sisi 3: <input type="text" name="sisi3"><br>
        <input type="submit" name="submit" value="Periksa">
    </form>
    <?php
if(isset($_POST['submit'])) {
    $sisi1 = $_POST['sisi1'];
    $sisi2 = $_POST['sisi2'];
    $sisi3 = $_POST['sisi3'];


    if ($sisi1 == $sisi2 && $sisi2 == $sisi3) {
        echo "Segitiga ini memiliki sisi SAMA SISI.";
    } elseif ($sisi1 == $sisi2 || $sisi1 == $sisi3 || $sisi2 == $sisi3) {
        echo "Segitiga ini memiliki sisi SAMA KAKI.";
    } else {
        echo "Segitiga ini memiliki sisi SEMBARANG.";
    }
}

?>
</center>
</body>
</html>

