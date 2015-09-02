<?php
/**
 * CN
 */
class ProductAction extends  CommonAction{
	private $model;
	private $where;
	
	public function _initialize(){
		$this->model = M('website_apps');
		$this->where['del'] = 0;
		$this->where['lang'] = LANG;
		

		$this->assign('cata_id',intval($_REQUEST['cata_id']));
		$this->assign('keyword',$_REQUEST['search_word']);
	}
	
	
	public function index(){
		$data = $_GET;
		$cata_id = intval($data['cata_id']);
		$is_hot = intval($data['is_hot']);
        $url_type = isWeixin();     //判断微信打开
        $is_android = is_android();
        $is_ios     = is_ios();
		if($cata_id)  $this->where['cata_id'] = $cata_id;
        if($is_android){
            if($url_type) $this->where["myapp_url"]=array("neq","");
            $type="android";
        }
        if($is_ios){
            if($url_type) $this->where["myios_url"]=array("neq","");
            $type="ios";
        }
		$result = $this->getList($this->where);
        $this->assign('url_type',$url_type);
		$this->assign('data',$result);
        $this->assign('type',$type);
		$this->display();
		
	}
	public function search(){
		$cata_id = intval($_REQUEST['cata_id']);
        $keyword = $_REQUEST['search_word'];
        $url_type = isWeixin();     //判断微信打开
        $is_android = is_android();
        $is_ios     = is_ios();
		if($cata_id) $this->where['cata_id'] = $cata_id;
		if($keyword) $this->where['app_name'] = array('like',"%$keyword%");
        if($is_android){
            if($url_type) $this->where["myapp_url"]=array("neq","");
            $type="android";
        }
        if($is_ios){
            if($url_type) $this->where["myios_url"]=array("neq","");
            $type="ios";
        }
		$result = $this->getList($this->where);
        $this->assign('url_type',$url_type);
		$this->assign('data',$result);
        $this->assign('type',$type);
		$this->display('page');
	}
    
	public function getMore(){
        $url_type = isWeixin();     //判断微信打开
        $is_android = is_android();
        $is_ios     = is_ios();
        if($is_android){
            if($url_type) $this->where["myapp_url"]=array("neq","");
            $type="android";
        }
        if($is_ios){
            if($url_type) $this->where["myios_url"]=array("neq","");
            $type="ios";
        }
		$result = $this->getList($this->where);
        $this->assign('url_type',$url_type);
		$this->assign('data',$result);
        $this->assign('type',$type);
		$this->display('page');
	}
    
	public function getList($where){
		$page = isset($_GET['page']) ? intval($_GET['page']):1;
		$result = $this->model->field('id,ipad_id,iphone_id,cell_android_url,android_url,app_name,app_images,intro,myapp_url,myios_url')->where($where)->order("id desc")->page(''.$page.',9')->select();
		//echo $this->model->getLastSql();
		foreach ($result as $key=>&$res){
			if($res['app_images']) {
				if(strpos($res['app_images'], "/i/")===0){
					$res['app_images'] = APP_URL.$res['app_images'];
				}
			}
			
			$appLang = M('app_langs')->field('app_id,store_url')->where("lang = '".LANG."' and (app_id = {$res['ipad_id']} or app_id = {$res['iphone_id']})")->select();
			$res['is_active'] = 0;
			foreach ($appLang as $app){
				if($res['ipad_id']==$app['app_id']){
					$res['ipad_url'] = $app['store_url'];
				}
				if($res['iphone_id']==$app['app_id']){
					$res['iphone_url'] = $app['store_url'];
				}
			}
			if($res['android_url']||$res['ipad_url']||$res['iphone_url']) $res['is_active'] = 1;
		}
		return $result;
	}
	/**
	 * 
	 * 父母必备
	 */
	public function fm(){
		$this->display();
	}
	
    /**
     * 产品详情
     * csg 14-11-5
     */

	public function info(){
        $id = $_GET['id'];
        $res = M('Website_apps')->join(' website_app_imgs on website_apps.id = website_app_imgs.app_id ')->where('website_apps.id='.$id)->select();
        foreach($res as &$v){
            $v['app_images'] = APP_URL.$v['app_images'];
            $v['app_logo'] = get_lang_url(LANG).$v['app_logo'];
            $v['webintro'] = htmlspecialchars_decode($v['webintro']);
        }
        $down_url = $this->get_one_url($id);
        $hots = $this->get_hot(LANG);
        foreach($hots as &$v){
            $v['app_logo'] = get_lang_url(LANG).$v['app_logo'];
        }
        //二维码访问页面
        $jump_url = "http://".$_SERVER['HTTP_HOST'].__URL__."/gourl/id/".$id;
        $device = device();
        $this->assign('jump_url',$jump_url);
        $this->assign('id',$id);
        $this->assign('device',$device);
        $this->assign('hots',$hots);
        $this->assign('down_url',$down_url);
        $this->assign('data',$res);
		$this->display();
	}
    
