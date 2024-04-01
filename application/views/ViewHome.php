<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Web Calculator</title>
</head>
<body>
    <h1>Selamat Datang </h1>
    <p>Daftar Operasi</p>
    <ul>
    <?php foreach($ops_list as $opss){ ?>
        <li><a href=<?='operation/80/80/' . $opss?>><?=$opss?></a></li>
    <?php }?>
        <li><a href="test">test</a></li>
    </ul>
</body>
</html>