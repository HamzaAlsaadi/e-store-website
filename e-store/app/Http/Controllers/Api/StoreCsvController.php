<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use League\Csv\Reader;
use Illuminate\Http\Request;

class StoreCsvController extends Controller
{

    public function uploadCSV(Request $request)
    {
        print('hiii');
        // Validate incoming request
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt', // Validate CSV file
        ]);

        if ($request->hasFile('csv_file')) {
            $file = $request->file('csv_file');
            $csv = Reader::createFromPath($file->getPathname(), 'r');

            // Read CSV headers
            $csv->setHeaderOffset(0);
            $headers = $csv->getHeader(); // Array of column headers

            // Iterate through CSV rows and save to database
            foreach ($csv as $row) {
                $data = []; // Array to hold row data
                foreach ($headers as $header) {
                    // Map CSV headers to database columns
                    switch ($header) {
                        case 'mobile_name':
                            $data['mobile_name'] = $row[$header];
                            break;
                        case 'Cpu_spsecfication':
                            $data['Cpu_spsecfication'] = $row[$header];
                            break;
                        case 'Gpu_spsecfication':
                            $data['Gpu_spsecfication'] = $row[$header];
                            break;
                        case 'battery_spsecfication':
                            $data['battery_spsecfication'] = $row[$header];
                            break;
                        case 'Front_camera_spsecfication':
                            $data['Front_camera_spsecfication'] = $row[$header];
                            break;
                        case 'Back_camera_spsecfication':
                            $data['Back_camera_spsecfication'] = $row[$header];
                            break;
                        case 'Screen_Size':
                            $data['Screen_Size'] = $row[$header];
                            break;
                        case 'Type_of_charge':
                            $data['Type_of_charge'] = $row[$header];
                            break;
                        case 'Price':
                            $data['Price'] = $row[$header];
                            break;
                        case 'Company_id':
                            $data['Company_id'] = $row[$header];
                            break;
                        case 'category_id':
                            $data['category_id'] = $row[$header];
                            break;
                        default:
                            // Ignore columns not mapped
                            break;
                    }
                }

                // Create a new Company instance and save to the database
                Product::create($data);
            }

            return response()->json(['message' => 'CSV data imported successfully'], 200);
        }

        return response()->json(['error' => 'No CSV file provided'], 400);
    }
}
