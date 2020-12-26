<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Models\LetterModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LetterController extends Controller
{
    public function letterList(){
        $model = new LetterModel();

        $letter_array = $model->letterList()->get();
        return view('letter.letter_list', compact('letter_array'));
    }

    public function letterForm(){
        return view('letter.letter_form');
    }

    public function letterSave(Request $request){
        $data = [
            'letter_id' => time(),
            'u_name' => $request->input('user'),
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ];
        $model = new LetterModel();

        $model->fill($data);
        $model->save();
        return '<script>alert("저장완료!"); window.location.href="'.route('letterMain').'"</script>';
    }
}