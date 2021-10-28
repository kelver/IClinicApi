<?php
namespace App\Repositories;

use Illuminate\Support\Facades\Cache;

class ClinicsRepository
{
    public function getClinic(int $clinic)
    {
        return Cache::remember("clinic_{$clinic}", (60*60)*72, function() use ($clinic){
            $clinicData = new DependentServicesRepository();
            return $clinicData->getEntity(
                $clinic,
                'clinics',
                'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyLCJzZXJ2aWNlIjoiY2xpbmljcyJ9.r3w8KS4LfkKqZhOUK8YnIdLhVGJEqnReSClLCMBIJRQ',
                3,
                5
            )->json();
        });
    }
}
