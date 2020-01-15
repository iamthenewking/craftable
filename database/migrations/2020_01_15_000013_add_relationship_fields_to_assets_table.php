<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAssetsTable extends Migration
{
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->unsignedInteger('category_id')->nullable();

            $table->foreign('category_id', 'category_fk_871940')->references('id')->on('asset_categories');

            $table->unsignedInteger('status_id')->nullable();

            $table->foreign('status_id', 'status_fk_871944')->references('id')->on('asset_statuses');

            $table->unsignedInteger('location_id')->nullable();

            $table->foreign('location_id', 'location_fk_871945')->references('id')->on('asset_locations');

            $table->unsignedInteger('assigned_to_id')->nullable();

            $table->foreign('assigned_to_id', 'assigned_to_fk_871947')->references('id')->on('users');
        });
    }
}
