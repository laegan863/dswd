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
        Schema::create('pwds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('member_account_id')->nullable();
            $table->string('application')->nullable();
            $table->date('date_applied')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('suffix')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('sex')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('type_of_disabilities')->nullable();
            $table->string('cause_of_disabilities')->nullable();
            $table->string('house_number_street')->nullable();
            $table->string('barangay')->nullable();
            $table->string('municipality')->nullable();
            $table->string('province')->nullable();
            $table->string('region')->nullable();
            $table->string('landline_num')->nullable();
            $table->string('mobile_num')->nullable();
            $table->string('email')->nullable();
            $table->string('educational_attainment')->nullable();
            $table->string('occupation')->nullable();
            $table->string('status_of_employment')->nullable();
            $table->string('type_of_employment')->nullable();
            $table->string('category_of_employment')->nullable();
            $table->string('organization_affiliated')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('office_address')->nullable();
            $table->string('tel_nos')->nullable();
            $table->string('sss_num')->nullable();
            $table->string('gsis_num')->nullable();
            $table->string('pagibig_num')->nullable();
            $table->string('psn_num')->nullable();
            $table->string('philhealth_num')->nullable();
            $table->string('father_l_name')->nullable();
            $table->string('father_f_name')->nullable();
            $table->string('father_m_name')->nullable();
            $table->string('mother_l_name')->nullable();
            $table->string('mother_f_name')->nullable();
            $table->string('mother_m_name')->nullable();
            $table->string('gaurdian_l_name')->nullable();
            $table->string('gaurdian_f_name')->nullable();
            $table->string('gaurdian_m_name')->nullable();
            $table->string('accomplish_by')->nullable();
            $table->string('accomplish_l_name')->nullable();
            $table->string('accomplish_f_name')->nullable();
            $table->string('accomplish_m_name')->nullable();
            $table->string('physician_lisence_number')->nullable();
            $table->string('physician_l_name')->nullable();
            $table->string('physician_f_name')->nullable();
            $table->string('physician_m_name')->nullable();
            $table->string('processing_l_name')->nullable();
            $table->string('processing_f_name')->nullable();
            $table->string('processing_m_name')->nullable();
            $table->string('approving_l_name')->nullable();
            $table->string('approving_f_name')->nullable();
            $table->string('approving_m_name')->nullable();
            $table->string('encoder')->nullable();
            $table->string('name_of_reporting')->nullable();
            $table->string('control_num')->nullable();
            $table->string('img')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pwds');
    }
};
