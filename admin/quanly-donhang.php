<?php

$sql = "SELECT * FROM donhang ORDER BY id_don_hang ASC";
$query = mysqli_query($conn, $sql);
?>
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
                            <strong class="card-title">Danh Sách Đơn Hàng</strong>&nbsp;
                        </div>
                        <div class="card-body">
                            <a href="quanlydonhangadd.php"><button type="button" class="btn btn-primary btn-sm" style="float:right;">Thêm</button></a>
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        
                                        <th>Mã đơn hàng</th>
                                        <th>Tên khách hàng</th>
                                        <th>Ngày đặt</th>
                                        <th>Số điện thoại</th>
                                        <th>Phương thức thanh toán</th>
                                        <th>Tổng thành tiền</th>
                                        <th>Trạng thái</th>
                                        <th>Chi tiết đơn hàng</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($query)){ 
                                ?>
                                   <tr> 
                                 
                                    <td> <?php echo $row['id_don_hang']?></td>
                                    <td><?php echo $row['ten_user']?></td>
                                    <td><?php echo $row['ngay_dat']?></td>
                                    <td><?php echo $row['so_dien_thoai']?></td>
                                    <td>

                                    <?php if($row['phuong_thuc_thanh_toan']=="COD")
                                    {
                                        ?>
                                            <button type="button" class="btn btn-success"> <?php echo $row['phuong_thuc_thanh_toan'];?></button>
                                        <?php
                                    } else if($row['phuong_thuc_thanh_toan']=="Banking")
                                    {
                                        ?>
                                        <button type="button" class="btn btn-primary"> <?php echo $row['phuong_thuc_thanh_toan'];?></button>
                                    <?php 
                                    }
                                    ?>

                                    </td>
                                    <td><?php echo $row['thanh_tien']?></td>
                                    
                                    <td> <?php if($row['trang_thai']=="Nhận đơn hàng"){
                                        ?>
                                            <button type="button" class="btn btn-success"> <?php echo $row['trang_thai']?></button>
                                        <?php
                                    } else if($row['trang_thai']=="Đang giao hàng"){
                                        ?>
                                        <button type="button" class="btn btn-info"> <?php echo $row['trang_thai']?></button>
                                    <?php 
                                    }
                                    ?></td>
                                    <td><a href="quantri.php?page_layout=quanlydonhangchitiet&id_don_hang=<?php echo $row['id_don_hang'];?>"><button type="button" class="btn btn-primary"><i class="fa fa-link"></i>&nbsp; Xem chi tiết</button></a></td>

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
