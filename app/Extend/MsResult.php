<?php 
namespace App\Extend;

class MsResult{
	// 状态码 0（成功），1（系统初始状态）2-999（错误状态）
	public $status;

	// 返回文字提示信息
	public $message;
	
	//返回数据 
	public $data;
	
	function __construct(){
		$this->status = 1;
		$this->message = "系统错误!";
		// $this->data = null;
	}

	// $status = 0 表示成功  $status > 0 表示是失败
	public function toJson(){
		return json_encode($this , JSON_UNESCAPED_UNICODE);
	}
}

?>