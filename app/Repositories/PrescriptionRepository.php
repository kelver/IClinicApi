<?php
namespace App\Repositories;

use App\Models\Prescriptions;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PrescriptionRepository
{
    protected $entity;
    protected $clinic;
    protected $physician;
    protected $patient;
    protected $metric;

    public function __construct(Prescriptions $prescriptionsModel)
    {
        $this->entity = $prescriptionsModel;
        $this->clinic = new ClinicsRepository();
        $this->physician = new PhysiciansRepository();
        $this->patient = new PatientsRepository();
        $this->metric = new MetricsRepository();
    }

    public function storePrescription(array $request)
    {
        $clinic = ['id' => null, 'name' => null];
        try{
            if(array_key_exists('clinic', $request)) {
                $clinic = $this->clinic->getClinic($request['clinic']);
            }
            $patient = $this->isValidData($this->patient->getPatient($request['patient']));
            $physician = $this->isValidData($this->physician->getPhysician($request['physician']));


            return $this->persistPrescription($clinic, $physician, $patient, $request);
        } catch (\Exception $e) {
            throw new HttpException(500, $e->getMessage());
        }
    }

    public function persistPrescription($clinic, $physician, $patient, $request)
    {
        DB::beginTransaction();

        $prescription = $this->entity->create([
            'clinic'        => $clinic['id'],
            'physician'     => $physician['id'],
            'patient'       => $patient['id'],
            'text'          => $request['text'],
        ]);
        $metric = $this->isValidData($this->metric->sendMetric($clinic, $physician, $patient, $prescription));
        if(!$metric){
            DB::rollBack();
        }

        DB::commit();
        return $prescription;
    }

    public function isValidData($data)
    {
        if(!is_array($data) && $data->getStatusCode() == 401){
            throw new HttpException(409, $data->getContent());
        }
        return $data;
    }

}
