<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use function view;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.category.create');

    }
}
