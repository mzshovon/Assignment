<?php
    /*
     * PDO database class
     * Connect to database
     * Create prepared statements
     * Binds values
     * Returns rows and results
     */

    class Database{
        private $host = DB_HOST;
        private $dbname = DB_NAME;
        private $user = DB_USER;
        private  $pass = DB_PASS;

        private $dbh;
        private $stmt;
        private $error;

        public function __construct(){
            $dsn = "mysql:host=$this->host;dbname=$this->dbname";
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

//            CREATE PDO INSTANCE
            try{
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
//                $this->dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            }catch (PDOException $e){
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

//        prepare stmt with query
        public function query($sql){
            $this->stmt = $this->dbh->prepare($sql);
        }

//        Bind value
        public function bind($param, $value, $type = null){
            if (is_null($type)){
                switch (true){
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                }
            }

            $this->stmt->bindValue($param, $value, $type);
        }

//        Execute the prepared statment
        public function execute(){
            return $this->stmt->execute();
        }

//        Get result set as array of objects
        public function resultSet(){
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }

//        Get single record as object
        public function single(){
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }

//        Get row coount
        public function rowCount(){
            return $this->stmt->rowCount();
        }
    }