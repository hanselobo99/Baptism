<?php

use App\Models\BaptismRecord;
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
        Schema::create('baptism_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(BaptismRecord::class);
            $table->string('FathersName');
            $table->string('MothersName');
            $table->string('FathersResidence');
            $table->string('Nationality');
            $table->string('PlaceOfBirth');
            $table->date('DateOfBaptism');
            $table->string('GodFathersName');
            $table->string('GodFathersRes');
            $table->string('GodMothersName');
            $table->string('GodMothersRes');
            $table->string('MinisterOfBaptism');
            $table->string('PlaceOfBaptism');
            $table->date('DateOfConfirmation')->nullable();
            $table->date('DateOfMarriage')->nullable();
            $table->string('Remarks')->nullable();
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
        Schema::dropIfExists('baptism_details');
    }
};
