<?php
$sql="SELECT * FROM danhmucsp";
$query=mysqli_query($conn,$sql); 
?>

<div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Thể loại</span>
                        </div>
                        <ul>
                            <?php
                            while($row = mysqli_fetch_array($query)){
                            ?>
                            <li><a href="index.php?page_layout=shop-gridcategories&id_dm_sp=<?php echo $row['id_dm_sp']; ?>"><?php echo $row['ten_dm_sp']; ?></a></li>
                       <?php }?>
                        </ul>
                    </div>