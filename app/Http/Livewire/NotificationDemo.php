<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotificationDemo extends Component
{
    public function render()
    {
        return view('livewire.notification-demo');
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function alertSuccess()
    {
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success',  'message' => 'User Created Successfully!']
        );
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function alertError()
    {
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'error',  'message' => 'Something is Wrong!']
        );
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function alertInfo()
    {
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'info',  'message' => 'Going Well!']
        );
    }
}
