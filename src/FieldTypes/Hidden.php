<?php
namespace twa\fields\FieldTypes;




class Hidden extends FieldType
{

    public function component()
    {
        return "elements.hidden";
    }

}
