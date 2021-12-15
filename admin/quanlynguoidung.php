
<?php

$sql = "SELECT * FROM users ORDER BY id_user ASC";
$query = mysqli_query($conn, $sql);
?>
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
                                            <th>Chi tiết người dùng </th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                while ($row = mysqli_fetch_array($query)){ 
                                ?>
                                   <tr> 
                                 
                                    <td> <?php echo $row['id_user']?></td>
                                    <td><?php echo $row['ten_user']?></td>
                                    <td> <?php echo $row['email']?></td>
                                    <td> <?php echo $row['so_dien_thoai']?></td>
                                    <td> <?php echo $row['dia_chi']?></td>
                
                                    <td><a href="quantri.php?page_layout=quanlynguoidungchitiet&id_user=<?php echo $row['id_user'];?>"><button type="button" class="btn btn-link">Xem</button></a></td>
                                    <td><a href="quantri.php?page_layout=quanlynguoidungedit&id_user=<?php echo $row['id_user'];?>"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a>
                                    <a href="controller/nguoidungremovecontroller.php?id_user=<?php echo $row['id_user'];?>"> <button type="button" class="btn btn-warning btn-sm" onclick="remove(this)">Xoá</button></a>
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



\