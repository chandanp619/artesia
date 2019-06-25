<?php

namespace App\Controllers\Partials;

use App\Debug;

trait ContactForm
{

    public function componentContactForm()
    {
        $fields = [
            'title' => 'contact_intro_title',
            'form_html' => 'contact_form',
        ];

        $methods = [
            'contactBody'
        ];

        return array_merge($this->getComponentMeta($fields), $this->getComponentMethodMeta($methods));
    }

    private function contactBody()
    {
        return wpautop($this->getMeta('contact_intro_body'));
    }
}
