<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\page;

class pagecontroller extends Controller
{

  //show
public function show(){

$pages = DB:: table ('pages')->get();

return view('pages.show', compact('pages'));
}
//store
public function store(Request $request)
{

    $page = new page;

    $page->title = $request->title;

    $page->save();

    return back();

}

//delete
public function delete(page $page){
    if  (count($page->notes))
    {
      return view('pages.deleteall',compact('page'));
    }
    else{
    $page->delete();

    return back();
    }
}

//deleteall
public function deleteall(page $page)
{
  $page->delete();

  $page->notes()->delete();

  return Redirect('pages');

}
//onepage
public function onepage(page $page)
{

    return view('pages.onepage', compact('page'));
}


}
