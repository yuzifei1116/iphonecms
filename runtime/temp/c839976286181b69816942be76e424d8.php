<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"D:\phpstudy_pro\WWW\applecms/application/admin\view\website\info.html";i:1579008637;s:68:"D:\phpstudy_pro\WWW\applecms\application\admin\view\public\head.html";i:1579008637;s:70:"D:\phpstudy_pro\WWW\applecms\application\admin\view\public\editor.html";i:1579008637;s:68:"D:\phpstudy_pro\WWW\applecms\application\admin\view\public\foot.html";i:1579008637;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?> - 苹果CMS内容管理系统</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css?v=1020">
    <link rel="stylesheet" href="/static/css/admin_style.css?v=1020">
    <script type="text/javascript" src="/static/js/jquery.js?v=1020"></script>
    <script type="text/javascript" src="/static/layui/layui.js?v=1020"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION='v10';
    </script>
</head>
<body>
<script type="text/javascript" src="/static/js/jquery.jscolor.js"></script>
<?php 
$editor=$GLOBALS['config']['app']['editor'];
$ue_old= ROOT_PATH . 'static/ueditor/' ;
$ue_new= ROOT_PATH . 'static/editor/'. $editor ;
if( (!file_exists($ue_new) && file_exists($ue_old)) || $editor=='' ){
    $editor = 'ueditor';
}
 if($editor == 'ueditor'): ?>
<script type="text/javascript" src="/static/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/static/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript">
    window.UEDITOR_CONFIG.serverUrl = "<?php echo url('upload/upload'); ?>?from=ueditor&flag=website_editor&input=upfile";
    var EDITOR = UE;
</script>
<?php elseif($editor == 'umeditor'): ?>
<link rel="stylesheet" href="/static/editor/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/static/editor/umeditor/umeditor.config.js"></script>
<script type="text/javascript" src="/static/editor/umeditor/umeditor.min.js"></script>
<script type="text/javascript">
    window.UMEDITOR_CONFIG.imageUrl = "<?php echo url('upload/upload'); ?>?from=umeditor&flag=website_editor&input=upfile";
    var EDITOR = UM;
</script>
<?php elseif($editor == 'kindeditor'): ?>
<script type="text/javascript" src="/static/editor/kindeditor/kindeditor-all-min.js"></script>
<script type="text/javascript">
    var EDITOR = KindEditor;
</script>
<?php elseif($editor == 'ckeditor'): ?>
<script type="text/javascript" src="/static/editor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    var EDITOR = CKEDITOR;
</script>
<?php endif; ?>
<script>
    var editor = "<?php echo $editor; ?>";
    function editor_getEditor(obj)
    {
        var res;
        switch(editor){
            case "kindeditor":
                res = KindEditor.create('#'+obj, { uploadJson:"<?php echo url('upload/upload'); ?>?from=kindeditor&flag=website_editor&input=imgFile" , allowFileManager : false });
                break;
            case "ckeditor":
                res = CKEDITOR.replace(obj,{filebrowserImageUploadUrl:"<?php echo url('upload/upload'); ?>?from=ckeditor&flag=website_editor&input=upload"});
                break;
            default:
                res = EDITOR.getEditor(obj);
                break;
        }
        return res;
    }
    function editor_setContent(obj,html) {
        var res;
        switch(editor){
            case "kindeditor":
                res = obj.html(html);
                break;
            case "ckeditor":
                res = obj.setData(html);
                break;
            default:
                res = obj.setContent(html);
                break;
        }
        return res;
    }
    function editor_getContent(obj) {
        var res;
        switch(editor){
            case "kindeditor":
                res = obj.html();
                break;
            case "ckeditor":
                res = obj.getData();
                break;
            default:
                res = obj.getContent();
                break;
        }
        return res;
    }
</script>

