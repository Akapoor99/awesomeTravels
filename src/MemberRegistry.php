<?php

class MemberRegistry
{
    private static $instance;
    private $membersList;
    settype($membersList, "array");

    private function __construct(){

    }

    public static function getInstance(){
      if (!isset(self::$instance)) {
            self::$instance = new __CLASS__;
        }
        return self::$instance;
    }

    function addMember($newMember){
      $membersList[] = $newMember;
    }
}

?>
