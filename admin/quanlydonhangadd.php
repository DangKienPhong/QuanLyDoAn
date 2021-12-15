<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <?php include "layout/headerpage.php"; ?>

</head>

<body>
    <!-- Left Panel -->
    <?php include "layout/headerpannel.php"; ?>

    <!-- Header-->

    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Quản lý đơn hàng</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Quản lý đơn hàng</a></li>
                                <li class="active">Thêm đơn hàng</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Thêm đơn hàng</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="controller/donhangaddcontroller.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã đơn hàng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="txt_ma" placeholder="Nhập mã đơn hàng" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Tên khách hàng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="txt_ten" placeholder="Nhập tên khách hàng" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="datetime-input" class=" form-control-label">Ngày lập</label></div>
                                    <div class="col-12 col-md-9"><input type="datetime-local" id="date-input" name="txt_ngaylap" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="datetime-input" class=" form-control-label">Ngày giao</label></div>
                                    <div class="col-12 col-md-9"><input type="datetime-local" id="date-input" name="txt_ngaygiao" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nơi giao</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="txt_noigiao" placeholder="Nhập nơi giao" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Hình thức thanh toán</label></div>
                                    <div class="col col-md-9">
                                        <div class="form-check">
                                            <div class="radio">
                                                <label for="radio1" class="form-check-label ">
                                                    <input type="radio" id="radio1" name="rd_thanhtoan" checked value="Tiền mặt" class="form-check-input">Tiền mặt
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio2" class="form-check-label ">
                                                    <input type="radio" id="radio2" name="rd_thanhtoan" value="Chuyển khoản" class="form-check-input">Chuyển khoản
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Tình trạng</label></div>
                                    <div class="col-12 col-md-9">

                                        <select name="sel_tinhtrang" class="form-control">
                                            <option value="0" disabled selected hidden>Chọn tình trạng</option>
                                            <?php
                                            $arrSoThich = array("1" => "Đã giao hàng", "2" => "Chưa xử lý");
                                            foreach ($arrSoThich as $key => $value) {
                                                if ($key == "1")
                                                    echo '<option value="' . $value . '"selected="selected">' . $value . '</option>';
                                                else
                                                    echo '<option value="' . $value . '"">' . $value . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Sản phẩm</label></div>
                                    <div class="col-12 col-md-9">

                                        <select name="sel_sanpham" class="form-control">
                                            <option value="0" disabled selected hidden>Chọn sản phẩm</option>
                                            <?php
                                            $arrSoThich = array("1" => "Very Easy Toeic 2 - Build Up", "2" => "3000 Từ Vựng Tiếng Anh Thông Dụng Nhất");
                                            foreach ($arrSoThich as $key => $value) {
                                                if ($key == "1")
                                                    echo '<option value="' . $value . '"selected="selected">' . $value . '</option>';
                                                else
                                                    echo '<option value="' . $value . '"">' . $value . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="number-input" class=" form-control-label">Số lượng</label></div>
                                    <div class="col-12 col-md-9"><input type="number" id="number-input" name="txt_soluong" placeholder="Nhập số lượng" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="number-input" class=" form-control-label">Xử lý </label></div>
                                    <div class="col-12 col-md-9">  <button type="button" class="btn btn-primary"onclick="myCreateFunction()">
                                        <i class="fa ti-plus"></i> Thêm vào thông tin chi tiết đơn hàng
                                    </button></div>
                                </div>
                              
                                <div class="row form-group">
                                    <table id="myTable" class="table table-striped table-bordered" role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr>
                                                <td colspan="5" style="text-align:center;"><b><h3>Thông tin chi tiết đơn hàng</b></h3></td>
                                            
                                            </tr>
                                            <tr role="row">
                                                <th class="sorting col-md-1">STT</th>
                                                <th class="sorting_asc col-md-2">Mã sản phẩm</th>
                                                <th class="sorting_asc col-md-4">Tên sản phẩm</th>
                                                <th class="sorting col-md-2">Số lượng</th>
                                                <th class="sorting col-md-2">Giá tiền</th>
                                                <th class="sorting col-md-2">Hành động</th>
                                        </thead>
                                        <tbody>
                                     
                                            <tr>
                                                <td>1</td>
                                                <td>012340</td>
                                                <td>3000 Từ Vựng Tiếng Anh Thông Dụng Nhất</td>
                                                <td>1</td>
                                                <td>₫128.000</td>
                                                <td><a href=""><button type="button" class="btn btn-secondary btn-sm"onclick="fnselect()">Chọn</button></a>
                                                 <button type="button" class="btn btn-warning btn-sm"onclick="remove(this)">Xoá</button>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>012341</td>
                                                <td>Very Easy Toeic 2 - Build Up</td>
                                                <td>2</td>
                                                <td>₫142.000</td>
                                                <td><a href=""><button type="button" class="btn btn-secondary btn-sm">Chọn</button></a>
                                                 <button type="button" class="btn btn-warning btn-sm"onclick="remove(this)">Xoá</button>  
                                            </tr>
                                            <tr>
                                                <td colspan="5"><b>Tổng tiền</b></td>
                                                <td colspan="1"><input id="tongtien-input" name="txt_tongtien" placeholder="Nhập tổng tiền" class="form-control"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div style="float:right;">
                                    <button type="submit" class="btn btn-primary" name="bnt_XuLy" value="submit">
                                        <i class="fa ti-plus"></i> Thêm
                                    </button>
                                    <button type="reset" class="btn btn-warning" name="bnt_XuLy" value="reset">
                                        <i class="fa ti-reload"></i> Reset
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>



            </div>
            <?php include "layout/buttonbackpage.php"; ?>
        </div><!-- .animated -->
    </div><!-- .content -->

    <?php include "layout/footerpage.php"; ?>


</body>

</html>