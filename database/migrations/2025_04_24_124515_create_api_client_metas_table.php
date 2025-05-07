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
        Schema::create('api_client_metas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('oauth_client_id')->id;
            $table->string('organization');
            $table->string('contact_email')->unique();
            $table->text('description')->nullable();
            $table->enum('status', ['pending', 'approved', 'revoked'])->default('pending');
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();
            $table->foreign('oauth_client_id')->references('id')->on('oauth_clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_client_metas');
    }
};
