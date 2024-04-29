<?php
// Que es una estructura de datos?
// Una forma de organizar y almacenar datos de forma eficiente
/*
$variable = "Hola";

//Array indexado
$array1 = [1,2,3,4];

//Array asociado
$arrayAsociativo = array(
    "nombre" => "Jairo",
);

print_r($array1);
print_r($arrayAsociativo);

//Array multidimensional o Matrices
$arrayMultidimensional = [
    [1,2],[3,4],[5,6],[7,8]
];
print_r($arrayMultidimensional);

//Objetos (Clases)

class Persona {

    //Atributos
    public $nombre;
    public $edad;

function __construct($nombre, $edad)
{
    $this->nombre = $nombre;
    $this->edad = $edad;
}

    //Metodos
    function comer(){
        return "Estoy comiendo";
    }
    function dormir(){
        return "ZzZzZzZz";
    }
    function respirar(){
        return "Estoy respirando";
    }
}
    $persona1 = new Persona("Katerine", 20);
    $persona2 = new Persona("Alex", 21);

echo $persona2->nombre;

    //Stack (pila) LIFO LastInFirstOut

    class Stack{
        public $stack;

        function __construct()
        {
            $this->stack = array();
        }

        function add ($item){
            array_push($this->stack, $item);
        }

        function delete(){
            
            if($this->isEmpty() ){
                return null;
            }

            array_pop($this->stack);
        }
        function isEmpty(){
            return empty($this->stack);
        }
    }

    $stack1 = new Stack();
    $stack1->add(1);
    $stack1->add(2);
    $eliminado = $stack1->delete();
    
    print_r($stack1);

    //Queue o Colas FIFO FirstInFirstOut

    class Queue {
        public $queue;
        function __construct()
        {
            $this->queue = array();
        }
        //Funcion que qgrega datos a nuestra Queue
        function enqueue($item){
            array_push($this->queue, $item);
        }

        //Funcion que elimina datos de nuestra Queue
        function dequeue(){
            if($this->isEmpty()){
                return null;
            }
            return array_shift($this->queue);
        }

        //Funcion para validar si nuestra Queue esta vacia
        function isEmpty(){
            return empty($this->queue);
        }
    }
    

    //Listas Enlazadas

    class Node{
        public $data;
        public $next;

        function __construct($value)
        {
            $this->data = $value;
            $this->next = null;
        }
    }
    class LinkedList{
        public $head;
        function __construct()
        {
            $this->head = null;
        }
        function insert($data){
            $newNode = new Node($data); //Tomate
            //Check si head = Null
            if($this->head === null){
                $this->head = $newNode; //Guardo un nodo
            } else{
                //VARIABLE AUXILIAR CURRENT nos sirve para guardar el nodo
                $current = $this->head;
                //Si el NEXT del Nodo es DISTINTO A NULL
                while($current->next !== null){
                    $current = $current->next;
                }
                $current->next = $newNode;
            }
        }
        function delete($data){
            //Si la lista esta vacia HEAD=NULL
            if($this->head === null){
                return;
            }
            if($this->head->data === $data){
                //Guardo en head, en nodo siguiente
                $this->head = $this->head->next;
                return "Encontrado.";
            }
        }
        function deleteAll(){
            if($this->head === null){
                return;
            }
            $this->head = null;
            return "La lista se ha vaciado.";
        }
        function deleteLast(){
            if($this->head === null){
                return;
            }

            $current = $this->head;
            //Si el NEXT del Nodo es DISTINTO A NULL
            while($current->next !== null){
                $current = $current->next;
            }
        }
        function print(){
            //Validamos si la lista esta vacía 
            if($this->head === null){
                return;
            }
            $current = $this->head;

            while($current->next !== null){
                echo $current->data;
                $current = $current->next;
            }
        }
    }
    $listitaDelSuper = new LinkedList();
    $listitaDelSuper->insert("Tomate");
    $listitaDelSuper->insert("Huevos");
    $listitaDelSuper->insert("Leche");
    $listitaDelSuper->insert("Tomate");
    
    print_r($listitaDelSuper);
    print($listitaDelSuper->deleteAll());
    print_r($listitaDelSuper);

*/

    class Node{
        public $value;
        public $left;
        public $right;
    
    function __construct($data){
        $this->value = $data;
        $this->left = null;
        $this->right = null;
    }
}
    class BinaryTree{
        public $root;

        function __construct()
        {
            $this->root = null;
        }
        
        function insert($data){
            $newNode = new Node($data);

            //validamos si el arbol esta vacio 
            if ($this->root === null){
                $this->root = $newNode;
            return;
        }

        //Ya tenemos algun nodo en nuestro arbol
        //Valor actual (root) o un nodo preexistente)
        $current = $this->root;

        if($newNode->value < $current->value){
            $current->left = $newNode;
            return;
            }
        else{ 
            $current->right = $newNode;
            if($current->right === null){
                return;
            }
            $current = $current->right;
            }
        }
        
    }
    $arbolito = new BinaryTree();
    $arbolito->insert(10);
    $arbolito->insert(7);
    $arbolito->insert(15);
    $arbolito->insert(13);
    print_r($arbolito);
          