<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LetterModel extends Model
{
    protected $table = 'letter_rolling_paper';
    protected $guarded = ['Id'];

    public static function letterList(){
        $q = DB::table('letter_rolling_paper')
            ->select(['*']);
        return $q;
    }
}
