<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Services\MediaFileService;

class Update extends Component
{

    use WithFileUploads;




    public $rules = [
        'brand.title' => ['nullable'],
        'brand.description' => ['nullable'],
        'brand.link' => ['nullable'],
        'brand.category_id' => ['nullable'],
        'brand.status' => ['nullable'],
    ];

    public Brand $brand;

    public $banner;



    public function render()
    {
     
        $brand = $this->brand;

        $categories = Category::all();
        return view('livewire.admin.brand.update', compact('categories', 'brand'));
    }


    public function update()
    {

        $this->validate();
        if ($this->banner) $this->banner->media_id = MediaFileService::publicUpload($this->banner)->id;

        $this->brand->update($this->validate());

        return redirect()->route('admin.brands.index');

        $this->emit('toast', 'success', 'عملیات موفقیت آمیز');
    }
}
