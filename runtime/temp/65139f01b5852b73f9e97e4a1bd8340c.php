<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\phpstudy_pro\WWW\applecms/application/admin\view\extend\upload\upyun.html";i:1579008637;}*/ ?>
<div class="layui-form-item upload_mode mode_Upyun" <?php if($config['upload']['mode'] != 'Upyun'): ?>style="display:none;" <?php endif; ?>>
<label class="layui-form-label">又云拍API：</label>
<div class="layui-input-block">
    <a href="https://www.upyun.com/" target="_blank" class="layui-btn layui-btn-primary">点击申请 https://www.upyun.com/</a>
</div>
</div>
<div class="layui-form-item upload_mode mode_Upyun" <?php if($config['upload']['mode'] != 'Upyun'): ?>style="display:none;" <?php endif; ?>>
<label class="layui-form-label">服务名：</label>
<div class="layui-input-inline w200">
    <input type="text" name="upload[api][upyun][bucket]" placeholder="又云拍-服务名" value="<?php echo $config['upload']['api']['upyun']['bucket']; ?>" class="layui-input"  >
</div>
<label class="layui-form-label">操作员名：</label>
<div class="layui-input-inline w200">
    <input type="text" name="upload[api][upyun][username]" placeholder="又云拍-操作员名" value="<?php echo $config['upload']['api']['upyun']['username']; ?>" class="layui-input"  >
</div>
<label class="layui-form-label">操作员密码：</label>
<div class="layui-input-inline w200">
    <input type="text" name="upload[api][upyun][pwd]" placeholder="又云拍-操作员密码" value="<?php echo $config['upload']['api']['upyun']['pwd']; ?>" class="layui-input"  >
</div>
<label class="layui-form-label">外链URL：</label>
<div class="layui-input-inline w200">
    <input type="text" name="upload[api][upyun][url]" placeholder="又云拍-外链URL" value="<?php echo $config['upload']['api']['upyun']['url']; ?>" class="layui-input"  >
</div>
</div>