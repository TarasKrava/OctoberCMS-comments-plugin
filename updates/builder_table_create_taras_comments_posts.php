<?php namespace Taras\Comments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTarasCommentsPosts extends Migration
{
    public function up()
    {
        Schema::create('taras_comments_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('parent_id')->nullable()->unsigned();
            $table->integer('user_id')->nullable();
            $table->integer('post_id')->nullable();
            $table->string('author', 50)->nullable();
            $table->text('content');
            $table->smallInteger('status');
            $table->string('type', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->foreign('parent_id')->references('id')->on('taras_comments_posts')->onUpdate('cascade')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('taras_comments_posts');
    }
}
