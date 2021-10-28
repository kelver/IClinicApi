<?php
namespace App\Repositories;

use Illuminate\Support\Facades\Cache;

class PatientsRepository
{
    public function getPatient(int $patient)
    {
        return Cache::remember("patient_{$patient}", (60*60)*48, function() use ($patient){
            $patientData = new DependentServicesRepository();
            return $patientData->getEntity(
                $patient,
                'patients',
                ' eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyLCJzZXJ2aWNlIjoicGF0aWVudHMifQ.Pr6Z58GzNRtjX8Y09hEBzl7dluxsGiaxGlfzdaphzVU',
                2,
                3
            )->json();
        });
    }
}
