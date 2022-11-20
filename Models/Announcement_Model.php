<?php
    class Announcement {
        private $id_announcement;
        private $id_emisor;
        private $announcement;
        private $announcement_active;


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