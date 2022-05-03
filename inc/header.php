<div class="header fixed-top">
    <div class="logo mr-3">
        <img src="assets/img/logoleaf.png" alt="" class="logo mt-2" width="30">
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
    <div class="mr-4 profile">
        <a href="profile.php" class="profile-btn header-icon">
            <i class="fas fa-solid fa-user"></i>
        </a>
    </div>
    <div class="btn-group profile">
        <div class=" header-icon" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-solid fa-chevron-down"></i>
        </div>
        <?php 
                if(isset($_GET['action']) && $_GET['action'] == 'logout'){
                    Session::destroy();
                } 
            ?>
        <div class="dropdown-menu">
            <a href="?action=logout">Đăng xuất</a>
        </div>
    </div>
</div>