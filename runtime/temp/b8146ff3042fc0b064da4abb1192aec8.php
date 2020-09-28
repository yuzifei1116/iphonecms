<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\phpstudy_pro\WWW\applecms/application/admin\view\voddowner\index.html";i:1579008637;s:68:"D:\phpstudy_pro\WWW\applecms\application\admin\view\public\head.html";i:1579008637;s:68:"D:\phpstudy_pro\WWW\applecms\application\admin\view\public\foot.html";i:1579008637;}*/ ?>
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
            <a data-href="<?php echo url('info'); ?>" class="layui-btn layui-btn-primary j-iframe"><i class="layui-icon">&#xe654;</i>添加</a>
            <a data-href="<?php echo url('index/select'); ?>?tab=vod&col=status&tpl=select_state&url=voddowner/field" data-width="470" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i>状态</a>
            <a data-href="<?php echo url('index/select'); ?>?tab=vod&col=ps&tpl=select_state&url=voddowner/field" data-width="470" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i>解析状态</a>
        </div>

    </div>

    <form class="layui-form " method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th width="40">排序</th>
                <th width="40">编码</th>
                <th width="130">名称</th>
                <th width="50">状态</th>
                <th width="50">解析状态</th>
                <th width="50">目标窗口</th>
                <th width="130">独立解析地址</th>
                <th width="130">备注</th>
                <th>提示</th>
                <th width="130">操作</th>
            </tr>
            </thead>

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?php echo $vo['from']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td><?php echo $vo['sort']; ?></td>
                <td><?php echo $vo['from']; ?></td>
                <td><?php echo $vo['show']; ?></td>
                <td><?php if($vo['status'] == 1): ?><span class="layui-badge layui-bg-green">启用</span><?php else: ?><span class="layui-badge">禁用</span><?php endif; ?> </td>
                <td><?php if($vo['ps'] == 1): ?><span class="layui-badge layui-bg-green">启用</span><?php else: ?><span class="layui-badge">禁用</span><?php endif; ?> </td>
                <td><?php if($vo['target'] != '_blank'): ?><span class="layui-badge layui-bg-green">当前</span><?php else: ?><span class="layui-badge">新页</span><?php endif; ?> </td>
                <td><?php echo $vo['parse']; ?></td>
                <td><?php echo $vo['des']; ?></td>
                <td><?php echo $vo['tip']; ?></td>
                <td>
                    <a class="layui-badge-rim j-iframe" data-href="<?php echo url('info?id='.$vo['from']); ?>" href="javascript:;" title="编辑">编辑</a>
                    <a class="layui-badge-rim j-tr-del" data-href="<?php echo url('del?ids='.$vo['from']); ?>" href="javascript:;" title="删除">删除</a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>

    </form>
</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>

<script type="text/javascript">

</script>
</body>
</html>