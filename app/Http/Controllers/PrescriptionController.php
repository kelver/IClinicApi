<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrescriptionRequest;
use App\Http\Resources\PrescriptionsResource;
use App\Services\PrescriptionService;

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
     * @param  \App\Http\Requests\StorePrescriptionRequest  $request
     * @return PrescriptionsResource
     */
    public function store(StorePrescriptionRequest $request): PrescriptionsResource
    {
        $prescriptions = $this->service->storePrescription($request->validated());

        return new PrescriptionsResource($prescriptions);
    }
}
