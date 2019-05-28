<?php
class Blackjack {
  public $score=0;
  public $pointTotal=0;

  public function hit(){
    $this->score+=rand(1,11);
  }

  public function stand(){
    $this->pointTotal=$this->score;
  }

  public function surrender(){
    $this->score=0;
    $this->pointTotal=0;
  }

}

?>
