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
    <h3>Personel Listesi</h3>
    <a href="<?php echo base_url("personel/insertPage"); ?>">[Kayıt Ekle]</a><br><br>
    <table border="1">
        <thead>
            <th>id</th>
            <th>Ad Soyad</th>
            <th>Açıklama</th>
            <th>İşlemler</th>
        </thead>
        <tbody>
            <?php foreach ($rows as $row) { ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->title; ?></td>
                <td><?php echo $row->detail; ?></td>
                <td>
                    <a href="">[Düzenle]</a>
                    <a href="">[Sil]</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>


</body>
</html>