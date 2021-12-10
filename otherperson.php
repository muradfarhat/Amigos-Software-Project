
<?php


//connect data base
$server="localhost";
$username="root";
$password="";
$dbname="send_mail";

$conn=mysqli_connect($server,$username,$password,$dbname);

//check connection
if(!$conn){
    echo 'Connection error : ' .mysqli_error();
}
//write query for all
$sql='SELECT * from members where to_1="noorshanteer@gmail.com" OR  from_1="noorshanteer@gmail.com"';
//make query &get result
$result=mysqli_query($conn,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

//fetch result an array row
$x= mysqli_fetch_all($result,MYSQLI_ASSOC);
//free  result from memory
mysqli_free_result($result);

//close connection<form action="sent_1.php" method="post">
mysqli_close($conn);
//print_r($x);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="mail.css" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<div class="row">-->
    <!-- BEGIN INBOX -->
    <div class="col-md-12">
        <div class="grid email">
            <div class="grid-body">
                <div class="row">
                    <!-- BEGIN INBOX MENU -->
                    <div class="col-md-3">
                        <h2 class="grid-title"><i class="fa fa-inbox"></i> Inbox</h2>
                        <a href="compose.php" class="btn btn-block new-msg" data-toggle="modal" data-target="#compose-modal"><i class="fa fa-pencil"></i>&nbsp;&nbsp;NEW MESSAGE</a>

                        <hr>

                        <div>
                            <ul class="nav nav-pills nav-stacked">
                                <li class="header">Folders</li>
                                <li class="active"><a href="recieve_1.php"><i class="fa fa-inbox"></i> Inbox </a></li>


                            </ul>
                        </div>
                    </div>
                    <!-- END INBOX MENU -->

                    <!-- BEGIN INBOX CONTENT -->
                    <div class="col-md-9">

                        <div class="row">
                            <div class="col-sm-6">
                                <label style="margin-right: 8px;" class="">
                                    <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" id="check-all" class="icheck" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
                                </label>



                            </div>
                        </div>

                        <div class="padding"></div>


                        <div class="table-responsive">

                            <table class="table">
                                <td class ="name"><h3>Sender </h3></td>
                                <td class ="name"><h3>Subject </h3></td>
                                <td class ="name"><h3>Reciever </h3></td>



                                <tbody>
                                <?php foreach ($x as $x1 ){?>



                                    <tr>
                                        <td class="name" >  <?php  echo htmlspecialchars_decode($x1['from_1']);?> </td>
                                        <td class="subject" > <?php  echo htmlspecialchars_decode($x1['message_1']);?></td>
                                        <td  class="name" >  <?php  echo htmlspecialchars_decode($x1['to_1']);?></td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>












