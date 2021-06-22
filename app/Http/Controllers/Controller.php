<?php

namespace App\Http\Controllers;

use App\Architecture\People\Interfaces\IPeopleService;
use App\Traits\Requests;
use App\Traits\Utils;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Utils, Requests;

    /**
     * @var IPeopleService
     */
    protected $IPeopleService;

    /**
     * Controller constructor.
     * @param IPeopleService $IPeopleService
     */
    public function __construct(IPeopleService $IPeopleService)
    {
        $this->IPeopleService = $IPeopleService;
    }
}
