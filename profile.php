<?php 
    include_once('lib/handle.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/profile.css">
</head>
<body>
    <div class="container-fluid">
        <?php
            include('./inc/header.php'); 
        ?>
        <div class="body">
            <?php
                $IdUser = Session::get('UserID');
                $userinfor = $accountClass->showInfoUser($IdUser);
                while($user = $userinfor->fetch_assoc()){
            ?>
           <div class="profile">
               <div class="avatar-infor">
                   <img src="assets/img/<?= $user['UserImg'] ?>" class="avatar-img">
               </div>
               <div class="userName-infor">
                   <div class="userName">
                   <?= $user['UserName'] ?>
                   </div>
               </div>
               <div class="email-infor mt-2">
                   <div class="email">
                    <?= $user['email'] ?>
                   </div>
               </div>
               <div class="follow-list mt-2">
                   <div class="text-bold">
                        <?= $user['followers'] ?> người theo dõi
                   </div>
                   <div class="text-bold">
                        <?= $user['watching'] ?> người đang theo dõi
                   </div>
               </div>
               <?php } ?>
           </div>
            <div class="data-img mt-5 mb-5">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active text-bold" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">My Photos</a>
                        <a class="nav-item nav-link text-bold" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Favorite Photos</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <div class="col-3 img-item">
                                <img src="assets/img/meo1.jpg" alt="" class="img-fluid ">
                            </div>
                            <div class="col-3 img-item">
                                <img src="assets/img/meo2.jpg" alt="" class="img-fluid ">
                            </div>
                            <div class="col-3 img-item">
                                <img src="assets/img/meo3.jpg" alt="" class="img-fluid ">
                            </div>
                            <div class="col-3 img-item">
                                <img src="assets/img/meo4.jpg" alt="" class="img-fluid ">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">
                            <div class="col-3 img-item">
                                <img src="assets/img/meo4.jpg" alt="" class="img-fluid ">
                            </div>
                            <div class="col-3 img-item">
                                <img src="assets/img/meo1.jpg" alt="" class="img-fluid ">
                            </div>
                            <div class="col-3 img-item">
                                <img src="assets/img/meo3.jpg" alt="" class="img-fluid ">
                            </div>
                            <div class="col-3 img-item">
                                <img src="assets/img/meo2.jpg" alt="" class="img-fluid ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>