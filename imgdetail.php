<?php 
    include_once('lib/handle.php'); 
?>
<?php 
    /* Kiểm tra id sản phẩm */
    if (!isset($_GET['imgId']) || $_GET['imgId'] == NULL) {
        header("Location: homepage.php");
    } else {
        $id = $_GET['imgId'];
    } 
    $IdUser = Session::get('UserID');
    /* Xử lí yêu thích sản phẩm*/
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['wishlist'])) {
        $insertWishlist = $imgClass->insertWishlist($id, $IdUser);
    }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/homepage.css">
    <link rel="stylesheet" href="assets/css/imgdetail.css">
</head>
<body>
    <div class="container-fluid">
        <?php
            include('./inc/header.php'); 
        ?>
        <div class="body">
            <div class="container">
                <?php
                    $imgInfo = $imgClass->showImg($id);
                    while($img = $imgInfo->fetch_assoc()){
                ?>
                <div class="row img-detail">
                    <div class="col-6 photo">
                        <img src="assets/img/<?= $img['ImgName'] ?>" alt="" class="">
                    </div>
                    <div class="col-6 photo-infor">
                        <div class="infor-header">
                            <div class="infor-header_left">
                                <i class="fas fa-solid fa-ellipsis"></i>
                                <i class="fas fa-solid fa-arrow-up-from-bracket"></i>
                            </div>
                            <div class="infor-header_right">
                                <form action="" method="post" class="form__wishlist" id="form1">
                                    <?php 
                                        if($IdUser){         
                                    ?>
                                        <input type="hidden" name="wishlist" value="" class="btn btn-heart">
                                    <?php     
                                        }
                                    ?>
                                </form>
                                <button class="btn btn-danger" type="submit" name="wishlist" form="form1" value="Submit">
                                    <i class="fas fa-solid fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="img-title mt-4"><?= $img['Title'] ?></div>
                        <?php
                            $IdUser = $img['IDUser'];
                            $userinfor = $accountClass->showInfoUser($IdUser);
                            while($user = $userinfor->fetch_assoc()){
                        ?>
                        <div class="users-img mt-4">
                            <div class="img-users">
                                <img src="assets/img/<?= $user['UserImg'] ?>" alt="" class="">
                            </div>
                            <div class="infor-users">
                                <div class="users-name"><?= $user['UserName'] ?></div>
                                <div class="users-follower"><?= $user['followers'] ?> người theo dõi</div>
                            </div>
                            <div class="btn-follow">
                                <button class="btn btn-light">Theo dõi</button>
                            </div>
                        </div>
                        <?php 
                            }
                        ?>
                        <div class="review mt-4">
                            <h5 class="review-title">Nhận xét</h5>
                            <div class="list-review mt-4">
                                <div class="review-item">
                                    <div class="img-users">
                                        <img src="assets/img/user2.jpg" alt="">
                                    </div>
                                    <form>
                                        <div class="input-group input-comment">
                                            <input type="text" class="form-control" placeholder="Comment">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="row">
                    <div class="col-12 mt-5 title-similar">
                        Similar photos
                    </div>
                </div>
                <div class="row mt-3 list-img">
                    <div class="col-3 img-col">
                        <?php
                            $imglist = $imgClass->showListImg(1);
                            while($img = $imglist->fetch_assoc()){

                        ?>
                        <a href="" class="img-item">
                            <img src="assets/img/<?= $img['ImgName'] ?>" alt="" class="image">
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
                        </a>
                        <?php } 

                            ?>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>