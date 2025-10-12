<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $sqlDirectory = database_path('seeders/sql');

        // Get all .sql files in the directory
        $sqlFiles = glob($sqlDirectory . '/*.sql');

        foreach ($sqlFiles as $file) {
            $sql = file_get_contents($file);
            DB::unprepared($sql);
            $this->command->info("Imported: " . basename($file));
        }
    }
}
