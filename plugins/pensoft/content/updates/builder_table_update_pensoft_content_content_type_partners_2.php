<?php namespace Pensoft\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftContentContentTypePartners2 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_content_content_type_partners', function($table)
        {
            $table->string('logo', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_content_content_type_partners', function($table)
        {
            $table->string('logo', 255)->nullable(false)->change();
        });
    }
}
