<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Study Abroad',
                'description' => 'Navigate university applications and student visa processes with expert guidance. Includes university application support, student visa processing, and scholarship guidance.',
                'price' => 500.00,
                'currency' => 'USD',
                'image' => 'services/study-abroad.jpg',
                'status' => true,
            ],
            [
                'name' => 'Work Permits',
                'description' => 'Secure work authorization and employment opportunities in your dream destination. Includes work visa applications, job search support, and employment documentation.',
                'price' => 750.00,
                'currency' => 'USD',
                'image' => 'services/work-permits.jpg',
                'status' => true,
            ],
            [
                'name' => 'Permanent Residency',
                'description' => 'Achieve permanent settlement with comprehensive immigration support and legal expertise. Includes PR application process, legal documentation, and settlement support.',
                'price' => 1200.00,
                'currency' => 'USD',
                'image' => 'services/permanent-residency.jpg',
                'status' => true,
            ],
            [
                'name' => 'Family Reunification',
                'description' => 'Bring your family together with professional assistance for family visa applications and reunification processes.',
                'price' => 400.00,
                'currency' => 'USD',
                'image' => 'services/family-reunification.jpg',
                'status' => true,
            ],
            [
                'name' => 'Business Immigration',
                'description' => 'Entrepreneur and investor visa services for business professionals looking to establish themselves in new markets.',
                'price' => 1000.00,
                'currency' => 'USD',
                'image' => 'services/business-immigration.jpg',
                'status' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
