<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwittsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twitts', function (Blueprint $table) {
            $table->increments('twitt_id');
            $table->string('createdAt');
            $table->text('text');
            $table->text('fullText');
            $table->string('displayTextRange');
            $table->string('safeDisplayTextRange');
            $table->string('source');
            $table->boolean('truncated');
            $table->string('replyCount')->nullable();
            $table->bigInteger('inReplyToStatusId')->nullable();
            $table->string('InReplyToStatusIdStr')->nullable();
            $table->bigInteger('inReplyToUserId')->nullable();
            $table->string('inReplyToUserIdStr')->nullable();
            $table->string('inReplyToScreenName')->nullable();
            $table->string('createdBy');
            $table->integer('retweetCount');
            $table->boolean('favorited');
            $table->integer('favoriteCount');
            $table->boolean('retweeted');
            $table->boolean('possiblySensitive');
            $table->string('tweetLocalCreationDate');
            $table->boolean('isRetweet');
            $table->integer('quoteCount')->nullable();
            $table->string('quotedStatusId')->nullable();
            $table->string('quotedStatusIdStr')->nullable();
            $table->boolean('isTweetPublished');
            $table->boolean('isTweetDestroyed');
            $table->string('url');
            $table->bigInteger('id');
            $table->string('idStr');
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
        Schema::dropIfExists('twitts');
    }
}
