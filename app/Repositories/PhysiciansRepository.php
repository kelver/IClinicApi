<?php
namespace App\Repositories;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Cache;

class PhysiciansRepository
{
    public function getPhysician(int $physician)
    {
        try {
            return Cache::remember("physician_{$physician}", (60 * 60) * 48, function () use ($physician) {
                $physicianData = new DependentServicesRepository();
                $data = $physicianData->getEntity(
                    $physician,
                    'physicians',
                    'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyLCJzZXJ2aWNlIjoicGh5c2ljaWFucyJ9.Ei58MtFFGBK4uzpxwnzLxG0Ljdd-NQKVcOXIS4UYJtA',
                    2,
                    4
                );

                if($data->failed()){
                    return response()->json([
                        'error' => [
                            'message' => 'Physician not found.',
                            'code' => '02'
                        ]
                    ], 401);
                }
                return $data->json();
            });
        } catch (\Exception $e) {
            throw new HttpResponseException(response()->json([
                'error' => [
                    'message' => 'Physicians service not available.',
                    'code' => '05'
                ]
            ], 401));
        }
    }
}
