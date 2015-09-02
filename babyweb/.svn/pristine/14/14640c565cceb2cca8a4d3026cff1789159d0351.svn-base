<?php
class JoinAction extends CommonAction{
	
	private $_config = array('doc','dox','rar','zip','wps');
	
	private $to = "hr@baby-bus.com";
	//private $to = "137841924@qq.com";

	private $email = array(
		'host'	   => 'smtp.126.com',
		'username' => 'baby_bus@126.com',
		'password' => 'sinyee4126',
		'from'	   => 'baby_bus@126.com',
	);
	public function index(){
		$model =  M('website_jobs');
		$where['lang'] = LANG;
		$result = $model->field('id,job_class_id,job_name,job_require,job_respons,job_direction')->where($where)->select();
		
		foreach ($result as $res){
			//var_dump($res['job_direction']);
			$res['job_direction'] = str_replace("\n", "<br>", $res['job_direction']); 
			$data[$res['job_class_id']][] = $res;
		}
		$this->assign('config',$this->_config);
		$this->assign('data',$data);
		$this->assign('jobs',$result);

		//exit();
		$this->display();
	}

    public function save(){
        import('ORG.Util.FileToZip');
        $data = $_POST;
        $job  = $data['job_select'];
        $job_class_id= intval($data["job_class_id"]);
        $job_id      = intval($data["job_id"]);

        empty($_FILES['checkFile']['name'])&&$this->error('简历限制最大为2M');
        empty($job)&&$this->error('岗位必须选择');

        $data = upload($data, "./Public/Uploads/job_upload/",$this->_config);
        if($data['error'] || empty($job_class_id) || empty($job_id))
            $this->error($data['error']);

        $path_info=pathinfo($data[upload_url]);
        $file_name=$path_info["basename"];//文件名
        $save_path=".".$path_info["dirname"]."/";//保存路径
        if($path_info["extension"]!="rar" && $path_info["extension"]!="zip"){
            $scandir=new traverseDir($save_path,$save_path);
            $file_path=$scandir->tozip(array($file_name));
            if($file_path){
                unlink(".".$data[upload_url]);
            }else{
                //$file_path=".".$data[upload_url];
                $this->error('提交失败');
            }
        }else{
            $file_path=$data["upload_url"];
        }
        $resume_db=M('resume','website_');
        $data["lang"]=LANG;
        $data["job_class_id"]=$job_class_id;
        $data["job_id"]=$job_id;
        $url=explode("index.php",$_SERVER["HTTP_REFERER"]);
        $data["file_path"]=$url[0].ltrim($file_path,"./");
        $data["uploadtime"]=time();

        $subject = "【".$job."】岗位申请";
        $body = "【".$job."】岗位申请";
        if($resume_db->add($data)){
            $this->send($this->to, $subject, $body, $file_path);
            //unlink($file);
            $this->success('提交成功');
        }else{
            $this->error('提交失败');
        }
    }

	private  function send($to,$subject,$body,$file){
		
		if(empty($to)) return false;
		if(empty($subject)) return false;
		if (empty($body)) return false;
		
		import("ORG.Mail.phpmailer");
		$mail = new PHPMailer();
		$mail->CharSet = "UTF-8"; // 设置编码 
		
		$mail->IsSMTP();                           // tell the class to use SMTP
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->Port       = 25;  
		
		$mail->Host       = $this->email['host']; // SMTP server QQ更改了smtp邮箱地址
		$mail->Username   = $this->email['username'];     // SMTP server username
		$mail->Password   = $this->email['password'];            // SMTP server password
		$mail->From       = $this->email['from']; //QQ不能发送的可能原因有邮箱的smtp/pop3服务没有开启
		                  // set the SMTP server 
		$mail->FromName   = "岗位申请投递";
		
		
		$mail->AddAddress($to);
		
		$mail->Subject  = $subject;
		
		$mail->WordWrap   = 80; // set word wrap
		
		$file&&$mail->AddAttachment($file);
		$mail->MsgHTML($body);
		
		$mail->IsHTML(true); // send as HTML
		if($mail->Send()) return true;
		return false;
	}
}