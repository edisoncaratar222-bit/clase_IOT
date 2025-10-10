<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('departments', function (Blueprint $t) {
  $t->id();
  $t->string('name');
  $t->string('code')->nullable();
  $t->string('abbrev',10)->nullable();
  $t->boolean('status')->default(true);
  $t->foreignId('id_country')->constrained('countries');
  $t->timestamps();
  $t->softDeletes();
});



    }

    public function down()
    {
        Schema::dropIfExists('departments');
    }
};
