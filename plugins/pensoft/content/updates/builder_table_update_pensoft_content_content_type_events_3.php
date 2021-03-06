<?php namespace Pensoft\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftContentContentTypeEvents3 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_content_content_type_events', function($table)
        {
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_content_content_type_events', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
