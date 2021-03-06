<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="mail.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<form action="sent_1.php" method="post">
    <main style="margin: auto;width: 50%;margin-top: 70px;">
        <p class="text-center" style="font-weight: bold; margin: 0 0 30px 0;">New Message</p>

        <div class="form-row mb-3">
            <label id ="from"  class="col-2 col-sm-1 col-form-label">From</label>
            <div class="col-10 col-sm-11">
                <input type="email" class="form-control" name="from_1" value="" placeholder="Type email" style="width: 350px;margin-bottom: 10px;">
            </div>
        </div>
        <div class="form-row mb-3">
            <label id="to1"  class="col-2 col-sm-1 col-form-label">To</label>
            <div class="col-10 col-sm-11">
                <input type="email" class="form-control" name="to_1" value="" placeholder="Type email" style="width: 350px;margin-bottom: 10px;">
            </div>
        </div>

        <!-- <div class="form-row mb-3">
             <label for="bcc"  class="col-2 col-sm-1 col-form-label">Subject</label>
             <div class="col-10 col-sm-11">
                 <input type="text" class="form-control" id="bcc" placeholder="Type email" style="width: 350px;margin-bottom: 10px;">
             </div>
         </div>
    -->
        <div class="row">
            <!--<div class="col-sm-11 ml-auto">
                <div class="toolbar" role="toolbar">
                    <div class="btn-group">
                        <button type="button" class="btn btn-light">
                            <span class="fa fa-bold"></span>
                        </button>
                        <button type="button" class="btn btn-light">
                            <span class="fa fa-italic"></span>
                        </button>
                        <button type="button" class="btn btn-light">
                            <span class="fa fa-underline"></span>
                        </button>
                    </div>

                </div>-->

                <div class="form-group mt-4">

                    <textarea class="form-control" name="message" value="" rows="12" placeholder="Click here to reply"></textarea>
                </div>
                <div class="form-group">

                    <button type="submit"  name="send" class="btn btn-success">Send</button>
                    <button type="submit" name ="discard" class="btn btn-danger">Discard</button>
</form>
                </div>
            </div>
        </div>
    </main>
    <span class="home-button" style="border: 1px solid black;margin-left: 20px; padding: 10px 20px;"><a class="border px-3 p-1 add-experience" style="text-decoration: none; color: black;" href="recieve_1.php"><i class="fa fa-share-square-o"></i>&nbsp;Back home</a></span>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</form>
</body>
</html>