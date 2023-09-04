<?php

namespace App\Repositories;

use App\Interfaces\ISections;
use App\Models\Sections;

class SectionsRepository implements ISections
{
    public function getAllSections() 
    {
        
        //exist control
        
        $sections = Sections::orderBy('Order','asc')->get();
        return response()->json($sections,200);
    }

    public function updateSectionsOrder($sections) 
    {

        //null control 
        //exist control
        $arr = json_decode($sections, true);
        //print_r($arr);
          $arr2=[];
          $i=0;
          foreach ($arr as $b) {
              //assign child-array to newly create array variable
              $arr2[] =  ['id'=>$b['id'],'Order'=>$i];  
              $i++;
          }
          $sectionInstance = new Sections;
          $index = 'id';
  
         batch()->update($sectionInstance, $arr2, $index);
  
         return $arr2;
    }

    public function updateSection($sectionHtml,$id){

        //null control 
        //exist control

        $section = Sections::find($id);
        $section->Html = $sectionHtml;
        $section->update();

        return response()->json($section,200);
    }

}