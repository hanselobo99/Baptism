<?php

use App\Models\BaptismDetail;
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
        Schema::create('baptism_records', function (Blueprint $table) {
            $table->id();
            $table->string('Rno');
            $table->string('FirstName');
            $table->string('MiddleName')->nullable();
            $table->string('LastName');
            $table->date('DateOfBirth');
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
        Schema::dropIfExists('baptism_records');
    }
};
