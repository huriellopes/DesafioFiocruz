<?php

namespace App\Http\Controllers\Web;

use App\Architecture\AcademicLevels\Interfaces\IAcademicLevelsService;
use App\Architecture\Nationalities\Interfaces\INationalityService;
use App\Architecture\People\Interfaces\IPeopleService;
use App\Architecture\People\Models\People;
use App\Architecture\States\Interfaces\IStateService;
use App\Http\Controllers\Controller;

class PeopleController extends Controller
{
    /**
     * @var string
     * @var INationalityService
     * @var IAcademicLevelsService
     * @var IStateService
     */
    private $viewPath = 'People.';
    protected $INationalityService;
    protected $IAcademicLevelsService;
    protected $IStateService;

    /**
     * PeopleController constructor.
     * @param IPeopleService $IPeopleService
     * @param INationalityService $INationalityService
     * @param IAcademicLevelsService $IAcademicLevelsService
     * @param IStateService $IStateService
     */
    public function __construct(IPeopleService $IPeopleService,
                                INationalityService $INationalityService,
                                IAcademicLevelsService $IAcademicLevelsService,
                                IStateService $IStateService
    )
    {
        parent::__construct($IPeopleService);
        $this->INationalityService = $INationalityService;
        $this->IAcademicLevelsService = $IAcademicLevelsService;
        $this->IStateService = $IStateService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view($this->viewPath.'index');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $nationalities = $this->INationalityService->list();
        $academiclevels = $this->IAcademicLevelsService->list();
        $states = $this->IStateService->listSates();
        return view($this->viewPath.'create', compact('nationalities', 'academiclevels', 'states'));
    }

    public function show(People $people)
    {
        return view($this->viewPath.'show', compact('people'));
    }
}
