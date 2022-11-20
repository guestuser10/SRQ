<?php
    class Mensaje{
        private $id_mensaje;
        private $id_emisor;
        private $id_ticket;
        private $mensaje;
        private $mensaje_active;


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