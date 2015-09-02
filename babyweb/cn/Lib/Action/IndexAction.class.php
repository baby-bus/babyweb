<?php 
class IndexAction extends CommonAction{
	
    /* edit by csg 14-09-19 */
	public function index(){
            //获取语言
            $lang = LANG;
            $data = M('Website_index_images')->where("lang='$lang' and used=1")->order('num asc,id asc')->select();
            foreach($data as $v){
                $description=json_decode($v['description']);
                $v['description'] = array('p1'=>stripslashes($description->p1),'p2'=>stripslashes($description->p2),
                    'p3'=>stripslashes($description->p3),'p4'=>stripslashes($description->p4),
                    'p5'=>stripslashes($description->p5));
                $res[] = $v;
            }
            $device = device();
            $this->assign('device',$device);
            $this->assign('list',$res);
            $this->display();
	}
    /* end */

	public function clear(){
        $path  = APP_NAME.'/Runtime/Cache';
        $path1 = APP_NAME.'/Runtime/Data';
        $this->deleteDir($path);
        $this->deleteDir($path1);
        mkdir($path);
        mkdir($path1);
        chmod($path,0777);
        chmod($path1,0777);
        $this->deleteDir(APP_NAME.'/Runtime/~app.php');
        $this->deleteDir(APP_NAME.'/Runtime/~runtime.php');
        $this->deleteDir(APP_NAME.'/Runtime/~rest_runtime.php');
        header("Location:".WEB_URL);
	}
    private function deleteDir($dirName){
        if(!is_dir($dirName)){
            @unlink($dirName);
            return false;
        }
        $handle = @opendir($dirName);
        while(($file = @readdir($handle)) !== false){
            if($file != '.' && $file != '..'){
                $dir = $dirName . '/' . $file;
                is_dir($dir) ? $this->deleteDir($dir) : @unlink($dir);
            }
        }
        closedir($handle);
        return rmdir($dirName);
    }
    /**
 *
 * 隐私政策
 */
    public function privacyPolicy(){
        $lang = LANG;
        $link_model=M('website_link');
        $where["lang"]=$lang;
        $count=$link_model->where($where)->count();
        $this->assign('count',$count);
        $this->display('privacy');
    }
    /**
     *
     * 使用声明
     */
    public function declaration(){
        $lang = LANG;
        $link_model=M('website_link');
        $where["lang"]=$lang;
        $count=$link_model->where($where)->count();
        $this->assign('count',$count);
        $this->display();
    }
	
	/**
     * 
     * 友情链接
     */
    public function link(){
        $lang = LANG;
        $link_model=M('website_link');
        $where["lang"]=$lang;
        $link_data=$link_model->where($where)->order('link_sort')->select();
        $this->assign("link_data",$link_data);
    	$this->display('link');
    }
}
?>