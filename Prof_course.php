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
    <a href="#">Slides</a>
    <a href="#">Assignments</a>
    <a href="#">Videos</a>
    <a href="#">Students</a>
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
        <!-- <p><a href="https://www.youtube.com/watch?v=1-UV_ufeprg">link youtube for ch1</a>  </p> -->
        <div class="fakeimg chapter" style="height:60px;background-color: rgb(224, 224, 224);"><i class="fa fa-file-pdf-o" style="font-size:20px;color:rgb(67, 128, 75);margin-right: 5px;"></i><a href="https://www.youtube.com/watch?v=1-UV_ufeprg">chapter1</a> </div><br>
        <!-- <p><a href="https://www.youtube.com/watch?v=1-UV_ufeprg">links youtube for ch2</a> </p> -->
        <div class="fakeimg chapter" style="height:60px;background-color: rgb(224, 224, 224);"><i class="fa fa-file-pdf-o" style="font-size:20px;color:rgb(67, 128, 75);margin-right: 5px;"></i><a href="https://www.youtube.com/watch?v=1-UV_ufeprg">chapter2</a></div><br>
        <!-- <p><a href="https://www.youtube.com/watch?v=1-UV_ufeprg">< linls youtube for ch3</a></p> -->
        <div class="fakeimg chapter" style="height:60px;background-color: rgb(224, 224, 224);"><i class="fa fa-file-pdf-o" style="font-size:20px;color:rgb(67, 128, 75);margin-right: 5px;"></i><a href="https://www.youtube.com/watch?v=1-UV_ufeprg">chapter3</a></div>

        
    </div>



    <div class="main">
        <h2 id ="foo3">Video Lectures</h2>
        <p> <div class="fakeimg chapter" style="height:60px;background-color: rgb(224, 224, 224);"><i class="fa fa-youtube-play" style="font-size:20px;color:rgb(67, 128, 75);margin-right: 5px;"></i><a href="https://www.youtube.com/watch?v=1-UV_ufeprg">open video lecture in this course</a> </div> </p>



    

        <br>
        <h2 id ="foo4">Assigments</h2>
        <h5></h5>
        <div class="fakeimg chapter" style="margin-bottom: 20px;background-color: rgb(224, 224, 224);" onclick="AssignmentOnClick()"><i class="fa fa-tasks" style="font-size:20px;color:rgb(67, 128, 75);margin-right: 5px;"></i><button>Assigment Part 1</button></div>
        <div class="fakeimg chapter" style="margin-bottom: 20px;background-color: rgb(224, 224, 224);" onclick="AssignmentOnClick()"><i class="fa fa-tasks" style="font-size:20px;color:rgb(67, 128, 75);margin-right: 5px;"></i><button>Assigment Part 2</button></div>
    </div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="JS/course.js"></script>
</body>
</html>