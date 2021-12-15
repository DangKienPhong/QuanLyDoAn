<script>
    function searchFocus(){
        if(document.searchform.searchtext.value=='Bạn cần tìm gì ?')
        {
            document.searchform.searchtext.value='';
        }
    }
    function searchBlur(){
        if(document.searchform.searchtext.value=='')
        {
            document.searchform.searchtext.value='Bạn cần tìm gì ?';
        }
    }
</script>
<div class="hero__search">
                        <div class="hero__search__form">
                            <form method="POST" action="index.php?page_layout=danhsachtimkiem" name="searchform">
                                <!-- <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                    
                                </div> -->
                                
                                <input onfocus="searchFocus();" onblur="searchBlur();" type="text" name="searchtext" value="Bạn cần tìm gì ?">
                                <button type="submit" name="submit" value="" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>Liên hệ hỗ trợ</span>
                            </div>
                        </div>
                    </div>