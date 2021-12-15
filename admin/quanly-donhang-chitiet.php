<?php
$id_don_hang=$_GET["id_don_hang"];
$sql_chitiet="SELECT * FROM chitietdonhang WHERE id_don_hang=$id_don_hang";
$query_chitiet=mysqli_query($conn,$sql_chitiet);
//$row_chitiet=mysqli_fetch_array($query_chitiet);

$sql_donhang="SELECT * FROM donhang WHERE id_don_hang=$id_don_hang";
$query_donhang=mysqli_query($conn,$sql_donhang);
$row_donhang=mysqli_fetch_array($query_donhang);

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
                                <li class="active">Chi tiết đơn hàng</li>
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
                            <strong>Chi tiết đơn hàng</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã đơn hàng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="txt_ma" value="<?php echo $row_donhang['id_don_hang']; ?>" class="form-control" readonly="readonly"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Tên khách hàng</label></div>
                                    <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" value="<?php echo $row_donhang['ten_user']; ?>"  class="form-control" readonly="readonly"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Ngày đặt</label></div>
                                    <di class="col-12 col-md-9"><input type="datetime"id="text-input" id="password-input" name="password-input" value="<?php echo $row_donhang['ngay_dat']; ?>"  class="form-control" readonly="readonly"></di>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label  for="text-input"class=" form-control-label">Địa chỉ giao hàng</label></div>
                                    <div class="col-12 col-md-9"><input type="text"id="text-input"  name="text-input" value="<?php echo $row_donhang['dia_chi']; ?>"  class="form-control" readonly="readonly"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Số điện thoại</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" value="<?php echo $row_donhang['so_dien_thoai']; ?>"  class="form-control" readonly="readonly"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Email</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" value="<?php echo $row_donhang['email']; ?>"  class="form-control" readonly="readonly"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hình thức thanh toán</label></div>
                                    <div class="col-12 col-md-9">
                                    
                                    <?php if($row_donhang['phuong_thuc_thanh_toan']=="COD")
                                    {
                                        ?>
                                            <button type="button" class="btn btn-success"> <?php echo $row_donhang['phuong_thuc_thanh_toan'];?></button>
                                        <?php
                                    } else if($row_donhang['phuong_thuc_thanh_toan']=="Banking")
                                    {
                                        ?>
                                        <button type="button" class="btn btn-primary"> <?php echo $row_donhang['phuong_thuc_thanh_toan'];?></button>
                                    <?php 
                                    }
                                    ?>

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Ghi chú</label></div>
                                    <div class="col-12 col-md-9"><textarea rows="10" cols="70" disabled style="resize: none;"><?php echo $row_donhang['ghi_chu']; ?> </textarea></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Trạng thái</label></div>
                                    <div class="col-12 col-md-9">

                                    <?php if($row_donhang['trang_thai']=="Nhận đơn hàng")
                                    {
                                        ?>
                                            <button type="button" class="btn btn-success"> <?php echo $row_donhang['trang_thai'];?></button>
                                        <?php
                                    } else if($row_donhang['trang_thai']=="Đang giao hàng")
                                    {
                                        ?>
                                        <button type="button" class="btn btn-info"> <?php echo $row_donhang['trang_thai'];?></button>
                                    <?php 
                                    }
                                    ?>

                                    </div>
                                </div>
                                

                                <div class="row form-group">
                                <table class="table table-striped table-bordered" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        
                                    <tr role="row">
                                                <!-- <th class="sorting col-md-1">STT</th> -->
                                                <th class="sorting_asc col-md-2">Mã sản phẩm</th>
                                                <th class="sorting_asc col-md-4">Tên sản phẩm</th>
                                                <th class="sorting col-md-2">Số lượng</th>
                                                <th class="sorting col-md-2">Đơn giá</th>
                                                <th class="sorting col-md-2">Thành tiền</th>
                                        
                                        </thead>
                                        <tbody>
                                        <?php
                                            while ($row_chitiet = mysqli_fetch_array($query_chitiet)){
                                        ?>
                                            <tr>
                                                <td><?php echo $row_chitiet['id_sp'];?></td>
                                                <td>
                                                    <?php
                                                        $id_sp=$row_chitiet['id_sp'];
                                                        $sql_sp="SELECT * FROM sanpham WHERE id_sp=$id_sp";
                                                        $query_sp=mysqli_query($conn,$sql_sp);
                                                        $row_sp=mysqli_fetch_array($query_sp);

                                                    ?>
                                                    <?php echo $row_sp['ten_sp']; ?>
                                                </td>
                                                <td><?php echo $row_chitiet['so_luong'];?></td>
                                                <td><?php echo $row_chitiet['don_gia'];?></td>
                                                <td><?php echo $row_chitiet['don_gia'] * $row_chitiet['so_luong'];?></td>
                                              
                                            </tr>
                                            


                                        <?php
                                            }
                                        ?>
                                        <tr>
                                            <td colspan="4"><b>Tổng tiền</b></td>
                                            <td colspan="1"><b class="text-red"><?php echo $row_donhang['thanh_tien'];?></b></td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                </div>
                            </form>
                        </div>

                    </div>

                </div>



            </div>
            <?php include "layout/buttonbackpage.php"; ?>
        </div><!-- .animated -->
    </div><!-- .content -->
