<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('employee_id');
            $table->string('fname');
            $table->string('lname');
            $table->unsignedBigInteger('company_id'); // Foreign key
            $table->string('email')->unique();
            $table->string('phone');
            $table->timestamps();
    
            // Define the foreign key constraint
            $table->foreign('company_id')
                  ->references('company_id')
                  ->on('companies')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
