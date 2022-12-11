<?php get_header(); ?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Sửa thông tin liên hệ</h3>
                </div>
            </div>

            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" action="?modules=storeInfo&controllers=index&action=add"
                        enctype="multipart/form-data">
                        <div style="display: flex;">
                            <div style="width: 400px;">
                                <label for="title">Địa chỉ</label>
                                <input type="text" name="address" id="address" value="" placeholder="" required=""
                                    style="display: block;width: 300px;">
                                <label for="title">Số điện thoại</label>
                                <input type="text" name="phone_number" id="phone_number" placeholder="" value=""
                                    required="" style="display: block;width: 300px;">
                                <label for="title">Email liên hệ</label>
                                <input type="text" name="email" id="email" required="" placeholder="" value=""
                                    style="display: block;width: 300px;">
                            </div>
                        </div>
                        <input type="submit" name="btn_submit" id="btn-submit" class="btn btn-submit" value="Cập nhật"
                            style="height: 40px;   
                            margin-top: 30px; 
                                                                                                border-radius: 60px;
                                                                                                width: 150px;
                                                                                                border-color: white;
                                                                                                color: white;
                                                                                                background-color: #48ad48;"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    var data = <?php echo json_encode(get_store_info_by_id());?>;
    console.log(data);
    $('#address').val(data[0].address);
    $('#phone_number').val(data[0].phone_number);
    $('#email').val(data[0].email);
})
</script>
<?php get_footer(); ?>