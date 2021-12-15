

<?php
include_once 'controller/danhmuc-chitiet-controller.php';
?>
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Quản lý danh mục</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Quản lý danh mục</a></li>
                                <li class="active">Chi tiết danh mục</li>
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
                            <strong>Chi tiết danh mục</strong>
                        </div>
                        <div class="card-body card-block">
                            <form  method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên danh mục</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="ten_dm_sp" name="ten_dm_sp"value="<?php if(isset($_POST['ten_dm_sp'])){echo $_POST['ten_dm_sp'];}else {echo $row['ten_dm_sp'];} ?>" class="form-control" readonly="readonly"></div>
                                </div>
            
                            </form>
                        </div>

                    </div>

                </div>



            </div>
            <?php include "layout/buttonbackpage.php"; ?>
        </div><!-- .animated -->
    </div><!-- .content -->

