

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
                                <strong class="card-title">Danh sách bài viết</strong>&nbsp;
                            </div>
                            <div class="card-body">
                            <a href="quanly-baiviet-add.php"><button type="button" class="btn btn-primary btn-sm" style="float:right;">Thêm</button></a>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tiêu đề</th>
                                            <th>Tác giả</th>
                                            <th>Chuyên mục</th>
                                            <th>Thẻ</th>
                                            <th>Thời gian</th>                                          
                                            <th>Chi tiết bài viết</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        // <tr>
                                        //     <td>1</td>
                                        //     <td>Anh là vô địch</td>
                                        //     <td>Phạm Tiến Bịp</td>
                                        //     <td>Kể chuyện đêm khuya</td>
                                        //     <td></td>
                                        //     <td>01/08/2021</td>                                         
                                        //     <td><a href="quanly-baiviet-chitiet.php"><button type="button" class="btn btn-link">Xem</button></a></td>
                                        //     <td><a href="quanly-baiviet-edit.php"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a>
                                        //     <button type="button" class="btn btn-warning btn-sm"onclick="remove(this)">Xoá</button>
                                        //     </td>
                                        // </tr>
                                        $arrStt = array(1, 2, 3, 4, 5, 6);
                                        $arrTieude = array("Linh Giới 3D Fashion Show: “Đại khai nhãn giới” với sàn diễn thời trang “độc nhất vô nhị”", "Slender: The Arrival: Giải đố trong sự sợ hãi", "BlueStacks X: Dịch vụ gaming cloud đầu tiên dành cho thiết bị di động", "Tổng hợp giftcode Danh Tướng 3Q 2021 mới và đầy đủ nhất!", "Code MU Vinh Dự mới nhất tháng 11 dành cho độc giả", "Code Nhất Mộng Giang Hồ VNG mới nhất dành cho game thủ");
                                        $arrTentacgia = array("Trần Quốc Trọng", "Trần Quốc Trọng", "Trần Quốc Trọng", "Trần Kim Ngân", "Lê Anh Phi", "Đặng Kiến Phong");
                                        $arrChuyenmuc = array("Kể chuyện đêm khuya", "Đảng", "Cuộc sống", "Game", "	Kể chuyện đêm khuya", "Cuộc sống");
                                        $arrThe = array("Game di động", "Kiếm Hiệp GO", "86", "Steam", "Epic", "Discord");
                                        $arrThoigian = array("22/08/2021", "22/08/2021", "22/08/2021", "22/08/2021", "22/08/2021", "22/08/2021	");
                                        for($i=0;$i<count($arrStt);$i++){
                                        echo ' <tr>';
                                        echo ' <td>' . $arrStt[$i] . '</td>';
                                        echo ' <td>' .  $arrTieude[$i] . '</td>';
                                        echo ' <td>' . $arrTentacgia [$i] . '</td>';
                                        echo ' <td>' . $arrChuyenmuc[$i] . '</td>';
                                        echo ' <td>' . $arrThe[$i] . '</td>';
                                        echo ' <td>' . $arrThoigian[$i] . '</td>';
                                     
                                        echo ' <td><a href="quanly-baiviet-chitiet.php"><button type="button" class="btn btn-link">Xem</button></a></td>';
                                        echo '<td><a href="quanly-baiviet-edit.php"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a>
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
