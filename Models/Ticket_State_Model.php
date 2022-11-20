<?php 
    class Ticket_State
    {
        private $id_ticket_state;
        private $ticket_state;
        private $ticket_state_active;


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