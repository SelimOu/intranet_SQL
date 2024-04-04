<?php
class DB{
    
    protected $localHost;
    protected $dbname;
    protected $user;
    protected $password;
    public function __construct() {
        $this->localHost ='localhost';
        $this->dbname ='jcp_voyage';
        $this->user ='root';
        $this->password =NULL;
    }
    public $connection;
    public function connec(){
    try{
    $this->connection= new PDO('mysql:host='.$this->localHost.';dbname='.$this->dbname,$this->user,$this->password);
        // echo "Vous etes connecté";
}catch(PDOExeption $e){
    // echo "erreur de connection";
    }
}
    public function disconnec(){
        $this->connection = NULL;
    }

}




?>