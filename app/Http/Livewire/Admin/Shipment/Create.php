<?php

namespace App\Http\Livewire\Admin\Shipment;

use App\Models\Shipment;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public Shipment $shipment;
    public $rules = [
        'shipment.title' => ['nullable'],
        'shipment.description' => ['nullable'],
        'shipment.status' => ['nullable'],
    ];


    public function mount()
    {
        $this->shipment = new Shipment();

        $this->shipment->status = false;
    }

    public function store()
    {
        $this->validate();


        // dd($this->banner);


        $shipment  = Shipment::create([
            'title' => $this->shipment->title,
            'description' => $this->shipment->description,
            'status' => $this->shipment->status,
        ]);


        return redirect()->route('admin.shipments.index');
    }

    public function render()
    {
        return view('livewire.admin.shipment.create');
    }
}
