<?php
session_start();

    include("classes/DB.php");
    include("classes/functions.php");
    $user_data = check_login($con);


?>
<!Doctype html>
<HTML lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet"/>

<link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>

<link href="<link rel="preconnect href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<title>yoga Form</title>

</head>

<body>
<form action="navbar.php" method="POST">
                    <div class="form-group mb3 des">

                        <input type="submit" value="Show Data" class="btn btn-success" />
                 
                    </div>
                </form>
    
    <div class="banner">
        
        <div class="section col-md-12 col-sm-12">
            <div class="content">
            <h1>Welcome to Yoga Tutor</h1>
                <h2>section 1 name</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has 
                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised 
                in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
                like Aldus PageMaker including versions of Lorem Ipsum.</p>

            </div>
        </div>
        <div class="section col-md-12 col-sm-12">
            <div class="content">
                <h2>section 2 name</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has 
                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised 
                in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
                like Aldus PageMaker including versions of Lorem Ipsum.</p>

            </div>
        </div>
        <div class="section col-md-12 col-sm-12">
            <div class="content">
                <h2>section 3 name</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has 
                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised 
                in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
                like Aldus PageMaker including versions of Lorem Ipsum.</p>

            </div>
        </div>
        <div class="section col-md-12 col-sm-12">
            <div class="content">
                <h2>section 4 name</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has 
                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised 
                in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
                like Aldus PageMaker including versions of Lorem Ipsum.</p>

            </div>
        </div>
    </div>



<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="js/bootstrap.bundle.min.js" ></script>

<script src="https://kit.fontawesome.com/12c1cd3be9.js" crossorigin="anonymous"></script>

</body>
</HTML>