    /* add by csg 14-10-17 */
    /**
     * 儿童歌谣
     *  
     */
    public function childSong(){
       $res = $this->getChild();
       $this->assign('data',$res);
       $this->display();
    }
    
	public function getChild(){
        $page = isset($_GET['page']) ? intval($_GET['page']):1;
        $where = 'is_use=1';
		$res =  M('website_song')->where($where)->order('`order` desc,id desc')->page("$page,4")->select();
        return $res;
	}
    
    //获取更多数据
    public function childMore(){
        $res = $this->getChild();
        $this->assign('data',$res);
        $this->display('childpage');
    }
    /* end */
    
	//安卓二维码扫描的地址
	public function showDownList(){
		if(isWeixin()){
			$this->redirect('weixin');
		}else{
			$this->redirect('applist');
		}
	}
	public function weixin(){
		$this->display();
	}

	/**
	 * 安卓下载页面
	 */
	public function applist(){
		$this->where['android_id'] = array('gt',0);//过滤安卓还没发布的产品
		$this->where['cell_android_url'] = array('neq','');
		$result = $this->getAndroidList($this->where);
		$this->assign('data',$result);
		$this->display();
	}
	public function getAndroidMore(){
		$this->where['android_id'] = array('gt',0);//过滤安卓还没发布的产品
		$this->where['cell_android_url'] = array('neq','');
		$result = $this->getAndroidList($this->where);
		$this->assign('data',$result);
		$this->display('list');
	}
	private function getAndroidList($where){
		$page = isset($_GET['page']) ? intval($_GET['page']):1;
		$result = $this->model->field('android_id,cell_android_url,app_name,app_logo')->where($where)->order("id desc")->page(''.$page.',20')->select();
		foreach ($result as $key=>&$res){
			if($res['app_logo']) {
				if(strpos($res['app_logo'], "/Public/")===false){
					$res['app_logo'] = LOGO_URL.$res['app_logo'];
				}
			}
			$appList = M('android_apps')->field('appVersion,appSize')->where("appID = {$res[android_id]}")->find();
			$res['app_version'] = $appList['appVersion'];
			$res['app_size'] = $appList['appSize'];
		}
		return $result;
	}
    
    /* 详情页推荐产品 */
    public function get_hot($lang){
        $res = M('Website_apps')->where(" is_hot = 1 and lang ='$lang' ")->limit(6)->select();
        if($res){
            if(count($res)<6 and count($res)>=1){
                foreach($res as $v){
                    $id_row[] = $v['id'];
                }
                $map['id'] = array('not in',$id_row); 
                $map['lang'] = $lang;
                $res_new = M('Website_apps')->where($map)->order(' id desc ')->limit(6-count($res))->select();
                $res = array_merge($res,$res_new);
            }
        }else{
            $res = M('Website_apps')->where(" lang ='$lang' ")->order(' id desc ')->limit(6)->select();
        }
        return $res;
    }
    
    /* 详情页二维码跳转 */
    public function gourl(){
        $id = $_GET['id'];
        $device = device();
        $down_url = $this->get_one_url($id);
        switch($device){
            case 'iphone':
                $dev_url = $down_url['app_url'];
            case 'ipad':
                $dev_url = $down_url['app_url'];
            case 'ipod':
                $dev_url = $down_url['app_url'];
            case 'android':
                $dev_url = $down_url['and_url'];
            default:
                $dev_url = $down_url['and_url'];
        }
        if($dev_url){
            echo "<script type='text/javascript'>window.location.href='{$dev_url}'</script>"; 
        }else{
            echo "敬请期待";
        }
         
    }
    
    /**
     * @param int $id 产品ID
     */
    public function get_one_url($id){
        if($id){
            $ipad_id = M('Website_apps')->where(" id = $id ")->getField('ipad_id');
            $app_url = M('App_langs')->where(" app_id = '$ipad_id' and lang = '".LANG."' ")->getField('store_url'); 
            $and_url = M('Website_apps')->where('website_apps.id='.$id)->getField('android_url');
        }
        $down_url=array('app_url'=>$app_url,'and_url'=>$and_url);
        return $down_url;
    }
    
    
    
    
    
    
}