<?php

namespace App\View\Composer;

use App\Models\Category;
use Illuminate\View\View;

class CategoriesShareView
{
    public function compose(View $view)
    {
        $categories = Category::tree()->get()->toTree();
        $view->with('categories', $categories);
    }

}
