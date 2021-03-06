<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('contact_id');
            $table->string('name', 50);
            $table->integer('zipcode');
            $table->timestamps();            
        });

        $contactos = array('Michael'=>'85273','James'=>'85750','Brian'=>'85751','Nicholas'=>'85383','Jennifer'=>'85716','Christopher'=>'85014','Michael'=>'85751','Patricia'=>'95032','Beth'=>'94556','Cathy'=>'92260','Harold'=>'92120','Robin'=>'94062','James'=>'90503','Douglas'=>'32159','Donald'=>'32404','Ilene'=>'33140','William'=>'33417','Lynn'=>'32789','Leonie'=>'33417','Katherine'=>'32034','Melissa'=>'30516','Kimberly'=>'30345','Richard'=>'30606','Richard'=>'30312','Ayn'=>'31901','Bruce'=>'31410','Fred'=>'89451','Robert'=>'89110','David'=>'89042','Maureen'=>'89074','Mary Sue'=>'89705','Janet'=>'89144','John'=>'89145','Rand'=>'12580','Kathy'=>'10604','Susan'=>'13601','Robin'=>'10021','Peter'=>'12550','Diana'=>'10603','Richard'=>'12018');
        foreach($contactos as $key=>$value){
            DB::table("contacts")
            ->insert([
                "name" => $key,
                "zipcode" => $value                
            ]);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
