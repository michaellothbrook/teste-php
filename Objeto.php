<?php 
    class Objeto  
    {
        private $nome;
        public $pacote;

        function __construct($nome)
        {
            $this->nome = $nome;
        }

        public function __get($attr)
        {
            return $this->$attr;
        }

        public function gerar_pesos()
        {
            $this->pacote = array_unique(
                array(
                    $this->nome.'1'=>rand(1,10),
                    $this->nome.'2'=>rand(1,10),
                    $this->nome.'3'=>rand(1,10),
                    $this->nome.'4'=>rand(1,10),
                    $this->nome.'5'=>rand(1,10)
                )
            );
            return $this->pacote;
            
        }

    }
    
?>