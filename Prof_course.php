<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "happy_grades";

<<<<<<< HEAD
$slide = '';
$video = '';
$hw = '';
$weight = '';
$grade = '';
$date = '';

=======
>>>>>>> e2d8fee37abde8d29500e1ef8d4d528c8b002b5a
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
<<<<<<< HEAD
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['slideContent']) && $_POST['slideContent'] != '') {
        $slide = $_POST['slideContent'];
        $str = 'insert into web (slides) values ("'. $slide .'")';
        $result = $conn->query($str);
    }
    else if (isset($_POST['videoFile']) && $_POST['videoFile'] != '') {
        $video = $_POST['videoFile'];
        $str1 = 'insert into web_video (video) values ("'. $video .'")';
        $result = $conn->query($str1);
    }
    else if (isset($_POST['hw']) && $_POST['hw'] != '') {
        $hw = $_POST['hw'];
        $grade = $_POST['grade'];
        $weight = $_POST['weight'];
        $date = $_POST['line'];
        $str2 = "insert into web_assignment (assignments , d_line, weight, grade) values ('". $hw."','".$date."','".$weight."','".$grade."')";
        $result = $conn->query($str2);
    }
}
=======
>>>>>>> e2d8fee37abde8d29500e1ef8d4d528c8b002b5a

$sql = "SELECT slides FROM web";
$result = $conn->query($sql);

<<<<<<< HEAD
$sql2 = "SELECT video FROM web_video";
$result2 = $conn->query($sql2);

$sql3 = "SELECT assignments, d_line, weight,grade FROM web_assignment";
$result3 = $conn->query($sql3);

$sql4 = "SELECT student, hw,grade FROM web_student";
$result4 = $conn->query($sql4);
=======
$sql2 = "SELECT video FROM web";
$result2 = $conn->query($sql2);

$sql3 = "SELECT assignments, file, d_line FROM web_assignment";
$result3 = $conn->query($sql3);
>>>>>>> e2d8fee37abde8d29500e1ef8d4d528c8b002b5a
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
        <h2>In General</h2>
        <!--<h5>Photo of me:</h5>-->
        <div class="fakeimg" style="height:200px; color: black; font-weight: bold; background-color: rgb(224, 224, 224);">Every Web Developer must have a basic understanding of HTML, CSS, and JavaScript.

            Responsive Web Design is used in all types of modern web development.

            ECMAScript 5 (JavaScript 5) is supported in all modern browsers. Take a good look at it, especially the new array functions</div>

        <h3 id ="foo1">Slides</h3>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                ?>
                <div class="fakeimg chapter" style="height:60px;background-color: rgb(224, 224, 224);"><i class="fa fa-file-pdf-o" style="font-size:20px;color:rgb(67, 128, 75);margin-right: 5px;"></i><a href="https://www.youtube.com/watch?v=1-UV_ufeprg"><?php echo $row['slides']; ?></a> </div><br>
                <?php
            }
        }
        ?>

<<<<<<< HEAD
        <form action="Prof_course.php" method="post">
            <input type="file" style="padding: 10px; color: black;" name="slideContent">
            <button onclick="addSlide()" style="padding: 10px; color: white; background-color: #0c4128">Add Slide</button>
            <span></span>
        </form>
=======
        <input type="file" style="padding: 10px; color: white; background-color: #0c4128">
        <button onclick="addSlide()" style="padding: 10px; color: white; background-color: #0c4128">Add Slide</button>
        <span></span>
>>>>>>> e2d8fee37abde8d29500e1ef8d4d528c8b002b5a

    </div>



    <div class="main">
        <h2 id ="foo3">Video Lectures</h2>
        <?php
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                ?>
                <p> <div class="fakeimg chapter" style="height:60px;background-color: rgb(224, 224, 224);"><i class="fa fa-youtube-play" style="font-size:20px;color:rgb(67, 128, 75);margin-right: 5px;"></i><a href="https://www.youtube.com/watch?v=1-UV_ufeprg"><?php echo $row['video'] ?></a> </div> </p>

                <?php
            }
        }
        ?>

<<<<<<< HEAD
        <form action="Prof_course.php" method="post">
            <input type="file" style="padding: 10px; color: black;" name="videoFile">
            <button onclick="addSlide()" style="padding: 10px; color: white; background-color: #0c4128">Add Video</button>
            <span></span>
        </form>

        <hr>

=======
        <input type="file" style="padding: 10px; color: white; background-color: #0c4128">
        <button onclick="addSlide()" style="padding: 10px; color: white; background-color: #0c4128">Add Video</button>
        <span></span>

