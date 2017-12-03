<?php
/*m代表   模块   c 控制器  文件 类名 a    方法    p   
static   不会被销毁   self  调用静态属性的方法(相当于$this->)
*/
class route{
	protected static $module;
	protected static $control;
	protected static $action;
	protected static $param;
	public function __construct(){
		self::getInfo();
		self::init();
	}
	protected static function init(){
		$url=ROOT_PATH.self::$module."/".self::$control."Control.class.php";
		// echo $url;
		// 判断是否为文件

		if (is_file($url)) {
		//引入文件
			include $url;
			//实例化
			$classname=self::$control."Control";
			//赋值

			//调用方法，判断方法是否存在
			if (class_exists($classname)){
				$obj=new $classname;
				if (method_exists($obj, self::$action)) {
					call_user_func_array(array($obj,self::$action), array(self::$param));
				}else{
					echo $url."中".self::$action."方法不存在";
				}
			}else{
				echo $url."该类不存在";
			}
		}else{
			echo $url."该文件不存在";
		}
	}
	static function getInfo(){
		self::$module=isset($_GET["m"])&&!empty($_GET["m"])?$_GET["m"]:"index";
		self::$control=isset($_GET["c"])&&!empty($_GET["c"])?$_GET["c"]:"index";
		self::$action=isset($_GET["a"])&&!empty($_GET["a"])?$_GET["a"]:"index";
		// 获取参数
		$id=@$_GET["id"];
		$cid=@$_GET["cid"];
		$uid=@$_GET["uid"];
		$pid=@$_GET["pid"];
		self::$param=array(
			"id"=>$id,
			"cid"=>$cid,
			"uid"=>$uid,
			"pid"=>$pid,
			);
		
	}
}
?>