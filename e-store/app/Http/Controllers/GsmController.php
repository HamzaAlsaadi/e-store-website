<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Gsm;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Jobs\gsm_csv_file;
use Illuminate\Support\Facades\Bus;



class GsmController extends Controller
{
   public function storecsv(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'csv_file' => 'required|mimes:csv,txt',
         ]);
         if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $path = $request->file('csv_file')->getRealPath();
        $data = array_map('str_getcsv', file($path));
        $data = array_slice($data, 1);
        foreach ($data as $row) {
            Gsm::create([
                'name_phone' => $row[0],
                'image_phone' => $row[1],
                'url_phone' => $row[2],
                'networt_technology' => $row[3],
                'demenation' => $row[4],
                'weight' => $row[5],
                'build' => $row[6],
                'size' => $row[7],
                'display' => $row[8],
                'resoulation' => $row[9],
                'chiapest' => $row[10],
                'cpu' => $row[11],
                'gpu' => $row[12],
                'camera' => $row[13],
                'camera_f' => $row[14],
                'feature_camera' => $row[15],
                'video' => $row[16],
                'sensores' => $row[17],
                'battarey' => $row[18],
                'charghing' => $row[19],
                'usb' => $row[20],
                'model' => $row[21],
                'price' => $row[22],
                'colores' => $row[23],
                'company_id' => $row[24],
            ]);
            $gsm->save();
        }
        return redirect()->back()->with('success', 'Products imported successfully.');
    }

}

