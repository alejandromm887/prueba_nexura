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
        Schema::create('areas', function (Blueprint $table) {
            $table->id('id',11)->nullable(false)->comment('identificador del area');
            $table->string('nombre',255)->nullable(false)->comment('Nombre del area de la empresa');
        });
        // Insert
        // DB::table('areas')
        //     ->insert([
        //         'id' => 1,
        //         'nombre' => 'Administrativa y Financiera',
        //     ],[
        //         'id' => 2,
        //         'nombre' => 'Ingeniería',
        //     ],
        //     [
        //         'id' => 5,
        //         'nombre' => 'Desarrollo de Negocio',
        //     ],
        //     [
        //         'id' => 6,
        //         'nombre' => 'Proyectos',
        //     ],
        //     [
        //         'id' => 7,
        //         'nombre' => 'Servicios',
        //     ],
        //     [
        //         'id' => 8,
        //         'nombre' => 'Calidad',
        // ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas');
    }
};
