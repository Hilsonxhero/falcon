<?php

namespace App\Http\Livewire\Admin\Shipment;

use App\Models\Shipment;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{

    use WithFileUploads;

    public $rules = [
        'shipment.title' => ['nullable'],
        'shipment.description' => ['nullable'],
        'shipment.status' => ['nullable'],
    ];

    public Shipment $shipment;

    public $banner;



    public function render()
    {

        $shipment = $this->shipment;

        return view('livewire.admin.shipment.update');
    }


    public function update()
    {

        $this->validate();


        $this->shipment->update($this->validate());

        return redirect()->route('admin.shipments.index');

        $this->emit('toast', 'success', 'عملیات موفقیت آمیز');
    }
}
