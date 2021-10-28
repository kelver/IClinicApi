<?php

namespace App\Http\Controllers;

use App\Repositories\PrescriptionRepository;
use App\Services\PrescriptionService;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    protected $service;

    public function __construct(PrescriptionService $prescriptionService)
    {
        $this->service = $prescriptionService;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->service->storePrescription($request->all());
    }
}
