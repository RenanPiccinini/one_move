<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('stages')
            ->where('slug', 'brasilia')
            ->update([
                'date' => '2027-01-24',
                'date_display' => '24 de Janeiro de 2027',
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('stages')
            ->where('slug', 'brasilia')
            ->update([
                'date' => '2027-01-27',
                'date_display' => '27 de Janeiro de 2027',
            ]);
    }
};
