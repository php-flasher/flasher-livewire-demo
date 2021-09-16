<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pnotify extends Component
{
    public function showNotification()
    {
        pnotify()
            ->livewire()
            ->addSuccess('test pnotifyf with livewire');

        pnotify()
            ->livewire()
            ->addError('test pnotifyf with livewire');

        pnotify()
            ->livewire()
            ->addWarning('test pnotifyf with livewire');

        pnotify()
            ->livewire()
            ->addInfo('test pnotifyf with livewire');
    }

    public function render()
    {
        return view('livewire.pnotify');
    }
}
