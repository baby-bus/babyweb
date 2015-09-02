<?php
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
		
		if($cata_id){ 
			$this->where['cata_id'] = $cata_id;
		}	
		$result = $this->getList($this->where);
		$this->assign('data',$result);
		$this->display();
		
	}
	public function search(){
		$cata_id = intval($_REQUEST['cata_id']);
		if($cata_id) $this->where['cata_id'] = $cata_id;
		 
		
		$keyword = $_REQUEST['search_word'];
		if($keyword) $this->where['app_name'] = array('like',"%$keyword%");
		
		$is_hot= intval($_REQUEST['is_hot']);
		if($is_hot) $this->where['is_hot'] = 1;
		$result = $this->getList($this->where);
		$this->assign('data',$result);
		$this->display('page');
	}
	public function getMore(){
		$result = $this->getList($this->where);
		$this->assign('data',$result);
		$this->display('page');
	}
	public function getList($where){
		$page = isset($_GET['page']) ? intval($_GET['page']):1;
		$result = $this->model->field('id,ipad_id,iphone_id,cell_android_url,android_url,app_name,app_images,intro')->where($where)->order("last_top desc,id desc")->page(''.$page.',9')->select();
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
}