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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->foreignId('category_id');
            $table->float('price');
            $table->float('discount')->nullable();
            $table->integer('quantity')->default(0);
            $table->json('meta')->nullable();
            $table->text('description')->nullable();
            $table->json('images');
            $table->enum('published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
