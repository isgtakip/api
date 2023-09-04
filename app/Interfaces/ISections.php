<?php

namespace App\Interfaces;

interface ISections
{
    public function getAllSections();
    public function updateSectionsOrder($sections);
    public function updateSection($sectionHtml,$id);
}