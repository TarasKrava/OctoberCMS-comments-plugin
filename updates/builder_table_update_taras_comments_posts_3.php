<?php namespace Taras\Comments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTarasCommentsPosts3 extends Migration
{
    public function up()
    {
        Schema::table('taras_comments_posts', function($table)
        {
            $table->dropColumn('post_id');
        });
    }
    
    public function down()
    {
        Schema::table('taras_comments_posts', function($table)
        {
            $table->integer('post_id')->nullable();
        });
    }
}
