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
        Schema::create('media', function (Blueprint $table) {
            $table->bigIncrements('id_media');
            $table->unsignedBigInteger('id_company_profile');
        
            $table->string('fileName');
            $table->string('filePath');
            $table->string('type');
        
            $table->timestamps();
        
            $table->foreign('id_company_profile')
                  ->references('id_company_profile')
                  ->on('company_profiles')
                  ->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
