<?php if (!defined('THINK_PATH')) exit(); if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-xs-4 border"><div class="box"><div class="video-container"><a href="<?php echo U('video/boxvideo_detail','id='.$vo[id]);?>"><img src="<?php echo ($vo["song_img"]); ?>" onerror="javascript:this.src='__PUBLIC__/images/public/default.gif'" class="img-responsive imgradius"/></a></div><h1><?php echo ($vo["song_name"]); ?></h1></div></div><?php endforeach; endif; else: echo "" ;endif; ?>