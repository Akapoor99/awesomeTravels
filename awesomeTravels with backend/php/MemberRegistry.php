<?php
require_once 'Member.php';

class MemberRegistry
{
    private static $instance;
    private $membersList;
    //settype($membersList, "array");
    private $blacklist;

    private function __construct(){
        $this->membersList = array();
    }

    public static function getInstance(){
        if (!isset(self::$instance)) {
            self::$instance = new MemberRegistry();
        }
        return self::$instance;
    }

    function addMember($newMember){
        $this->membersList[hash("sha256", $newMember->getUsername())] = $newMember;

    }

    function searchMembers($targetName){
      return $this->membersList[hash("sha256", $targetName)];
    }

    function loginMembers($username, $password){
        $member = $this->searchMembers($username);
        if($member->checkUserName($username) && $member->checkPassword($password)){
            return true;
        }
        else{
            return false;
        }
    }
}

?>
