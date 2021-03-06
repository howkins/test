<?php namespace Pensoft\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftContentPartners4 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_content_partners', function($table)
        {
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_content_partners', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
