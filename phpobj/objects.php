 <?php 
 
 class Person {
    public $firstName = false;     
    public $lastName = false;
     public $age = false;
    public $gender = false;

    function getData(){
        return "<p> <h1>The name is $this->firstName $this->lastName </h1></p> 
                 <p> <h1>And Age and Gender are $this->age and Gender: $this->gender </h1></p> ";
    }

 }

 $ander = new Person();
 $ander -> firstName = "Anderson";
 $ander -> lastName = "Mendoza";
 $ander->age = 20;
 $ander -> gender = "Male";

 print $ander->getData();

 
 ?>