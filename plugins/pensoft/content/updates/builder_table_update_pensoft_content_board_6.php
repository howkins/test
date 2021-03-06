<?php namespace Pensoft\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftContentBoard6 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_content_board', function($table)
        {
            $table->text('short_description')->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_content_board', function($table)
        {
            $table->text('short_description')->nullable()->change();
        });
    }
}
