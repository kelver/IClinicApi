<?php
namespace App\Services;

use App\Repositories\PrescriptionRepository;
use Illuminate\Http\JsonResponse;
use Psy\Util\Json;

class PrescriptionService
{
    protected $prescriptionRepository;

    public function __construct(PrescriptionRepository $prescriptionRepository)
    {
        $this->prescriptionRepository = $prescriptionRepository;
    }

    public function storePrescription(array $request)
    {
        return $this->prescriptionRepository->storePrescription($request);
    }

}
