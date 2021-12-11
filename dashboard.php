<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

        <meta charset="UTF-8">
        <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
        <link rel="stylesheet" href="CSS/dashstyle.css"">
        <!-- Boxicons CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {

            width: 100%;
            /* height: 100vh; */
            background-color: #fafbfc;
            color: #eee;
            display: flex;
            justify-content: right;
            align-items: flex-start;
            top:1000px;

        }


        .calendar {
            width: 23rem;
            height: 19rem;

            background-color: #537e5a;
            box-shadow: 0 0.5rem 3rem rgba(34, 3, 3, 0.4);
        }

        .month {
            width: 100%;
            height: 5rem;
            background-color: #021500;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
            text-align: center;
            text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
        }

        .month i {
            font-size: 1rem;
            cursor: pointer;
        }

        .month h1 {
            font-size: 2rem;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 0.2rem;
            margin-bottom: 1rem;
        }

        .month p {
            font-size: 1rem;
        }

        .weekdays {
            width: 100%;
            height: 1rem;
            padding: 0 0.2rem;
            display: flex;
            align-items: center;
        }

        .weekdays div {
            font-size: .9rem;
            font-weight: 400;
            letter-spacing: 0.1rem;
            width: calc(20.2rem / 7);
            display: flex;
            justify-content: center;
            align-items: center;
            text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
        }

        .days {
            width: 90%;
            display: flex;
            flex-wrap: wrap;
            padding: .1rem;
        }

        .days div {
            font-size: 1rem;
            margin: .5rem;
            width: calc(13.2rem / 7);
            height: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
            transition: background-color 0.2s;
        }

        .days div:hover:not(.today) {
            background-color: red;
            border: 0.2rem solid #777;
            cursor: pointer;
        }

        .prev-date,
        .next-date {
            opacity: 0.5;
        }

        .today {
            background-color: #090909;
        }
    </style>
</head>
<body>

