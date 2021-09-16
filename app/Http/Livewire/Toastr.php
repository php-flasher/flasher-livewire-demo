<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Toastr extends Component
{
    public function showNotification()
    {
        toastr()
            ->livewire()
            ->addSuccess('test toastr with livewire');

        toastr()
            ->livewire()
            ->addError('test toastr with livewire');

        toastr()
            ->livewire()
            ->addWarning('test toastr with livewire');

        toastr()
            ->livewire()
            ->addInfo('test toastr with livewire');
    }

    public function render()
    {
        return view('livewire.toastr');
    }
}
