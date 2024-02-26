<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="12.css">
</head>
<body>
    <form id="form" action="" method="post" >
        <table>
            
            <tr id="tieude">
                <td >
                <h3>Đăng Kí Thời Khóa Biểu</h3>

                </td>
            </tr>
            <tr>
                <td>
                    <label for="giangduong">Giảng Đường</label>
                </td>
                <td>
                    <select name="giangduong[]" id="giangduong">
                        <option value="GĐ 501">GĐ 501</option>
                        <option value="GĐ 502">GĐ 502</option>
                        <option value="GĐ 503">GĐ 503</option>
                        <option value="GĐ 504">GĐ 504</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                      <label for="tengiaovien">Tên Giáo Viên</label>
                </td>   
                <td>
                    <input type="text" id="tengiaovien" name="tengiaovien">
                </td>
            </tr>
            <tr>
                <td>
                <label for="monday">Môn Dạy: </label>
                </td>
                <td>
                    <select name="mon[]" id="monday">
                        <option value="Linux" >Linux</option>
                        <option value="Window" >Window</option>
                        <option value="MacOS" >MacOS</option>
                    </select>
                </td>
            </tr>
            <tr>
               <td>
               <input type="submit" value="Đăng Kí" name="txtdangki">
               </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
if(isset($_POST["txtdangki"])){
    foreach($_POST["giangduong"] as $_giangduong){
        foreach($_POST["mon"] as $_mon){
            echo"Giảng Đường: ".$_giangduong."- Tên Giáo Viên: ".$_POST["tengiaovien"]."- Môn Dạy: ".$_mon ."<br>";

        }
    }
}
include("control.php");
$get_data = new data();
if(isset($_POST["txtdangki"])){
    foreach($_POST["giangduong"] as $_giangduong){
        foreach($_POST["mon"] as $_mon){
            $in_gd = $get_data ->insert_gd($_POST["tengiaovien"],$_giangduong,$_mon);
            if($in_gd){

                echo "<script> alert('ban da dang ki thanh cong');
                    window.location='select_gd.php'</script>";
                echo "<script> alert('thanh cong');</script>";
            }
            else
            echo "false";
        }
    }
   
}

?>
