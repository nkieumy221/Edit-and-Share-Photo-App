<?php
    // Gán dữ liệu nhân được và $img
    $img = $_POST['imgBase64']; 
    $title = $_POST['title']; 
    $userID = $_POST['userID']; 
    
    // Tìm kiếm và thay thế đường dẫn ảnh 
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    
    // Mã hoá file sang dạng Base64
    $fileData = base64_decode($img); 
    $charName = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    
    // Tạo tên ảnh ngẫu nhiên để không bị trùng lặp 
    $randName = substr(str_shuffle($charName), 0, 15); 
    
    // imgs/ là đường dẫn của thư mục chứa ảnh
    $fileName = 'assets/img/' . $randName . '.png'; 
    
    // Ghi dữ liệu $fileData đến file = $fileName
    file_put_contents($fileName, $fileData); 
    
    // Trả về tham số result khi hoàn tất
    echo $fileName; 

    $conn = mysqli_connect("localhost","root","","imgapp");
    $sql = "INSERT INTO Image(ImgName, IDUser, TypeImg, Title) VALUES ('".$randName.".png', '".$userID."', '1', '".$title."')";
    $kq = mysqli_query($conn,$sql);
    header("Location: homepage.php");
?>