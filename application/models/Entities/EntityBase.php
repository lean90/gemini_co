<?php

namespace models\Entities;

class EntityBase {
    function __construct(){
        $this->createdAt = new \DateTime();
    }
}

?>