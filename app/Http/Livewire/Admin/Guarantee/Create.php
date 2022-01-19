<?php

namespace App\Http\Livewire\Admin\Guarantee;

use Livewire\Component;
use App\Models\Guarantee;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public Guarantee $guarantee;
    public $rules = [
        'guarantee.title' => ['nullable'],
        'guarantee.description' => ['nullable'],
        'guarantee.status' => ['nullable'],
    ];


    public function mount()
    {
        $this->guarantee = new guarantee();

        $this->guarantee->status = false;
    }

    public function store()
    {
        $this->validate();


        // dd($this->banner);


        $guarantee  = Guarantee::create([
            'title' => $this->guarantee->title,
            'description' => $this->guarantee->description,
            'status' => $this->guarantee->status,
        ]);


        return redirect()->route('admin.guarantees.index');
    }

    public function render()
    {
        return view('livewire.admin.guarantee.create');
    }
}
