<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2009 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// |         lanfengye <zibin_5257@163.com>
// +----------------------------------------------------------------------

class Page {
    
    // 分页栏每页显示的页数
    public $rollPage = 5;
    // 页数跳转时要带的参数
    public $parameter  ;
    // 分页URL地址
    public $url     =   '';
    // 默认列表每页显示行数
    public $listRows = 20;
    // 起始行数
    public $firstRow    ;
    // 分页总页面数
    protected $totalPages  ;
    // 总行数
    protected $totalRows  ;
    // 当前页数
    protected $nowPage    ;
    // 分页的栏的总页数
    protected $coolPages   ;
    // 分页显示定制
    protected $config  =    array('prev'=>'«','next'=>'»','first'=>'第一页','last'=>'最后一页','theme'=>'  %upPage%    %linkPage%  %downPage%');
    // 默认分页变量名
    protected $varPage;

    /**
     * 架构函数
     * @access public
     * @param array $totalRows  总的记录数
     * @param array $listRows  每页显示记录数
     * @param array $parameter  分页跳转的参数
     */
    public function __construct($totalRows,$listRows='',$parameter='',$url='') {
        $this->totalRows    =   $totalRows;
        $this->parameter    =   $parameter;
        $this->varPage      =   C('VAR_PAGE') ? C('VAR_PAGE') : 'p' ;
        if(!empty($listRows)) {
            $this->listRows =   intval($listRows);
        }
        $this->totalPages   =   ceil($this->totalRows/$this->listRows);     //总页数
        $this->coolPages    =   ceil($this->totalPages/$this->rollPage);
        $this->nowPage      =   !empty($_GET[$this->varPage])?intval($_GET[$this->varPage]):1;
        if($this->nowPage<1){
            $this->nowPage  =   1;
        }elseif(!empty($this->totalPages) && $this->nowPage>$this->totalPages) {
            $this->nowPage  =   $this->totalPages;
        }
        $this->firstRow     =   $this->listRows*($this->nowPage-1);
        if(!empty($url))    $this->url  =   $url; 
    }

    public function setConfig($name,$value) {
        if(isset($this->config[$name])) {
            $this->config[$name]    =   $value;
        }
    }

    /**
     * 分页显示输出
     * @access public
     */
    public function show() {
        if(0 == $this->totalRows) return '';
        $p              =   $this->varPage;
        $nowCoolPage    =   ceil($this->nowPage/$this->rollPage);
 
        // 分析分页参数
        if($this->url){
            $depr       =   C('URL_PATHINFO_DEPR');
            $url        =   rtrim(U('/'.$this->url,'',false),$depr).$depr.'__PAGE__';
            
        }else{
            if($this->parameter && is_string($this->parameter)) {
                parse_str($this->parameter,$parameter);
            }elseif(is_array($this->parameter)){
                $parameter  =   $this->parameter;
            }elseif(empty($this->parameter)){
                unset($_GET[C('VAR_URL_PARAMS')]);
                $var =  !empty($_POST)?$_POST:$_GET;
                if(empty($var)) {
                    $parameter  =   array();
                }else{
                    $parameter  =   $var;
                }
            }
            $parameter[$p]  =   '__PAGE__';
            $url            =   U('',$parameter);
        }
       
        //上下翻页字符串
        $upRow          =   $this->nowPage-1;
        $downRow        =   $this->nowPage+1;
       
           
        if ($upRow>0){
        	if($this->parameter){
        		$upPage     =   "<li><a href='product-".$upRow."-".$this->parameter.".html'>".$this->config['prev']."</a></li>";
        	}else{
        		$upPage     =   "<li><a href='product-".$upRow.".html'>".$this->config['prev']."</a></li>";
        	}
        }else{
            $upPage     =   '';
        }

        if ($downRow <= $this->totalPages){
        	if($this->parameter){
        		$downPage   =   "<li><a href='product-".$downRow."-".$this->parameter.".html'>".$this->config['next']."</a></li>";
        	}else{
        		$downPage   =   "<li><a href='product-".$downRow.".html'>".$this->config['next']."</a></li>";
        	}
        }else{
            $downPage   =   '';
        }
        // << < > >>
        if($nowCoolPage == 1){
            $theFirst   =   '';
            $prePage    =   '';
        }else{
            $preRow     =   $this->nowPage-$this->rollPage;
            if($this->parameter){
            	$prePage    =   "<li><a href='product-".$preRow."-".$this->parameter.".html' >上".$this->rollPage."页</a></li>";
            }else{
            	$prePage    =   "<li><a href='product-".$preRow.".html' >上".$this->rollPage."页</a></li>";
            }
            if($this->parameter){
            	 $theFirst   =   "<li><a href='product-".$theFirst."-".$this->parameter.".html' >".$this->config['first']."</a></li>";
            }else{
            	 $theFirst   =   "<li><a href='product-".$theFirst.".html' >".$this->config['first']."</a></li>";
            }
           
           
        }
        if($nowCoolPage == $this->coolPages){
            $nextPage   =   '';
            $theEnd     =   '';
        }else{
            $nextRow    =   $this->nowPage+$this->rollPage;
            $theEndRow  =   $this->totalPages;
            if($this->parameter){
            	$nextPage   =   "<li><a href='product-".$nextRow."-".$this->parameter.".html' >下".$this->rollPage."页</a></li>";
            }else{
            	$nextPage   =   "<li><a href='product-".$nextRow.".html' >下".$this->rollPage."页</a></li>";
            }
            if($this->parameter){
             	$theEnd     =   "<li><a href='product-".$theEndRow."-".$this->parameter.".html' >".$this->config['last']."</a></li>";
            }else{
            	$theEnd     =   "<li><a href='product-".$theEndRow.".html' >".$this->config['last']."</a></li>";
            }
            
        }
        // 1 2 3 4 5
        $linkPage = "";
        for($i=1;$i<=$this->rollPage;$i++){
            $page       =   ($nowCoolPage-1)*$this->rollPage+$i;
            if($page!=$this->nowPage){
                if($page<=$this->totalPages){
                	if($this->parameter){
                	    $linkPage .= "<li><a href='product-".$page."-".$this->parameter.".html'>".$page."</a></li>";
                	}else{
                		$linkPage .= "<li><a href='product-".$page.".html'>".$page."</a></li>";
                	}
                }else{
                    break;
                }
            }else{
                if($this->totalPages != 1){
                    $linkPage .= "<li class='active'><span >".$page."</span></li>";
                }
            }
        }
        $pageStr     =   str_replace(
            array('%upPage%','%downPage%','%first%','%prePage%','%linkPage%','%nextPage%'),
            array($upPage,$downPage,$theFirst,$prePage,$linkPage,$nextPage),$this->config['theme']);
        return $pageStr;
    }

}
