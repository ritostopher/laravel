<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'CREATE TABLE `article` (
          `id` int(11) UNSIGNED NOT NULL,
          `title` varchar(200) NOT NULL,
          `content` text
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8';
        DB::statement($sql);

        $sql = 'ALTER TABLE `article` ADD PRIMARY KEY (`id`)';
        DB::statement($sql);

        $sql = 'ALTER TABLE `article` MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT';
        DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
