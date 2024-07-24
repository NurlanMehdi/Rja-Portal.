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
        Schema::create('rjas_mails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rja_id');
            $table->string('mail')->nullable();
            $table->timestamps();
            
            $table->foreign('rja_id')->references('id')->on('rjas')->onDelete('cascade');
        });

        // Transfer existing emails to the new table
        DB::table('rjas')->get()->each(function ($rja) {
            DB::table('rjas_mails')->insert([
                'rja_id' => $rja->id,
                'mail' => $rja->mail,
                'created_at' => $rja->created_at,
                'updated_at' => $rja->updated_at,
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rjas_mails');
    }
};
