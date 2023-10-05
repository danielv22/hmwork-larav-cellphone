<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('cellphones', function (Blueprint $table) {
            \DB::statement('ALTER TABLE cellphones CHANGE COLUMN referecia referencia VARCHAR(100) NOT NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cellphones', function (Blueprint $table) {
            \DB::statement('ALTER TABLE cellphones CHANGE COLUMN referencia referecia VARCHAR(100) NOT NULL');
        });
    }
};