<?php 
    include_once('lib/handle.php'); 
?>
<?php 
    
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
    <link rel="stylesheet" href="assets/css/homepage.css">
</head>
<body>
    <div class="container-fluid">
        <div class="header fixed-top">
            <div class="logo mr-3">
                <img src="assets/img/logoleaf.png" alt="" class="logo mt-2" width="25">
            </div>
            <div class="mr-2">
                <div class="btn homepage-btn">
                    <a href="homepage.php" class="homepage-link">Homepage</a>
                </div>
            </div>
            <div class="mr-4 search">
                <form>
                    <div class="input-group  input-search">
                        <div class="input-group-prepend ">
                            <span class="input-group-text search-icon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </div>
            <div class="mr-4 notifi">
                <div class="notifi-btn header-icon">
                    <i class="fas fa-solid fa-bell"></i>
                </div>
            </div>
            <div class="mr-4 add_img">
                <a href="editImg.php" class="add_img-btn header-icon">
                    <i class="fas fa-solid fa-plus"></i>
                </a>
            </div>
            <div class="profile">
                <a href="" class="profile-btn header-icon">
                    <i class="fas fa-solid fa-user"></i>
                </a>
            </div>
        </div>
        <div class="body">
            <div class="row list-img">
                <div class="col-3 img-col">
                    <?php
                        $imglist = $imgClass->showListImg(1);
                        while($img = $imglist->fetch_assoc()){

                    ?>
                    <a href="" class="img-item">
                        <img src="assets/img/<?= $img['ImgName'] ?>" alt="" class="image">
                        <div class="user-img-infor">
                            <div class="user-img-avata">
                                <img src="assets/img/user1.jpg" class="">
                            </div>
                            <div class="user-name-infor">nanami</div>
                        </div>
                    </a>
                    <?php } 
                            
                        ?>            
                </div>
                <div class="col-3 img-col">
                <?php
                        $imglist = $imgClass->showListImg(2);
                        while($img = $imglist->fetch_assoc()){

                    ?>
                    <a href="" class="img-item">
                        <img src="assets/img/<?= $img['ImgName'] ?>" alt="" class="image">
                        <div class="user-img-infor">
                            <div class="user-img-avata">
                                <img src="assets/img/user1.jpg" class="">
                            </div>
                            <div class="user-name-infor">nanami</div>
                        </div>
                    </a>
                    <?php } 
                            
                        ?>    
                </div>
                <div class="col-3 img-col">
                    <?php
                        $imglist = $imgClass->showListImg(3);
                        while($img = $imglist->fetch_assoc()){

                    ?>
                    <a href="" class="img-item">
                        <img src="assets/img/<?= $img['ImgName'] ?>" alt="" class="image">
                        <div class="user-img-infor">
                            <div class="user-img-avata">
                                <img src="assets/img/user1.jpg" class="">
                            </div>
                            <div class="user-name-infor">nanami</div>
                        </div>
                    </a>
                    <?php } 
                    
                        ?>    
                </div>
                <div class="col-3 img-col">
                    <?php
                        $imglist = $imgClass->showListImg(4);
                        while($img = $imglist->fetch_assoc()){
                    ?>
                    <a href="" class="img-item">
                        <img src="assets/img/<?= $img['ImgName'] ?>" alt="" class="image">
                        <div class="user-img-infor">
                            <div class="user-img-avata">
                                <img src="assets/img/user1.jpg" class="">
                            </div>
                            <div class="user-name-infor">nanami</div>
                        </div>
                    </a>
                    <?php } 

                        ?>    
                </div>
            </div>
        </div>
    </div>
</body>
</html>