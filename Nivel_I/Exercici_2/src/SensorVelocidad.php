<?php

class SensorVelocidad{
    public function __construct(private float $velocidad){}

        public function muyLento(): bool{
            return $this -> velocidad < 30;
        }
        public function velocidadAdecuada(): bool{
            return $this -> velocidad >= 30 && $this -> velocidad <= 60;
        }
        public function excesoLeve(): bool{
            return $this -> velocidad > 60 && $this -> velocidad <= 80;
        }
        public function excesoModerado(): bool{
            return $this -> velocidad > 80 && $this -> velocidad <= 100;
        }
        public function excesoGrave(): bool{
            return $this -> velocidad > 100;
        }

    
}



?>