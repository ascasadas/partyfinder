<?php

    class Ave{
        public $especie = "";
        public $cor = "";
        public  $velocidade_vou = 0;
        public $velocidade_maxima = 0;
    
        public function decolar(){
            if ($this-> velocidade_vou == 0){
            
                $this-> velocidade_vou = 25 ;
            }

        }

        public function acelerar(){
            if ($this->velocidade_vou >= 25 && $this -> velocidade_vou < $this-> velocidade_maxima){
                $this-> velocidade_vou +=5;
            }
     }

     public  function freiar(){
        if ($this->velocidade_vou >25){
            $this-> velocidade_vou -= 5;
        }   
     }

     public function pousar(){

            if($this-> velocidade_vou==25){
                $this->velocidade_vou=0;
            }
            }


            
    
    
    
    
    }
?>