<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            
            $table->string("title");
            $table->longText("keywords")->nullable();
            $table->longText("description")->nullable();
            $table->longText("logo")->nullable();
            $table->longText("faveicon")->nullable();
            $table->longText("email")->nullable();
            $table->longText("facebook")->nullable();
            $table->longText("twitter")->nullable();
            $table->longText("instagram")->nullable();
            $table->longText("youtube")->nullable();
            $table->longText("whatsapp")->nullable();
            $table->longText("tiktok")->nullable();
            $table->foreignId('city_id')->nullable()->references('id')->on('cities');
            $table->longText("address")->nullable();
            $table->string("zip_code")->nullable();
            
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
        Schema::dropIfExists('settings');
    }
}
