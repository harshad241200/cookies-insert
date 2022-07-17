<?php

class Blog{

    function saveToDb($u,$p){

    $conn = mysqli_connect("localhost","root","","project");

    $sql = "INSERT INTO cookiedata(username,password)VALUES('$u','$p')";
    
    if($conn->query($sql)){
        return "succesfully inserted";
    }
    return "Insertion failed";
}
static function getAllBlogs(){
    $conn = mysqli_connect("localhost","root","","project");
    $sql = "SELECT * FROM cookiedata";
    $results = $conn->query($sql);
    $arr = [];
    if ($results->num_rows >0){
        while($row = mysqli_fetch_assoc($results)){
            array_push($arr,$row);
        }
    }
    return $arr;
}



static function getSingleBlog($id){

    $conn = mysqli_connect("localhost","root","","project");
    $sql = "SELECT * FROM cookiedata WHERE id=$id";
    $results = $conn->query($sql);
    if ($results->num_rows >0){
        $blog = mysqli_fetch_assoc($results);
        return $blog;
        }
        else{
            return null;
        }    
}
}
?>