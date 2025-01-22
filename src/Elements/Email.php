<?php

namespace twa\fields\Elements;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class Email extends Component
{    
    #[Modelable]
    public $value;
    public $info;
    
    public function render()
    {
        return view('FieldsView::components.form.email');
    }
}
