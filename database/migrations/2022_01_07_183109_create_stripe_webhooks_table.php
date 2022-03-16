<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStripeWebhooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stripe_webhooks', function (Blueprint $table) {
            $table->id();
            $table->string('stripe_id')->index();
            $table->string('stripe_customer_id')->index();
            $table->integer('amount');
            $table->integer('amount_captured');
            $table->integer('amount_refunded');
            $table->string('balance_transaction')->nullable();
            $table->boolean('captured');
            $table->bigInteger('epoch');
            $table->boolean('disputed');
            $table->text('disputed_notes')->nullable();
            $table->boolean('paid');
            $table->boolean('refunded');
            $table->string('receipt_url');
            $table->json('data');
            $table->boolean('webhook_called')->default(false);
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
        Schema::dropIfExists('stripe_webhooks');
    }
}
