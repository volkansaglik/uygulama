<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Personel Ekleme Ssyfası</h3>

    <form action="<?php echo base_url('personel/insert'); ?>" method="post">
        <label>Title Gir</label><br>
        <input type="text" name="title"><br><br>
        <label>Açıklama Gir</label><br>
        <textarea name="detail"></textarea><br><br>
        <a href="<?php echo base_url("personel"); ?>"> [Anasayfa]</a>
        ---- <button type="submit"> Ekle</button>
    </form>


</body>
</html>