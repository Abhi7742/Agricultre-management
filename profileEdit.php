<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Profile: <?php echo $_SESSION['Username']; ?></title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        .box {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .img-circle {
            border-radius: 50%;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .select-wrapper {
            position: relative;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="%23333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px center;
            padding-right: 30px;
        }

        .wrapper {
            background-size: cover;
            background-position: center;
            padding: 4em 0;
            text-align: center;
            color: #fff;
        }

        .wrapper h2 {
            margin-bottom: 0;
        }

        .wrapper h4 {
            margin-top: 0;
        }

        @media screen and (max-width: 480px) {
            .wrapper {
                padding: 2em 0;
            }
        }
    </style>
</head>
<body class="subpage">

    <?php
        session_start();
        require 'menu.php';
    ?>

    <section id="post" class="wrapper bg-img" data-bg="banner2.jpg">
        <div class="inner">
            <div class="box">
                <header>
                    <span class="image left"><img src="<?php echo 'images/profileImages/'.$_SESSION['picName'].'?'.mt_rand(); ?>" class="img-circle" class="img-responsive" height="200px"></span>
                    <br>
                    <h2><?php echo $_SESSION['Name'];?></h2>
                    <h4><?php echo $_SESSION['Username'];?></h4>
                    <br>
                    <form method="post" action="Profile/updatePic.php" enctype="multipart/form-data">
                        <input type="file" name="profilePic" id="profilePic">
                        <br>
                        <div class="12u$">
                            <input type="submit" class="button special small" name="upload" value="Upload" />
                            <input type="submit" class="button special small" name="remove" value="Remove" />
                        </div>
                    </form>
                </header>
                <form method="post" action="Profile/updateProfile.php">
                    <div class="row uniform">
                        <div class="8u 12u$(xsmall)">
                            <input type="text" name="name" id="name" value="<?php echo $_SESSION['Name'];?>" placeholder="Full Name" required class="form-control"/>
                        </div>
                        <div class="4u 12u$(xsmall)">
                            <input type="text" name="mobile" id="mobile" value="<?php echo $_SESSION['MobileNo'];?>" placeholder="Mobile No" required class="form-control"/>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="uname" id="uname" value="<?php echo $_SESSION['Username'];?>" placeholder="Username" required class="form-control"/>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="email" name="email" id="email" value="<?php echo $_SESSION['Email'];?>" placeholder="Email" required class="form-control"/>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <div class="select-wrapper">
                                <select name="edu" id="edu" class="form-control">
                                    <option value="Diploma" <?php if($_SESSION['Edu'] == 'Diploma') echo 'selected'; ?>>Diploma</option>
                                    <option value="B.TECH" <?php if($_SESSION['Edu'] == 'B.TECH') echo 'selected'; ?>>B.TECH</option>
                                    <option value="M.TECH" <?php if($_SESSION['Edu'] == 'M.TECH') echo 'selected'; ?>>M.TECH</option>
                                </select>
                            </div>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <div class="select-wrapper">
                                <select name="year" id="year" class="form-control">
                                    <option value="1" <?php if($_SESSION['Year'] == '1') echo 'selected'; ?>>1st Year</option>
                                    <option value="2" <?php if($_SESSION['Year'] == '2') echo 'selected'; ?>>2nd Year</option>
                                    <option value="3" <?php if($_SESSION['Year'] == '3') echo 'selected'; ?>>3rd Year</option>
                                    <option value="4" <?php if($_SESSION['Year'] == '4') echo 'selected'; ?>>4th Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="post" id="post" value="<?php echo $_SESSION['Post'];?>" placeholder="Post Name" required class="form-control"/>
                        </div>
                        <div class="12u$">
                            <center>
                                <input type="submit" class="button special" value="Update Profile" />
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