<?php

    $f = fopen("file.txt", "r");
    $dd = fgets($f);
    fclose($f);
    if(isset($_REQUEST['su1'])){
        $conn = new mysqli("localhost", "root", "", "portal");
        $id = $_REQUEST['id'];
        $pass = $_REQUEST['password'];

        $sql = "select * from student where id = $id and password='$pass'";
        $res = $conn->query($sql);
        if($res->num_rows == 0){
            alerts('email or password is not correct');
            header('Location: sign_in.php');
        }
        else{
            if($row = $res->fetch_assoc()){
                $file = fopen("file.txt", "w");
                fputs($file, "$id");
                fclose($file);
                $id = $row['id'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $pass = $row['password'];
                $major = $row['major'];
                $city = $row['city'];
                $code = $row['postcode'];
                $email = $row['email'];
                $phone = $row['phone'];
                $address = $row['address'];
?>    
    
<div class="sidebar">
    <div class="logo-details">
        <img src="Images/sdd.png" height="50" width="50" style="margin: 5px;">
        <span style="margin-left: 5px; color: white;"> <h5> An-Najah National University</h5></span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="#" class="active">
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">Home</span>
            </a>
        </li>
        <li>
            <a href="profileMin.html">
                <i class='bx bx-box' ></i>
                <span class="links_name">Profile</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-pie-chart-alt-2' ></i>
                <span class="links_name">Schedule</span>
            </a>
        </li>
        <li>
            <a href="mail.html">
                <i class='bx bx-coin-stack' ></i>
                <span class="links_name">Mail</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-user' ></i>
                <span class="links_name">Groups</span>
            </a>
        </li>


        <li class="log_out">
            <a href="sign_in.php">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Dashboard</span>
        </div>

        <a class="profile-details" href="profileMin.php">
            <img src="Images/prof1.png" alt="">
            <span class="student-name"><?php echo $fname . " " . $lname?></span>
            <i class='bx bx-chevron-down' ></i>
        </a>
    </nav>

    <div class="Courses">
        <div class="overview-boxes">
            <a class="data" href="course.html" style="text-decoration: none; color: black;">
                <div class="right-side">

                    <div class="number">Web Programing</div>
                    <div class="indicator">

                        <span class="text">Dr.sufyan Abu Samra</span>
                    </div>
                </div>
                <img src="Images/web.png" width="50" height="50">
            </a>
            <a class="data" href="course.html" style="text-decoration: none; color: black;">
                <div class="right-side">

                    <div class="number">Mathematics</div>
                    <div class="indicator">

                        <span class="text">Dr.Ahmed</span>
                    </div>
                </div>
                <img src="Images/ma.jpeg" width="50" height="50">
            </a>
            <a class="data" href="course.html" style="text-decoration: none; color: black;">
                <div class="right-side">

                    <div class="number">Java</div>
                    <div class="indicator">

                        <span class="text">Dr.Ashraf</span>
                    </div>
                </div>
                <img src="Images/javaphoto.png" width="50" height="50">
            </a>
            <a class="data" href="course.html" style="text-decoration: none; color: black;">
                <div class="right-side">
                    <div class="number">Data</div>
                    <div class="indicator">

                        <span class="text">Dr.Haya</span>
                    </div>
                </div>
               <img src="Images/data.png"  width="50" height="50">
            </a>

        </div>

        <div class="Noti">
            <div class="data ">
                <div class="title">Notifications</div>
                <div class="da">
                    <ul class="details">
                        <li class="topic">Date</li>

                        <li><a href="#">01 Jan 2021</a></li>
                        <li><a href="#">05 Jan 2021</a></li>
                        <li><a href="#">10 Jan 2021</a></li>
                        <li><a href="#">12 Jan 2021</a></li>
                        <li><a href="#">01 Jan 2021</a></li>
                        <li><a href="#">05 Jan 2021</a></li>
                        <li><a href="#">10 Jan 2021</a></li>
                        <li><a href="#">12 Jan 2021</a></li>

                    </ul>
                    <ul class="details">
                        <li class="topic"> Course Name</li>
                        <li><a href="#"> English</a></li>
                        <li><a href="#"> Math</a></li>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">Data</a></li>
                        <li><a href="#"> English</a></li>
                        <li><a href="#"> Math</a></li>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">Data</a></li>

                    </ul>
                    <ul class="details">
                        <li class="topic">Type</li>
                        <li><a href="#">  Quiz</a></li>
                        <li><a href="#">Homwork submission</a></li>
                        <li><a href="#"> Project submission</a></li>
                        <li><a href="#">Quiz </a></li>
                        <li><a href="#">  Quiz</a></li>
                        <li><a href="#">Homwork submission</a></li>
                        <li><a href="#"> Project submission</a></li>
                        <li><a href="#">Quiz </a></li>

                    </ul>
                    <ul class="details">
                        <li class="topic"> State</li>
                        <li><a href="#">Complete</a></li>
                        <li><a href="#">Complete</a></li>
                        <li><a href="#">Complete</a></li>
                        <li><a href="#">Complete</a></li>
                        <li><a href="#">Complete</a></li>
                        <li><a href="#">Complete</a></li>
                        <li><a href="#">Complete</a></li>
                        <li><a href="#">Complete</a></li>


                    </ul>
                </div>
                <div class="button">
                    <a href="#">See All</a>
                </div>
            </div>
            <div class="Grops">
                <!-- <div class="title"> Clender </div> -->
                <div class="container">
                    <div class="calendar">
                        <div class="month">
                            <i class="fas fa-angle-left prev"></i>
                            <div class="date">
                                <h1></h1>
                                <p></p>
                            </div>
                            <i class="fas fa-angle-right next"></i>
                        </div>
                        <div class="weekdays">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>
                        <div class="days"></div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    
</section>

<script src="JS/dashscript.js"></script>
<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if(sidebar.classList.contains("active")){
            sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
        }else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
</script>

<?php  
         
            }
        }
    }
    else
    if($dd != ""){  
        $conn = new mysqli("localhost", "root", "", "portal");
        $sql = "select * from student where id = $dd";
        $res = $conn->query($sql);
        $fname = "";
        $lname = "";
        if($r = $res->fetch_assoc()){
            $fname = $r['fname'];
            $lname = $r['lname'];
        }
?>

<div class="sidebar">
    <div class="logo-details">
        <img src="Images/sdd.png" height="50" width="50" style="margin: 5px;">
        <span style="margin-left: 5px; color: white;"> <h5> An-Najah National University</h5></span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="#" class="active">
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">Home</span>
            </a>
        </li>
        <li>
            <a href="profileMin.html">
                <i class='bx bx-box' ></i>
                <span class="links_name">Profile</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-pie-chart-alt-2' ></i>
                <span class="links_name">Schedule</span>
            </a>
        </li>
        <li>
            <a href="mail.html">
                <i class='bx bx-coin-stack' ></i>
                <span class="links_name">Mail</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-user' ></i>
                <span class="links_name">Groups</span>
            </a>
        </li>


        <li class="log_out">
            <a href="sign_in.php">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Dashboard</span>
        </div>

        <a class="profile-details" href="profileMin.php">
            <img src="Images/prof1.png" alt="">
            <span class="student-name"><?php echo $fname . " " . $lname?></span>
            <i class='bx bx-chevron-down' ></i>
        </a>
    </nav>

    <div class="Courses">
        <div class="overview-boxes">
            <a class="data" href="course.html" style="text-decoration: none; color: black;">
                <div class="right-side">

                    <div class="number">Web Programing</div>
                    <div class="indicator">

                        <span class="text">Dr.sufyan Abu Samra</span>
                    </div>
                </div>
                <img src="Images/web.png" width="50" height="50">
            </a>
            <a class="data" href="course.html" style="text-decoration: none; color: black;">
                <div class="right-side">

                    <div class="number">Mathematics</div>
                    <div class="indicator">

                        <span class="text">Dr.Ahmed</span>
                    </div>
                </div>
                <img src="Images/ma.jpeg" width="50" height="50">
            </a>
            <a class="data" href="course.html" style="text-decoration: none; color: black;">
                <div class="right-side">

                    <div class="number">Java</div>
                    <div class="indicator">

                        <span class="text">Dr.Ashraf</span>
                    </div>
                </div>
                <img src="Images/javaphoto.png" width="50" height="50">
            </a>
            <a class="data" href="course.html" style="text-decoration: none; color: black;">
                <div class="right-side">
                    <div class="number">Data</div>
                    <div class="indicator">

                        <span class="text">Dr.Haya</span>
                    </div>
                </div>
               <img src="Images/data.png"  width="50" height="50">
            </a>

        </div>

        <div class="Noti">
            <div class="data ">
                <div class="title">Notifications</div>
                <div class="da">
                    <ul class="details">
                        <li class="topic">Date</li>

                        <li><a href="#">01 Jan 2021</a></li>
                        <li><a href="#">05 Jan 2021</a></li>
                        <li><a href="#">10 Jan 2021</a></li>
                        <li><a href="#">12 Jan 2021</a></li>
                        <li><a href="#">01 Jan 2021</a></li>
                        <li><a href="#">05 Jan 2021</a></li>
                        <li><a href="#">10 Jan 2021</a></li>
                        <li><a href="#">12 Jan 2021</a></li>

                    </ul>
                    <ul class="details">
                        <li class="topic"> Course Name</li>
                        <li><a href="#"> English</a></li>
                        <li><a href="#"> Math</a></li>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">Data</a></li>
                        <li><a href="#"> English</a></li>
                        <li><a href="#"> Math</a></li>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">Data</a></li>

                    </ul>
                    <ul class="details">
                        <li class="topic">Type</li>
                        <li><a href="#">  Quiz</a></li>
                        <li><a href="#">Homwork submission</a></li>
                        <li><a href="#"> Project submission</a></li>
                        <li><a href="#">Quiz </a></li>
                        <li><a href="#">  Quiz</a></li>
                        <li><a href="#">Homwork submission</a></li>
                        <li><a href="#"> Project submission</a></li>
                        <li><a href="#">Quiz </a></li>

                    </ul>
                    <ul class="details">
                        <li class="topic"> State</li>
                        <li><a href="#">Complete</a></li>
                        <li><a href="#">Complete</a></li>
                        <li><a href="#">Complete</a></li>
                        <li><a href="#">Complete</a></li>
                        <li><a href="#">Complete</a></li>
                        <li><a href="#">Complete</a></li>
                        <li><a href="#">Complete</a></li>
                        <li><a href="#">Complete</a></li>


                    </ul>
                </div>
                <div class="button">
                    <a href="#">See All</a>
                </div>
            </div>
            <div class="Grops">
                <!-- <div class="title"> Clender </div> -->
                <div class="container">
                    <div class="calendar">
                        <div class="month">
                            <i class="fas fa-angle-left prev"></i>
                            <div class="date">
                                <h1></h1>
                                <p></p>
                            </div>
                            <i class="fas fa-angle-right next"></i>
                        </div>
                        <div class="weekdays">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>
                        <div class="days"></div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    
</section>

<?php

    }
?>

</body>
</html>
