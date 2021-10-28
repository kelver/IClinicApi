<?php
namespace App\Repositories;

use App\Models\Prescriptions;
use Illuminate\Http\Client\Response;

class PrescriptionRepository
{
    protected $entity;

    public function __construct(Prescriptions $prescriptionsModel)
    {
        $this->entity = $prescriptionsModel;
    }

    public function storePrescription(array $request)
    {
        $clinic = $this->getClinic($request['clinic']);
        $physician = $this->getPhysician($request['physician']);
        $patient = $this->getPatient($request['patient']);

        $data = $this->sendMetric($clinic, $physician, $patient);
        return $data;
    }

    public function getClinic(int $clinic)
    {
        $clinicData = new DependentServicesRepository();
        return $clinicData->getEntity(
            $clinic,
            'clinics',
            'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyLCJzZXJ2aWNlIjoiY2xpbmljcyJ9.r3w8KS4LfkKqZhOUK8YnIdLhVGJEqnReSClLCMBIJRQ',
            3,
            5
        )->json();
    }

    public function getPhysician(int $physician)
    {
        $physicianData = new DependentServicesRepository();
        return $physicianData->getEntity(
            $physician,
            'physicians',
            'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyLCJzZXJ2aWNlIjoicGh5c2ljaWFucyJ9.Ei58MtFFGBK4uzpxwnzLxG0Ljdd-NQKVcOXIS4UYJtA',
            2,
            4
        )->json();
    }

    public function getPatient(int $patient)
    {
        $patientData = new DependentServicesRepository();
        return $patientData->getEntity(
            $patient,
            'patients',
            'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyLCJzZXJ2aWNlIjoicGF0aWVudHMifQ.Pr6Z58GzNRtjX8Y09hEBzl7dluxsGiaxGlfzdaphzVU',
            2,
            3
        )->json();
    }

    public function sendMetric($clinic, $physician, $patient)
    {
        dd($clinic, $physician, $patient);
        $metricData = new DependentServicesRepository();

        return $metricData
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
                    "prescription_id" => 1
                ])->json();
    }
}
