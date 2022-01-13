<?php

namespace App\Repository\category;

interface CategoryRepoInterface
{
    public function all();

    public function create($data);
}
