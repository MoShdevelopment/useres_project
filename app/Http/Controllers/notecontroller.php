<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\page;

use App\note;
class notecontroller extends Controller
{
    public function store(Request $request,page $page)
    {
        $this->validate($request , 
        
       [
           'text' => 'required|min:5'
       ]  );
      
    $note = new note;

    $note->text=$request->text;

    $page->notes()->save($note);

    return back();

    }
    public function edit(note $note)
    {
        return view('notes.edit',compact('note'));

    }
    public function update(Request $request,note $note)
    {
        
        $note->update($request->all());

        return Redirect('pages/'. $note->page_id);
    }
    public function delete(note $note){
        $note->delete();
    
        return back();
    
    }
}
