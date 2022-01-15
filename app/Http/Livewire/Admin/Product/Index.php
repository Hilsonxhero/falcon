<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Log;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Index extends Component
{

    use WithFileUploads, WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public Product $product;

    public $readyToLoad = false;


    public function mount()
    {
        $this->product = new Product();
    }

    public function load()
    {
        $this->readyToLoad = true;
    }
    public function render()
    {
        $products = $this->readyToLoad ? Product::where('title', 'LIKE', "%{$this->search}%")->latest()->paginate(15) : [];

        return view('livewire.admin.product.index', compact('products'));
    }


    public function delete($id)
    {
        $product = Product::query()->find($id);

        $product->delete();

        Log::create([
            'title' => ' حذف  محصول' . ' ' . $product->title,
            'url' => route('admin.products.index'),
            'user_id' => auth()->user()->id,
            'action' => Log::DELETE_ACTION
        ]);

        $this->emit('toast', 'info', 'عملیات موفیت آمیز بود');
    }
}
