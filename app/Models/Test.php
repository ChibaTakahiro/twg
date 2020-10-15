<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Test extends Model
{
    public function testDBCheck(){

        $data = DB::select("SELECT * FROM users");
        var_dump($data);
    }
}
