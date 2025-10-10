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
       Schema::create('cities', function (Blueprint $t) {
  $t->id();
  $t->string('name');
  $t->string('code')->nullable();
  $t->string('abbrev',10)->nullable();
  $t->boolean('status')->default(true);
  $t->foreignId('id_department')->constrained('departments');
  $t->timestamps();
  $t->softDeletes();
});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactos');
    }
};
