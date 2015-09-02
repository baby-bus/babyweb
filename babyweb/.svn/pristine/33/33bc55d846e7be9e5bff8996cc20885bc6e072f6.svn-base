<?php if (!defined('THINK_PATH')) exit();?> <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item border">
        <h2><a href="__URL__/info/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></h2>
        <ul class="postmetadata clearfix">
            <li class="author"><?php echo ($vo["username"]); ?></li>
            <li class="date"><?php echo ($vo["createtime"]); ?></li>          
        </ul>
        <div><img src="<?php echo $vo['thumb'] ? $vo['thumb']:__PUBLIC__/images/blog/temp42_14.jpg;?>" onerror="javascript:this.src='__PUBLIC__/images/blog/temp42_14.jpg'" class="img-responsive"/></div>
        <p class="digest"><?php echo ($vo["match_p"]); ?>...</p>
        <p class="text-right"><a href="__URL__/info/id/<?php echo ($vo["id"]); ?>" class="btn btn-primary">En savoir plus →</a></p>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>