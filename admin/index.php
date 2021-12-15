<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
   <?php include "layout/headerpage.php";?>

</head>

<body>
    <!-- Left Panel -->
    <?php include "layout/headerpannel.php";?>
   
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Quản lý người dùng</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Quản lý người dùng</a></li>
                                    <li class="active">Hiển thị</li>
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
                                <strong class="card-title">Người dùng</strong>&nbsp;
                            </div>
                            <div class="card-body">
                            <a href="quanlynguoidungadd.php"><button type="button" class="btn btn-primary btn-sm" style="float:right;">Thêm</button></a>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Mã khách hàng</th>
                                            <th>Tên khách hàng</th>
                                            <th>Email</th>
                                            <th>Số điện thoại</th>
                                            <th>Địa chỉ</th>
                                            <th>Chi tiết </th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $arrMa = array("100047", "100045", "100045", "100567", "100789", "100123");
                                        $arrTen = array("Trần Quốc Trọng", "Trần Quốc Trọng", "Trần Quốc Trọng", "Lê Thị Kim Ngân", "Lê Anh Phi", "Đặng Kiến Phong	");
                                        $arrEmail = array("Trần Quốc Trọng", "Trần Quốc Trọng", "Trần Quốc Trọng", "Lê Thị Kim Ngân", "Lê Anh Phi", "Đặng Kiến Phong	");
                                        $arrSDT = array("0971724748", "03675578654", "0971738454", "0369885566", "0971724748", "0971724225	");
                                        $arrDiachi = array("11.584.000", "3.200.000", "4.750.000", "3.750.000", "4.750.000", "4.750.000	");
                                    
                                    
                                        for($i=0;$i<count($arrMa);$i++){
                                        echo ' <tr>';
                                        echo  ' <td>' . $arrMa[$i] . '</td>';
                                        echo ' <td>' . $arrTen[$i] . '</td>';
                                        echo ' <td>' . $arrEmail[$i] . '</td>';
                                        echo ' <td>' . $arrSDT[$i] . '</td>';
                                        echo ' <td>' . $arrDiachi[$i] . '</td>';
                                      
                                    
                                    
                                        echo ' <td><a href="quanlynguoidungchitiet.php"><button type="button" class="btn btn-link">Xem</button></a></td>';
                                        echo '<td><a href="quanlynguoidungedit.php"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a>
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

        <?php include "layout/footerpage.php";?>


</body>

</html>