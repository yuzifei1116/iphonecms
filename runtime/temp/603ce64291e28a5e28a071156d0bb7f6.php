<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\phpstudy_pro\WWW\applecms\applecms/application/admin\view\extend\upload\qiniu.html";i:1579008638;}*/ ?>
<div class="layui-form-item upload_mode mode_Qiniu" <?php if($config['upload']['mode'] != 'Qiniu'): ?>style="display:none;" <?php endif; ?>>
<label class="layui-form-label">七牛云API：</label>
<div class="layui-input-block">
    <a href="https://www.qiniu.com/" target="_blank" class="layui-btn layui-btn-primary">点击申请 https://www.qiniu.com/</a>
</div>
</div>
<div class="layui-form-item upload_mode mode_Qiniu" <?php if($config['upload']['mode'] != 'Qiniu'): ?>style="display:none;" <?php endif; ?>>
<label class="layui-form-label">服务名：</label>
<div class="layui-input-inline w200">
    <input type="text" name="upload[api][qiniu][bucket]" placeholder="七牛云-服务名" value="<?php echo $config['upload']['api']['qiniu']['bucket']; ?>" class="layui-input"  >
</div>
<label class="layui-form-label">公钥：</label>
<div class="layui-input-inline w200">
    <input type="text" name="upload[api][qiniu][accesskey]" placeholder="七牛云-公钥" value="<?php echo $config['upload']['api']['qiniu']['accesskey']; ?>" class="layui-input"  >
</div>
<label class="layui-form-label">私钥：</label>
<div class="layui-input-inline w200">
    <input type="text" name="upload[api][qiniu][secretkey]" placeholder="七牛云-私钥" value="<?php echo $config['upload']['api']['qiniu']['secretkey']; ?>" class="layui-input"  >
</div>
<label class="layui-form-label">外链URL：</label>
<div class="layui-input-inline w200">
    <input type="text" name="upload[api][qiniu][url]" placeholder="七牛云-外链URL" value="<?php echo $config['upload']['api']['qiniu']['url']; ?>" class="layui-input"  >
</div>
</div>