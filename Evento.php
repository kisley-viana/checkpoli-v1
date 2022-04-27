<?php
include('db.php');
class Evento{
    private $id;
    private $nome;
    private $data_hora;
    private $participantes;
    private $palestrante;
    private $tema;

    public function getId(){
        return $this->id;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getData_hora(){
        return $this->data_hora;
    }
    public function setData_hora($data_hora){
        $this->data_hora = $data_hora;
    }
    public function getParticipantes(){
        return $this->participantes;
    }
    public function setParticipantes($participantes){
        $this->participantes = $participantes;
    }
    public function getPalestrante(){
        return $this->palestrante;;
    }
    public function setPalestrante($palestrante){
        $this->palestrante=$palestrante;
    }
    public function getTema(){
        return $this->tema;
    }
    public function setTema($tema){
        $this->tema = $tema;
    }

}