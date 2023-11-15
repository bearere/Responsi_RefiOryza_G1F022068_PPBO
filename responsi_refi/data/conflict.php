<?php
// buat namespace data\satu 
    // dengan class conflict
    // class sample
    // class dummy
// buat namespace data\dua
    // dengan class conflict
    namespace data\satu;

    class Conflict {
        private $message;
    
        public function __construct($message) {
            $this->message = $message;
        }
    
        public function getMessage() {
            return $this->message;
        }
    }
    
    namespace data\dua;
    
    class Conflict {
        private $message;
    
        public function __construct($message) {
            $this->message = $message;
        }
    
        public function getMessage() {
            return $this->message;
        }
    }
    
    namespace HIstudent;
    
    class Conflict {
        private $message;
    
        public function __construct($message) {
            $this->message = $message;
        }
    
        public function getMessage() {
            return $this->message;
        }
    }
    ?>