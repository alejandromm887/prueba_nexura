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
        Schema::create('roles', function (Blueprint $table) {
            $table->id('id',11)->nullable(false)->comment('Identificador del rol');
            $table->string('nombre',255)->nullable(false)->comment('Nombre del rol');
        });
        //Insert
        // DB::table('roles')
        //     ->insert([
        //         'id' => 1,
        //         'nombre' => 'Desarrollador',
        //     ],
        //     [
        //         'id' => 2,
        //         'nombre' => 'Analista',
        //     ],
        //     [
        //         'id' => 3,
        //         'nombre' => 'Tester',
        //     ],
        //     [
        //         'id' => 4,
        //         'nombre' => 'Diseñador',
        //     ],
        //     [
        //         'id' => 5,
        //         'nombre' => 'Profesional PMO',
        //     ],
        //     [
        //         'id' => 6,
        //         'nombre' => 'Profesional de servicios',
        //     ],
        //     [
        //         'id' => 7,
        //         'nombre' => 'Auxiliar administrativo',
        //     ],
        //     [
        //         'id' => 8,
        //         'nombre' => 'Codirector',
        //     ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
