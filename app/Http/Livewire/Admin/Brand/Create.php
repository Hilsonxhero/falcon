<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Services\MediaFileService;

class Create extends Component
{
    use WithFileUploads;

    public Brand $brand;
    public $rules = [
        'brand.title' => ['nullable'],
        'brand.description' => ['nullable'],
        'brand.link' => ['nullable'],
        'brand.category_id' => ['nullable'],
        'brand.status' => ['nullable'],
    ];

    public $banner;

    public function mount()
    {
        $this->brand = new Brand();

        $this->brand->status = false;
    }

    public function store()
    {
        $this->validate();


        // dd($this->banner);


        $brand  = Brand::create([
            'category_id' => $this->brand->category_id,
            'media_id' => MediaFileService::publicUpload($this->banner)->id,
            'title' => $this->brand->title,
            'description' => $this->brand->description,
            'link' => $this->brand->link,
            'status' => $this->brand->status,
        ]);


        return redirect()->route('admin.brands.index');
    }

    public function render()
    {
        $categories = Category::all();


        return view('livewire.admin.brand.create', compact(
            'categories',
        ));
    }
}
