<?php

namespace App\Http\Livewire\Admin\Guarantee;

use App\Models\Guarantee;
use App\Models\Log;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads, WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public Guarantee $guarantee;

    public $readyToLoad = false;


    public function mount()
    {
        $this->guarantee = new Guarantee();
    }

    public function load()
    {
        $this->readyToLoad = true;
    }
    public function render()
    {


        $guarantees = $this->readyToLoad ? Guarantee::where('title', 'LIKE', "%{$this->search}%")->latest()->paginate(15) : [];

        return view('livewire.admin.guarantee.index', compact('guarantees'));
    }


    public function delete($id)
    {
        $product = Guarantee::query()->find($id);

        $product->delete();

        Log::create([
            'title' => ' حذف   گارانتی' . ' ' . $product->title,
            'url' => route('admin.guarantee.index'),
            'user_id' => auth()->user()->id,
            'action' => Log::DELETE_ACTION
        ]);

        $this->emit('toast', 'info', 'عملیات موفیت آمیز بود');
    }
}
