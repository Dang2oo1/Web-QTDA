<?php 
    include("./connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhượng quyền</title>
    <link href="./thucdon.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/13f561a656.js"></script>
    <link rel="stylesheet" href="./Font-Awesomecss/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>


<?php
  $sql = "SELECT * FROM tb_sanpham ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($rows = $result->fetch_assoc()) {
    //     $rows = $result->fetch_assoc();
    //     echo "<table>";
    //     foreach($rows as $row){}
    // // $row = array();
    // //     while($row[] = mysql_fetch_array($result)){
    // }
  ?>




<body>
    <div class="container">
        <img src="./img/banner thucdon.jpg" alt="" width="1349px" height="405px">
        <div>
            <div class="icon">
            <a class="a-icon" href="./index.php">  <i class="fa-solid fa-house" style="color:#FB9D43 " ></i></a> <span class="span-icon">| Thực đơn</span>
            </div>
        </div>
        
        <div class="menu">
            <div class="menu-left">
                <div class="details-menu-left">
                    <label for="">CÀ PHÊ</label>
                </div>
                <div class="details-menu-left">
                    <label for="">SINH TỐ</label>
                </div>
                <div class="details-menu-left">
                    <label for="">SPECIAL DRINK</label>
                </div >
                <div class="details-menu-left">
                    <label for="">SUMMER DRINK</label>
                </div>
                <div class="details-menu-left">
                    <label for="">TOPPING LOVER</label>
                </div>
                <div class="details-menu-left">
                    <label for="">TRÀ KEM MẶN</label>
                </div>
                <div class="details-menu-left">
                    <label for="">TRÀ SỮA</label>
                </div>
                <div class="details-menu-left">
                    <label for="">TRÀ SỮA TƯƠI</label>
                </div >
                <div class="details-menu-left">
                    <label for="">TRÂN TRÂU ĐƯỜNG ĐEN</label>
                </div>
                <div class="details-menu-left">
                    <label for="">TRÀ HOA QUẢ</label>
                </div>
                <div class="details-menu-left">
                    <label for="">TRÀ</label>
                </div>
                <div class="details-menu-left">
                    <label for="">TRÀ SỮA TƯƠI NHÂN HOA QUẢ</label>
                </div>
                <div class="details-menu-left">
                    <label for="">ĐÁ NHUYỄN</label>
                </div >
                <div class="details-menu-left">
                    <label for="">ĐỒ UỐNG NÓNG</label>
                </div>
                <div class="details-menu-left">
                    <label for="">ĐỒ ĂN</label>
                </div>
            </div>
            <div class="menu-right">
                <h2 class="h2-menu">MENU</h2>
                <div class="all-menu-right">
                    <div class="details-menu-right">
                        <div class="anh-menu">
                            <img src="./img/Trà-bá-tước-sữa.jpg" alt="" width="228px" height="325px">
                        </div>
                        <div class="title-menu-right">
                            <div class="title1-menu-right">
                                <h2><?php echo $row["ten"];?></h2>
                                <h3><?php echo $row["price"];}}?></h3>
                            </div>
                            <div class="title2-menu-right">
                                <button>Xem thêm</button>
                            </div>
                        </div>
                    </div>

                    <div class="details-menu-right">
                        <div class="anh-menu">
                            <img src="./img/Trà-Olong-sữa.jpg" alt="" width="228px" height="325px">
                        </div>
                        <div class="title-menu-right">
                            <div class="title1-menu-right">
                                <h2>Trà ô long sữa</h2>
                                <h3>30.000₫</h3>
                            </div>
                            <div class="title2-menu-right">
                                <button>Xem thêm</button>
                            </div>
                        </div>
                    </div>

                    <div class="details-menu-right">
                        <div class="anh-menu">
                            <img src="./img/hồng-sữa.jpg" alt="" width="228px" height="325px">
                        </div>
                        <div class="title-menu-right">
                            <div class="title1-menu-right">
                                <h2>Trà hồng sữa</h2>
                                <h3>30.000₫</h3>
                            </div>
                            <div class="title2-menu-right">
                                <button>Xem thêm</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="all-menu-right">
                    <div class="details-menu-right">
                        <div class="anh-menu">
                            <img src="./img/xanh-sữa.jpg" alt="" width="228px" height="325px">
                        </div>
                        <div class="title-menu-right">
                            <div class="title1-menu-right">
                                <h2>Trà xanh nhài sữa</h2>
                                <h3>23.000₫</h3>
                            </div>
                            <div class="title2-menu-right">
                                <button>Xem thêm</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>