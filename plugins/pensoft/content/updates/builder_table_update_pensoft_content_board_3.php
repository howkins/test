<?php namespace Pensoft\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftContentBoard3 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_content_board', function($table)
        {
            $table->string('sort_order')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_content_board', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
