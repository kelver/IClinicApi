<?php

namespace Tests\Feature;

use App\Repositories\DependentServicesRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DependentServiceTest extends TestCase
{
    use RefreshDatabase;

    public function mountResource(int $identify, string $resource, $bearer, $retry, $timeout)
    {
        $data = new DependentServicesRepository();
        return $data->getEntity($identify, $resource, $bearer, $retry, $timeout);
    }

    /**
     * @test
     */
    public function test_can_get_clinic_resource_dependent_services()
    {
        $response = $this->mountResource(
            1, 'clinics',
            'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyLCJzZXJ2aWNlIjoiY2xpbmljcyJ9.r3w8KS4LfkKqZhOUK8YnIdLhVGJEqnReSClLCMBIJRQ',
            5, 3
        );
        $status = $response->status();

        $this->assertEquals(200, $status);
    }

    /**
     * @test
     */
    public function test_can_get_physicians_resource_dependent_services()
    {
        $response = $this->mountResource(
            1, 'physicians',
            'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyLCJzZXJ2aWNlIjoicGh5c2ljaWFucyJ9.Ei58MtFFGBK4uzpxwnzLxG0Ljdd-NQKVcOXIS4UYJtA',
            2, 4
        );
        $status = $response->status();

        $this->assertEquals(200, $status);
    }

    /**
     * @test
     */
    public function test_can_get_patients_resource_dependent_services()
    {
        $response = $this->mountResource(
            1, 'patients',
            'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyLCJzZXJ2aWNlIjoicGF0aWVudHMifQ.Pr6Z58GzNRtjX8Y09hEBzl7dluxsGiaxGlfzdaphzVU',
            2, 3
        );
        $status = $response->status();

        $this->assertEquals(200, $status);
    }
}
