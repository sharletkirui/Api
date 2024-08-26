<?php 
class fnc{
    var $name;
    public $user;
    public $fname;
    public $yob;
    public $age;
    public $nickname;
    protected $username;
    private $password;
    public function computer_user($fname){
        return $fname;
    }
    public function user_age($fname, $yob){
        $user =$this->computer_user($fname);
        $age = date('Y') - $yob;
        return $user . " is " . $age;
    }
    public function hash_pass($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }
}
//$Obj = new fnc();
//Sharlet will invoke the method
//print $Obj->user_age("Alex",2005);
//print "Hi! My name is " . $Obj ->computer_user("Sharlet") . " and I am " . $Obj ->user_age(2005);
//print '<br>';
//print $Obj->hash_pass('123');
?>