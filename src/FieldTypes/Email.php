<?php

namespace twa\fields\FieldTypes;




class Email extends FieldType
{

    public function component()
    {
        return "elements.email";
    }

}
