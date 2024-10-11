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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained()->onDelete('cascade'); // Referencia al producto
            $table->foreignId('customer_id')->constrained()->onDelete('cascade'); // Referencia al cliente
            $table->integer('quantity'); // Cantidad vendida
            $table->decimal('total_amount', 10, 2); // Monto total de la venta
            $table->timestamp('sale_date')->default(now()); // Fecha de la venta
            $table->enum('status', ['pending', 'completed', 'canceled'])->default('completed'); // Estado de la venta
            $table->timestamps(); // Created_at y updated_at            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
