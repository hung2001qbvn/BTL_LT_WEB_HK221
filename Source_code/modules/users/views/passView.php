<?php get_header(); ?>

<div id="main-content-wp" class="change-pass-page wp-inner">
    <div class="section" id="title-page">
        <div class="clearfix">
            <h3 id="index" class="fl-left">Cập nhật tài khoản</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        <div id="customer-info-wp" class="fl-left">
            <ul id="list-cat">
                <li>
                    <a href="?modules=users&controllers=index&action=index" title="">Cập nhật thông tin</a>
                </li>
                <li>
                    <a href="?modules=users&controllers=index&action=logout" title="">Thoát</a>
                </li>
            </ul>
        </div>
        <div id="customer-info-wp" class="fl-right">
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="post" action="?modules=users&controllers=index&action=changepass">
                        <div class="form-row clearfix">
                            <div class="form-col fl-left">
                                <label for="old-pass">Mật khẩu cũ</label>
                                <input class="form-control" type="password" name="pass_old" id="pass-old">
                            </div>
                        </div>
                        <div class="form-row clearfix">
                            <div class="form-col fl-left">
                                <label for="new-pass">Mật khẩu mới</label>
                                <input class="form-control" type="password" name="pass_new" id="pass-new">
                            </div>
                        </div>
                        <div class="form-row clearfix">
                            <div class="form-col fl-left">
                                <label for="confirm-pass">Xác nhận mật khẩu</label>
                                <input class="form-control" type="password" name="confirm_pass" id="confirm-pass">
                            </div>
                        </div>
                        <input type="submit" style="height: 40px; border-radius: 60px; width: 150px; color: green; border-color: white; color: white; background-color: #48ad48;" name="btn_submit" id="btn-submit" value="Cập Nhật">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>