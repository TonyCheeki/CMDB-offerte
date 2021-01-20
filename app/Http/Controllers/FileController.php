<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\File;
class FileController extends Controller
{

    public function store(Request $request, $id)
    {
        
        $this->validate($request, [
                'thumbnail' => 'required',
                'product_id' => 'required',
                'thumbnail.*' => 'image'
        ]);
        
        $files = '';
        if($request->hasfile('thumbnail'))
        {
            foreach($request->file('thumbnail') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('files'), $name);  
                $files.=$name.' ,';
                // $files[] = $name;  
            }
        }
        $file= new File();
        $file->product_id=$id;
        $file->filenames = $files;
        $file->save();
        return back()->with('success', 'Data Your files has been successfully added');
    }
}