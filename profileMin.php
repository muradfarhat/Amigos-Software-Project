<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="CSS/profileMin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script
            defer
            src="https://code.iconify.design/1/1.0.7/iconify.min.js"
    ></script>
</head>

        <?php $sql="SELECT * from users where uni_id='11821782'";
        $res=$conn->query($sql);
        $row=$res->fetch_assoc();
        echo '
<body style="background: #537e5a">
<form action="update.php" method="post">
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img id="profile-img" class="rounded-circle mt-5" width="150px" src="'.$row["img"].'"><div class="change" role="button" type="file">
                <label>
                    <input id="img-input" type="file" style="display: none"><span class="iconify" data-icon="bi:camera-fill" style="width: 30px; cursor: pointer "></span>
                </label>
            </div><span class="font-weight-bold">'.$row["firstname"].'</span><span class="text-black-50">'.$row["email"].'</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">

                    <h4 class="text-right">Profile Settings</h4>
                    <span role="button" id="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit profile</span>
                </div>
                <form action="update.php" method="post">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First name</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="ahmed" value="'.$row["firstname"].'">
                    </div>
                    <div class="col-md-6"><label class="labels">Last name</label><input id="lname" name="lname" type="text" class="form-control" value="'.$row["lastname"].'" placeholder="muhannad"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input id="mobile" name="mobile" type="number" class="form-control" placeholder="0550881106" value="'.$row["mobilenumber"].'"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input id="address" name="address" type="text" class="form-control" placeholder="24th street, narnia avenue" value="'.$row["address"].'"></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input id="postcode" name="postcode" type="number" class="form-control" placeholder="666" value="'.$row["postcode"].'"></div>
                    <div class="col-md-12"><label class="labels">City</label><input id="city" name="city" type="text" class="form-control" placeholder="Nablus" value="'.$row["city"].'"></div>
                    <div class="col-md-12"><label class="labels">Email </label><input id="email" name="email" type="text" class="form-control" placeholder="ahmedmhj.nu@gmail.com" value="'.$row["email"].'"></div>
                    <div class="col-md-12"><label class="labels">Old password</label><input type="password" class="form-control" placeholder="Old password" value=""></div>
                    <div class="col-md-12"><label class="labels">New Password</label><input type="password" class="form-control" placeholder="New password" value=""></div>

                </div>
                <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit" value="Save Profile" name="save" id="save" style="display: none"></div>
                
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Student info</span><span class="border px-3 p-1 add-experience"><i class="fa fa-share-square-o"></i>&nbsp;Back home</span></div><br>
                <div class="col-md-12"><label class="labels">Major</label><i class="fa fa-lock"></i><input type="text" class="form-control" disabled id="major" name="major" placeholder="Major" value="'.$row["major"].'"></div> <br>
                <div class="col-md-12"><label class="labels">University ID</label><i class="fa fa-lock"></i><input type="text" class="form-control" disabled id="uni_id" name="uni_id" placeholder="ID" value="'.$row["uni_id"].'"></div>
                <div id="uni" class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="Images/sdd.png"></div>
            </div>
        </div>
        </div>
</div>
</div>
</div>
</form> 
</body>       
        '
        ?>
<script>
    ourfile = document.getElementById('img-input');
    preview = document.getElementById('profile-img');

    fr = new FileReader();

    ourfile.onchange = function () {
        file = ourfile.files[0];
        fr.readAsDataURL(file);
    }

    fr.onload = function(){
        preview.src = fr.result;
    }
    let btn=document.getElementById('save');
    document.getElementById("edit").addEventListener("click", function (){
        $("#save").toggle();
    })
</script>
</html>