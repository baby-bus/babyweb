<?php if (!defined('THINK_PATH')) exit(); if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-6 border">
        <div class="box">
            <div class="video-container">
                <iframe width="100%" height="100%" src="http://player.youku.com/embed/<?php echo ($vo["song_ukid"]); ?>" frameborder="0" allowfullscreen=""></iframe>
                <a class="playbutton"></a>
                <img src="<?php echo ($vo["song_img"]); ?>" onerror="javascript:this.src='__PUBLIC__/images/public/default.gif'" class="img-responsive imgradius"/>
            </div>
            <h1><?php echo ($vo["song_name"]); ?></h1>
            <p class="describe"><?php echo ($vo["song_introduce"]); ?></p>
        </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>