<?php

namespace App\Repository\category;

use App\Models\Category;

class CategoryRepo implements CategoryRepoInterface
{
    public function all()
    {
        return Category::all();
    }

    public function create($data)
    {
        return Category::query()->create($data);

    }

}

