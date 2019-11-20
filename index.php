<!DOCTYPE html>
<html>
<head>
    <title>Membuat Kalkulator Sederhana Dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php 
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1+$bil2;
            break;
            case 'kurang':
                $hasil = $bil1-$bil2;
            break;
            case 'kali':
                $hasil = $bil1*$bil2;
            break;
            case 'bagi':
                $hasil = $bil1/$bil2;
            break;          
        }
    }
    ?>
    <div class="kalkulator">
        <h2 class="judul" style="color: black">KALKULATOR</h2>
        <form method="post" action="index.php">         
            <input type="number" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
            <input type="number" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol">                                           
        </form>
        <?php if(isset($_POST['hitung'])){ ?>
            <input type="number" value="<?php echo $hasil; ?>" class="bil">
        <?php }else{ ?>
            <input type="number" value="0" class="bil">
        <?php } ?>          
    </div>
</body>
</html>