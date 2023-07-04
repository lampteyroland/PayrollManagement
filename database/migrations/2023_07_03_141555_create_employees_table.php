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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name');
            $table->string('title');
            $table->string('email');
            $table->string('phone');
            $table->date('dob');
            $table->string('street_address');
            $table->string('country');
            $table->string('region');
            $table->string('city');
            $table->string('job_title');
            $table->string('department');
            $table->string('work_email');
            $table->string('start_date');
            $table->string('emergency_first_name');
            $table->string('emergency_last_name');
            $table->string('emergency_other_name');
            $table->string('emergency_title');
            $table->string('emergency_email');
            $table->string('emergency_phone');
            $table->string('emergency_dob');
            $table->string('emergency_street_address');
            $table->timestamps();


        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
