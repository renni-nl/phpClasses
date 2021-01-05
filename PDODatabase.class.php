<?php
//PDO DB class
class PDODatabase {

  private $host = 'localhost'; // Your database host
  private $user = 'root'; // Your username for database
  private $password = '1234'; // Your password for the user
  private $dbname = 'database'; //Your database

  private $dbhand; // PDO handler
  private $stmt; // PDO statement
  private $error; // PDO errors

  //Construct is called when class is instantiated
  public function __construct() {
    $dsn = 'mysql:host='.$this->host .';dbname='.$this->dbname;
    $options = array(
      PDO::ATTR_PERSISTENT =>true,
      PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
     );
     try {
       $this->dbhand = new PDO($dsn,$this->user,$this->password,$options);

     } catch (PDOException $e) {
       $this->error = $e->getMessage();
       echo $this->error;
     }
  }
 
  //DBQuery quering SQL statements to the database
  public function DBQuery($sql) {
   $this->stmt = $this->dbhand->prepare($sql);
  }

  //DBBindValues will bind the values and their type
  public  function DBBindValues($param,$value,$type = null){

    if(is_null($type)){
       switch(true) {
            case is_int($value):
             $type = PDO::PARAM_INT;
             break;
            case is_bool($value):
             $type  = PDO_PARAM_BOOL;
             break;
            case is_null($value):
             $type= PDO_PARAM_NULL;
             break;
            default:
            $type = PDO::PARAM_STR;
       }

    }

    $this->stmt->bindValue($param,$value,$type);

  }

 //DBExecute executes the statement
  public function DBExecute() {
   return $this->stmt->execute();
  }

  //DBResultSet will fetch an result set as an object
  public function DBResultSet(){
     $this->DBExecute();
     return $this->stmt->fetchAll(PDO::FETCH_OBJ);
  }

 //DBResultSingle will return an single result as an object
  public function DBResultSingle(){
   $this->DBExecute();
   return $this->stmt->fetch(PDO::FETCH_OBJ);
  }

 //DBRowCount will return the row count.
  public function DBRowCount(){
    return $this->stmt->rowCount();
  }

}


 ?>
