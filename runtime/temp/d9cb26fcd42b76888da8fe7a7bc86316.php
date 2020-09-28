<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"D:\phpstudy_pro\WWW\applecms\applecms/application/admin\view\collect\index.html";i:1579008638;s:77:"D:\phpstudy_pro\WWW\applecms\applecms\application\admin\view\public\head.html";i:1601258728;s:77:"D:\phpstudy_pro\WWW\applecms\applecms\application\admin\view\public\foot.html";i:1579008638;}*/ ?>
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

<div class="page-container p10">

    <div class="my-toolbar-box">

        <div class="layui-btn-group">
            <a data-href="<?php echo url('info'); ?>" class="layui-btn layui-btn-primary j-iframe" data-width="800px" data-height="610px"><i class="layui-icon">&#xe654;</i>添加</a>
            <a data-href="<?php echo url('del'); ?>" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i>删除</a>
            <a data-href="<?php echo url('clearbind'); ?>" class="layui-btn layui-btn-primary j-page-btns confirm" data-checkbox="false" data-ajax="yes"><i class="layui-icon">&#xe640;</i>清空绑定分类</a>

                <?php if($collect_break_vod != ''): ?>
                <a href="<?php echo url('load'); ?>?flag=vod" class="layui-btn layui-btn-danger ">【进入视频断点采集】</a>
                <?php endif; if($collect_break_art != ''): ?>
                <a href="<?php echo url('load'); ?>?flag=art" class="layui-btn layui-btn-danger ">【进入文章断点采集】</a>
                <?php endif; ?>

        </div>

    </div>

    <form class="layui-form " method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th width="100">编号</th>
                <th width="100">接口类型</th>
                <th width="100">资源类型</th>
                <th>资源站</th>
                <th width="200">采集选项</th>
                <th width="100">操作</th>
            </tr>
            </thead>

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?php echo $vo['collect_id']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td><?php echo $vo['collect_id']; ?></td>
                <td><?php if($vo['collect_type'] == 1): ?>xml<?php else: ?>json<?php endif; ?> </td>
                <td><?php echo mac_get_mid_text($vo['collect_mid']); ?></td>
                <td><a class="layui-badge-rim" href="<?php echo url('api'); ?>?<?php echo http_build_query(['ac'=>'list','cjflag'=>md5($vo['collect_url']),'cjurl'=>$vo['collect_url'],'h'=>'','t'=>'','ids'=>'','wd'=>'','type'=>$vo['collect_type'],'mid'=>$vo['collect_mid'],'opt'=>$vo['collect_opt'],'filter'=>$vo['collect_filter'],'filter_from'=>$vo['collect_filter_from'],'param'=>base64_encode($vo['collect_param'])]); ?>" title="进入资源库">【<?php echo $vo['collect_name']; ?>】<?php echo $vo['collect_url']; ?></a></td>
                <td>
                    <a class="layui-badge-rim" href="<?php echo url('api'); ?>?<?php echo http_build_query(['ac'=>'cj','cjflag'=>md5($vo['collect_url']),'cjurl'=>$vo['collect_url'],'h'=>'24','t'=>'','ids'=>'','wd'=>'','type'=>$vo['collect_type'],'mid'=>$vo['collect_mid'],'opt'=>$vo['collect_opt'],'filter'=>$vo['collect_filter'],'filter_from'=>$vo['collect_filter_from'],'param'=>base64_encode($vo['collect_param'])]); ?>" title="采集当天">采集当天</a>
                    <a class="layui-badge-rim" href="<?php echo url('api'); ?>?<?php echo http_build_query(['ac'=>'cj','cjflag'=>md5($vo['collect_url']),'cjurl'=>$vo['collect_url'],'h'=>'168','t'=>'','ids'=>'','wd'=>'','type'=>$vo['collect_type'],'mid'=>$vo['collect_mid'],'opt'=>$vo['collect_opt'],'filter'=>$vo['collect_filter'],'filter_from'=>$vo['collect_filter_from'],'param'=>base64_encode($vo['collect_param'])]); ?>" title="采集本周">采集本周</a>
                    <a class="layui-badge-rim" href="<?php echo url('api'); ?>?<?php echo http_build_query(['ac'=>'cj','cjflag'=>md5($vo['collect_url']),'cjurl'=>$vo['collect_url'],'h'=>'','t'=>'','ids'=>'','wd'=>'','type'=>$vo['collect_type'],'mid'=>$vo['collect_mid'],'opt'=>$vo['collect_opt'],'filter'=>$vo['collect_filter'],'filter_from'=>$vo['collect_filter_from'],'param'=>base64_encode($vo['collect_param'])]); ?>" title="采集所有">采集所有</a>
                </td>
                <td>
                    <a class="layui-badge-rim j-iframe" data-href="<?php echo url('info?id='.$vo['collect_id']); ?>" data-width="800px" data-height="610px" href="javascript:;" title="编辑">编辑</a>
                    <a class="layui-badge-rim j-tr-del" data-href="<?php echo url('del?ids='.$vo['collect_id']); ?>" href="javascript:;" title="删除">删除</a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <div id="pages" class="center"></div>
    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript">
    layui.use(['laypage', 'layer'], function() {
        var laypage = layui.laypage
                , layer = layui.layer;


    });
</script>
</body>
</html>