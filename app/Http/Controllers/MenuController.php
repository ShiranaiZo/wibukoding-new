<?php

namespace App\Http\Controllers;

use App\Models\LearningPathCategory;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function learningPath()
    {
        $data['title'] = 'Alur Belajar';

        $data['learningPathCategories'] = LearningPathCategory::orderBy('order')
                                                                ->active()
                                                                ->with(['learningPaths' => function ($query) {
                                                                    $query->orderBy('order')
                                                                        ->active();
                                                                }])
                                                                ->get();

        return view('pages.learning-path', $data);
    }
}
