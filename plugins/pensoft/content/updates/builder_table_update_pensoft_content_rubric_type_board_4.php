<?php namespace Pensoft\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftContentRubricTypeBoard4 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_content_rubric_type_board', function($table)
        {
            $table->integer('rubric_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_content_rubric_type_board', function($table)
        {
            $table->dropColumn('rubric_id');
        });
    }
}
