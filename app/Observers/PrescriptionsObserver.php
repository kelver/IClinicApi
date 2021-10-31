<?php

namespace App\Observers;

use App\Models\Prescriptions;
use Illuminate\Support\Str;

class PrescriptionsObserver
{
    /**
     * Handle the Prescriptions "creating" event.
     *
     * @param  \App\Models\Prescriptions  $prescriptions
     * @return void
     */
    public function creating(Prescriptions $prescriptions)
    {
        $prescriptions->uuid = (string) Str::uuid();
    }
}
