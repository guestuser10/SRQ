<?php 
    class Area
    {
        private $id_area;
        private $area_name;
        private $area_active;


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