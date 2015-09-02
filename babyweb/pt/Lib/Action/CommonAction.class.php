<?php 
class CommonAction extends Action {
    public function _initialize(){
        $lang = LANG;
        $link_model=M('website_link');
        $where["lang"]=$lang;
        $link_data=$link_model->where($where)->order('link_sort')->limit(10)->select();
        $this->assign("link_data",$link_data);
    }
	public function _empty($name){
		$this->display('Public/404');
	}
	public function _404(){
		$this->display('Public/404');
	}
}
?>