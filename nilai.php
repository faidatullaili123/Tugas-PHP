<html>
<head>
    <title>Kategori Nilai</title>
</head>
<body>
    <form method="post" action="">
        Nama: <input type="text" name="nilai"><br><br>
        Nilai: <input type="number" name="nilai"><br><br>

        <input type="submit" value="Hitung">
    </form>
    <br>

    <?php
        if(isset($_POST['nilai'])){
            $nilai = $_POST['nilai'];
            
            switch (true) {
                case ($nilai >= 90 && $nilai <= 100):
                    $kategori = "A";
                    break;
                case ($nilai >= 80 && $nilai < 90):
                    $kategori = "B";
                    break;
                case ($nilai >= 70 && $nilai < 80):
                    $kategori = "C";
                    break;
                default:
                    $kategori = "D";
                    break;
            }

            echo "<br>Nilai Anda adalah $nilai, Anda berada  dikategori $kategori.";
        }
    ?>

</body>
</html>
