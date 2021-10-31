<?php

namespace App\Repositories;

use Illuminate\Http\Exceptions\HttpResponseException;

class MetricsRepository
{
    private $metricData;
    public function __construct()
    {
        $this->metricData = new DependentServicesRepository();
    }

    public function sendMetric($clinic, $physician, $patient, $prescription)
    {
        try{
            $data = $this->metricData
                        ->sendEntity(
                            'metrics',
                            'SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c',
                            5,
                            6,
                            [
                                "clinic_id" => $clinic['id'],
                                "clinic_name" => $clinic['name'],
                                "physician_id" => $physician['id'],
                                "physician_name" => $physician['name'],
                                "physician_crm" => $physician['crm'],
                                "patient_id" => $patient['id'],
                                "patient_name" => $patient['name'],
                                "patient_email" => $patient['email'],
                                "patient_phone" => $patient['phone'],
                                "prescription_id" => $prescription->id
                            ]);


            if($data->failed()){
                return response()->json([
                    'error' => [
                        'message' => 'Physician not found.',
                        'code' => '02'
                    ]
                ], 401);
            }

            return $data->json();
        } catch (\Exception $e) {
            throw new HttpResponseException(response()->json([
                'error' => [
                    'message' => 'Metrics service not available.',
                    'code' => '04'
                ]
            ], 401));
        }
    }
}
