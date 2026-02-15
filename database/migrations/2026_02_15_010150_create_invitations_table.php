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
        Schema::create('invitations', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('slug')->unique();
            $table->string('bride_name');
            $table->string('groom_name');
            $table->date('event_date');
            $table->string('akad_time');
            $table->string('resepsi_time');
            $table->string('location_name');
            $table->text('address');
            $table->string('google_maps_link')->nullable();
            $table->json('love_story')->nullable(); // JSON array of {title, description}
            $table->string('bg_music_path')->nullable();
            $table->string('theme_color')->default('#C5A059');
            $table->text('dress_code')->nullable();
            $table->text('special_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
