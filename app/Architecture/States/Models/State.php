<?php

namespace App\Architecture\States\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';

    protected $primaryKey = 'id';

    protected $fillable = [
        'uf',
        'name',
    ];
}
