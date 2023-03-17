<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEHMET PROJE</title>
</head>
<body>
        <form action="index.php" method="post">
        Kullanıcı:<br/>
        <input type="text" name="kullanici" /><br/>
        Şifre:<br/>
        <input type="password" name="sifre" /><br/>
        <input type="submit" value="Giriş yap" />
        <br>
        <?php
            if(isset($_POST['kullanici']) && isset($_POST['sifre'])) {
            $kullanici = $_POST['kullanici'];
            $sifre = $_POST['sifre'];
            
            if(empty($kullanici) || empty($sifre)) {
                echo 'Lütfen boş bırakmayın';
            } else {
                echo 'Girilen kullanıcı adı: ' . $kullanici . ' şifre: ' . $sifre;
            }
            } else {
            echo 'Lütfen formu kullanın';
            }
        ?>
        </form>
</body>
</html>
