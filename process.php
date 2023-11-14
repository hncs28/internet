<?php
// Kết nối đến database
$conn = new mysqli('localhost','root', '', 'loginweb');

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];

// Thực hiện truy vấn để lưu dữ liệu vào database
$sql = "INSERT INTO user (username, password, Tên) VALUES ('$username', '$password', '$name')";
if ($conn->query($sql) === TRUE) {
    header('Location: http://localhost/form.php');
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
    header('Location: http://localhost/trangchu.php');
}
// Đóng kết nối
$conn->close();
?>
