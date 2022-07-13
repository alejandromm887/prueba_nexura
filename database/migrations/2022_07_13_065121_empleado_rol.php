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
        
        Schema::create('empleado_rol', function (Blueprint $table) {
            $table->foreignId('empleado_id',11)->nullable(false)->comment('identificador del empleado');
            $table->foreign('empleado_id')->references('id')->on('empleados');
            // $table->foreignId('empleado_id')->constrained('empleados')->onDelete('cascade');
            $table->foreignId('rol_id',255)->nullable(false)->comment('identificador del rol');
            $table->foreign('rol_id')->references('id')->on('roles');
            // $table->foreignId('rol_id')->constrained('roles')->onDelete('cascade');
        });
        //insert
        // DB::table('empleado_rol')
        //     ->insert([
        //         'empleado_id' => 3,
        //         'rol_id' => 4,
        //     ],[
        //         'empleado_id' => 3,
        //         'rol_id' => 7,
        //     ],
        //     [
        //         'empleado_id' => 3,
        //         'rol_id' => 2,
        //     ],
        //     [
        //         'empleado_id' => 4,
        //         'rol_id' => 1,
        //     ],
        //     [
        //         'empleado_id' => 4,
        //         'rol_id' => 2,
        //     ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado_rol');
    }
};
