<?php

namespace twa\fields\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class DefaultServiceProvider extends ServiceProvider{

    
    public function boot(){
        Livewire::component('elements.colorpicker',\twa\fields\Elements\Colorpicker::class);
        Livewire::component('elements.date',\twa\fields\Elements\Date::class);
        Livewire::component('elements.datetime',\twa\fields\Elements\Datetime::class);
        Livewire::component('elements.editor',\twa\fields\Elements\Editor::class);
        Livewire::component('elements.email',\twa\fields\Elements\Email::class);
        Livewire::component('elements.file-upload',\twa\fields\Elements\FileUpload::class);
        Livewire::component('elements.hidden',\twa\fields\Elements\Hidden::class);
        Livewire::component('elements.language',\twa\fields\Elements\Language::class);
        Livewire::component('elements.number',\twa\fields\Elements\Number::class);
        Livewire::component('elements.password',\twa\fields\Elements\Password::class);
        Livewire::component('elements.select',\twa\fields\Elements\Select::class);
        Livewire::component('elements.textarea',\twa\fields\Elements\Textarea::class);
        Livewire::component('elements.textfield',\twa\fields\Elements\Textfield::class);
        Livewire::component('elements.toggle',\twa\fields\Elements\Toggle::class);


        
        // $this->loadScriptAndStyles();

        $this->publishes([
            __DIR__.'/../Config/fields.php' => config_path('fields.php'),
        ], 'laravel-assets');

    }

    public function register(){
        include_once(__DIR__.'/../Helpers/default.php');
        $this->loadViewsFrom(__DIR__.'/../Resources/views/' , 'FieldsView');

        $this->loadRoutesFrom(__DIR__.'/../Routes/console.php');

        $this->app->singleton('field-assets', function () {
            return [
                "vendor/twa/fields/dist/app-47V81PLc.css",
                "vendor/twa/fields/dist/app-BNmayBpR.js"
            ];
        });

    }



  
}