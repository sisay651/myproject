<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

use Excel;
class Datacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        //
        return view('Excel');
    }
        public function downloadData($type)

    {

        $data = Data::get()->toArray();


        return Excel::create('excel_data', function($excel) use ($data) {

            $excel->sheet('mySheet', function($sheet) use ($data)

            {

                $sheet->fromArray($data);

            });

        })->download($type);

    }

    public function importData(Request $request)

    {

        $request->validate([

            'import_file' => 'required'

        ]);


        $path = $request->file('import_file')->getRealPath();

        $data = Excel::load($path)->get();


        if($data->count()){

            foreach ($data as $key => $value) {

                $arr[] = ['name' => $value->name, 'department_id' => $value->description,'student_identification'=>$value->student_identification,'sex'=>$value->sex,'grade'=>$value->grade,'year'=>$value->year];

            }


            if(!empty($arr)){

                Data::insert($arr);

            }

        }


        return back()->with('success', 'Insert Record successfully.');

    }

}


    