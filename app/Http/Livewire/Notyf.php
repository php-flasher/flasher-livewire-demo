<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Notyf extends Component
{
    public function showNotification()
    {
        notyf()
            ->livewire()
            ->addSuccess('test notyf with livewire');

        notyf()
            ->livewire()
            ->addError('test notyf with livewire');

        notyf()
            ->livewire()
            ->addWarning('test notyf with livewire');

        notyf()
            ->livewire()
            ->addInfo('test notyf with livewire');
    }

    public function render()
    {
        return view('livewire.notyf');
    }
}
