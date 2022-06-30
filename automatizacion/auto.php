<?php 
    namespace automatizacion;

    class Auto{
        public $description;
        public $intents;
        public $date;
        
        function __construct($description, $intents, $date){
            $this->description = $description;
            $this->intents = $intents;
            $this->date = $date;
        }

        function getAuto(){
            return "La descripcion es " . $this->description . " con " . $this->intents . " intentos y se ejecutara el dia " . $this->date;
        }
    }
?>