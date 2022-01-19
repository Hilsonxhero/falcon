<?php

namespace App\Http\Livewire\Admin\Shipment;

use App\Models\Log;
use App\Models\Shipment;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads, WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public Shipment $shipment;

    public $readyToLoad = false;


    public function mount()
    {
        $this->shipment = new Shipment();
    }

    public function load()
    {
        $this->readyToLoad = true;
    }
    public function render()
    {


        $shipments = $this->readyToLoad ? Shipment::where('title', 'LIKE', "%{$this->search}%")->latest()->paginate(15) : [];

        return view('livewire.admin.shipment.index', compact('shipments'));
    }


    public function delete($id)
    {
        $product = shipment::query()->find($id);

        $product->delete();

        Log::create([
            'title' => ' حذف  روش ارسال' . ' ' . $product->title,
            'url' => route('admin.shipment.index'),
            'user_id' => auth()->user()->id,
            'action' => Log::DELETE_ACTION
        ]);

        $this->emit('toast', 'info', 'عملیات موفیت آمیز بود');
    }
}
