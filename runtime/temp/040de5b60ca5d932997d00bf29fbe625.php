<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:31:"template/b/html/label\week.html";i:1567153060;s:61:"D:\phpstudy_pro\WWW\applecms\template\b\html\list\fjlist.html";i:1566886192;}*/ ?>
<?php include ('template/b/admin/yzm.config.php'); ?>
        						       <div class="column-lft">
         						          <div class="sort_nav ">
       						                 <h3 class="sort_nav_tit"><i class="icon icon_t icon-dvbox"></i><span>新番节目表</span></h3>
               						         <div class="tab-title" id="mytabsweek">
									<li class="item"><a href="javascript:void(0);" >最新</a></li>
									<li class="item <?php if(date('w') == 1): ?>item-cur<?php endif; ?>"><a href="javascript:void(0);" ><?php if(date('w') == 1): ?>今天<?php else: ?>一<?php endif; ?></a></li>
									<li class="item <?php if(date('w') == 2): ?>item-cur<?php endif; ?>"><a href="javascript:void(0);" ><?php if(date('w') == 2): ?>今天<?php else: ?>二<?php endif; ?></a></li>
									<li class="item <?php if(date('w') == 3): ?>item-cur<?php endif; ?>"><a href="javascript:void(0);" ><?php if(date('w') == 3): ?>今天<?php else: ?>三<?php endif; ?></a></li>
									<li class="item <?php if(date('w') == 4): ?>item-cur<?php endif; ?>"><a href="javascript:void(0);" ><?php if(date('w') == 4): ?>今天<?php else: ?>四<?php endif; ?></a></li>
									<li class="item <?php if(date('w') == 5): ?>item-cur<?php endif; ?>"><a href="javascript:void(0);" ><?php if(date('w') == 5): ?>今天<?php else: ?>五<?php endif; ?></a></li>
									<li class="item <?php if(date('w') == 6): ?>item-cur<?php endif; ?>"><a href="javascript:void(0);" ><?php if(date('w') == 6): ?>今天<?php else: ?>六<?php endif; ?></a></li>
									<li class="item <?php if(date('w') == 0): ?>item-cur<?php endif; ?>"><a href="javascript:void(0);" ><?php if(date('w') == 0): ?>今天<?php else: ?>日<?php endif; ?></a></li>
									</div>				    
               						         <div class="tab-cont" id="mytabweek">
							   		<li class="item"><ul class="tab-content">
									<?php $__TAG__ = '{"num":"12","type":"4","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><li class="bangumi-item"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank" class="item-cover"><div class="lazy-img"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'" alt="<?php echo $vo['vod_name']; ?>"></div>                           	</a><div class="item-info"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank"><?php echo $vo['vod_name']; ?></a><p <?php if($vo['vod_time'] == date('m-d')): ?> style="color: #673AB7;"<?php endif; ?> class="num"><i class="iconfont">&#xe612;</i><?php echo date('m-d',$vo['vod_time']); ?><br><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;<a  <?php if(date('d',$vo['vod_time']) == date('d',time())): ?> style="background:#ff8eb3;"<?php endif; ?>><?php echo $vo['vod_serial']; ?>话</a><?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p></div></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></li>
									<li class="item <?php if(date('w') == 1): ?>cur<?php endif; ?>"><ul class="tab-content">
									<?php $__TAG__ = '{"num":"12","type":"all","by":"time","order":"desc","weekday":"\u4e00","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><li class="bangumi-item"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank" class="item-cover"><div class="lazy-img"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'" alt="<?php echo $vo['vod_name']; ?>"></div>                           	</a><div class="item-info"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank"><?php echo $vo['vod_name']; ?></a><p <?php if($vo['vod_time'] == date('m-d')): ?> style="color: #673AB7;"<?php endif; ?> class="num"><i class="iconfont">&#xe612;</i><?php echo date('m-d',$vo['vod_time']); ?><br><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;<a  <?php if(date('d',$vo['vod_time']) == date('d',time())): ?> style="background:#ff8eb3;"<?php endif; ?>><?php echo $vo['vod_serial']; ?>话</a><?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p></div></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></li>
									<li class="item <?php if(date('w') == 2): ?>cur<?php endif; ?>"><ul class="tab-content">
									<?php $__TAG__ = '{"num":"12","type":"all","by":"time","order":"desc","weekday":"\u4e8c","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><li class="bangumi-item"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank" class="item-cover"><div class="lazy-img"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'" alt="<?php echo $vo['vod_name']; ?>"></div>                           	</a><div class="item-info"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank"><?php echo $vo['vod_name']; ?></a><p <?php if($vo['vod_time'] == date('m-d')): ?> style="color: #673AB7;"<?php endif; ?> class="num"><i class="iconfont">&#xe612;</i><?php echo date('m-d',$vo['vod_time']); ?><br><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;<a  <?php if(date('d',$vo['vod_time']) == date('d',time())): ?> style="background:#ff8eb3;"<?php endif; ?>><?php echo $vo['vod_serial']; ?>话</a><?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p></div></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></li>
									<li class="item <?php if(date('w') == 3): ?>cur<?php endif; ?>"><ul class="tab-content">
									<?php $__TAG__ = '{"num":"12","type":"all","by":"time","order":"desc","weekday":"\u4e09","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><li class="bangumi-item"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank" class="item-cover"><div class="lazy-img"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'" alt="<?php echo $vo['vod_name']; ?>"></div>                           	</a><div class="item-info"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank"><?php echo $vo['vod_name']; ?></a><p <?php if($vo['vod_time'] == date('m-d')): ?> style="color: #673AB7;"<?php endif; ?> class="num"><i class="iconfont">&#xe612;</i><?php echo date('m-d',$vo['vod_time']); ?><br><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;<a  <?php if(date('d',$vo['vod_time']) == date('d',time())): ?> style="background:#ff8eb3;"<?php endif; ?>><?php echo $vo['vod_serial']; ?>话</a><?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p></div></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></li>
									<li class="item <?php if(date('w') == 4): ?>cur<?php endif; ?>"><ul class="tab-content">
									<?php $__TAG__ = '{"num":"12","type":"all","by":"time","order":"desc","weekday":"\u56db","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><li class="bangumi-item"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank" class="item-cover"><div class="lazy-img"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'" alt="<?php echo $vo['vod_name']; ?>"></div>                           	</a><div class="item-info"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank"><?php echo $vo['vod_name']; ?></a><p <?php if($vo['vod_time'] == date('m-d')): ?> style="color: #673AB7;"<?php endif; ?> class="num"><i class="iconfont">&#xe612;</i><?php echo date('m-d',$vo['vod_time']); ?><br><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;<a  <?php if(date('d',$vo['vod_time']) == date('d',time())): ?> style="background:#ff8eb3;"<?php endif; ?>><?php echo $vo['vod_serial']; ?>话</a><?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p></div></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></li>
									<li class="item <?php if(date('w') == 5): ?>cur<?php endif; ?>"><ul class="tab-content">
									<?php $__TAG__ = '{"num":"12","type":"all","by":"time","order":"desc","weekday":"\u4e94","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><li class="bangumi-item"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank" class="item-cover"><div class="lazy-img"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'" alt="<?php echo $vo['vod_name']; ?>"></div>                           	</a><div class="item-info"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank"><?php echo $vo['vod_name']; ?></a><p <?php if($vo['vod_time'] == date('m-d')): ?> style="color: #673AB7;"<?php endif; ?> class="num"><i class="iconfont">&#xe612;</i><?php echo date('m-d',$vo['vod_time']); ?><br><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;<a  <?php if(date('d',$vo['vod_time']) == date('d',time())): ?> style="background:#ff8eb3;"<?php endif; ?>><?php echo $vo['vod_serial']; ?>话</a><?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p></div></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></li>
									<li class="item <?php if(date('w') == 6): ?>cur<?php endif; ?>"><ul class="tab-content">
									<?php $__TAG__ = '{"num":"12","type":"all","by":"time","order":"desc","weekday":"\u516d","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><li class="bangumi-item"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank" class="item-cover"><div class="lazy-img"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'" alt="<?php echo $vo['vod_name']; ?>"></div>                           	</a><div class="item-info"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank"><?php echo $vo['vod_name']; ?></a><p <?php if($vo['vod_time'] == date('m-d')): ?> style="color: #673AB7;"<?php endif; ?> class="num"><i class="iconfont">&#xe612;</i><?php echo date('m-d',$vo['vod_time']); ?><br><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;<a  <?php if(date('d',$vo['vod_time']) == date('d',time())): ?> style="background:#ff8eb3;"<?php endif; ?>><?php echo $vo['vod_serial']; ?>话</a><?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p></div></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></li>
									<li class="item <?php if(date('w') == 0): ?>cur<?php endif; ?>"><ul class="tab-content">
									<?php $__TAG__ = '{"num":"12","type":"all","by":"time","order":"desc","weekday":"\u65e5","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><li class="bangumi-item"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank" class="item-cover"><div class="lazy-img"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'" alt="<?php echo $vo['vod_name']; ?>"></div>                           	</a><div class="item-info"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank"><?php echo $vo['vod_name']; ?></a><p <?php if($vo['vod_time'] == date('m-d')): ?> style="color: #673AB7;"<?php endif; ?> class="num"><i class="iconfont">&#xe612;</i><?php echo date('m-d',$vo['vod_time']); ?><br><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;<a  <?php if(date('d',$vo['vod_time']) == date('d',time())): ?> style="background:#ff8eb3;"<?php endif; ?>><?php echo $vo['vod_serial']; ?>话</a><?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p></div></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></li>
						    </div>                       
                    </div><script type="text/javascript">var _0xb03d=["\x63\x75\x72","\x72\x65\x6D\x6F\x76\x65\x43\x6C\x61\x73\x73","\x73\x69\x62\x6C\x69\x6E\x67\x73","\x61\x64\x64\x43\x6C\x61\x73\x73","\x69\x6E\x64\x65\x78","\x65\x71","\x23\x6D\x79\x74\x61\x62\x77\x65\x65\x6B\x20\x2E\x69\x74\x65\x6D","\x69\x74\x65\x6D\x2D\x63\x75\x72","\x23\x6D\x79\x74\x61\x62\x73\x77\x65\x65\x6B\x20\x2E\x69\x74\x65\x6D","\x63\x6C\x69\x63\x6B"];$(function(){$(_0xb03d[8])[_0xb03d[9]](function(){$(_0xb03d[6])[_0xb03d[5]]($(this)[_0xb03d[4]]())[_0xb03d[3]](_0xb03d[0])[_0xb03d[2]]()[_0xb03d[1]](_0xb03d[0]);$(_0xb03d[8])[_0xb03d[5]]($(this)[_0xb03d[4]]())[_0xb03d[3]](_0xb03d[7])[_0xb03d[2]]()[_0xb03d[1]](_0xb03d[7])})})</script>

	</div>
