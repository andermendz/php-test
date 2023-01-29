
 <?php

    class Lang
    {
        protected $language;
        function  __construct($language)
        {
            $this->language = $language;
        }

        function say()
        {
            if ($this->language == "en") return "English is the language";
            if ($this->language == "de") return "Deutsch is the language";
            if ($this->language == "es") return "Spanish is the language";
        }
    }

    class Social extends Lang {

        function bye(){
            if ($this->language == "en") return "Bye";
            if ($this->language == "de") return "Tschüss";
            if ($this->language == "es") return "Adios";
        }


    }


    $lan = new Social("es");
 print $lan->say()."\n";
    print $lan->bye()




    ?>


