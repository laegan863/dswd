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
        Schema::create('seniors', function (Blueprint $table) {
            $table->id();
            $table->string('date_applied')->nullable();
            $table->string('surname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('address')->nullable();
            $table->string('barangay')->nullable();
            $table->string('occupation')->nullable();
            $table->string('annualincome')->nullable();
            $table->string('otherskills')->nullable();
            $table->string('name1')->nullable();
            $table->string('bday1')->nullable();
            $table->string('sex1')->nullable();
            $table->string('relationship1')->nullable();
            $table->string('occupation1')->nullable();
            $table->string('name2')->nullable();
            $table->string('bday2')->nullable();
            $table->string('sex2')->nullable();
            $table->string('relationship2')->nullable();
            $table->string('occupation2')->nullable();
            $table->string('name3')->nullable();
            $table->string('bday3')->nullable();
            $table->string('sex3')->nullable();
            $table->string('relationship3')->nullable();
            $table->string('occupation3')->nullable();
            $table->string('name4')->nullable();
            $table->string('bday4')->nullable();
            $table->string('sex4')->nullable();
            $table->string('relationship4')->nullable();
            $table->string('occupation4')->nullable();
            $table->string('name5')->nullable();
            $table->string('bday5')->nullable();
            $table->string('sex5')->nullable();
            $table->string('relationship5')->nullable();
            $table->string('occupation5')->nullable();
            $table->string('name6')->nullable();
            $table->string('bday6')->nullable();
            $table->string('sex6')->nullable();
            $table->string('relationship6')->nullable();
            $table->string('occupation6')->nullable();
            $table->string('name7')->nullable();
            $table->string('bday7')->nullable();
            $table->string('sex7')->nullable();
            $table->string('relationship7')->nullable();
            $table->string('occupation7')->nullable();
            $table->string('association_name')->nullable();
            $table->string('association_address')->nullable();
            $table->string('date_of_membership')->nullable();
            $table->string('date_elected')->nullable();
            $table->string('registration_date')->nullable();
            $table->string('certi_number')->nullable();
            $table->string('issued_at')->nullable();
            $table->string('on')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seniors');
    }
};
