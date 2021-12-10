<?php
$server="localhost";
$username="root";
$password="";
$dbname="send_mail";

$conn=mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['send'])){

    if( !empty($_POST['from_1']) && !empty($_POST['to_1']) && !empty($_POST['message']) ) {

        $from_person = $_POST['from_1'];
        $to_person = $_POST['to_1'];
        $message=$_POST['message'];




        $query = "insert into members(from_1,to_1,message_1) values('$from_person', '$to_person', '$message')";
        $run = mysqli_query($conn, $query) or die (mysqli_error($conn));
        if ($run)
            include("recieve_1.php");
          //  include("otherperson.php");

      //  echo "success";
        else
            echo "invalid ";


    } else
        echo "all field required ";
}
