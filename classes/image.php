<?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../lib/session.php');
    Session::checkLogin();
    include_once($filepath.'/../lib/database.php');
    include_once($filepath.'/../helpers/format.php');
?>
<?php 
    class Image
    {
        private $db;
        private $fm; //format

        public function __construct() {
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function showListImg($typeImg) {
            $query = "SELECT * FROM image WHERE TypeImg = $typeImg ORDER BY ID DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function showImg($ID) {
            $query = "SELECT * FROM Image WHERE ID = '$ID'";
            $result = $this->db->select($query);
            return $result;
        }

        public function showImgOfUser($ID) {
            $query = "SELECT * FROM Image WHERE IDUser = '$ID'";
            $result = $this->db->select($query);
            return $result;
        }


        public function insertWishlist($imgID, $userID) {
            $imgID = mysqli_real_escape_string($this->db->link, $imgID);
			$userID = mysqli_real_escape_string($this->db->link, $userID);

            $check_compare = "SELECT * FROM wishlist WHERE IDImg = $imgID AND IDUser ='$userID'";
			$result_check_compare = $this->db->select($check_compare);
            if($result_check_compare){
				$msg = "<span class='error'>Sản phẩm đã được thêm vào</span>";
				return $msg;
			}else{
                $query_insert = "INSERT INTO wishlist(IDUser, IDImg) VALUES('$userID','$imgID')";
                $insert_compare = $this->db->insert($query_insert);
                if($insert_compare){
                    $alert = "<span class='success'>Đã thêm vào yêu thích</span>  ";
                    return $alert;
                } else {
                    $alert = "<span class='error'>Không thành công</span>  ";
                    return $alert;
                }
            }
        }

        /* Show product wishlist */
        public function showImgWishlist($customerId) {
            $ImgCompare = "SELECT * FROM wishlist WHERE IDUser ='$customerId' ";
			$result = $this->db->select($ImgCompare);
            return $result;
        }

    }   
?>