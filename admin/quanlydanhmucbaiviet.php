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
                                <h1>Quản lý danh mục bài viết</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Quản lý danh mục bài viết</a></li>
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
                                <strong class="card-title">Danh mục bài viết</strong>&nbsp;
                            </div>
                            <div class="card-body">
                                <a href="quanly-danhmuc-add.php"><button type="button" class="btn btn-primary btn-sm" style="float:right;">Thêm</button></a>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã danh mục</th>
                                            <th>Tên danh mục</th>
                                            <th>Mô tả</th>                                         
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $arrStt = array(1, 2, 3, 4);
                                        $arrMa = array("100046", "100047", "100048", "100049");
                                        $arrTen = array("Lịch phát hành", "Review sách", "Tin tức nổi bật", "Các Blog nổi bật");
                                        for ($i = 0; $i < count($arrStt); $i++) {
                                            echo ' <tr>';
                                            echo ' <td>' . $arrStt[$i] . '</td>';
                                            echo ' <td>' . $arrMa[$i] . '</td>';
                                            echo ' <td>' . $arrTen[$i] . '</td>';                                                                                    
                                            echo ' <td><a href="quanlydanhmucbaivietchitiet.php"><button type="button" class="btn btn-link">Xem chi tiết</button></a></td>';
                                            echo '<td><a href="quanlydanhmucbaivietedit.php"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a>
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

<?php include "layout/footerpage.php"; ?>


    </body>

</html>