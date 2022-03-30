<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_medias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('website',50)->nullable(true);
            $table->string('website_link',50)->nullable(true);
            $table->string('facebook',50)->nullable(true);
            $table->string('facebook_link',50)->nullable(true);
            $table->string('github',50)->nullable(true);
            $table->string('github_link',50)->nullable(true);
            $table->string('twitter',50)->nullable(true);
            $table->string('twitter_link',50)->nullable(true);
            $table->string('instagram',50)->nullable(true);
            $table->string('instagram_link',50)->nullable(true);
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
        Schema::dropIfExists('social_medias');
    }
}