>>>>>>> e2d8fee37abde8d29500e1ef8d4d528c8b002b5a
        <h2 id ="foo4">Assigments</h2>
        <h5></h5>



        <div class="center">
            <?php
            if ($result3->num_rows > 0) {
            while($row = $result3->fetch_assoc()) {
            ?>
            <input type="checkbox" id="show">
            <label for="show" class="fakeimg chapter" style="margin-bottom: 20px;background-color: rgb(224, 224, 224);"><i class="fa fa-tasks" style="font-size:20px;color:rgb(67, 128, 75);margin-right: 5px;"></i><?php echo $row['assignments']; ?></label>
            <div class="container">

                <label for="show" class="close-btn fa fa-times"></label>
                <div class="text"><?php echo $row['assignments']; ?></div>
                <form action="#" style="margin-top: 50px;">
                    <div class="data">
                        <!-- <label>Email</label>
                        <input type="text" placeholder="Email" required> -->
                        <span style="font-size: 16px;font-weight: bold;width: 150px;">File : </span>
<<<<<<< HEAD
                        <span style="font-size: 16px;font-weight: bold;margin-left: 50px;"><?php echo $row['assignments']; ?></span>
=======
                        <span style="font-size: 16px;font-weight: bold;margin-left: 50px;"><?php echo $row['file']; ?></span>
>>>>>>> e2d8fee37abde8d29500e1ef8d4d528c8b002b5a
                        <hr>
                    </div>
                    <div class="data">
                        <!-- <label>Email</label>
                        <input type="text" placeholder="Email" required> -->
<<<<<<< HEAD
                        <span style="font-size: 16px;font-weight: bold;width: 150px;">Grade : </span>
                        <span style="font-size: 16px;font-weight: bold;margin-left: 50px;"><?php echo $row['grade']; ?></span>
=======
                        <span style="font-size: 16px;font-weight: bold; width: 150px;">Deadline : </span>
                        <span style="font-size: 16px;font-weight: bold;margin-left: 50px;"><?php echo $row['d_line']; ?></span>
>>>>>>> e2d8fee37abde8d29500e1ef8d4d528c8b002b5a
                        <hr>
                    </div>
                    <div class="data">
                        <!-- <label>Email</label>
                        <input type="text" placeholder="Email" required> -->
<<<<<<< HEAD
                        <span style="font-size: 16px;font-weight: bold;width: 150px;">weight : </span>
                        <span style="font-size: 16px;font-weight: bold;margin-left: 50px;"><?php echo $row['weight']; ?></span>
                        <hr>
                    </div>
                    <div class="data">
                        <!-- <label>Email</label>
                        <input type="text" placeholder="Email" required> -->
                        <span style="font-size: 16px;font-weight: bold; width: 150px;">Deadline : </span>
                        <span style="font-size: 16px;font-weight: bold;margin-left: 50px;"><?php echo $row['d_line']; ?></span>
                        <hr>
                    </div>

=======
                        <span style="font-size: 16px;font-weight: bold;width: 150px;">Uploded file : </span>
                        <span style="font-size: 16px;font-weight: bold;margin-left: 50px;">--</span>
                        <hr>
                    </div>
                    <div class="btn" style="margin-left: 160px;">
                        <div class="inner"></div>
                        <button type="submit">Edit</button>
                    </div>
                    <div class="btn" style="margin-left: 50px;">
                        <div class="inner"></div>
                        <button type="submit">Upload</button>
                    </div>
>>>>>>> e2d8fee37abde8d29500e1ef8d4d528c8b002b5a
                </form>
            </div>
    <?php
    }
    }
    ?>
<<<<<<< HEAD
            <form action="Prof_course.php" method="post">
                <input style="margin-bottom: 5px; padding: 5px;" type="text" placeholder="Assignment Weight" name="weight"><br>
                <input style="margin-bottom: 5px; padding: 5px;" type="text" placeholder="Assignment Grade" name="grade"><br>
                <input style="margin-bottom: 5px; padding: 5px;" type="date" placeholder="Assignment Grade" name="line"><br>
                <input type="file" style="padding: 10px; color: black;" name="hw">
                <button style="padding: 10px; color: white; background-color: #0c4128">Add Assignment</button>
                <span></span>
            </form>
=======
            <input type="file" style="padding: 10px; color: white; background-color: #0c4128">
            <button onclick="addSlide()" style="padding: 10px; color: white; background-color: #0c4128">Add Assignment</button>
            <span></span>
>>>>>>> e2d8fee37abde8d29500e1ef8d4d528c8b002b5a
        </div>
    </div>
</div>


<!-- <div class="center">
    <input type="checkbox" id="show">
    <label for="show" class="show-btn">View Form</label>
    <div class="container">
        <label for="show" class="close-btn fa fa-times"></label>
        <div class="text">Assignment Part 1</div>
        <form action="#">
            <div class="data">
                <label>Email</label>
                <input type="text" placeholder="Email" required>
            </div>
            <div class="data">
                <label>Password</label>
                <input type="text" placeholder="Password" required>
            </div>
            <div class="btn">
                <div class="inner"></div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</div> -->

<<<<<<< HEAD
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
                            <td style="padding: 20px;"><?php echo $row['grade']; ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
            <button style="padding: 10px 30px; color: white;background-color: #0c4128;border-radius: 15px;margin-top: 10px">Submit</button>
        </form>
    </div>
=======

>>>>>>> e2d8fee37abde8d29500e1ef8d4d528c8b002b5a
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="JS/course.js"></script>
</body>
</html>
