
<?php
include 'controller/sanpham-edit-controller.php';
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
                                    <li class="active">Sửa sản phẩm</li>
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
                                <strong>Sửa sản phẩm</strong>
                            </div>
                            <div class="card-body card-block">
                                <form  method="POST" enctype="multipart/form-data" class="form-horizontal">
                    
        
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên sản phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="name-input" name="ten_sp" value="<?php if(isset($_POST['ten_sp'])){echo $_POST['ten_sp'];}else {echo $row['ten_sp'];} ?>" placeholder="Nhập tên sản phẩm" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hệ máy</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="name-input" name="he_may" value="<?php if(isset($_POST['he_may'])){echo $_POST['he_may'];}else {echo $row['he_may'];}  ?>" placeholder="Nhập hệ máy" class="form-control"></div>
                                    </div>
                                  
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Tình trạng</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="radio1" >
                                                        <input type="radio" id="radio1" name="tinh_trang"<?php if($row['tinh_trang']=='Còn hàng'){echo 'checked="checked"';} ?> value="Còn hàng" class="form-check-input">Còn hàng
                                                    </label>
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radio2" name="tinh_trang"<?php if($row['tinh_trang']=='Hết hàng'){echo 'checked="checked"';} ?> value="Hết hàng" class="form-check-input">Hết hàng
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Chọn thể loại</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="id_dm_sp" id="select-input" class="form-control">
                                                <option value="unselect">Xin chọn thể loại</option>
                                                <?php 
                                               while ($rowDm = mysqli_fetch_array($querydm)){
                                                ?>
                                                <option
                                                <?php
                                                if($row['id_danhmuc']==$rowDm['id_dm_sp']){
                                                    echo'selected="selected"';
                                                }
                                                ?> 
                                                value="<?php echo $rowDm['id_dm_sp']?>"><?php echo $rowDm['ten_dm_sp']?></option>
                        
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Chọn nhà cung cấp</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="id_ncc"id="select-input" class="form-control">
                                                <option value="0">Xin chọn nhà cung cấp</option>
                                                <?php 
                                               while ($rowcc = mysqli_fetch_array($querycc)){
                                                ?>
                                                <option
                                                <?php
                                                if($row['id_ncc']==$rowcc['id_ncc']){
                                                    echo'selected="selected"';
                                                }
                                                ?> 
                                                value="<?php echo $rowcc['id_ncc']?>"><?php echo $rowcc['ten_ncc']?></option>
                        
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Đơn giá</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="stt-input" name="don_gia"value="<?php  if(isset($_POST['don_gia'])){echo $_POST['don_gia'];}else {echo $row['don_gia'];} ?>"placeholder="Nhập đơn giá của sản phẩm" class="form-control"></div>
                                    </div>
                                  
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Hình ảnh sản phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="image" width="20%" name="anh_sp" src="pictures/<?php echo $row['anh_sp']?>"class="form-control-image"><input type="file" id="file-input" name="anh_sp" class="form-control-file"></div>
                                    </div>
                                    <div class="row form-group">
                                    <div class="col col-md-3"><label for="datetime-input" class=" form-control-label">Ngày tạo</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="date-input" name="ngay_tao"value="<?php echo $row['ngay_tao']; ?>" class="form-control"readonly="readonly"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="datetime-input" class=" form-control-label">Ngày sửa</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="date-input" name="ngay_sua"value="<?php echo $row['ngay_sua']; ?>" class="form-control" readonly="readonly"></div>
                                </div>
                                    <div  style="float:right;">
                                <button type="submit" class="btn btn-primary " name="submit" value="submit">
                                    <i class="fa ti-plus"></i> Sửa
                                </button>
                                <button type="submit" class="btn btn-warning" name="reset" value="reset">
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

