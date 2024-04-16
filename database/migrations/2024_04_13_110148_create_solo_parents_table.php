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
        Schema::create('solo_parents', function (Blueprint $table) {
            $table->id();
            $table->date('date_applied')->nullable();
            $table->string('application')->nullable();
            $table->string('name')->nullable();
            $table->string('b_day')->nullable();
            $table->string('b_place')->nullable();
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('educ_attainment')->nullable();
            $table->string('occupation')->nullable();
            $table->string('monthly_income')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('religion')->nullable();
            $table->string('email_address')->nullable();
            $table->string('benificiary_pension')->nullable();
            $table->string('family_name1')->nullable();
            $table->string('family_age1')->nullable();
            $table->string('family_relationship1')->nullable();
            $table->string('with_disability1')->nullable();
            $table->string('family_educ_attainment1')->nullable();
            $table->string('family_school_address1')->nullable();
            $table->string('family_name2')->nullable();
            $table->string('family_age2')->nullable();
            $table->string('family_relationship2')->nullable();
            $table->string('with_disability2')->nullable();
            $table->string('family_educ_attainment2')->nullable();
            $table->string('family_school_address2')->nullable();
            $table->string('family_name3')->nullable();
            $table->string('family_age3')->nullable();
            $table->string('family_relationship3')->nullable();
            $table->string('with_disability3')->nullable();
            $table->string('family_educ_attainment3')->nullable();
            $table->string('family_school_address3')->nullable();
            $table->string('family_name4')->nullable();
            $table->string('family_age4')->nullable();
            $table->string('family_relationship4')->nullable();
            $table->string('with_disability4')->nullable();
            $table->string('family_educ_attainment4')->nullable();
            $table->string('family_school_address4')->nullable();
            $table->string('family_name5')->nullable();
            $table->string('family_age5')->nullable();
            $table->string('family_relationship5')->nullable();
            $table->string('with_disability5')->nullable();
            $table->string('family_educ_attainment5')->nullable();
            $table->string('family_school_address5')->nullable();
            $table->string('family_name6')->nullable();
            $table->string('family_age6')->nullable();
            $table->string('family_relationship6')->nullable();
            $table->string('with_disability6')->nullable();
            $table->string('family_educ_attainment6')->nullable();
            $table->string('family_school_address6')->nullable();
            $table->string('family_name7')->nullable();
            $table->string('family_age7')->nullable();
            $table->string('family_relationship7')->nullable();
            $table->string('with_disability7')->nullable();
            $table->string('family_educ_attainment7')->nullable();
            $table->string('family_school_address7')->nullable();
            $table->string('CIRCUMSTANCES_OF_BEING_A_SOLO_PARENT')->nullable();
            $table->string('seperated_since')->nullable();
            $table->string('problem_of_soloparent')->nullable();
            $table->string('family_resources')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solo_parents');
    }
};
