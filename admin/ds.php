
<?php
$dem = 0;
while ($row = mysqli_fetch_array($query) ) {
    if($row['tinhtrang']==0){
?>
    <div class="col-md-6 col-lg-4 mb-5">
        <div class="hotel-room text-center">
            <a href="#" class="d-block mb-0 thumbnail"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
            <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="#">
                        <?php echo $row['tenloaiphong']; ?>
                    </a></h3>
                <strong class="price">Giá: 
                    <?php
                    echo $row['gia'];
                    ?>VNĐ/đêm
                </strong>
            </div>
        </div>
    </div>
<?php
    $dem++;
}
    if($dem==6){
        break;
    }
}

?>