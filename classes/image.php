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
            $query = "SELECT * FROM image WHERE TypeImg = $typeImg";
            $result = $this->db->select($query);
            return $result;
        }
    }   
?>