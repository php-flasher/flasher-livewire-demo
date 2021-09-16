<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SweetAlert extends Component
{
    protected $listeners = [
        'sweetAlertEvent',
        'sweetAlertConfirmed',
        'sweetAlertDenied',
        'sweetAlertDismissed',
    ];

    public function showNotification()
    {
        sweetAlert()
            ->showDenyButton()
            ->livewire()
            ->addInfo('test pnotifyf with livewire');
    }

    public function sweetAlertEvent(array $data)
    {
        toastr()
            ->livewire()
            ->addSuccess('sweetAlertEvent');
    }

    public function sweetAlertConfirmed(array $data)
    {
        toastr()
            ->livewire()
            ->addSuccess('sweetAlertConfirmed');
    }

    public function sweetAlertDenied(array $data)
    {
        toastr()
            ->livewire()
            ->addError('sweetAlertDenied');
    }

    public function sweetAlertDismissed(array $data)
    {
        toastr()
            ->livewire()
            ->addWarning('sweetAlertDismissed');
    }

    public function render()
    {
        return view('livewire.sweet-alert');
    }
}
