<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public  $message,$type;
    public function __construct($message,$type=null)
    {
        //
        $this->message=$message;
        $this->type=$type;
    }

    public  function typeClass()
    {
        if($this->type=='error')
        {
            return 'error found';
        }

        return  'not found';

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
