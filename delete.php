<?php
    include("control.php");
    $get_data = new data();
    $del = $get_data ->delete_gd($_GET['del']);
    if($_GET['del']) echo "<script> alert('ban da xoa thanh cong');
                    window.location='select_gd.php'</script>";
    else echo "<script>alert('ban hong sxoa duoc')</script>";
?>