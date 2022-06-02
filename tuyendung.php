
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuyển dụng</title>
    <link rel="stylesheet" href="./tuyendung.css">
    <script src="https://kit.fontawesome.com/13f561a656.js"></script>
    <link rel="stylesheet" href="./Font-Awesomecss/css/font-awesome.min.css">
</head>
</head>

    <header>
        <div >
            <img src="./img/banner tuyendung.png" alt="" width="1366px" height="400px">
        </div>
    </header>
<body>
    <div class="container">
        <div>
            <div class="icon">
                <a class="a-icon" href="./index.php">  <i class="fa-solid fa-house" style="color:#FB9D43 " ></i></a> <span class="span-icon">|  Tuyển Dụng</span>
            </div>
        </div>

        <div class="content-1">
            <div class="details-content-1">
                <h2>YẾU TỐ TRỞ THÀNH NHÂN VIÊN Feelingtea</h2>
                <div>
                    <ul class="ul-tuyendung">
                        <li>
                            <span>
                                <i aria-hidden="true" class="far fa-star" style="color:#FB9D43"></i>
                                Tuổi từ 18 trở lên
                            </span>
                        </li>
                        <li>
                            <span>
                                <i aria-hidden="true" class="far fa-star" style="color:#FB9D43"></i>
                                Có tinh thần trách nhiệm, ham học hỏi, yêu thích ngành dịch vụ
                            </span>
                        </li>
                        <li>
                            <span>
                                <i aria-hidden="true" class="far fa-star" style="color:#FB9D43"></i>
                                Có kỹ năng giao tiếp tốt
                            </span>
                        </li>
                        <li>
                            <span>
                                <i aria-hidden="true" class="far fa-star" style="color:#FB9D43"></i>
                                Làm việc siêng năng, đi làm đúng giờ và đều đặn.
                            </span>
                        </li>
                        <li>
                            <span>
                                <i aria-hidden="true" class="far fa-star" style="color:#FB9D43"></i>
                                Sức khỏe tốt và có thể làm việc trong môi trường áp lực.
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="details-img-content-1">
                <img src="./img/tuyendung1.jpg" alt="" width="540px" height="347px">
            </div>
        </div>

        <div class="content-2">
            <div class="details-content-2">
                <h2>Cách thức ứng tuyển</h2>
                <p>Ứng viên có thể làm theo 2 cách sau đây</p>   
                <div class="tructiep"><span>Trực Tiếp</span></div>     
                <div class="online"><span>Online</span></div>                                 
            </div>

            <div class="details-img-content-2">
                <img src="./img/tuyendung2.jpg" alt="" width="464px" height="261px">
            </div>           
        </div>

        <div class="content-3">
            <div class="details-content-3">
                <h3>Thông tin ứng viên</h3>
                <img src="./img/tuyendung3.jpg" alt="" width="550px" height="825px">
            </div>
            <div class="information">
                <label  for="">Họ và tên*</label>
                <input class="plc" type="text" placeholder="Họ và tên">
                <label  for="">Địa chỉ*</label>
                <input class="plc" type="text" placeholder="Địa chỉ">
                <label  for="">Di động*</label>
                <input class="plc" type="text" placeholder="Di động">
                <label  for="">Email*</label>
                <input class="plc" type="email" placeholder="Email" >
                <label for="">Vị trí ứng tuyển*</label>
                <input class="plc" type="text" placeholder="Điền vị trí ứng tuyển">
                <label  for="">Cửa hàng*</label>
                <div class="search">
                <select name="" id="HaNoi">
                    <option  value="">Điền vị trí ứng tuyển </option>
                    <option  value="">Feeling Tea Nguyễn Chí Thanh </option>
                    <option  value="">Feelingtea Phạm Ngọc Thạch</option>
                    <option  value="">Feelingtea Lương Thế Vinh</option>
                    <option  value="">Feelingtea Nguyễn Văn Cừ</option>
                    <option  value="">Feelingtea Lê Văn Hiến</option>
                    <option  value="">Feelingtea Tân Mai</option>
                </select>
                </div>
                <label class="labe" for="">Ca làm việc*</label>
                <select name="" id="HaNoi">
                    <option  value="">Ca làm việc </option>
                    <option  value="">Ca sáng(8h-12h) </option>
                    <option  value="">Ca chiều(12h-18h</option>
                    <option  value="">Ca tối(18h-22h30)</option>                   
                </select>
                <label class="labe" for="">Ảnh chân dung**</label>
                <form class="up" action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="photo" id = "fileSelect">
                    <input type="submit" name="submit" value ="Tải lên">
                    <p> Maximum file size: 2 MB </p>
                </form>

                
            <div class="btn"><button class="btn-submit">Gửi thông tin</button></div>
            </div>
        </div>
    </div>
</body>

<footer>
    <div class="container-footer">
        <div class="content-footer">
            <div>
                <a href="./index.php">
                    <img src="./img/footer.png" alt="" width="265px" height="265px" >   
                </a>
            </div>
            <div class="Menu-footer">
                <div class="title-footer"><h2>Menu</h2></div>
                <div>
                    <ul class="menu">
                        <li>
                            <a href="./index.php">Trang Chủ</a>
                        </li>
                        <li> 
                            <a href="./cauchuyenthuonghieu.php">Câu chuyện thương hiệu</a>
                        </li>
                        <li>
                            <a href="./thucdon.php">Thực Đơn</a>
                        </li>
                        <li>
                            <a href="./tintuc.php">Tin Tức</a>
                        </li>
                        <li>
                            <a href="./cuahang.php">Hệ thống cửa hàng</a>
                        </li>
                        <li>
                            <a href="./tuyendung.php">Tuyển Dụng</a>
                        </li>
                        <li>
                            <a href="./nhuongquyen.php">Nhượng Quyền</a>
                        </li>
                        <li>
                            <a href="./uudaithanhvien.php">Ưu đãi thành viên</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="lienhe-footer">
                <div class="title-footer"><h2>Liên Hệ</h2></div>
                <div class="word-footer">
                    <p>Trụ sở chính: 155 Phố Giảng Võ, quận </br> Đống Đa, TP Hà Nộ</p>
                    <p>Hotline: 0982.294.133</p>
                    <p>Email: feelingtea.marketing@gmail.com</p>
                </div>
            </div>
            <div class="ketnoi-footer">
                <div class="title-footer"><h2>Kết nối</h2></div>
                <div id="link">
                    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>                   
                    <a href="https://twitter.com/" class="fa fa-twitter"></a>
                    <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
                    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</html>


<?php
// Kiểm tra xem biểu mẫu đã được gửi chưa
if($_SERVER["REQUEST_METHOD"] == "POST"){
     // Kiểm tra xem tệp đã được tải lên mà không có lỗi hay không
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Xác minh phần mở rộng tệp
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Lỗi: Vui lòng chọn định dạng tệp hợp lệ.");
    
        // Xác minh kích thước tệp - tối đa 5MB
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Lỗi: Kích thước tệp lớn hơn giới hạn cho phép.");
    
        // Xác minh loại MIME của tệp
        if(in_array($filetype, $allowed)){
            // Kiểm tra xem tệp có tồn tại hay không trước khi tải lên
            if(file_exists("upload/" . $filename)){
                echo $filename . " đã tồn tại.";
            } else{
				//echo $_FILES["photo"]["tmp_name"];
				if(move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename)){ // có thể có lỗi
					echo "Tệp của bạn đã được tải lên thành công.";
				}else{
					echo "Lỗi: không thể di chuyển tệp đến upload/";
				}
            } 
        } else{
            echo "Lỗi: Đã xảy ra sự cố khi tải tệp của bạn lên. Vui lòng thử lại."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
?>