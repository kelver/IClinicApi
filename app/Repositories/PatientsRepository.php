<?php

namespace App\Repositories;

use App\Models\Prescriptions;

class PatientsRepository
{
    protected $entity;

    public function __construct(Prescriptions $prescriptionsModel)
    {
        $this->entity = $prescriptionsModel;
    }
}
