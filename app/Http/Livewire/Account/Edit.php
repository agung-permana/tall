<?php

namespace App\Http\Livewire\Account;

use Livewire\Component;

class Edit extends Component
{
    public $name;
    
    public function mount()
    {
        $this->name = auth()->user()->name;
    }

    public function update()
    {
        auth()->user()->update([
            'name' => $this->name
        ]);

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.account.edit');
    }
}
