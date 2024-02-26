<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("control.php");
        $get_data = new data();
        $select_giangduong = $get_data ->select_gd();
    ?>
    <table border="1" align="center">
        <caption>Danh Sach Dang Ki Giang Duong</caption>
        <center> <a href="/521100B/btvn27_12.php"></a></center>
        <tr>
        <th>Giang Duong</th>
        <th>Giao Vien</th>
        <th>Mon Day</th>
        </tr>
        <?php
            foreach($select_giangduong as $i){

            
        ?>
        <tr>
            <th>
                <?php
                    echo $i["giaovien"];
                ?>
            </th>
            <th>
                <?php
                    echo $i["giangduong"];
                ?>
            </th>
            <th>
                <?php
                    echo $i["monday"];
                ?>
            </th>
            <td><a href="delete.php?del=<?php echo $i['id'] ?>">Delete</a></td>
            <td><a href="update_gd.php?up=<?php echo $i['id'] ?>"> Update</a></td>   
            o
        </tr>
         <?php } ?>   
    </table>
</body>
</html>