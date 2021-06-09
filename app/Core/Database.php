<?php


class Database{   
    
      private $host = DB_HOST;
      private $user = DB_USER;
      private $password = DB_PASS;
      private $dbName = DB_NAME;

      private $dbHandler;
      private $statement;
      private $error;

      public function __construct(){
          //set dsn
          $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;

          // to increase db performance
          $options = array(
              PDO::ATTR_PERSISTENT => true,
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
          );

          //create PDO instances

          try {
              //code...
              $this->dbHandler = new PDO($dsn, $this->user, $this->password, $options);
          } catch (PDOException $e) {
              //throw $th;
              $this->error = $e->getMessage();
              echo $this->error; 
          }
      }

      // prepare statement with query
      public function query($sql){
          $this->statement = $this->dbHandler->prepare($sql);
      }
      // Bind values 
      public function bind($param, $value, $type = null){
          if(is_null($type)){
              switch (true) {
                  case is_int($value): 
                        $type = PDO::PARAM_INT;
                      # code...
                      break;
                  case is_bool($value): 
                        $type = PDO::PARAM_BOOL;
                      # code...
                      break;
                  case is_null($value): 
                        $type = PDO::PARAM_NULL;
                        # code...
                        break;
                        
                  default:
                        # code...
                        $type = PDO::PARAM_STR;
              }
          }
          $this->statement->bindValue($param, $value, $type);
      }

      // execute the prepared statement
      public function execute(){
          return $this->statement->execute();
          //return self::statement->execute();
      }

      // get result set as array of objects
      public function resultSet(){
          $this->execute();
          return $this->statement->fetchAll(PDO::FETCH_OBJ);
      }

      // get single record as object
      public function singleResult(){
           $this->execute();
          return $this->statement->fetch(PDO::FETCH_OBJ);
      }

      //get row count
      public function rowCount(){
          return $this->statement->rowCount();
      }

     
}
