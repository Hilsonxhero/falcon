<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use App\Repository\category\CategoryRepo;
use App\Repository\category\CategoryRepoInterface;
use App\Services\MediaFileService;
use Illuminate\Support\Facades\App;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{

    use WithFileUploads, WithPagination;

    protected $paginationTheme = 'bootstrap';

    private $categoryRepo;



    public $icon;
    public $search;
    public Category $category;

    public $readyToLoad = false;

    public $rules = [
        'category.title' => ['required', 'min:3'],
        'category.parent_id' => ['nullable'],
        'category.link' => ['required', 'min:3'],
        'category.status' => ['nullable'],
    ];

    public function mount()
    {
        $this->category = new Category();
    }

    public function load()
    {
        $this->readyToLoad = true;
    }

    public function updated($title, $link)
    {
        $this->validateOnly($title);
        $this->validateOnly($link);
    }

    public function render(CategoryRepoInterface $categoryRepo)
    {

        $this->categoryRepo = $categoryRepo;

        $categories = $this->readyToLoad ? Category::where('title', 'LIKE', "%{$this->search}%")->latest()->paginate(15) : [];

        return view('livewire.admin.category.index', compact('categories'));
    }

    public function store()
    {

        $this->validate();




        // if ($this->icon)   $this->category->media_id = MediaFileService::publicUpload($this->icon)->id;




        $category =  Category::query()->create([
            'title' => $this->category->title,
            'link' => $this->category->link,
            'parent_id' => $this->category->parent_id,
            'status' => $this->category->status ? true : false,
        ]);

        if ($this->icon) {
            $category->update([
                'media_id' => MediaFileService::publicUpload($this->icon)->id
            ]);
        }

        $this->category->title = "";
        $this->category->icon = "";
        $this->category->name = "";
        $this->category->link = "";
        $this->category->status = false;
        $this->icon = null;
    }

    public function chnageStatus($type, $id)
    {

        $category = Category::query()->find($id);

        $category->status = $type;
        $category->save();

        $this->emit('toast', 'success', 'وضعیت دسته با موفقیت تغییر کرد');
    }

    public function delete($id)
    {
        $category = Category::query()->find($id);

        $category->delete();

        $this->emit('toast', 'info', 'عملیات موفیت آمیز بود');
    }
}
