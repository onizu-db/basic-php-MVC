<?php

class DataStore {

    protected $dataFile;
    protected $dataArray = [];

    public function __construct($dataFile) {
        $this->dataFile = $dataFile;
        $this->readData();
    }

    protected function readData() {
        $jsonData = file_get_contents($this->dataFile); 
        $dataArray = json_decode($jsonData, true);
        $this->dataArray = $dataArray;
    }

    public function updateData($id, $data) {
        $this->dataArray[$id] = $data; 
        $encodedData = json_encode($this->dataArray, JSON_PRETTY_PRINT);
        file_put_contents($this->dataFile , $encodedData);
        $this->readData();
    }

    public function getData() {
        return $this->dataArray;
    }

}