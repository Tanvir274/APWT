<?php
class student {
  
  public $name;
  public $id;
  public $DOB;
  public $course=[];
  

  // Methods
  function ShowInfo()
  {
    echo "Name = ".$this->name;
	echo "ID = ".$this->id;
	echo "Date 0f Birth = ".$this->DOB;
	
  }
  function AddCourse($coursename)
  {
	  $this->course[]=$coursename;
  }
  function ShowCourse()
  {
	echo "Name = $this->name <br>";
	echo "ID = $this->id <br>";
	echo "Date 0f Birth = $this->DOB <br>";
	foreach($this->course as $c)
	{
		echo $c."<br>";
	}
  }
  
  
   
}

$student1 = new student();
$student1->name="Tanvir";
$student1->id="1010";
$student1->DOB="01-01-2001";
$student1->AddCourse('OOP1');
$student1->AddCourse('OOP2');
$student1->AddCourse('Advance WebTech');



$student1->ShowCourse();

?>