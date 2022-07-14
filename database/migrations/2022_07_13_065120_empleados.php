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
       
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('id',11)->nullable(false)->comment('Identificador del empleado');
            $table->string('nombre',255)->nullable(false)->comment('Nombre completo del empleado. Campo tipo Text. Solo debe permitir letras con o sin tilde y espacios. No se admiten caracteres especiales ni numeros. Obligatorio');
            $table->string('email',255)->nullable(false)->comment('Correo electronico del empleado. Campo de tipo de Text|Enmail. Solo permite escritura de correo. Obligatorio.');
            $table->char('sexo',1)->nullable(false)->comment('Campo de tipo Radio Button. M para Masculino. F para Femenino. F para Femenino. Obligatorio');
            $table->foreignId('area_id',11)->nullable(false)->comment('Area de la empresa a la que pertenece el empleado. Campo tipo Select. Obligatorio.');
            // $table->foreignId('area_id')->constrained('areas')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->char('boletin',11)->nullable(false)->default(0)->comment('1 para Recibir boletin. 0 para No recibir boletin. Campo de tipo Check box. Opcional.');
            $table->text('descripcion',255)->nullable(false)->comment('Se describe la experiencia del empleado. Campo de tipo textarea. Obligatorio.');
            // foranea
            
        });
        //Insert
        // DB::table('empleados')
        //     ->insert([
        //         'id' => 3,
        //         'nombre' => 'Pedro Pérez',
        //         'email' => 'pperez@example.co',
        //         'sexo' => 'M',
        //         'area_id' => 5,
        //         'boletin' => 1,
        //         'descripcion' => 'Hola mundo',
        //     ],[
        //         'id' => 4,
        //         'nombre' => 'Amalia Bayona',
        //         'email' => 'abayona@example.co',
        //         'sexo' => 'F',
        //         'area_id' => 8,
        //         'boletin' => 0,
        //         'descripcion' => 'Para contactar a Amalia Bayona, puede escribir al correo electrónico abayona@example.co',
        //     ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
