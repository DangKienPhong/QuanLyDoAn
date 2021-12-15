

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Trang chủ</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
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

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Danh sách sản phẩm</strong>&nbsp;
                            </div>
                            <div class="card-body">
                            <a href="quanly-sanpham-add.php"><button type="button" class="btn btn-primary btn-sm" style="float:right;">Thêm</button></a>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Ngày nhập</th>
                                            <th>Loại sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>
                                            <th>Tình trạng</th>
                                            <th>Chi tiết sản phẩm</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $arrStt = array(1, 2, 3, 4, 5, 6);
                                    $arrMa = array("012340", "012341", "012342", "012343", "012344", "012345");
                                    $arrTen = array("Very Easy Toeic 2 - Build Up", "3000 Từ Vựng Tiếng Anh Thông Dụng Nhất", "Hackers Ielts Speaking", "Bài Tập Từ Vựng Tiếng Anh Cơ Bản - Tập 2", "Lessons For Ielts Reading (Tái Bản 2018)", "Động Từ Bất Quy Tắt & Kiến Thức Anh Văn Căn Bản");
                                    $arrNgayNhap = array("20/08/2021", "12/07/2020", "24/11/2020", "23/08/2021", "26/10/2020", "26/6/2020	");
                                    $arrLoai = array("Tiếng Anh", "Tiếng Anh", "Tiếng Anh", "Tiếng Anh", "Tiếng Anh", "Tiếng Anh	");
                                    $arrSoLuong = array("30","20","30","0","0","40");
                                    $arrDonGia = array("₫142.000","₫128.000", "₫140.000", "₫76.000", "₫162.000", "₫230.000");
                                    for($i=0;$i<count($arrStt);$i++){
                                        echo ' <tr>';
                                        echo ' <td>' . $arrStt[$i] . '</td>';
                                        echo  ' <td>' . $arrMa[$i] . '</td>';
                                        echo ' <td>' . $arrTen[$i] . '</td>';
                                        echo ' <td>' . $arrNgayNhap[$i] . '</td>';
                                        echo ' <td>' . $arrLoai[$i] . '</td>';
                                        echo ' <td>' . $arrSoLuong[$i] . '</td>';
                                        echo ' <td>' . $arrDonGia[$i] . '</td>';
                                        //Tình trạng
                                        if($arrStt[$i]==4){
                                            echo '<td><button type="button" class="btn btn-danger btn-sm">Hết Hàng</button></td>';
                                            }
                                            else{
                                                echo '<td><button type="button" class="btn btn-success  btn-sm">Còn Hàng</button></td>';
                                            }
                                        //Chi tiết sản phẩm
                                        echo ' <td><a href="quanly-sanpham-chitiet.php"><button type="button" class="btn btn-link">Xem</button></a></td>';
                                        //Hành động
                                        echo '<td><a href="quanly-sanpham-edit.php"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a>
                                                <button type="button" class="btn btn-warning btn-sm"onclick="remove(this)">Xoá</button>
                                            </td>';
                                        echo '</tr>';
                                       
                                        }
    
                                    ?>
                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>


                </div>
                <?php include "layout/buttonbackpage.php"; ?>
            </div><!-- .animated -->
        </div><!-- .content -->
