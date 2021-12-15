
<?php

$sql = "SELECT * FROM sanpham INNER JOIN danhmucsp ON sanpham.id_danhmuc=danhmucsp.id_dm_sp 
ORDER BY id_dm_sp ASC";
$query = mysqli_query($conn, $sql);
?>
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Quản lý sản phẩm</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Quản lý sản phẩm</a></li>
                                    <li class="active">Hiển thị </li>
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
                            <a href="quantri.php?page_layout=quanlysanphamadd"><button type="button" class="btn btn-primary btn-sm" style="float:right;">Thêm</button></a>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr >
                                            <th>Mã sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Tình trạng</th>
                                            <th>Đơn giá</th>
                                          
                                            <th>Ảnh</th>
                                            <th>Chi tiết sản phẩm</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                while ($row = mysqli_fetch_array($query)){ 
                                ?>
                                   <tr> 
                                 
                                    <td> <?php echo $row['id_sp']?></td>
                                    <td><?php echo $row['ten_sp']?></td>
                                    <td> <?php echo $row['tinh_trang']?></td>
                                    <td> <?php echo $row['don_gia']?></td>
                        
                                    <td style="text-align:center;"><img width="100px" src="pictures/<?php echo $row['anh_sp']?>"></td>
                                    <td><a href="quantri.php?page_layout=quanlysanphamchitiet&id_sp=<?php echo $row['id_sp'];?>"><button type="button" class="btn btn-link">Xem</button></a></td>
                                    <td><a href="quantri.php?page_layout=quanlysanphamedit&id_sp=<?php echo $row['id_sp'];?>"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a>
                                    <a href="controller/sanpham-remove-controller.php?id_sp=<?php echo $row['id_sp'];?>"> <button type="button" class="btn btn-warning btn-sm" onclick="remove(this)">Xoá</button></a>
                                    </td>
                                    </tr>
                                    <?php
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

