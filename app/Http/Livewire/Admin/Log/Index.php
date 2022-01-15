<?php

namespace App\Http\Livewire\Admin\Log;

use App\Models\Log;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Index extends Component
{

    use WithFileUploads, WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public Log $log;

    public $readyToLoad = false;



    public function mount()
    {
        $this->category = new Log();
    }

    public function load()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $logs = $this->readyToLoad ? Log::where('url', 'LIKE', "%{$this->search}%")->latest()->paginate(15) : [];

        return view('livewire.admin.log.index', compact('logs'));
    }
}
