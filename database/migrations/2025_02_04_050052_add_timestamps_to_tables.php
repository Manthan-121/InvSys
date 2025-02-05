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
        $tables = [
            'categories',
            'customers',
            'inventory_log',
            'products',
            'purchases',
            'purchase_items',
            'sales',
            'sale_items',
            'suppliers',
            'users'
        ];

        foreach ($tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                if (!Schema::hasColumn($table->getTable(), 'created_at')) {
                    $table->timestamp('created_at')->nullable();
                }
                if (!Schema::hasColumn($table->getTable(), 'updated_at')) {
                    $table->timestamp('updated_at')->nullable();
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $tables = [
            'categories',
            'customers',
            'inventory_log',
            'products',
            'purchases',
            'purchase_items',
            'sales',
            'sale_items',
            'suppliers',
            'users'
        ];

        foreach ($tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                if (Schema::hasColumn($table->getTable(), 'created_at')) {
                    $table->dropColumn('created_at');
                }
                if (Schema::hasColumn($table->getTable(), 'updated_at')) {
                    $table->dropColumn('updated_at');
                }
            });
        }
    }
};
