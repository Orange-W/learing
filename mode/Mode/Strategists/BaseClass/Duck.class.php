<?php
namespace MyClass;
abstract class Duck{
		private $flyBehavior;
		private $quackBehavior;
		
		public function __construct(){
			echo "ŷ,��ǰ��ֻСССС��,�ǷǷǷǷǲ��ߡ�";
		}
		
	/*****************/	
		public function setFly($howFly){
			$this->flyBehavior = $howFly;
		}
		
		public function toFly(){
			$this->flyBehavior->fly();
		}

	
	/********************/
		public function setQuack($howQuack){
			$this->quackBehavior = $howQuack;
		}
		
		public function toQuack(){
			$this->quackBehavior->quack();
		}
		
		public function des(){
			echo "ŷ,��ǰ��ֻСССС��,�ǷǷǷǷǲ��ߡ�<br/>";
		}
}
	

?>