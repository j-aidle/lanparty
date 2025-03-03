<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyIndexesOnNumbers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('numbers', function (Blueprint $table) {
            // Eliminar el índice único si existe
            if (Schema::hasColumn('numbers', 'value')) {
                $table->dropUnique(['value']);
            }
            // Crear un nuevo índice único
            $table->unique(['value', 'session'], 'numbers_index_value_session');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('numbers', function (Blueprint $table) {
            // Eliminar el índice único si existe
            if (Schema::hasColumn('numbers', 'value') && Schema::hasColumn('numbers', 'session')) {
                $table->dropUnique(['value', 'session']);
            }
            // Restaurar el índice único original
            $table->unique('value');
        });
    }
}
