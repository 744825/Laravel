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
        Schema::create('stud', function (Blueprint $table) {
            $table->id();
            $table->int('ACADEMIC_Y');
            $table->string('CLASS_ID');
            $table->string('COURSE_ID');
            $table->string('CLASS');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stud');
    }
};
