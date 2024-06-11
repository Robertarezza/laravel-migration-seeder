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
        Schema::table('nome_trains', function (Blueprint $table) {
            $table->string('arrival_station')->after('departure_station');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nome_trains', function (Blueprint $table) {
            $table->dropColumn('arrival_station');
        });
    }
};
