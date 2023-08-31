<?php

namespace App\Models;

class Animal {
    private $name;
    private $listDescendents;

    public function __construct($name)
    {
        $this->name = $name;
        $this->listDescendents = [];
    }

    public function getItsSound()
    {
        if ($this->name === 'Gato')
            return 'Miau';

        if ($this->name === 'Cachorro')
            return 'Au Au';

        return 'Não encontrado';
    }

    public function addDescendents($cub)
    {
        array_push($this->listDescendents, $cub);
    }

    public function getListDescendents()
    {
        return $this->listDescendents;
    }
}