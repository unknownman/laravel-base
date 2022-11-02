<?php

use App\Models\Category;
use App\Models\Department;
use App\Models\Site;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_category', function (Blueprint $table) {
            // department x on site y has category z
            $table->id();
            $table->foreignIdFor(Site::class);
            $table->foreignIdFor(Department::class);
            $table->foreignIdFor(Category::class);

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
        Schema::dropIfExists('department_category');
    }
};
