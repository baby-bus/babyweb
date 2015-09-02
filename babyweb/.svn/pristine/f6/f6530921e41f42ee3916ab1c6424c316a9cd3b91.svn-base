<?php if (!defined('THINK_PATH')) exit();?> <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="col-sm-4 border">
			<div class="box">
                    <img src="<?php echo $val['app_images'] ? $val['app_images']:'__PUBLIC__/images/Public/default.gif';?>" class="img-responsive imgradius" onerror="javascript:this.src='__PUBLIC__/images/Public/default.gif'"/>
                <h1><?php echo ($val['app_name']); ?></h1>
			<p class="describe"><?php echo ($val['intro']); ?></p>
			<?php if($val['is_active'] == 0): ?><p class="device-icon">
					<span><input class="btn btn-default" type="button" disabled="disabled" value="审核中"></span>
				</p>
			<?php else: ?>
                <!-- 微信链接 -->
                <?php if(empty($url_type)): echo show_down($val['android_url'],$val['cell_android_url'],$val['iphone_url'],$val['ipad_url']);?>
                <?php else: ?>
                    <?php if(($type == 'android')): ?><p class='device-icon'><span><a href="<?php echo ($val['myapp_url']); ?>"  target="_blank" data-original-title=''><img src='__PUBLIC__/images/product/info/weixin_down.png'></a></span></p>
                        <?php elseif(($type == 'ios')): ?>
                        <p class='device-icon'><span><a href="<?php echo ($val['myios_url']); ?>"  target="_blank" data-original-title=''><img src='__PUBLIC__/images/product/info/weixin_down.png'></a></span></p><?php endif; endif; endif; ?>
		</div>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>