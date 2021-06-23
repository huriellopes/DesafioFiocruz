<?php

namespace App\Architecture\People\Models;

use App\Architecture\AcademicLevels\Models\AcademicLevel;
use App\Architecture\Nationalities\Models\Nationality;
use App\Architecture\States\Models\State;
use App\Presenters\PeoplePresenter;
use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class People extends Model
{
    use PresentableTrait;

    protected $presenter = PeoplePresenter::class;

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nationalities()
    {
        return $this->belongsTo(Nationality::class, 'nationality_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function states()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function academicLevels()
    {
        return $this->belongsTo(AcademicLevel::class, 'academic_id');
    }
}
