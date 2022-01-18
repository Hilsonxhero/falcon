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

class Update extends Component
{

    use WithFileUploads;

    public $banner;

    public $rules = [
        'product.category_id' => ['nullable'],
        'product.brand_id' => ['nullable'],
        'product.color_id' => ['nullable'],
        'product.shipment_id' => ['nullable'],
        'product.guarantee_id' => ['nullable'],
        'product.media_id' => ['nullable'],
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
        // 'product.tags' => ['nullable'],
        'product.confirmation_status' => ['nullable']
    ];
    public Product $product;
    public function render()
    {
        $product = $this->product;

        $categories = Category::all();
        $guarantees = Guarantee::all();
        $shipments = Shipment::all();
        $brands = Brand::all();

        return view('livewire.admin.product.update', compact(
            'product',
            'categories',
            'guarantees',
            'shipments',
            'brands'
        ));
    }



    public function update()
    {

        $this->validate();
        if ($this->banner) $this->product->media_id = MediaFileService::publicUpload($this->banner)->id;

        $this->product->update($this->validate());

        return redirect()->route('admin.products.index');

        $this->emit('toast', 'success', 'عملیات موفقیت آمیز');
    }
}
