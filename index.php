<?php 
    include("../hocphp/connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trà Sữa</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<?php
  $sql = "SELECT * FROM tb_sanpham WHERE id='1'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["ten"]. " " . $row["price"]. $row["image"]. "<br>";
     
  ?>




<header> 
<nav class="navbar navbar-expand-sm navbar-light bg-light ">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./cauchuyenthuonghieu.php">câu chuyện thương hiệu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./thucdon.php">thực đơn</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">tin tức</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">khuyến mãi</a></li>
            <li><a class="dropdown-item" href="#">khám phá menu Feeling Tea</a></li>
            <li><a class="dropdown-item" href="#">thông tin công ty</a></li>
          </ul>
        <li class="nav-item">
          <a class="nav-link" href="./cuahang.php">hệ thống cửa hàng</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link" href="./tuyendung.php">tuyển dụng</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link" href="./nhuongquyen.php">nhượng quyền</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link" href="./uudaithanhvien.php">ưu đãi thành viên</a>
        </li>  
      
        </li>
      </ul>
    </div>
  </div>
</nav>
        
<div class="bss-slides demo1" tabindex="1" autofocus="autofocus">
            <figure>
		      <img src="./img/banner.jpg" width="100%" height="300px"/><figcaption><a href="https://www.flickr.com/photos/thomashawk/14586158819/"></a>.</figcaption> 
            </figure>
            <figure>
		      <img src="./img/banner2.jpg" width="100%"   height="300px" /><figcaption> <a href="https://www.flickr.com/photos/stuckincustoms/88370744"></a>.</figcaption> 
            </figure>
            <figure>
		      <img src="./img/banner3.jpg" width="100%"  height="300px"/><figcaption><a href="https://www.flickr.com/photos/davesoldano/8572429635"></a>.</figcaption> 
            </figure>
     
            </figure>
        </div> <!-- // bss-slides -->
<script src="https://leemark.github.io/better-simple-slideshow/demo/js/hammer.min.js"></script><!-- for swipe support on touch interfaces -->
   
<script>
  var makeBSS = function (el, options) {
    var $slideshows = document.querySelectorAll(el), // a collection of all of the slideshow
        $slideshow = {},
        Slideshow = {
            init: function (el, options) {
                this.counter = 0; // to keep track of current slide
                this.el = el; // current slideshow container    
                this.$items = el.querySelectorAll('figure'); // a collection of all of the slides, caching for performance
                this.numItems = this.$items.length; // total number of slides
                options = options || {}; // if options object not passed in, then set to empty object 
                options.auto = options.auto || false; // if options.auto object not passed in, then set to false
                this.opts = {
                    auto: (typeof options.auto === "undefined") ? false : options.auto,
                    speed: (typeof options.auto.speed === "undefined") ? 1500 : options.auto.speed,
                    pauseOnHover: (typeof options.auto.pauseOnHover === "undefined") ? false : options.auto.pauseOnHover,
                    fullScreen: (typeof options.fullScreen === "undefined") ? false : options.fullScreen,
                    swipe: (typeof options.swipe === "undefined") ? false : options.swipe
                };
                
                this.$items[0].classList.add('bss-show'); // add show class to first figure 
                this.injectControls(el);
                this.addEventListeners(el);
                if (this.opts.auto) {
                    this.autoCycle(this.el, this.opts.speed, this.opts.pauseOnHover);
                }
                if (this.opts.fullScreen) {
                    this.addFullScreen(this.el);
                }
                if (this.opts.swipe) {
                    this.addSwipe(this.el);
                }
            },
            showCurrent: function (i) {
                // increment or decrement this.counter depending on whether i === 1 or i === -1
                if (i > 0) {
                    this.counter = (this.counter + 1 === this.numItems) ? 0 : this.counter + 1;
                } else {
                    this.counter = (this.counter - 1 < 0) ? this.numItems - 1 : this.counter - 1;
                }

                // remove .show from whichever element currently has it 
                // http://stackoverflow.com/a/16053538/2006057
                [].forEach.call(this.$items, function (el) {
                    el.classList.remove('bss-show');
                });
  
                // add .show to the one item that's supposed to have it
                this.$items[this.counter].classList.add('bss-show');
            },
            injectControls: function (el) {
            // build and inject prev/next controls
                // first create all the new elements
                var spanPrev = document.createElement("span"),
                    spanNext = document.createElement("span"),
                    docFrag = document.createDocumentFragment();
        
                // add classes
                spanPrev.classList.add('bss-prev');
                spanNext.classList.add('bss-next');
        
                // add contents
                spanPrev.innerHTML = '&laquo;';
                spanNext.innerHTML = '&raquo;';
                
                // append elements to fragment, then append fragment to DOM
                docFrag.appendChild(spanPrev);
                docFrag.appendChild(spanNext);
                el.appendChild(docFrag);
            },
            addEventListeners: function (el) {
                var that = this;
                el.querySelector('.bss-next').addEventListener('click', function () {
                    that.showCurrent(1); // increment & show
                }, false);
            
                el.querySelector('.bss-prev').addEventListener('click', function () {
                    that.showCurrent(-1); // decrement & show
                }, false);
                
                el.onkeydown = function (e) {
                    e = e || window.event;
                    if (e.keyCode === 37) {
                        that.showCurrent(-1); // decrement & show
                    } else if (e.keyCode === 39) {
                        that.showCurrent(1); // increment & show
                    }
                };
            },
            autoCycle: function (el, speed, pauseOnHover) {
                var that = this,
                    interval = window.setInterval(function () {
                        that.showCurrent(1); // increment & show
                    }, speed);
                
                if (pauseOnHover) {
                    el.addEventListener('mouseover', function () {
                        interval = clearInterval(interval);
                    }, false);
                    el.addEventListener('mouseout', function () {
                        interval = window.setInterval(function () {
                            that.showCurrent(1); // increment & show
                        }, speed);
                    }, false);
                } // end pauseonhover
                
            },
            addFullScreen: function(el){
                var that = this,
                fsControl = document.createElement("span");
                
                fsControl.classList.add('bss-fullscreen');
                el.appendChild(fsControl);
                el.querySelector('.bss-fullscreen').addEventListener('click', function () {
                    that.toggleFullScreen(el);
                }, false);
            },
            addSwipe: function(el){
                var that = this,
                    ht = new Hammer(el);
                ht.on('swiperight', function(e) {
                    that.showCurrent(-1); // decrement & show
                });
                ht.on('swipeleft', function(e) {
                    that.showCurrent(1); // increment & show
                });
            },
            toggleFullScreen: function(el){
                // https://developer.mozilla.org/en-US/docs/Web/Guide/API/DOM/Using_full_screen_mode
                if (!document.fullscreenElement &&    // alternative standard method
                    !document.mozFullScreenElement && !document.webkitFullscreenElement &&   
                    !document.msFullscreenElement ) {  // current working methods
                    if (document.documentElement.requestFullscreen) {
                      el.requestFullscreen();
                    } else if (document.documentElement.msRequestFullscreen) {
                      el.msRequestFullscreen();
                    } else if (document.documentElement.mozRequestFullScreen) {
                      el.mozRequestFullScreen();
                    } else if (document.documentElement.webkitRequestFullscreen) {
                      el.webkitRequestFullscreen(el.ALLOW_KEYBOARD_INPUT);
                    }
                } else {
                    if (document.exitFullscreen) {
                      document.exitFullscreen();
                    } else if (document.msExitFullscreen) {
                      document.msExitFullscreen();
                    } else if (document.mozCancelFullScreen) {
                      document.mozCancelFullScreen();
                    } else if (document.webkitExitFullscreen) {
                      document.webkitExitFullscreen();
                    }
                }
            } // end toggleFullScreen
            
        }; // end Slideshow object 
        
    // make instances of Slideshow as needed
    [].forEach.call($slideshows, function (el) {
        $slideshow = Object.create(Slideshow);
        $slideshow.init(el, options);
    });
};
var opts = {
    auto : {
        speed : 5000, 
        pauseOnHover : true
    },
    fullScreen : true, 
    swipe : true
};
makeBSS('.demo1', opts);
</script>
</header>

<body>
    <div class="container">
        <div class="seller">
            <div class="seller-1">
                <div>
                    <h3 class="sl">Best Seller</h3>
                </div>
                <div >
                    <button  class="xemmenu" href="">Xem thêm tất cả menu</button>
                </div>
            </div>

            <div class="seller-2">
                <div class="detail-seller">
                    <div class="image-seller"><img src="./img/cocodao.jpg" alt=""></div>
                    <div class="detail-item">
                        <span class="name-product">COCO ĐÀO MẬT <?php echo $row["ten"] ;}} else {
                            echo "0 results";
                          }
                        ?> </span>
                        <h3  class="price">40.000₫</h3>
                        <button class="btn-seller">Xem thêm</button>
                    </div>
                 </div>
              
                 <div class="detail-seller">
                    <div class="image-seller"><img src="./img/MATCHA-COCO-ĐÀO.jpg" alt=""></div>
                    <div class="detail-item" >
                    <span class="name-product">Matcha Coco Đào</span>
                        <h3 class="price">50.000₫</h3>
                        <button class="btn-seller">Xem thêm</button>
                    </div>
                 </div>

                 <div class="detail-seller">
                    <div class="image-seller"><img src="./img/COOKIE.jpg" alt=""></div>
                    <div class="detail-item">
                    <span class="name-product">Trà sữa Cookie</span>
                        <h3 class="price">30.000₫</h3>
                        <button class="btn-seller">Xem thêm</button>
                    </div>
                 </div>


                 <div class="detail-seller">
                    <div class="image-seller"><img src="./img/CHOCOLATE.jpg" alt=""></div>
                    <div class="detail-item">
                    <span class="name-product">Chocolate sữa tươi trân châu đường đen</span>
                        <h3 class="price">48.000₫</h3>
                        <button class="btn-seller">Xem thêm</button>
                    </div>
                 </div>
            </div>

            <div class="seller-2">
                <div class="detail-seller">
                    <div class="image-seller"><img src="./img/matcha.jpg" alt=""></div>
                    <div class="detail-item">
                        <span class="name-product">Matcha sữa tươi trân châu đường đen</span>
                        <h3 class="price">48.000₫</h3>
                        <button class="btn-seller">Xem thêm</button>
                    </div>
                 </div>

                 <div class="detail-seller">
                    <div class="image-seller"><img src="./img/sưa-tuoi-tc-đường-đen.jpg" alt=""></div>
                    <div class="detail-item">
                    <span class="name-product">Sữa tươi trân châu đường đen</span>
                        <h3 class="price">48.000₫</h3>
                        <button class="btn-seller">Xem thêm</button>
                    </div>
                 </div>

                 <div class="detail-seller">
                    <div class="image-seller"><img src="./img/xanh-sữa.jpg" alt=""></div>
                    <div class="detail-item">
                    <span class="name-product">Trà xanh nhài sữa</span>
                        <h3 class="price">23.000₫</h3>
                        <button class="btn-seller">Xem thêm</button>
                    </div>
                 </div>


                 <div class="detail-seller">
                    <div class="image-seller"><img src="./img/hồng-sữa.jpg" alt=""></div>
                    <div class="detail-item">
                    <span class="name-product">Trà hồng sữa</span>
                        <h3 class="price">23.000₫</h3>
                        <button class="btn-seller">Xem thêm</button>
                    </div>
                 </div>
            </div>
        </div>

        <div class="cuahang">  
          <div> 
                    <h3 class="st">Cửa hàng</h3>
          </div>  
          
        <div style="margin-top:30px">
          <img src="./img//banner4.jpg" alt="">
        </div>
        </div>

        <div class="tintuc">
        <div class="tintuc-title"> 
           <h3 class="tt">Tin tức</h3>
          <div >
                 <button  class="btn-xemtin" href="">Xem thêm </button>
           </div>
        </div>  
          
        <div class="container-tintuc" >
            <div class="content-tintuc">
                <div class="imgnewss">
                <img src="./img/news1.jpg" class="imgnews"  alt="">
                </div>
                <div class="detail-news">
                <span class="h4-new">Khám phá menu Feeling Tea, khuyến mãi, thông tin công ty</span>
                <h4 class="h4-new">NGÀY HỘI THÀNH VIÊN FEELING TEA – ĐỒNG GIÁ 19K</h4>
                <span class="name-product">04/04/2022</span>
                <p>Chương trình đặc biệt dành tặng thành viên Feeling Tea ĐỒNG GIÁ 19K (Thứ 3 và thứ 4 hàng tuần) Thứ 3: Áp dụng</p>
                <button class="btn-news">Xem thêm</button>
                </div>
            </div>
            
            
            
            <div class="content-tintuc">
                <div class="imgnews">
                <img src="./img/news2.jpg" class="imgnews" alt="">
                </div>
                <div class="detail-news">
                <span class="h4-new">Bài viết</span>
                <h4 class="h4-new">TRÀ SỮA CÔNG NGHỆ AI ĐẦU TIÊN TẠI VIỆT NAM</h4>
                <span>18/03/2022</span>
                <p>Công nghệ AI (Artificial Intelligence) – vốn được coi là ngành công nghệ phát triển tương lai, hiện đang là công nghệ được quan</p>
                <button class="btn-news">Xem thêm</button>
                </div>
            </div>

            <div class="content-tintuc">
                <div class="imgnews">
                <img src="./img/news3.jpg" class="imgnews" alt="">
                </div>
                <div class="detail-news">
                <span class="h4-new" > Bài viết</span>
                <h4 class="h4-new">TUYỆT ĐỈNH LÌ XÌ – TẾT THÊM NHƯ Ý CÙNG FEELING TEA</h4>
                <span>14/02/2022</span>
                <p>Đón lộc xuân cùng Feeling Tea, rút lì xì 100% trúng cho Tết thêm rộn rã Với hóa đơn 49k, khách được 1 lần</p>
                <button class="btn-news">Xem thêm</button>
                </div>
            </div>

            
        </div>
             
        <div class="container-tintuc" >
            <div class="content-tintuc">
                <div class="imgnewss">
                <img src="./img/news4.jpg" class="imgnews"  alt="">
                </div>
                <div class="detail-news">
                <span class="h4-new">khuyến mãi</span>
                <h4 class="h4-new">SUPER SALE 11.11 – MUA 1 TẶNG 1 CÙNG FEELING TEA</h4>
                <span>08/11/2021</span>
                <p>Tuần lễ ” Độc thân nhưng không đơn độc” với ưu đãi siêu bất ngờ từ Feeling Tea – SUPER SALE 11.11. Dù một</p>
                <button class="btn-news">Xem thêm</button>
                </div>
            </div>
            
            
            
            <div class="content-tintuc">
                <div class="imgnews">
                <img src="./img/news5.jpg" class="imgnews" alt="">
                </div>
                <div class="detail-news">
                <span class="h4-new">Bài viết, thông tin công ty</span>
                <h4 class="h4-new">5 lý do để gia nhập nhóm cửa hàng Feeling Tea ngay</h4>
                <span>12/10/2021</span>
                <p>Quét mã QR để tham gia ngay nhóm cửa hàng Feeling Tea “guột” của bạn với cực kì nhiều tiện lợi: Lợi ích Đặt</p>
                <button class="btn-news">Xem thêm</button>
                </div>
            </div>

            <div class="content-tintuc">
                <div class="imgnews">
                <img src="./img/news6.jpg" class="imgnews" alt="">
                </div>
                <div class="detail-news">
                <span class="h4-new">FeelingTea, thông tin công ty, Tin tứcy</span>
                <h4 class="h4-new">Tôn vinh Chi nhánh Feeling Tea xuất sắc nhất quý 1 – 2022</h4>
                <span>04/04/2022</span>
                <p>Ngày 21/4/2022, Feeling Tea long trọng tổ chức lễ trao giải nhằm tôn vinh các chi nhánh có thành tích xuất sắc trong quý</p>
                <button class="btn-news">Xem thêm</button>
                </div>
            </div>

            
        </div>

        <div class="nhuongquyen">
             <div ><h3 class="nq">Nhượng quyền</h3></div> 
             <img  class="imgnhuongquyen" src="./img/nhuong-quyen.jpg" alt="" >            
        </div>
    </div>

    
</body>

<footer >
    <div class="container-footer">
                        <p>hello</p>
    </div>
</footer>
</html>