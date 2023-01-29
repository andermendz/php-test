<?php 

    class Visibility
    {

        public $pub = "Public";
        protected $prot = "Protected";
        private $priv = "Private";


        function visible(){

            echo $this->pub;
            echo $this->prot;
            echo $this->priv;
        }

    }

$obj = new Visibility();
echo $obj->pub;

$obj->visible();
echo $obj->pro;
echo $obj->priv;

class visit extends Visibility{

    
    function visible(){

        echo $this->pub;
        echo $this->prot;
        echo $this->priv; // can't access private
    }
}



?>