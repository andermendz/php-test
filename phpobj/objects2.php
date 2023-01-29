 <?php 
 
 class Lang {
    protected $language;
    function  __construct($language){
       $this->language = $language;
    }

   function say(){
      if ($this->language == "en") return "English is the language";
      if ($this->language == "de") return "Deutsch is the language";
      if ($this->language == "es") return "Spanish is the language";

   }

 }


$lan = new Lang("es");
print $lan ->say()



 
 ?>