<div class="page-container p10">
    <div class="showpic" style="display:none;"><img class="showpic_img" width="120" height="160"></div>
    
    <form class="layui-form layui-form-pane" method="post" action="">
        <input type="hidden" name="website_id" value="<?php echo $info['website_id']; ?>">

        <div class="layui-tab">
            <ul class="layui-tab-title ">
                <li class="layui-this">基本信息</a></li>
                <li>其他信息</li>
            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">
                    
                <div class="layui-form-item">
                    <label class="layui-form-label">参数：</label>
                    <div class="layui-input-inline w150">
                            <select name="type_id" lay-filter="type_id">
                                <option value="">请选择分类</option>
                                <?php if(is_array($type_tree) || $type_tree instanceof \think\Collection || $type_tree instanceof \think\Paginator): $i = 0; $__LIST__ = $type_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['type_mid'] == 11): ?>
                                    <option value="<?php echo $vo['type_id']; ?>" <?php if($info['type_id'] == $vo['type_id']): ?>selected<?php endif; ?>><?php echo $vo['type_name']; ?></option>
                                    <?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ch): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $ch['type_id']; ?>" <?php if($info['type_id'] == $ch['type_id']): ?>selected<?php endif; ?>>&nbsp;|&nbsp;&nbsp;&nbsp;|—<?php echo $ch['type_name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                    </div>
                    <div class="layui-input-inline w150">
                            <select name="website_level">
                                <option value="0">请选择推荐</option>
                                <option value="9" <?php if($info['website_level'] == 9): ?>selected<?php endif; ?>>推荐9-幻灯</option>
                                <option value="1" <?php if($info['website_level'] == 1): ?>selected<?php endif; ?>>推荐1</option>
                                <option value="2" <?php if($info['website_level'] == 2): ?>selected<?php endif; ?>>推荐2</option>
                                <option value="3" <?php if($info['website_level'] == 3): ?>selected<?php endif; ?>>推荐3</option>
                                <option value="4" <?php if($info['website_level'] == 4): ?>selected<?php endif; ?>>推荐4</option>
                                <option value="5" <?php if($info['website_level'] == 5): ?>selected<?php endif; ?>>推荐5</option>
                                <option value="6" <?php if($info['website_level'] == 6): ?>selected<?php endif; ?>>推荐6</option>
                                <option value="7" <?php if($info['website_level'] == 7): ?>selected<?php endif; ?>>推荐7</option>
                                <option value="8" <?php if($info['website_level'] == 8): ?>selected<?php endif; ?>>推荐8</option>

                            </select>
                    </div>
                    <div class="layui-input-inline w150">
                            <select name="website_status">
                                <option value="1" >已审核</option>
                                <option value="0" <?php if($info['website_status'] == '0'): ?>selected<?php endif; ?>>未审核</option>
                            </select>
                    </div>
                    <div class="layui-input-inline w150">
                        <select name="website_lock">
                            <option value="0">未锁</option>
                            <option value="1" <?php if($info['website_lock'] == 1): ?>selected<?php endif; ?>>锁定</option>
                        </select>
                    </div>

                    <div class="layui-input-inline">
                        <input type="checkbox" name="uptime" title="更新时间" value="1" checked class="layui-checkbox checkbox-ids" lay-skin="primary">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">标题：</label>
                    <div class="layui-input-inline w500">
                        <input type="text" class="layui-input" value="<?php echo $info['website_name']; ?>" placeholder="请输入" name="website_name">
                    </div>
                    <label class="layui-form-label">副标：</label>
                    <div class="layui-input-inline ">
                        <input type="text" class="layui-input" value="<?php echo $info['website_sub']; ?>" placeholder="请输入副标题" name="website_sub">
                    </div>

                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">拼音：</label>
                    <div class="layui-input-inline w500">
                        <input type="text" class="layui-input" value="<?php echo $info['website_en']; ?>" placeholder="" name="website_en">
                    </div>
                    <label class="layui-form-label">首字母：</label>
                    <div class="layui-input-inline w70">
                        <input type="text" class="layui-input" value="<?php echo $info['website_letter']; ?>" placeholder="" name="website_letter">
                    </div>
                    <label class="layui-form-label">高亮：</label>
                    <div class="layui-input-inline w70">
                        <input type="text" class="layui-input color" value="<?php echo $info['website_color']; ?>" placeholder="" name="website_color">
                    </div>
                </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">跳转网址：</label>
                        <div class="layui-input-inline w500">
                            <input type="text" class="layui-input" value="<?php echo $info['website_jumpurl']; ?>" placeholder="" name="website_jumpurl">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">地区：</label>
                        <div class="layui-input-inline w500">
                            <input type="text" class="layui-input" value="<?php echo $info['website_area']; ?>" placeholder="" name="website_area">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">语言：</label>
                        <div class="layui-input-inline w500">
                            <input type="text" class="layui-input" value="<?php echo $info['website_lang']; ?>" placeholder="" name="website_lang">
                        </div>
                    </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">TAG：</label>
                    <div class="layui-input-inline w500">
                        <input type="text" class="layui-input" value="<?php echo $info['website_tag']; ?>" placeholder="" name="website_tag">
                    </div>
                    <div class="layui-input-inline w120">
                        <input type="checkbox" name="uptag" title="自动生成" value="1" class="layui-checkbox checkbox-ids" lay-skin="primary">
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">扩展分类：</label>
                        <div class="layui-input-inline w500">
                            <input type="text" class="layui-input" value="<?php echo $info['website_class']; ?>" placeholder="" id="website_class" name="website_class">
                        </div>
                        <div class="layui-input-inline w500 website_class_label">

                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">备注：</label>
                        <div class="layui-input-inline w500">
                            <input type="text" class="layui-input" value="<?php echo $info['website_remarks']; ?>" placeholder="" name="website_remarks">
                        </div>
                    </div>


                    <div class="layui-form-item">
                        <label class="layui-form-label">LOGO：</label>
                        <div class="layui-input-inline w500 upload">
                            <input type="text" class="layui-input upload-input" style="max-width:100%;" value="<?php echo $info['website_logo']; ?>" placeholder="" id="website_logo" name="website_logo">
                        </div>
                        <div class="layui-input-inline ">
                            <button type="button" class="layui-btn layui-upload" lay-data="{data:{thumb:0,thumb_class:'upload-thumb'}}" id="upload3">上传图片</button>
                        </div>
                    </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">截图：</label>
                    <div class="layui-input-inline w500 upload">
                        <input type="text" class="layui-input upload-input" style="max-width:100%;" value="<?php echo $info['website_pic']; ?>" placeholder="" id="website_pic" name="website_pic">
                    </div>
                    <div class="layui-input-inline ">
                        <button type="button" class="layui-btn layui-upload" lay-data="{data:{thumb:1,thumb_class:'upload-thumb'}}" id="upload1">上传图片</button>
                    </div>
                </div>


                    <div class="layui-form-item">
                        <label class="layui-form-label">简介：</label>
                        <div class="layui-input-block">
                            <textarea name="website_blurb" cols="" rows="3" class="layui-textarea"  placeholder="不填写将自动从第一页详情里获取前100个字" style="height:40px;"><?php echo $info['website_blurb']; ?></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">介绍：</label>
                        <div class="layui-input-block">
                            <textarea id="website_content" name="website_content" type="text/plain" style="width:99%;height:300px"><?php echo mac_url_content_img($info['website_content']); ?></textarea>
                        </div>
                    </div>
                    
        </div>


                    <div class="layui-tab-item">
                        <div class="layui-form-item">
                            <label class="layui-form-label">顶数量：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_up']; ?>" placeholder="" id="website_up" name="website_up">
                            </div>
                            <label class="layui-form-label">踩数量：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_down']; ?>" placeholder="" id="website_down" name="website_down">
                            </div>
                            <button class="layui-btn" type="button" id="btn_rnd">随机生成</button>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">总人气：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_hits']; ?>" placeholder="" id="website_hits" name="website_hits">
                            </div>
                            <label class="layui-form-label">月人气：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_hits_month']; ?>" placeholder="" id="website_hits_month" name="website_hits_month" >
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">周人气：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_hits_week']; ?>" placeholder="" id="website_hits_week" name="website_hits_week">
                            </div>
                            <label class="layui-form-label">日人气：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input " value="<?php echo $info['website_hits_day']; ?>" placeholder="" id="website_hits_day" name="website_hits_day">
                            </div>
                        </div>


                        <div class="layui-form-item">
                            <label class="layui-form-label">平均分：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_score']; ?>" placeholder="" id="website_score" name="website_score">
                            </div>
                            <label class="layui-form-label">总评分：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_score_all']; ?>" placeholder="" id="website_score_all" name="website_score_all">
                            </div>
                            <label class="layui-form-label">总评次：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_score_num']; ?>" placeholder="" id="website_score_num" name="website_score_num">
                            </div>
                        </div>


                        <div class="layui-form-item">
                            <label class="layui-form-label">总来路：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_referer']; ?>" placeholder="" id="website_referer" name="website_referer">
                            </div>
                            <label class="layui-form-label">月来路：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_referer_month']; ?>" placeholder="" id="website_referer_month" name="website_referer_month">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">周来路：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_referer_week']; ?>" placeholder="" id="website_referer_week" name="website_referer_week">
                            </div>
                            <label class="layui-form-label">日来路：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_referer_day']; ?>" placeholder="" id="website_referer_day" name="website_referer_day">
                            </div>
                        </div>


                        <div class="layui-form-item">

                            <label class="layui-form-label">独立模板：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_tpl']; ?>" placeholder="" name="website_tpl">
                            </div>
                        </div>


                    </div>
            </div>
        </div>

                <div class="layui-form-item center">
                    <div class="layui-input-block">
                        <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child="">保 存</button>
                        <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
                    </div>
                </div>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>

