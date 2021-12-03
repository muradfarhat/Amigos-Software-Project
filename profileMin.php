<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="CSS/profileMin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background: #537e5a">
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="Images/test%20profile.jpg"><div class="change" role="button" type="file">
                <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/16bZxdXGtDP.png&quot;); background-position: -26px -326px; background-size: 50px 948px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
            </div><span class="font-weight-bold">Ahmed</span><span class="text-black-50">ahmedmhj.nu@gmail.com</span><span> </span></div>
            <div class="col-md-12"><label class="labels">Old password</label><input type="password" class="form-control" placeholder="Old password" value=""></div>
            <div class="col-md-12"><label class="labels">New Password</label><input type="password" class="form-control" placeholder="New password" value=""></div>
            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Change password</button></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">

                    <h4 class="text-right">Profile Settings</h4>
                    <span><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit profile</span>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First name</label><input type="text" class="form-control" placeholder="ahmed" value=""></div>
                    <div class="col-md-6"><label class="labels">Last name</label><input type="text" class="form-control" value="" placeholder="muhannad"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="number" class="form-control" placeholder="0550881106" value=""></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="24th street, narnia avenue" value=""></div>
<!--                    <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>-->
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="666" value=""></div>
                    <div class="col-md-12"><label class="labels">City</label><input type="text" class="form-control" placeholder="Nablus" value=""></div>
<!--                    <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>-->
                    <div class="col-md-12"><label class="labels">Email </label><input type="text" class="form-control" placeholder="ahmedmhj.nu@gmail.com" value=""></div>
<!--                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>-->

                </div>
<!--                <div class="row mt-3">-->
<!--                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>-->
<!--                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>-->
<!--                </div>-->
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Student info</span><a class="border px-3 p-1 add-experience" style="text-decoration: none; color: black;" href="dashboard.html"><i class="fa fa-share-square-o"></i>&nbsp;Back home</a></div><br>
                <div class="col-md-12"><label class="labels">Major</label><i class="fa fa-lock"></i><input type="text" class="form-control" disabled value="CE" placeholder="Major" value=""></div> <br>
                <div class="col-md-12"><label class="labels">University ID</label><i class="fa fa-lock"></i><input type="text" class="form-control" disabled value="11821782"  placeholder="ID" value=""></div>
                <div id="uni" class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="Images/sdd.png"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>