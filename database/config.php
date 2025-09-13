<?php   
    class Database
    {
        private $HostName = "localhost";
        private $UserName = "root"; 
        private $Password = ""; 
        private $DatabaseName = "attendance-system-db";  

        protected $conn; 

        public function __construct()
        {
            $this->conn = new mysqli(   
                            $this->HostName,    
                            $this->UserName,    
                            $this->Password,
                            $this->DatabaseName 
            ); 
            
            if($this->conn->connect_errno)
            {
                die("Connection Failed: " .  $this->conn->connect_errno);
            }

        } 

        public function GetConnection()
        {
            return $this->conn;
        }

    }

?>

