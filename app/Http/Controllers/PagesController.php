<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function surveyList()
    {
        $info = file_get_contents(base_path(Storage::url('app/questions.json')));
        $info = json_decode($info, true);
        return view('surveyList')
            ->with('info', $info);
    }

    public function specificSurvey($id)
    {
        $info = file_get_contents(base_path(Storage::url('app/questions.json')));
        $info = json_decode($info, true);
        return view('surveyList')
            ->with('question', $info[$id]);
    }
}
