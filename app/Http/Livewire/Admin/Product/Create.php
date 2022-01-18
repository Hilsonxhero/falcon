<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Shipment;
use App\Models\Guarantee;
use Livewire\WithFileUploads;
use App\Services\MediaFileService;

class Create extends Component
{

    use WithFileUploads;

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

    public $body;
    public $banner;
    public $category;

    public function mount()
    {
        $this->product = new Product();
        $this->product->original = false;
        $this->product->status = false;
        $this->product->special = false;
    }

    public function store()
    {
        $this->validate();


        // dd($this->product);


        $product  = Product::create([
            'category_id' => $this->product->category,
            'brand_id' => $this->product->brand,
            'color_id' => $this->product->color,
            'shipment_id' => $this->product->shipment,
            'guarantee_id' => $this->product->guarantee,
            'media_id' => MediaFileService::publicUpload($this->banner)->id,
            'title' => $this->product->title,
            'title_en' => $this->product->title_en,
            'body' => $this->product->body,
            'description' => $this->product->description,
            'price' => $this->product->price,
            'discount' => $this->product->discount,
            'count' => $this->product->count,
            'weight' => $this->product->weight,
            'order_count' => $this->product->order_count,
            'view' => $this->product->view,
            'status' => $this->product->status,
            'original' => $this->product->original,
            'special' => $this->product->special,
            'confirmation_status' => 1,
            'view' => 0
        ]);


        return redirect()->route('admin.products.index');
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
