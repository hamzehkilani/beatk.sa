<?php

use App\Modules\Product\Models\Product;
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
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product::class)->constrained()->onDelete('cascade');
            $table->decimal('minimum_bid_value', 10, 2);
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->decimal('end_when_price', 10, 2)->nullable();
            $table->enum('status', ['pending', 'active', 'completed', 'cancelled']);
            $table->foreignId('created_by_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('success_user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auctions');
    }
};
