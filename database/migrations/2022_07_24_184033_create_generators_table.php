<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crud_generators', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('pagination')->default('default');
            $table->string('type')->default('web');
            $table->string('pattern')->default('mvc');
            $table->json('options')->nullable();
            $table->json('fields')->nullable();
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
        Schema::dropIfExists('crud_generators');
    }
};
