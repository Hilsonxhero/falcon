<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use App\Services\MediaFileService;
use Livewire\WithFileUploads;

class Update extends Component
{

    use WithFileUploads;

    public $icon;

    public $readyToLoad = false;

    public $rules = [
        'category.title' => ['required', 'min:3'],
        'category.link' => ['required', 'min:3'],
        'category.status' => ['nullable'],
    ];

    public Category $category;
    public function render()
    {
        $category = $this->category;
        return view('livewire.admin.category.update', compact('category'));
    }

    public function update()
    {

        $this->validate();
        if ($this->icon) $this->category->media_id = MediaFileService::publicUpload($this->icon)->id;
    
        $this->category->update($this->validate());

        return redirect()->route('admin.categories.index');

        $this->emit('toast', 'success', 'عملیات موفقیت آمیز');
    }
}
