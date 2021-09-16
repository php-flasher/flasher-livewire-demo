<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Noty extends Component
{
    public function showNotification()
    {
        noty()
            ->livewire()
            ->addSuccess('test notyf with livewire');

        noty()
            ->livewire()
            ->addError('test notyf with livewire');

        noty()
            ->livewire()
            ->addWarning('test notyf with livewire');

        noty()
            ->livewire()
            ->addInfo('test notyf with livewire');
    }

    public function render()
    {
        return view('livewire.noty');
    }
}
