<?php

namespace App\Architecture\People\Models;

use App\Architecture\AcademicLevels\Models\AcademicLevel;
use App\Architecture\Nationalities\Models\Nationality;
use App\Architecture\States\Models\State;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'people';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nationality_id',
        'name',
        'cpf',
        'birth',
        'state_id',
        'city',
        'academic_id',
    ];

    public function nationalities()
    {
        return $this->belongsTo(Nationality::class, 'nationality_id');
    }

    public function states()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function academicLevels()
    {
        return $this->belongsTo(AcademicLevel::class, 'academic_id');
    }
}
