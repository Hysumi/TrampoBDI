<?php
  class InvocadorModel {
    public $nickname;
    public $nivel;
    public function __construct($nick, $level){
      $this->nickname = $nick;
      $this->nivel = $level;
    }
  }

?>
