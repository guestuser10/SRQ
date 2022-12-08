<?php
    class Usuario
    {
        private $id_usuario;
        private $nombre;
        private $contraseña;
        private $id_area;
        private $usuario_active;
        private $tipo;

        
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