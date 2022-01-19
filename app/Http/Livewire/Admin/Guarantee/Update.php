<?php

namespace App\Http\Livewire\Admin\Guarantee;

use App\Models\Guarantee;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $rules = [
        'guarantee.title' => ['nullable'],
        'guarantee.description' => ['nullable'],
        'guarantee.status' => ['nullable'],
    ];

    public Guarantee $guarantee;

    public $banner;



    public function render()
    {

        $guarantee = $this->guarantee;

        return view('livewire.admin.guarantee.update');
    }


    public function update()
    {

        $this->validate();


        $this->guarantee->update($this->validate());

        return redirect()->route('admin.guarantees.index');

        $this->emit('toast', 'success', 'عملیات موفقیت آمیز');
    }
}
