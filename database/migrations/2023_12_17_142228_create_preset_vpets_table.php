<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preset_vpets', function (Blueprint $table) {
            $table->id();
            $table->string("type")-> nullable();
            $table->string("breed")-> nullable();
            $table->string("image")-> nullable();
            $table->timestamps();
        });

//         DB::table('users')->insert([
//         ['type'=>'', 'breed'=>'',
//         'image'=> G:\AYAN--UNI\Semester 10\Assignment\CSE470\-PAW-PARADISE-A-PET-CARE-ADOPTION-COMMUNITY-main\public\vpetpic],
//         ['type'=>'', 'breed'=>'',
//         'image'=> G:\AYAN--UNI\Semester 10\Assignment\CSE470\-PAW-PARADISE-A-PET-CARE-ADOPTION-COMMUNITY-main\public\vpetpic],
//         ['type'=>'', 'breed'=>'',
//         'image'=> G:\AYAN--UNI\Semester 10\Assignment\CSE470\-PAW-PARADISE-A-PET-CARE-ADOPTION-COMMUNITY-main\public\vpetpic],
//         ['type'=>'', 'breed'=>'',
//         'image'=> G:\AYAN--UNI\Semester 10\Assignment\CSE470\-PAW-PARADISE-A-PET-CARE-ADOPTION-COMMUNITY-main\public\vpetpic],
//         ['type'=>'', 'breed'=>'',
//         'image'=> G:\AYAN--UNI\Semester 10\Assignment\CSE470\-PAW-PARADISE-A-PET-CARE-ADOPTION-COMMUNITY-main\public\vpetpic],
//         ['type'=>'', 'breed'=>'',
//         'image'=> G:\AYAN--UNI\Semester 10\Assignment\CSE470\-PAW-PARADISE-A-PET-CARE-ADOPTION-COMMUNITY-main\public\vpetpic],
//         ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preset__vpets');
    }
};
