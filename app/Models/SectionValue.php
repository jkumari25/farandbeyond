<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionValue extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * | Update the section values 
        | Serial No : 01
     */
    public function updateValues($updateValues, $pageName)
    {
        $mSectionValue = new SectionValue();
        $dataExist = SectionValue::where("page_section", $updateValues["sectionName"])
            ->where("page_name", $pageName)
            ->where("section_type", $updateValues['type'])
            ->where("status", true)
            ->first();

        if (isset($dataExist)) {
            $dataExist->update([
                "value" => $updateValues['value']
            ]);
            return true;
        }

        $mSectionValue->section_type    = $updateValues['type'];
        $mSectionValue->page_section    = $updateValues['sectionName'];
        $mSectionValue->value           = $updateValues['value'];
        $mSectionValue->page_name       = $pageName;
        $mSectionValue->created_at      = Carbon::now();
        $mSectionValue->save();
        return true;
    }

    /**
     * | Save the section values 
        | serial No : 02
     */
    public function saveValues($saveData)
    {
        SectionValue::insert($saveData);
    }

    /**
     * | Get data according to page name
        | Serial No : 03
     */
    public function getDataForPage($pageName)
    {
        return SectionValue::where("page_name", $pageName)
            ->where("status", true);
    }
}
