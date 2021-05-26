<?php
namespace App\Http\Composers;

use Illuminate\View\View;

class ChatComposer
{
    public function compose(View $view)
    {
        $view->with('view_message', '$view->getName() : ' . $view->getName());
    }
}