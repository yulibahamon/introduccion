<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros', function (Blueprint $table) {
            $table->id();
            $table->string('funcionalidad1');
            $table->string('fiabilidad2');
            $table->string('usabilidad3');
            $table->string('eficiencia4');
            $table->string('cap_mante5');
            $table->string('portabilidad6');
            $table->string('calidaduso7');
            $table->string('total_para');
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
        Schema::dropIfExists('parametros');
    }
}
