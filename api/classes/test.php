<?php

class Test {
    public function __construct(ContainerDI $c){
        $this->c = $c;
        // $this->app = $c->get('App');
    }

    public function test(){
        $test = "Test";
        $this->c->get('App')->apiResult->send($test, true);
    }

    public function arrayexemple(){
        $array = array(
            "name" => "John",
            "age" => 30,
            "city" => "New York"
        );
        $this->c->get('App')->apiResult->send($array, true);
    }

    public function requestexemple(){
        // Connexion with MySQLi to my local database
        $mysqli = new mysqli("localhost", "root", "", "formation");
        $request = "SELECT * FROM etudiant";
        $stmt = $mysqli->prepare($request);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $this->c->get('App')->apiResult->send($data, true);
    }
}