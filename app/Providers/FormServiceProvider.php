<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::Component('text', "components.form.text", ['name', 'value' => null, 'attributes' => []]);
        Form::Component('textarea', "components.form.textarea", ['name', 'value' => null, 'attributes' => []]);
        Form::Component('submit', "components.form.submit", ['value' => 'Submit', 'attributes' => []]);
        Form::Component('hidden', "components.form.hidden", ['name', 'value' => null, 'attributes' => []]);
        Form::Component('file', "components.form.file", ['name', 'attributes' => []]);
    }
}
