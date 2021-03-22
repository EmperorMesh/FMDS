<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">s
    <title>Csm</title>
    <link rel="stylesheet" type="text/css" href="boostrap/css/boostrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script type="text/javascript" src="validation.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="boostrap/js/popper.js"></script>
    <script type="text/javascript" src="boostrap/js/boostrap.js"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="header">
                <div class="page-header">
                    <h1><em>ITH FOOD MANAGEMENT SYSTEM</em></h1>
                </div>
            </div> <!-- header -->
            <div class="col-md-6">
                <img src="img/download.png">
                <h1 style="text-align: center;"><em>Login Here</em></h1>
                <form onsubmit="return false;">
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" id="email" placeholder="Examples@outlook.com">
                        <input type="text" name="password" class="form-control" id="password" placeholder="Please Enter your password">
                    </div>
                </form>
                <button type="submit" name="submit" onclick="Submit()" class="btn btn-primary" id="btn">Log In</button>
                <p>New here,<a href="">Register Here</a></p>
            </div> <!-- col-md-7 -->
        </div>
    </div>
    <!--row-->
    </div>
    <!--container-->



</body>

</html>