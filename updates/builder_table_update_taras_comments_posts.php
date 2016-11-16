<?php namespace Taras\Comments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTarasCommentsPosts extends Migration
{
    public function up()
    {
        Schema::table('taras_comments_posts', function($table)
        {
            $table->string('url', 70)->index();
            $table->dropColumn('type');
        });
    }
    
    public function down()
    {
        Schema::table('taras_comments_posts', function($table)
        {
            $table->dropColumn('url');
            $table->string('type', 20)->nullable();
        });
    }
}
