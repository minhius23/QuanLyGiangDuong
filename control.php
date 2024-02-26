<?php
    include("database.php");
    class data{
    
    function insert_gd($tengv, $tengd, $tenmd){
        global $conn;
        $sql = "insert into giangduong(giaovien,giangduong,monday) values('$tengv','$tengd','$tenmd')";
        $run = mysqli_query($conn,$sql);     
        return $run;   
    }

    function select_gd(){
        global $conn;
        $sql ="select * from giangduong";
        $run = mysqli_query($conn,$sql);
        return $run;
    }
    
    
    function delete_gd($id){
        global $conn;
        $sql = "delete from giangduong where id = {$id}";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    function update_gd($id,$tengv){
        global $conn;
        $sql = "update giangduong set giaovien = {$tengv} where id = {$id}";
        $run = mysqli_query($conn,$sql);
        return $run;
    }

   
   }
   class user{
    function select_user(){

    }
   }
?>