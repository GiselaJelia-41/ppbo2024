<?php

namespace App\Model\Pustaka;

class Author
{
    public $name;
    public $description;

    public function show(string $type) : array
    {
        if ($type === 'Info Buku') {
            return [
                'name' => $this->name,
                'description' => $this->description
            ];
        }
        return [];
    }
}