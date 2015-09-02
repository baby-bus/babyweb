<?php if (!defined('THINK_PATH')) exit();?> <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="col-sm-4 border">
			<div class="box">
			<img src="<?php echo $val['app_images'] ? $val['app_images']:'__PUBLIC__/images/Public/default.gif';?>" class="img-responsive imgradius" onerror="javascript:this.src='__PUBLIC__/images/Public/default.gif'"/>
			<h1><?php echo ($val['app_name']); ?></h1>
			<p class="describe"><span><?php echo ($val['intro']); ?></span></p>
			<?php if($val['is_active'] == 0): ?><p class="device-icon">
					<span><input class="btn btn-default" type="button" disabled="disabled" value="Aguarde por favor..."></span>
				</p>
			<?php else: ?>
			      <?php echo show_down($val[android_url],$val[cell_android_url],$val[iphone_url],$val[ipad_url]); endif; ?>
		</div>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>