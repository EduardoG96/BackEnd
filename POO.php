<?php

class Person{
    //Caracteristicas o cualidades => Atributos
    public $name;
    public $age;

    //Metodo Constructor => Ingresar los atributos al momento de instanciar

    public function __construct($name, $age)
    {
        //Apuntar a los atributos y asignar el valor

        $this->name = $name;
        $this->age = $age;

    }
        //Acciones => Metodos
        public function eat(){
            print "nom nom nom";
        }
    }
    
    class Animal {
        // Atributos
        public $nombre;
        public $color;
        public $edad;
        public $especie;
        private $pelo;

        public function __construct($nombre, $color, $edad, $especie)
        {
            //Apuntar a los atributos y asignar el valor
            $this->$nombre = $nombre;
            $this->$color = $color;
            $this->$edad = $edad;
            $this->$especie = $especie;
            
        }
        //Metodos
        public function dormir(){
            print "Estoy durmiendo";
        }

        public function comer(){
            print "estoy comiendo";
        }

        public function respirar(){
            print "estoy respirando";
        }

        public function hacerSonido(){
            print "Estoy haciendo ruido";
        }
        //Getters
        public function getNombre(){
            return $this->nombre;
        }

        public function getPelo(){
            return $this->pelo;
        }
        //Setters
        public function setPelo($peinado){
            $this->pelo = $peinado;
        }
    }

    //Crear una Instancia

    $chucho = new Animal("Jacinto", "Gris", 49, "Aguacatero");

    print $chucho->getNombre()."\n";
    $chucho->hacerSonido();


    class Pinguino extends Animal{
        public $alas; 
        public $pico;

        public function __construct($nombre, $color, $edad, $especie, $pelo, $alas, $pico)
        {   
            //Aclara que estos atributos son heredados
            parent::__construct($nombre, $color, $edad, $especie, $pelo);
            $this->alas = $alas;
            $this->pico = $pico;
        }
        public function aletear(){
            print "Estoy aleteando bro";
        }

        //Sobreescribir un metodo
        public function hacerSonido(){ 
            parent::hacerSonido();
            print " Cuiishh";
        }
    }

    $linux = new Pinguino("Patroclo","Negro y Blanco", 10, "SO", "Plumaje lindo", "Cortas", "Filoso");
    print $linux->getNombre(). "\n";

    $linux->hacerSonido()
?>