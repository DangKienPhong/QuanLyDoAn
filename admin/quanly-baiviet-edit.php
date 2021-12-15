

    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Quản lý bài viết</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Quản lý bài viết</a></li>
                                <li class="active">Chỉnh sửa thông tin bài viết</li>
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
                            <strong>Chỉnh sửa thông tin bài viết</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="controller/baivieteditcontroller.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">STT</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="stt-input" name="txt_stt" placeholder="nhập STT" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tiêu đề</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="txt_tieude" placeholder="nhập tiêu đề" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tác giả</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="name-input" name="txt_tacgia" placeholder="nhập tên tác giả" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Chuyên mục</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="name-input" name="txt_chuyenmuc" placeholder="nhập tên chuyên mục" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Thẻ</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="name-input" name="txt_the" placeholder="nhập thẻ" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="date-input" class=" form-control-label">Ngày đăng</label></div>
                                    <div class="col-12 col-md-9"><input type="datetime-local" id="date-input" name="txt_ngaydang" placeholder="nhập ngày đăng bài viết" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Nội dung chi tiết</label></div>
                                    <div class="col-12 col-md-9"><textarea name="txt_noidung" id="txt_noidung" rows="9" placeholder="Nhập nội dung tại đây" class="form-control"></textarea></div>
                                </div>

                                <div style="float:right;">
                                    <button type="submit" class="btn btn-primary " name="bnt_XuLy" value="submit">
                                        <i class="fa ti-plus"></i> Thêm
                                    </button>
                                    <button type="submit" class="btn btn-warning" name="bnt_XuLy" value="reset">
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

