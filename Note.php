<?php

class Note {

    //on déclare les 3 propriétés privées
    private $note; 
    private $noteMin;
    private $noteMax;

    // constructeur
    public function __construct(float $note = 0.0, $noteMin = 0.0, $noteMax = 20.0) {
        // $this->note = $note;
        $this->noteMin = $noteMin;
        $this->noteMax = $noteMax;
        $this->setNote($note);
    }

    //on déclare les getteurs
    public function getNote() {
        return $this->note;
    }
    public function getNoteMin() {
        return $this->noteMin;
    }
    public function getNoteMax() {
        return $this->noteMax;
    }

    //On déclare les setteurs
    public function setNote($note) {
        if ($note >= $this->noteMin && $note <= $this->noteMax) {
            $this->note = $note;
        } else {
            throw new Exception('La note doit être comprise entre '.$this->noteMin. ' et '.$this->noteMax."\n");
        }
       
    }
    public function setNoteMin($note) {
        $this->noteMin = $note;
    }
    public function setNoteMax($note) {
        $this->noteMax = $note;
    }

    // autres méthodes
    public function affiche() {
        echo ' La note est de '.$this->note.' (comprise entre '.$this->noteMin.' et '.$this->noteMax." )\n";
    }
}