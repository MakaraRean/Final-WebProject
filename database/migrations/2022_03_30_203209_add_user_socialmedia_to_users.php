<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserSocialmediaToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('website',50)->nullable(true);
            $table->string('facebook',50)->nullable(true);
            $table->string('github',50)->nullable(true);
            $table->string('twitter',50)->nullable(true);
            $table->string('instagram',50)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropIfExists('website','facebook','github','twitter','instagram');
        });
    }
}
