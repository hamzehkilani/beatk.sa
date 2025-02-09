<?php

namespace App\Http\Controllers\Sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function editSections(Request $request)
    {

        try {
            $modelClass = "\\App\\Models\\" . $request->relashion;

            if (!class_exists($modelClass)) {
                return response()->json(['success' => false, 'message' => 'Invalid table name'], 400);
            }

            if ($request->hasFile('file')) {
                $file = $request->file('file');

                $fileName = $file->getClientOriginalName(); // Get the original file name
                $filePath = public_path('sections'); // Define the public path for storing files
                if (!file_exists($filePath)) {
                    mkdir($filePath, 0755, true); // Create the directory if it doesn't exist
                }

                $file->move($filePath, $fileName);
                $fileUrl = asset('sections/' . $fileName);
                $updated = $modelClass::where('id', $request->id)->update([
                    'path'=> $fileUrl,
                ]);
            }
            else{

                $updated = $modelClass::where('id', $request->id)->update([
                    $request->inputChange => $request->value,
                ]);
            }





            // Update the record


            if ($updated) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false, 'message' => 'Update failed'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

}
