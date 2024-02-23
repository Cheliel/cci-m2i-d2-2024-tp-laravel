<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder
{
    /**
     * Seed the application's database.
     */
    function run() {
        
        User::Factory()->count(150)->create();
        // todo : this is not working but I don't know why
        // Add a default user with information (choice by me)
       // DB::run('INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES (1, "admin", "contact@pepina.com", "ThePepina67", "2021-09-01 00:00:00", "2021-09-01 00:00:00")');
    }
}
