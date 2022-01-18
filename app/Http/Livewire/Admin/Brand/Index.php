<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use App\Models\Log;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads, WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public Brand $brand;

    public $readyToLoad = false;


    public function mount()
    {
        $this->brand = new Brand();
    }

    public function load()
    {
        $this->readyToLoad = true;
    }
    public function render()
    {


        $brands = $this->readyToLoad ? Brand::where('title', 'LIKE', "%{$this->search}%")->with('banner')->latest()->paginate(15) : [];

        return view('livewire.admin.brand.index', compact('brands'));
    }


    public function delete($id)
    {
        $product = Brand::query()->find($id);

        $product->delete();

        Log::create([
            'title' => ' حذف  برند' . ' ' . $product->title,
            'url' => route('admin.brands.index'),
            'user_id' => auth()->user()->id,
            'action' => Log::DELETE_ACTION
        ]);

        $this->emit('toast', 'info', 'عملیات موفیت آمیز بود');
    }
}
