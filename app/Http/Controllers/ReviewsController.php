<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Tree;
use App\Models\Counter;

class ReviewsController extends Controller{
    
    
    
     public function index()
    {
        return view('welcome');
    }
    
    
    
    
    public function store(Request $request, $id)
    {
        $request->textArea = strip_tags($request->textArea);
        $this->validate($request, [
        'message' => 'required|min:3|max:255',
        ]);
        
        if(Tree::find($id) == null){
            return redirect()->route('trees');
        }
        else if(\Auth::user() == null){
            return redirect()->route('trees');
        }
        
        $review = new Review();
        $review->user_id = \Auth::user()->id;
        $review->tree_id = $id;
        $review->message = $request->message;
        $review->timestamps = now();
        
        if($review->save()){
            return back();
        }
        return redirect()->route('trees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tree = Tree::find($id);
        $reviews = Review::with('tree')->orderBy('created_at', 'asc')->where('tree_id','=',$id)->get();
        return view('reviews',['tree'=>$tree,'reviews'=>$reviews]);
    }

    public function count($id)
    {
        if(\Auth::user() == null){
            return back();
        }
        
        $counters = Counter::where('user_id','=', \Auth::user()->id)
                ->where('review_id','=',$id)->first();
        
        if($counters != null){
            $counters->delete();
            return back();
        }
                
        $counter = New Counter();
        $counter->user_id = \Auth::user()->id;
        $counter->review_id = $id;
        
        if($counter->save()){
            return back();
        }
        return redirect()->route('trees');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */   
    
    public function update(Request $request, $id)
    {
        //
    }
    
    
    public function destroy($id)
    {
        $review = Review::find($id);
        
        if(\Auth::user()->id != $review->user_id){
            return back();
        }
        
        if($review->delete()){
            return back();
            
        }
        return redirect()->route('trees');
    }
}
