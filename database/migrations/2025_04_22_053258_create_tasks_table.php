<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // Unique identifier for the task
            $table->string('title'); // Task title
            $table->text('description'); // Task description
            $table->boolean('is_completed')->default(false); // Status of the task
            $table->timestamps(); // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};