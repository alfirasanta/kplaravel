<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('no_pel')->unsigned();
            $table->string('detail');
            $table->unsignedBigInteger('pelanggans_id')->unsigned();
            $table->unsignedBigInteger('status_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('laporans', function (Blueprint $table) {
            $table->foreign('pelanggans_id')->references('id')->on('pelanggans');
            $table->foreign('status_id')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
