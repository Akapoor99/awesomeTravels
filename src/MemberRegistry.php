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
            self::$instance = new MemberRegistry();
        }
        return self::$instance;
    }

    function addMember($newMember){
      if(empty($this->membersList)){
        $this->membersList = array(hash("sha256", $newMember->getUsername()) => $newMember);
      }    
      else{
        $this->membersList[hash("sha256", $newMember->getUsername())] = $newMember;
      }
    }

    function searchMembers($targetName){
      return $this->membersList[hash("sha256", $targetName)];
    }

    function loginMembers($username, $password){
        $member = self->searchMembers($username);
        if($member->checkUserName($username) && $member->checkPassword($password)){
            return true;
        }
        else{
            return false;
        }
    }
}

?>
