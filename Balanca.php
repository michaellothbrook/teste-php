<?php 
    // require './Objeto.php';


    class Balanca  
    {
        public function __get($attr)
        {
            return $this->$attr;
        }

        public function calcularPeso(Objeto $obj)
        {
            $obj->gerar_pesos();
            for ($i=1; $i < 3; $i++) { 
                $mais_leve = array_keys($obj->pacote,min($obj->pacote));
            }
            return $mais_leve;
        }
    }
    
?>