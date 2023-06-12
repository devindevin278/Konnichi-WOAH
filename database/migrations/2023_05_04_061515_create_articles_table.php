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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignid('author_id'); //foreign key untuk table author
            $table->string('title');
            $table->string('jpntitle');
            $table->date('articlepublish');
            $table->string('slug')->unique(); //slug akan jadi url jadi hrs unik
            // $table->string('jpnslug')->unique();
            $table->string('image')->nullable();
            $table->text('body');
            $table->text('jpnbody');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('articles');
    }
};
