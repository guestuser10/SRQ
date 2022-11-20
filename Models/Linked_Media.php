<?php
    class LinkedMedia{
        private $id_linked_media;
        private $id_mensaje;
        private $linked_media;
        private $linked_media_active;


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