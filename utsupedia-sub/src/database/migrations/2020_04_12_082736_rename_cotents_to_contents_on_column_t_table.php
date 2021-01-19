<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameCotentsToContentsOnColumnTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('column_t', function (Blueprint $table) {
            $table->renameColumn('cotents', 'contents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('column_t', function (Blueprint $table) {
            $table->renameColumn('cotents', 'contents');
        });
    }
}
