<?php
	
		include('upload-code.php'); // Include upload code Script page.
		
	?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Challenge</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/challenge.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <style>
        body {
            background-color: #1A1A1A;

        }
    </style>
</head>

	<body>
	<!-------------------Main Content------------------------------>
	<nav class="navbar navbar-expand-lg navbar-dark" style=" background-color: black;">
        <a class="navbar-brand p-0" href="#">
            <img src="./img/inzpire logo.png" height=50px alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link orange" href="./home.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link orange" href="http://localhost/HackHer%202021/upload-design.php">Post a challenge</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link orange" href="http://localhost/HackHer%202021/show.php" tabindex="-1">Projects</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 searchBar" type="search" placeholder="Search" aria-label="Search">

            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item icons">
                    <i class="material-icons sms">sms</i>
                </li>
                <li class="nav-item icons">
                    <i class="material-icons notifications">notifications</i>

                </li>


                <li class="nav-item icons">
                    <i class="material-icons help">help</i>

                </li>
                <li class="nav-item icons">
				<a href = "./profile.html"><i class="material-icons account_circle">account_circle</i></a>

                </li>
            </ul>
        </div>
    </nav>
    <div class="container ">
        <h1 style="text-align:center;color:white;" class="my-4">Post a challenge</h1>
		<form method="POST" name="upfrm" action="" enctype="multipart/form-data" style="width:80%;" class="mx-auto">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">

                        <input type="text" class="form-control inputField" placeholder="Title" name="img-name">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle category" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">

                <textarea class="form-control inputField" id="exampleFormControlTextarea1" placeholder="Description"
                    rows="3"></textarea>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">

                        <input type="text" class="form-control inputField" placeholder="Link(Optional)">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 mx-auto">
                    <div class="input-group mb-3">

                        <div class="custom-file upload">
						<input type="file" name="fileImg" class="file_input" />
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01" name="fileImg">
                            <label for="inputGroupFile01"><i
                                    class="material-icons backup_outlined ">backup_outlined</i></label>	
                        </div>
						<input type="submit" value="Upload Image" name="btn_upload" class="btn btn-primary submit" />
                    </div>
                </div>
            </div>

        </form>
		<div class="msg">
            <strong>
		        <?php if(isset($error)){echo $error;}?>
	        </strong>

			</div>

			<div class="mx-auto">
                <a href="http://localhost/HackHer%202021/show.php" class="submit"> <button type="submit"
                        class="btn btn-primary submit">Submit</button></a>
            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

	</body>
	</html>