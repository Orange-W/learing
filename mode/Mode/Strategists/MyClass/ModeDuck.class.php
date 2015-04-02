<?php
namespace MyClass;
class ModeDuck extends Duck{
	
	public function __construct(){
		$this->display();
		$f = new \MyClass\Fly();
		$q = new \MyClass\Quack();
		$this->setFly($f);
		$this->setQuack($q);
	}
	
	public function display(){
		$this->des();
		echo '������,��ʵ�ҵ���ʵ�����һֻս5��~<br/>';
	}
}

