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
        //
        Schema::create('InflationRates', function(Blueprint $table){
            $table->id();
            $table->string('City');
            $table->numeric('2017PercentAmount');
            $table->numeric('2018PercentAmount');
            $table->numeric('2019PercentAmount');
            $table->numeric('2020PercentAmount');
            $table->numeric('2021PercentAmount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('InflationRates');
     
    }
};
