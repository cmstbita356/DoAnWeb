<?php 
    class comment
    {
        public $username;
        public $msg;
        public $date;
        public function __construct($username, $msg, $date)
        {
            $this->username = $username;
            $this->msg = $msg;
            $this->date = $date;
        } 
    }
?>