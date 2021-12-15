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
                                <h1>Quản lý danh mục bài viết</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Quản lý danh mục bài viết</a></li>
                                    <li class="active">Chi tiết mô tả</li>
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
                                <strong>Chi tiết mô tả</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Mã danh mục</label></div>
                                        <div class="col-12 col-md-9">
                                        <input type="text" id="email-input" name="txt_tieude" value="100047" readonly="readonly" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Chi tiết mô tả</label></div>
                                        <div class="col-12 col-md-9">Viết review sách hay còn gọi là nhận xét, đánh giá về một cuốn sách là một cách cung cấp thông tin của cuốn sách đó. Bạn không nên xem review là quảng cáo sách vì bài review được viết khi người viết đã đọc và có những cảm nhận riêng, họ có đủ thông tin để có thể đưa ra những lời nhận xét chính xác nhất.</div>
                                    </div>
                                   
                                    
                                 
                                
                                 
                                </form>
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