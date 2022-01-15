<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Guarantee;
use App\Models\Product;
use App\Models\Shipment;
use Livewire\Component;

class Create extends Component
{

    public Product $product;
    public $rules = [
        'product.category' => ['nullable'],
        'product.brand' => ['nullable'],
        'product.color' => ['nullable'],
        'product.shipment' => ['nullable'],
        'product.guarantee' => ['nullable'],
        'product.media' => ['nullable'],
        'product.title' => ['nullable'],
        'product.title_en' => ['nullable'],
        'product.body' => ['nullable'],
        'product.description' => ['nullable'],
        'product.price' => ['nullable'],
        'product.discount' => ['nullable'],
        'product.count' => ['nullable'],
        'product.weight' => ['nullable'],
        'product.order_count' => ['nullable'],
        'product.view' => ['nullable'],
        'product.status' => ['nullable'],
        'product.original' => ['nullable'],
        'product.special' => ['nullable'],
        'product.tags' => ['nullable'],
        'product.confirmation_status' => ['nullable']
    ];

    public function mount()
    {
        $this->product = new Product();
    }

    public function store()
    {
        $this->validate();


        dd($this->product->category);



        $product  = Product::create([
            'product.category' => $this->product->category,
            'product.brand' => ['nullable'],
            'product.color' => ['nullable'],
            'product.shipment' => ['nullable'],
            'product.guarantee' => ['nullable'],
            'product.media' => ['nullable'],
            'product.title' => ['nullable'],
            'product.title_en' => ['nullable'],
            'product.body' => ['nullable'],
            'product.description' => ['nullable'],
            'product.price' => ['nullable'],
            'product.discount' => ['nullable'],
            'product.count' => ['nullable'],
            'product.weight' => ['nullable'],
            'product.order_count' => ['nullable'],
            'product.view' => ['nullable'],
            'product.status' => ['nullable'],
            'product.original' => ['nullable'],
            'product.special' => ['nullable'],
            'product.tags' => ['nullable'],
            'product.confirmation_status' => ['nullable']
        ]);
    }

    public function render()
    {
        $categories = Category::all();
        $guarantees = Guarantee::all();
        $shipments = Shipment::all();
        $brands = Brand::all();

        return view('livewire.admin.product.create', compact(
            'categories',
            'guarantees',
            'shipments',
            'brands'
        ));
    }
}
