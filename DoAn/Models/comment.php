<?php 
    class comment
    {
        private $id;
        public $username;
        public $msg;
        public $date;
        public function getID()
        {
            return $this->id;
        }
        public function __construct($username, $msg, $date)
        {
            $this->username = $username;
            $this->msg = $msg;
            $this->date = $date;
        } 
    }
?>