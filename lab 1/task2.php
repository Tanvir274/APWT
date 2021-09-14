<?php 

class car
{
	public $EngineNo;
	public $Model;
	public $Owner;
	
	function __construct($EngineNo, $Model, $Owner) 
	{
    $this->EngineNo = $EngineNo;
    $this->Model = $Model;
	$this->Owner = $Owner;
    }
	
	function ShowInfo()
	{
		echo "EngineNo= $this->EngineNo <br>";
		echo "Model= $this->Model <br>";
		echo "Owner= $this->Owner <br>";
	}
}

$car1=new car("101","RED 2015","Tanvir");
$car1->ShowInfo();

?>