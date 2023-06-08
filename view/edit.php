<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include '../model/Database.php';
        $db = new Database;
        $id = $_GET['id'];
    ?>
    <div>
    <?php foreach ($db->get_byID($id) as $show) { ?>
        <form action="../controller/proses.php?act=update" method="post">
            <input type="hidden" name="id" value="<?php echo $show["id"];?>">
            <label for="name">Nama: <input type="text" id="name" name="nama" value="<?php echo $show["nama"];?>"></label><br/>
            <label for="age">Umur: <input type="number" name="umur" id="age" value="<?php echo $show["umur"];?>"></label><br/>
            <label for="submit"><input type="submit" value="Edit Kontak" id="submit"></label>
        </form>
    <?php } ?>
    </div>
    <a href="../"><<<-back</a>
</body>
</html>