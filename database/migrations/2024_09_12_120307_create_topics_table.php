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
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('Title')->unique();
            $table->string('Content');
            $table->integer('NumberOfViews')->default(0);
            $table->boolean('Trending')->default(0);
            $table->boolean('Published')->default(0);
            $table->foreignId('Category_id');
            //->constrained('categories')->onDelete('cascade');
            $table->string('image');
            $table->timestamps();
        });

        Schema::table('topics', function (Blueprint $table) {


                // Add the foreign key with cascade on delete
                $table->foreign('Category_id')
                      ->references('id')
                      ->on('categories')
                      ->onDelete('cascade');
            });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};
