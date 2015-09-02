<?php 
/**
 * @brief   官网Blog
 * @project en/Blog
 * @author  csg
 * @date    14-10-23
 */
class BlogAction extends CommonAction{
	
	public function index(){
       $res = $this->getInfo();
       $this->assign('data',$res);
       $this->display();
	}

	public function getInfo(){
        $page = isset($_GET['page']) ? intval($_GET['page']):1;
        $where = "review=1 and lang='ru' ";
		$res =  M('website_blog')->where($where)->order('id desc')->page("$page,3")->select();
        foreach($res as &$v){
            $v['createtime'] = date("F-d, Y",$v['createtime']);
            $v['content'] = htmlspecialchars_decode($v['content']);
            $v['content'] = preg_replace("/&nbsp;/is"," ",$v['content']);
            $str = $v['content'];
            $v['match_p'] = mb_substr(strip_tags($str),0,150,'utf-8'); 
        }
        return $res;
	}
    
    //获取更多数据
    public function infoMore(){
        $res = $this->getInfo();
        $this->assign('data',$res);
        $this->display('infopage');
    }
    
    //发表留言
    public function saveBlog(){
        $data = $_POST;
        !empty($data['name']) && $data['name'] = htmlspecialchars(trim($data['name'])); 
        !empty($data['email']) && $data['email'] = htmlspecialchars(trim($data['email'])); 
        !empty($data['content']) && $data['content'] = htmlspecialchars(trim($data['content']));
        $data['createtime'] = time();
        $data['lang'] = 'ru';
        $data['blog_id'] = $data['blog_id'];
        if( $data['name'] && $data['email'] && $data['content']){
             $result = M('Website_words')->add($data);
             if($result){
                echo 1;
            }else{
                echo 2;
                }
        }
       
    }

    //Blog详情页
	public function info(){
        $id = $_GET['id'];
        $minid = M('Website_blog')->where(" lang='ru' ")->min("id");
        $maxid = M('Website_blog')->where(" lang='ru' ")->max("id");
        $old_info = M('Website_blog')->where(" id<$id and lang='ru' ")->order('id desc')->find();
        $old_id = $old_info['id']; 
        if($id == $minid){
            $old_id = $id;
        }
        $new_info = M('Website_blog')->where(" id>$id and lang='ru' ")->order('id asc')->find();
        $new_id = $new_info['id'];
        if($id == $maxid){
            $new_id = $id;
        }
        $result = M('Website_blog')->where(" id=$id and lang='ru' ")->find();
        $content = htmlspecialchars_decode($result['content']);
        $content = preg_replace("/&nbsp;/is"," ",$content);
        $result['content'] = $content;
        $result['createtime'] = date('F-d, Y',$result['createtime']);
        $this->assign('data',$result);
        $this->assign('old_id',$old_id);
        $this->assign('new_id',$new_id);
        $this->assign('minid',$minid);
        $this->assign('maxid',$maxid);
        $this->display();
	}
    

    

    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
















?>