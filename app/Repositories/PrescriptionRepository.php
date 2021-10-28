<?php
namespace App\Repositories;

use App\Models\Prescriptions;

class PrescriptionRepository
{
    protected $entity;
    protected $clinic;
    protected $physician;
    protected $patient;

    public function __construct(Prescriptions $prescriptionsModel)
    {
        $this->entity = $prescriptionsModel;
        $this->clinic = new ClinicsRepository();
        $this->physician = new PhysiciansRepository();
        $this->patient = new PatientsRepository();
    }

    public function storePrescription(array $request)
    {
        $clinic = $this->clinic->getClinic($request['clinic']);
        $physician = $this->physician->getPhysician($request['physician']);
        $patient = $this->patient->getPatient($request['patient']);

        $data = $this->sendMetric($clinic, $physician, $patient);
        return $data;
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
