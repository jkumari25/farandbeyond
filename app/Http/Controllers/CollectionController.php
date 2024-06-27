<?php

namespace App\Http\Controllers;

use App\Models\seoTable;
use Illuminate\Http\Request;
use Exception;


class CollectionController extends Controller
{
    //


    public function viewDestination()
    {
        return view('admin.pages.add-destination');
    }


    public function viewSeo()
    {
        return view('admin.pages.seo');
    }


    public function saveSeo(Request $req)
    {
        $req->validate([
            'section'   => 'required',
            'section1Content'    => 'nullable|',
            'section2Content'    => 'nullable',
            'section3Content'    => 'nullable'

        ]);

        try {
            $mseoTable = new seoTable();
            if (isset($req->section1Content)) {
                $first["tittle"] = $req->section1Content;
            }
            if (isset($req->section2Content)) {
                $first["tag"] = $req->section2Content;
            }
            if (isset($req->section3Content)) {
                $first["description"] = $req->section3Content;
            }


            if (!empty($first) || isset($first)) {
                $mseoTable->saveSeo($first,$req);
            }
            $responseMsg = $req->section . " SEO Updated";
            return back()->with('success', $responseMsg);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
