<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Tests\TestCase;

class PrescriptionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function test_send_prescription()
    {
        $response = $this->post('/api/prescriptions', [
            "text" => "Dipirona 1x ao dia",
            "clinic" => "5",
            "physician" => "9",
            "patient" =>"3"
        ], [ 'Accept' => 'application/json']);

        $response->assertStatus(201);
    }

    /**
     * @test
     */
    public function test_send_prescription_without_clinic()
    {
        $response = $this->post('/api/prescriptions', [
            "text" => "Dipirona 1x ao dia",
            "physician" => "9",
            "patient" =>"3"
        ], [ 'Accept' => 'application/json']);

        $response->assertStatus(201);
    }

    /**
     * @test
     */
    public function test_send_prescription_with_error_patient_not_send()
    {
        $response = $this->post('/api/prescriptions', [
            "text" => "Dipirona 1x ao dia",
            "physician" => "9",
            "clinic" =>"2"
        ], [ 'Accept' => 'application/json']);

        $response->assertStatus(400);
    }
}
