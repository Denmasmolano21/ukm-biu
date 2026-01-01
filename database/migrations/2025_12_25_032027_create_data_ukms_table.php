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
        Schema::create('data_ukms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('category');
            $table->text('short_description');
            $table->text('full_description');
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->json('activities');
            $table->json('benefits');
            $table->string('instagram');
            $table->text('regis_url');
            $table->string('logo_url');
            $table->text('contact_info');
            $table->boolean('is_open_recruitment')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_ukms');
    }
};
