<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); 
            $table->string('category_name',100);
            $table->string('slug',100);
            $table->integer('parent')->default(0); //for sub menu by default 0 
            $table->text('description')->nullable(); //by default nullable
            $table->tinyInteger('status')->default(1);//by default 1
            $table->unsignedBigInteger('created_by'); //for relation with user table column id 
            $table->string('image',255);
            // $table->timestamps('created_at');
            // $table->timestamps('updated_at');
            $table->timestamps(); //this is for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}