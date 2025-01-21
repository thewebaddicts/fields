<?php

namespace twa\fields\Elements;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class Datetime extends Component
{
    #[Modelable]
    public $value;
    public $info;

    public function render()
    {
        return view('FieldsView::components.form.datetime');
    }
}
