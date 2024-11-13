<?php

namespace Database\Seeders;

use App\Models\Unit;
use App\Models\User;
use App\Models\Tenant;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create(['name' => 'Turki Al Mutairi', 'mobile' => '551234567']);
        User::factory()->create(['name' => 'Mohannad Al Dawish', 'mobile' => '501234567']);
        User::factory()->create(['name' => 'Basim Al Dawood', 'mobile' => '531234567']);
        User::factory()->create(['name' => 'Abdulrahman Al Humaidi', 'mobile' => '591234567']);
        User::factory()->create(['name' => 'Mohammad AlOli', 'mobile' => '561234567']);
        User::factory()->create(['name' => 'Abdullah Al Mutawa', 'mobile' => '571234567']);
        User::factory()->create(['name' => 'Abdullah Houso', 'mobile' => '594964687']);

        for ($i = 0; $i <= 15; $i++) {
            Unit::create([
                'name' => 'Apartment ' . $i,
                'price' => 200,
                'floor' => $i > 7 ? 2 : 1,
                'building_number' => 5014,
                'street' => 'Ahmad Ibn Abdulkareem Street',
                'district' => 'Al Malqa',
                'city' => 'Riyadh',
                'postcode' => 18142,
                'additional_number' => 7089,
            ]);
        }

        Tenant::create(['user_id' => random_int(1, 7), 'unit_id' => random_int(0, 15), 'status' => 'ended', 'contract_start_date' => '2024-01-01', 'contract_end_date' => '2024-05-31']);
        Tenant::create(['user_id' => random_int(1, 7), 'unit_id' => random_int(1, 15), 'status' => 'active', 'contract_start_date' => '2024-11-07', 'contract_end_date' => '2024-12-10']);
        Tenant::create(['user_id' => random_int(1, 7), 'unit_id' => random_int(1, 15), 'status' => 'active', 'contract_start_date' => '2024-11-12', 'contract_end_date' => '2024-11-15']);
        Tenant::create(['user_id' => random_int(1, 7), 'unit_id' => random_int(0, 15), 'status' => 'ended', 'contract_start_date' => '2024-07-01', 'contract_end_date' => '2024-09-30']);
        Tenant::create(['user_id' => random_int(1, 7), 'unit_id' => random_int(1, 15), 'status' => 'ended', 'contract_start_date' => '2024-04-06', 'contract_end_date' => '2024-05-06']);
        Tenant::create(['user_id' => random_int(1, 7), 'unit_id' => random_int(1, 15), 'status' => 'ended', 'contract_start_date' => '2024-10-12', 'contract_end_date' => '2024-11-01']);
        Tenant::create(['user_id' => random_int(1, 7), 'unit_id' => random_int(0, 15), 'status' => 'rejected', 'contract_start_date' => '2024-08-08', 'contract_end_date' => '2024-08-11']);
        Tenant::create(['user_id' => random_int(1, 7), 'unit_id' => random_int(1, 15), 'status' => 'ended', 'contract_start_date' => '2024-09-10', 'contract_end_date' => '2024-09-11']);
        Tenant::create(['user_id' => random_int(1, 7), 'unit_id' => random_int(1, 15), 'status' => 'ended', 'contract_start_date' => '2024-05-12', 'contract_end_date' => '2024-06-12']);
        Tenant::create(['user_id' => random_int(1, 7), 'unit_id' => random_int(1, 15), 'status' => 'pending', 'contract_start_date' => '2024-11-13', 'contract_end_date' => '2024-12-31']);
    }
}
