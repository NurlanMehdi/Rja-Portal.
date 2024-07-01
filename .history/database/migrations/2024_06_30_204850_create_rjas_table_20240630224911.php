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
        Schema::create('rjas', function (Blueprint $table) {
            $table->id();
            $table->string('company_profile');
            $table->string('maintenance_email');
            $table->string('b2b_reference');
            $table->text('diagnosis');
            $table->json('labour_items');
            $table->json('parts_items');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rjas');
    }
};
