<?php
/**
 * CN
 */
class VideoAction extends  CommonAction{
	private $model;
	private $where;
	
	public function _initialize(){
		$this->model = M('website_apps');
		$this->where['del'] = 0;
		$this->where['lang'] = LANG;
		

		$this->assign('cata_id',intval($_REQUEST['cata_id']));
		$this->assign('keyword',$_REQUEST['search_word']);
	}

	public function  getChild(){
        $page = isset($_GET['page']) ? intval($_GET['page']):1;
        $class_id = isset($_REQUEST['class_id']) ? intval($_REQUEST['class_id']):0;

        if($class_id==0){
            $where = 'is_use=1';
        }else{
            $where = 'is_use=1 and video_class_id='.$class_id;
        }

		$res =  M('website_song')->where($where)->order('`order` desc,id desc')->page("$page,9")->select();

        return $res;
	}

	//ios盒子视频
	public function boxvideo(){
        $device=device();
        if($device=='android' || $device=='pc'){
            $device_type=1;
        }else{
            $device_type=0;
        }
		$res = $this->getChild();
		
		$class_id=$_GET['class_id'];
		$all_video=intval($_GET["all"]);
		$animation_video=intval($_GET["animation"]);
		$song_video=intval($_GET["song"]);
        $this->assign('all_video',$all_video);
        $this->assign('animation_video',$animation_video);
		$this->assign('song_video',$song_video);
		$this->assign('class_id',$class_id);
		
        $this->assign('data',$res);
        $this->assign('device_type',$device_type);
		$this->display();
	}

    //android盒子视频
    public function android_boxvideo(){
        $device=device();
        $res = $this->getChild();
		
		$class_id=$_GET['class_id'];
		$all_video=intval($_GET["all"]);
		$animation_video=intval($_GET["animation"]);
		$song_video=intval($_GET["song"]);
        $this->assign('all_video',$all_video);
        $this->assign('animation_video',$animation_video);
		$this->assign('song_video',$song_video);
		$this->assign('class_id',$class_id);
		
        $this->assign('data',$res);
        $this->display();
    }


    public function boxvideo_detail(){
        $id = intval($_GET["id"]);
        if($id){
            $where['is_use'] = '1';
            $where['id'] = $id;
            $res =  M('website_song')->where($where)->find();
            $this->assign("data",$res);
        }
        $this->display();
    }
    public function boxvideo_list(){
        $res = $this->getChild();
        $this->assign('data',$res);
        $this->display('list');
    }
    public function boxvideo_android_list(){
        $res = $this->getChild();
        $this->assign('data',$res);
        $this->display('list_android');
    }
	//盒子视频更多页面
	public function boxvideopage(){
        $res = $this->getChild();
        $this->assign('data',$res);
        $this->display();
    }
	public function boxvideopage_android(){
        $res = $this->getChild();
        $this->assign('data',$res);
        $this->display();
    }
	
	//没有网络
	public function nonetwork(){
        $this->display();
    }

    
    
    
    
    
    
}