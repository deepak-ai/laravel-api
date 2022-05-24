<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("name",20);
            $table->string("email",50)->unique();
            $table->text("phone_no");
            $table->text("address");
            $table->enum("gender",["male", "female", "others"]);
            $table->integer("age")->unsigned();
            $table->foreignId("department_id")->constrained('departments')->onDelete('cascade')->onUpdate('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      
        Schema::dropIfExists('employees');
    }
}
