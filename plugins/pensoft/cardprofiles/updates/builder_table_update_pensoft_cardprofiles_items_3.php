<?php namespace pensoft\Cardprofiles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftCardprofilesItems3 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_cardprofiles_items', function($table)
        {
            $table->string('department')->nullable();
            $table->renameColumn('country', 'country_id');
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_cardprofiles_items', function($table)
        {
            $table->dropColumn('department');
            $table->renameColumn('country_id', 'country');
        });
    }
}
