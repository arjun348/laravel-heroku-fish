<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('fishes', function (Blueprint $table) {
            $table->string('description')->nullable()->change();
            $table->string('image2')->nullable()->change();
            $table->string('enabled')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fishes', function (Blueprint $table) {
            $table->string('description')->nullable(false)->change();
            $table->string('image2')->nullable(false)->change();
            $table->string('enabled')->nullable(false)->change();
        });
    }
};
