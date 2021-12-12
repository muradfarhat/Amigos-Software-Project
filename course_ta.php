<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "happy_grades";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT slides FROM web";
$result = $conn->query($sql);

$sql2 = "SELECT video FROM web";
$result2 = $conn->query($sql2);

$sql3 = "SELECT assignments, file, d_line FROM web_assignment";
$result3 = $conn->query($sql3);

$sql4 = "SELECT student, hw,grade FROM web_student";
$result4 = $conn->query($sql4);

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="CSS/stylecourse.css">




    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="header">
    <h1> Web programing </h1>
    <h3>Dr.sufyan abu samra</h3>
    <p>10636316/3070 </p>
</div>

<div class="navbar" >
    <a href="dashboard.html" class="active">Home</a>
    <a href="#" class="right">Course Group</a>
</div>




<div class="row">
    <div class="side">

        <form action="course_ta.php" method="post">
            <table style="border: 3px solid #0c4128;width: 100%">
                <?php
                if ($result4->num_rows > 0) {
                    while($row = $result4->fetch_assoc()) {
                        ?>
                        <tr style="border: 3px solid #0c4128">
                            <td style="padding: 20px;margin-right: 20px"><?php echo $row['student']; ?></td>
                            <td style="padding: 20px;margin-right: 20px"><i class="fa fa-tasks" style="font-size:20px;color:rgb(67, 128, 75);margin-right: 5px;"></i> <?php echo $row['hw']; ?></td>
                            <td style="padding: 20px;"><input type="text" placeholder="Grade" name="grade"></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
            <button style="padding: 10px 30px; color: white;background-color: #0c4128;border-radius: 15px;margin-top: 10px">Submit</button>
        </form>
    </div>

 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="JS/course.js"></script>
</body>
</html>
