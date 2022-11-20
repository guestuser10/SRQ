<?php 
    class ticket
    {
        private $id_ticket;
        private $title;
        private $id_area;
        private $id_ticket_state;


        public function __GET($k)
        {
            return $this->$k;
        }

        public function __SET($k,$v)
        {
            return $this->$k = $v;
        }
    }
?>