<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionamentoArtigoUsuario extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artigos', function($table)
        {
            $table->integer('usuario_id')->unsigned();
        });

        // Associando algum usuário para criar a chave estrangeira
        DB::table('artigos')->update(array('usuario_id' => 1));

        Schema::table('artigos', function($table)
        {
            $table->foreign('usuario_id')->
                references('id')->
                on('usuarios')->
                onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artigos', function($table)
        {
            $table->dropForeign('artigos_usuario_id_foreign');
            $table->dropColumn('usuario_id');
        });
    }

}
