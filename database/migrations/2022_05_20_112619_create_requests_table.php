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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->text('team');
            $table->text('dance');
            $table->text('duration');
            $table->text('descr');
            $table->text('orig_dance');
            $table->text('link_orig_dance');
            $table->text('audio');
            $table->text('wishes');
            $table->integer('status');
            $table->timestamps();
            $table->softDeletes();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
};
