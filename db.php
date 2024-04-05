<?php
abstract class conection{

    //private $dsn = 'mysql:host=localhost;dbname=supermarket';
    //private $user = 'root';
    //private $pswrd = '';
    
    // $dbCnx = new PDO($dsn,$user,$pswrd,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    protected $dbCnx;

    public function __construct(){
        $this->dbCnx = new PDO('mysql:host=localhost;dbname=supermarket','root','',[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
}


?>