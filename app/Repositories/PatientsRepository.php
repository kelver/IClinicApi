<?php
namespace App\Repositories;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PatientsRepository
{
    public function getPatient(int $patient)
    {
        try{
            return Cache::remember("patient_{$patient}", (60*60)*48, function() use ($patient){
                $patientData = new DependentServicesRepository();
                $data = $patientData->getEntity(
                    $patient,
                    'patients',
                    ' eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyLCJzZXJ2aWNlIjoicGF0aWVudHMifQ.Pr6Z58GzNRtjX8Y09hEBzl7dluxsGiaxGlfzdaphzVU',
                    2,
                    3
                );

                if($data->failed()){
                    throw new HttpResponseException(response()->json([
                        'error' => [
                            'message' => 'Patients not found.',
                            'code' => '03'
                        ]
                    ], 409));
                }
                return $data->json();
            });
        } catch (\Exception $e) {
            throw new HttpResponseException(response()->json([
                'error' => [
                    'message' => 'Patients service not available.',
                    'code' => '06'
                ]
            ], 409));
        }
    }
}
