<?php
return[
    "email" => [
        'id' => uniqid(),
        'livewire' => [
            'wire:model' => 'form.{name}',
        ],
        'type' =>\twa\fields\FieldTypes\Textfield::class,
        'label' => 'Email',
        'placeholder' => 'Email',
        'name' => 'email',
    ],
    "image" => [

        'id' => uniqid(),
        'livewire' => [
            'wire:model' => 'form.{name}',
        ],
        'multiple' => false,
        'aspect_ratio' => '1',
        'type' =>\twa\fields\FieldTypes\FileUpload::class,
        'label' => 'Logo',
        'placeholder' => 'Upload Logo',
        'name' => 'image',
    ],
];