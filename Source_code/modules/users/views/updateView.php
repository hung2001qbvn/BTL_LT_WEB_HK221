<?php get_header(); ?>

<div id="main-content-wp" class="info-account-page wp-inner">
    <div class="section" id="title-page">
        <div class="clearfix">
            <h3 id="index" class="fl-left">Cập nhật tài khoản</h3>
        </div>
    </div>
    <div class="wrap clearfix ">
        <div id="customer-info-wp">
            <ul id="list-cat">
                <li>
                    <a href="?modules=users&controller=index&action=pass" title="">Đổi mật khẩu</a>
                </li>
                <li>
                    <a href="?modules=users&controllers=index&action=logout" title="">Thoát</a>
                </li>
            </ul>
        </div>
        <div id="customer-info-wp">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" action="?modules=users&controller=index&action=update">
                        <?php if(!empty($data)) foreach ($data as  $value) {?>
                            <div class="section-detail">
									<div class="form-row clearfix">
										<div class="fl-left width-full">
                                            <label for="display-name">Tên hiển thị</label>
                                            <input class="form-control" type="text" name="fullname" id="display-name" value="<?php echo $value['fullname']; ?>">
										</div> 
									</div>
                                    <div class="form-row clearfix">
										<div class="fl-left width-full">
                                            <label for="username">Tên đăng nhập</label>
                                            <input class="form-control" type="text" name="username" id="username"  readonly="readonly" value="<?php echo $value['username']; ?>">
										</div>
									</div>
                                    <div class="form-row clearfix">
										<div class="fl-left width-full">
                                            <label for="mail">Email</label>
                                            <input class="form-control" type="mail" name="mail" id="mail" value="<?php echo $value['mail']; ?>">
										</div>
									</div>
                                    <div class="form-row clearfix">
										<div class="fl-left width-full">
                                            <label for="tel">Số điện thoại</label>
                                            <input class="form-control" type="tel" name="phone" id="tel" value="<?php echo $value['phone']; ?>">
										</div>
									</div>
                                    <div class="form-row clearfix">
										<div class="fl-left width-full">
                                            <label for="address">Địa chỉ</label>
                                            <textarea class="form-control" name="address" id="address"><?php echo $value['address']; ?></textarea>
										</div>
									</div>
							</div>
                            
                        <?php }; ?>

                        <button type="submit" name="btn_submit" id="btn-submit" style="height: 40px;
                            border-radius: 60px;
                            width: 150px;
                            color: green;
                            border-color: white;
                            color: white;
                            background-color: #48ad48;">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>