<script type="text/javascript">

    layui.use(['form','upload', 'layer'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery
                , upload = layui.upload;;

        // 验证
        form.verify({
            website_name: function (value) {
                if (value == "") {
                    return "请输入专题名称";
                }
            }
        });

        $(document).on("click", ".extend", function(){
            $id = $(this).attr('data-id');
            if($id == 'website_class'||$id == 'website_keywords'){
                $val = $("input[id='"+$id+"']").val();
                if($val!=''){
                    $val = $val+',';
                }
                if($val.indexOf($(this).text())>-1){
                    return;
                }
                $("input[id='"+$id+"']").val($val+$(this).text());
            }else{
                $("input[id='"+$id+"']").val($(this).text());
            }
        });


        form.on('select(type_id)', function(data){
            getExtend(data.value);
        });

        upload.render({
            elem: '.layui-upload'
            ,url: "<?php echo url('upload/upload'); ?>?flag=website"
            ,method: 'post'
            ,before: function(input) {
                layer.msg('文件上传中...', {time:3000000});
            },done: function(res, index, upload) {
                var obj = this.item;
                if (res.code == 0) {
                    layer.msg(res.msg);
                    return false;
                }
                layer.closeAll();
                var input = $(obj).parent().parent().find('.upload-input');
                if ($(obj).attr('lay-type') == 'image') {
                    input.siblings('img').attr('src', res.data.file).show();
                }
                input.val(res.data.file);

                if(res.data.thumb_class !=''){
                    $('.'+ res.data.thumb_class).val(res.data.thumb[0].file);
                }
            }
        });

        $('.upload-input').hover(function (e){
            var e = window.event || e;
            var imgsrc = $(this).val();
            if(imgsrc.trim()==""){ return; }
            var left = e.clientX+document.body.scrollLeft+20;
            var top = e.clientY+document.body.scrollTop+20;
            $(".showpic").css({left:left,top:top,display:""});
            if(imgsrc.indexOf('://')<0){ imgsrc = ROOT_PATH + '/' + imgsrc;	} else{ imgsrc = imgsrc.replace('mac:','http:'); }
            $(".showpic_img").attr("src", imgsrc);
        },function (e){
            $(".showpic").css("display","none");
        });


        $("#btn_rnd").click(function(){
            $("#website_hits").val( rndNum(5000,9999) );
            $("#website_hits_month").val( rndNum(1000,4999) );
            $("#website_hits_week").val( rndNum(300,999) );
            $("#website_hits_day").val( rndNum(1,299) );
            $("#website_up").val( rndNum(1,999) );
            $("#website_down").val( rndNum(1,999) );
            $("#website_score").val( rndNum(10) );
            $("#website_score_all").val( rndNum(1000) );
            $("#website_score_num").val( rndNum(100) );
        });

        var ue = editor_getEditor('website_content');
    });

    function getExtend(id){
        $.post("<?php echo url('type/extend'); ?>", {id:id}, function(res) {

            if (res.code == 1) {
                $.each(res.data, function(key, value){
                    $('.website_'+key+"_label").html('');
                    if(value != ''){
                        $.each(value, function(key2, value2){
                            $(".website_"+key+"_label").append('<a class="layui-btn layui-btn-xs extend" href="javascript:;" data-id="website_'+key+'">'+value2+'</a>');
                        });
                    }
                });
            }
        });
    }

    <?php if($info['website_id'] > 0): ?>
    setTimeout(function () {
        getExtend('<?php echo $info['type_id']; ?>')
    },1000);
    <?php endif; ?>
    
</script>

</body>
</html>