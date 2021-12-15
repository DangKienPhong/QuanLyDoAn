
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/banner/banner5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                    <h2>Đăng ký</h2>
                        <div class="breadcrumb__option">
                        <a href="./index.php">Trang chủ</a>
                            <span>Đăng ký</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

   

    <!-- Map Begin -->
    <!-- <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d491111.391711087041!2d-811.4181177912111099!3d39.1199774179711148!2m3!1f0!2f0!3f0!3m2!1i1024!2i7118!4f13.1!3m3!1m2!1s0x8811ca48c841038a1%3A0x70cfba911bf847f0!2sPlainfield%2C%20IN%2C%20USA!5e0!3m2!1sen!2sbd!4v1581110111173811!5m2!1sen!2sbd"
            height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>New York</h4>
                <ul>
                    <li>Phone: +12-345-11789</li>
                    <li>Add: 111 Creek Ave. Farmingdale, NY</li>
                </ul>
            </div>
        </div>
    </div> -->
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Đăng ký</h2>
                    </div>
                </div>
            </div>
            
<?php



if(isset($_POST['submit'])){
    $ten_user=$_POST['ten_user'];
    $mat_khau=md5($_POST['mat_khau']);
    $so_dien_thoai=$_POST['so_dien_thoai'];
    $email=$_POST['email'];
    $dia_chi=$_POST['dia_chi'];
    if(isset($ten_user)&&isset($mat_khau)&&isset($so_dien_thoai)&&isset($email)&&isset($dia_chi)){
        $sql="INSERT INTO users (ten_user,mat_khau,so_dien_thoai,email,dia_chi) VALUES ('$ten_user','$mat_khau','$so_dien_thoai','$email','$dia_chi')";
        $query = mysqli_query($conn, $sql);
        header("location:index.php?page_layout=login");
        
    }
    else{
        echo' <center class="alert alert-danger">Bạn chưa điền đầy đủ thông tin</center>';
     }
}

?>
            <form method="post">
                <div class="row">
                    <div class="col-lg-11 col-md-11">
                        <span style="font-size:30px;">Tên tài khoản: </span>
                        <input type="text"  name="ten_user"required="required">
                    </div>
                    <div class="col-lg-11 col-md-11">
                    <span style="font-size:30px;">Email: </span>
                        <input type="email" name="email"required="required">
                    </div>
                    <div class="col-lg-11 col-md-11">
                    <span style="font-size:30px;">Mật khẩu: </span>
                        <input type="password" name="mat_khau"required="required">
                    </div>
                    <!-- <div class="col-lg-11 col-md-11">
                    <span style="font-size:30px;">Nhập lại mật khẩu: </span>
                        <input type="password" placeholder="Nhập lại mật khẩu">
                    </div> -->
                    <div class="col-lg-11 col-md-11">
                    <span style="font-size:30px;">Số điện thoại: </span>
                        <input type="text" name="so_dien_thoai">
                    </div>
                    <div class="col-lg-11 col-md-11">
                    <span style="font-size:30px;">Địa chỉ: </span>
                        <input type="text"name="dia_chi">
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" name="submit" class="site-btn">Đăng ký</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->
 <!-- Contact Section Begin -->

    <!-- Contact Section End -->
