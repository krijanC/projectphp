<?php
$server = "localhost";
$username= "root";
$password= "";
$dbname ="user";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])){

    if(!empty($_POST['name'])  && !empty($_POST['address'])  && !empty($_POST['doctor'])  && !empty($_POST['phone'])){

        $name =$_POST['name'];
        $address =$_POST['address'];
        $doctor =$_POST['doctor'];
        $phone =$_POST['phone'];


        $query = "insert into login(name,address,doctor,phone) values('$name' ,'$address' ,'$doctor','$phone')";
        $run = mysqli_connect($conn,$query) or die(mysqli_error());

        if($run){

            echo "Submitted sucessfully";
        }
        else{
            echo "Unsucessful";

        }
    }
    else{

        echo"all field are required";
    }
}
?>