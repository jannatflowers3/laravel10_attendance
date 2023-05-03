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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable(false);
            $table->string('employee_number')->nullable();	
            $table->string('address')->nullable();
            $table->string('phone_number',11)->nullable();	
            $table->string('day')->nullable(false);
            $table->date('date')->nullable(false);
            $table->time('time')->nullable(false);	
            $table->string('customer_feedback')->nullable();
            $table->string('expenses')->nullable();
            $table->string('expenses_des')->nullable();
            $table->string('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
