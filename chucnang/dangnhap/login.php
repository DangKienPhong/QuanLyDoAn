

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/banner/banner5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                    <h2>Đăng nhập</h2>
                        <div class="breadcrumb__option">
                        <a href="./index.php">Trang chủ</a>
                            <span>Đăng nhập</span>
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
                        <h2>Đăng nhập</h2>
                    </div>
                </div>
            </div>
            <?php
if (isset($_POST['submit'])) {
    $username = $_POST["txt_email"];
    $passwd = $_POST["txt_password"];
    if (isset($username) && isset($passwd)) {
        $sql = "SELECT * FROM users WHERE email = '$username' AND mat_khau = '$passwd'";
        $query = mysqli_query($conn, $sql);
        $data=mysqli_fetch_assoc($query);

        $rows = mysqli_num_rows($query);
        if ($rows > 0) {
            session_start();
            $_SESSION['user'] = $data;
            header("Location: ././index.php");
        } 
        else{
           echo' <center class="alert alert-danger">Tài khoản hoặc mặt khẩu không tồn tại</center>';
        }
    }
    else{
        echo'<script>
          alert("Hello! I am an alert box!");
        </script>';
    }
   
}
?>
            <form method="post">
                <div class="row">
                    <div class="col-lg-11 col-md-11">
                        <span style="font-size:30px;">Tên tài khoản: </span>
                        <input type="email" placeholder="Tên" name="txt_email" required="required">
                    </div>
                    <div class="col-lg-11 col-md-11">
                    <span style="font-size:30px;">Mật khẩu: </span>
                        <input type="password" placeholder="Mật khẩu" name="txt_password"  required="required">
                    </div>
                    <div class="col-lg-11 text-right">
                   <p><a href="">Quên mật khẩu</a></p>
                    </div>

<!--                    
-->                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" name="submit" class="site-btn">Đăng nhập</button>
                    </div>
                    </div>
                    
                </div>
            </form><!--
        </div> -->

    <!-- Contact Form End -->
 <!-- Contact Section Begin -->

    <!-- Contact Section End -->
