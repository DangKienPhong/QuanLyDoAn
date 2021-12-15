
<?php
include 'controller/sanpham-add-controller.php';

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
                                <strong>Thêm sản phẩm</strong>
                            </div>
                            <div class="card-body card-block">
                                <form  method="POST" enctype="multipart/form-data" class="form-horizontal">
                    
        
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên sản phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="name-input" name="ten_sp" placeholder="Nhập tên sản phẩm" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hệ máy</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="name-input" name="he_may" placeholder="Nhập hệ máy" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Tình trạng</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="radio1" >
                                                        <input type="radio" id="radio1" name="tinh_trang" value="Còn hàng" checked="checked" class="form-check-input">Còn hàng
                                                    </label>
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radio2" name="tinh_trang" value="Hết hàng" class="form-check-input">Hết hàng
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
                                               while ($row = mysqli_fetch_array($query)){
                                                ?>
                                                <option value="<?php echo $row['id_dm_sp']?>"><?php echo $row['ten_dm_sp']?></option>
                        
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Chọn nhà cung cấp</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="id_ncc" id="select-input" class="form-control">
                                                <option value="unselect">Xin chọn nhà cung cấp</option>
                                                <?php 
                                               while ($rowcc = mysqli_fetch_array($querycc)){
                                                ?>
                                                <option value="<?php echo $rowcc['id_ncc']?>"><?php echo $rowcc['ten_ncc']?></option>
                        
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                  
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Đơn giá</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="stt-input" name="don_gia" placeholder="nhập đơn giá của sản phẩm" class="form-control"></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label" >Hình ảnh sản phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="anh_sp" class="form-control-file" multiple></div>
                                    </div>
                                 
                                    <div  style="float:right;">
                                <button type="submit" class="btn btn-primary " name="submit" value="submit">
                                    <i class="fa ti-plus"></i> Thêm
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

