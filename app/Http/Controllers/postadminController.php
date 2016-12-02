<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\catModel;
use App\postModel;
use App\websiteModel;
use App\socialModel;
use App\copyrightModel;
use App\pageModel;
use App\contactModel;
use App\User;
use Validator;

class postadminController extends Controller
{
 
  public function adminpage(){
    if (Auth::check()) {
       $pagelist=pageModel::all();

    $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();

    return view('admin_panel.index',[
      'pagelist'=>$pagelist,
      'inboxmessage'=>$inboxmessage
      ]);
   
}else{
  return redirect('/');
}
   
  }

	public function catlist(){
		$alldata=catModel::all();
    $pagelist=pageModel::all();

    $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();

		return view('admin_panel.catlist',[
      'alldata'=>$alldata,
      'pagelist'=>$pagelist,
      'inboxmessage'=>$inboxmessage
      ]);
	}

    public function cat_insertpage(){
      $pagelist=pageModel::all();
      $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();
    	 return view('admin_panel.addcat',[
        'pagelist'=>$pagelist,
        'inboxmessage'=>$inboxmessage
        ]);
    }

    public function catinsert(Request $request){

      $this->validate($request, [
            'category' => 'required'
      ]);

    	$insert=new catModel();
   		$insert->category=$request->category;
   		$insert->save();
   		return redirect('/addcat')->with('message','Data inserted successfully');
    }


    public function catedit($id){
      $catdata=catModel::find($id);
      $pagelist=pageModel::all();
      $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();

      return view('admin_panel.sub_page.catedit',[
        'catdata'=>$catdata,
        'pagelist'=>$pagelist,
        'inboxmessage'=>$inboxmessage
        ]);
    }

  public function catupdate(Request $request){
    $this->validate($request,[
          'category'=>'required'
      ]);

      $id=$request->id;
      $update=catModel::find($id);
      $update->category=$request->category;
      $update->save();
       return back()->withInput()->with('message','Category Updated successfully.');
    }


    public function catdel($id){
        $delete=catModel::find($id);
        $delete->delete();
        return redirect('/catlist');

    }

    public function postlist(){
    $alldata=postModel::join('tbl_category','tbl_category.id','=','tbl_post.cat')
           ->select('tbl_post.id','tbl_category.category','tbl_post.title','tbl_post.body','tbl_post.image','tbl_post.tag','tbl_post.author')
           ->orderBy('id', 'DESC')
            ->get();

   $pagelist=pageModel::all();

   $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();

   return view('admin_panel.postlist',[
    'alldata'=>$alldata,
    'pagelist'=>$pagelist,
    'inboxmessage'=>$inboxmessage
    ]);
  }


   public function post_inserpage(){
      $categoryall= catModel::all();
      $pagelist=pageModel::all();
      $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();

      return view('admin_panel.addpost',[
        'categoryall'=>$categoryall,
        'pagelist'=>$pagelist,
        'inboxmessage'=>$inboxmessage
        ]);

    }

    public function postinsert(Request $request){

      $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
            'tag' => 'required',
            'author' => 'required'
      ]);

      /*$validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
            'tag' => 'required',
            'author' => 'required'
        ]);

      $errors=[
          'title.required'=>'Ttitle pleace check',
          'body.required'=>'body chechk',
          'image.required'=>'Image chechk',
          'tag.required'=>'tage chechk',
          'author.required'=>'tage chechk'
      ];

        if ($validator->fails()) {
            return redirect('addpost')
                        ->withErrors($errors)
                        ->withInput();
        }*/



        $file_Extension=$request->image->getClientOriginalExtension();
        $file_name=time().".".$file_Extension;
        $file_path='image/';
        $request->image->move($file_path,$file_name);
        
        $insert=new postModel();
        $insert->cat=$request->cat;
        $insert->title=$request->title;
        $insert->body=$request->body;
        $insert->image="image/$file_name";
        $insert->tag=$request->tag;
        $insert->author=$request->author;
        $insert->time=time();
       $insert->save();
       return redirect('addpost')->with('message','Data inserted successfully');

    }

    public function postview($id){

      $viewalldata=postModel::find($id)->join('tbl_category','tbl_category.id','=','tbl_post.cat')
          ->where('tbl_post.id',$id)
          ->select('tbl_post.id','tbl_category.category','tbl_post.title','tbl_post.body','tbl_post.image','tbl_post.tag','tbl_post.author')
          ->get();
      $pagelist=pageModel::all();

      $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();

        return view('admin_panel.sub_page.postview',[
          'viewalldata'=>$viewalldata,
          'pagelist'=>$pagelist,
          'inboxmessage'=>$inboxmessage
          ]);
    }



    public function postviewreturn(Request $request){
      $alldata=postModel::find(1)
            ->join('tbl_category', 'tbl_category.id', '=', 'tbl_post.cat')
            ->select('tbl_post.*', 'tbl_post.id','tbl_category.category','tbl_post.title','tbl_post.body','tbl_post.image','tbl_post.tag ','tbl_post.author')
            ->get();
            
    return view('admin_panel.postlist',['alldata'=>$alldata]);
    }

    public function posteditpage($id){

        $categoryall= catModel::all();
        $data=postModel::find($id);
        $pagelist=pageModel::all();
            /*->join('tbl_category', 'tbl_category.id', '=', 'tbl_post.cat')
            ->where('tbl_post.id',$id)
            ->select('tbl_post.*', 'tbl_category.id','tbl_category.category','tbl_post.title','tbl_post.body','tbl_post.image','tbl_post.tag','tbl_post.author')
            ->get();*/
          $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();

           
            
      return view('admin_panel.sub_page.postedit',[
        'data'=>$data,
        'categoryall'=>$categoryall,
        'pagelist'=>$pagelist,
        'inboxmessage'=>$inboxmessage
        ]);
    }
    

    public function postedit(Request $request){
      $this->validate($request,[
               'title' => 'required',
            'body' => 'required',
            'image' => 'required',
            'tag' => 'required',
            'author' => 'required'
        ]);

       $id= $request->id;
        $file_Extension=$request->image->getClientOriginalExtension();
        $file_name=time().".".$file_Extension;
        $file_path='image/';
        $request->image->move($file_path,$file_name);
        
        $update= postModel::find($id);
        $update->cat=$request->cat;
        $update->title=$request->title;
        $update->body=$request->body;
        $update->image="image/$file_name";
        $update->tag=$request->tag;
        $update->author=$request->author;
        $update->save();

       return back()->withInput()->with('message','Post Update successfully');

    }


    public function postdelete($id){
      $delete=postModel::find($id);
       $filename=$delete->image;
      
      $delete->delete($filename);
      return redirect('/postlist');
    }




    public function titleslogan(){
      $pagelist=pageModel::all();
      $website=websiteModel::find(1);
      $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();

        return view('admin_panel.titleslogan',[
          'website'=>$website,
          'pagelist'=>$pagelist,
          'inboxmessage'=>$inboxmessage
          ]);
     // echo "sadek";
    }

    public function titlesloganUpdate(Request  $request){
        $update= websiteModel::find(1);
        $this->validate($request,[
            'title'=>'required',
            'slogan'=>'required',
          ]);
        $update->title=$request->title;
        $update->slogan=$request->slogan;
        $update->save();
        return redirect('/titleslogan')->with('message','Data Updated Successfully.');
    }

    public function social(){
      $sociallink=socialModel::find(1);
      $pagelist=pageModel::all();

      $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();

      return view('admin_panel.social',[
        'sociallink'=>$sociallink,
        'pagelist'=>$pagelist,
        'inboxmessage'=>$inboxmessage
        ]);
    }
    

    public function socialupdate(Request  $request){
      $this->validate($request,[
          'facebook'=>'required',
          'twitter'=>'required',
          'googleplus'=>'required',
          'linkedin'=>'required',
          'youtube'=>'required'
        ]);


        $update= socialModel::find(1);
        $update->facebook=$request->facebook;
        $update->twitter=$request->twitter;
        $update->linkedin=$request->linkedin;
        $update->googleplus=$request->googleplus;
        $update->youtube=$request->youtube;
        $update->save();
        return redirect('/social')->with('message','Data Updated Successfully');
    }

    public function copyright(){
        $copyright =copyrightModel::find(1);
         $pagelist=pageModel::all();
         $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();


         return view('admin_panel.copyright',[
          'copyright'=>$copyright,
          'pagelist'=>$pagelist,
          'inboxmessage'=>$inboxmessage
          ]);
    }

    public function copyrightupdate(Request  $request){
        $this->validate($request,[
              'copyright'=>'required'
          ]);


        $update =copyrightModel::find(1);
        $update->copyright=$request->copyright;
        $update->save();
        return redirect('/copyright')->with('message','CopyRight Update Successfully..');
    }

public function addpage(){
  $pagelist=pageModel::all();
  $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();

  return view('admin_panel.addpage',[
    'pagelist'=>$pagelist,
    'inboxmessage'=>$inboxmessage
    ]);
}


public function addpageinsert(Request $request){

    $this->validate($request, [
            'name' => 'required',
            'body' => 'required'
      ]);

    $insert= new pageModel();
     $insert->name=$request->name;
     $insert->body=$request->body;
     $insert->save();
    return back()->withInput()->with('message','Create Page successfully.');
}

public function updatepage($id){
  $pagelist=pageModel::all();
  $pagetext=pageModel::find($id);

  $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();

  return view('admin_panel.sub_page.updatepage',[
    'pagelist'=>$pagelist,
    'pagetext'=>$pagetext,
    'inboxmessage'=>$inboxmessage
    ]);
}


public function pageupdate(Request $request){
  $this->validate($request,[
      'name'=>'required',
      'body'=>'required',
    ]);
    $id=$request->id;
    $update=pageModel::find($id);
    $update->name=$request->name;
    $update->body=$request->body;
    $update->save();
    return back()->withInput()->with('message','page Update Successfully');
}

public function pagedelete($id){
      $delete=pageModel::find($id);
      $delete->delete();
      return redirect('/adminpage');
}

public function inbox(){
  $pagelist=pageModel::all();
  $contactseenlist=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();

  $contactunseenlist=contactModel::where('status', 1)
               ->orderBy('id', 'desc')
               ->get();


  $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();

   return view('admin_panel.inbox',[
    'pagelist'=>$pagelist,
    'contactseenlist'=>$contactseenlist,
    'contactunseenlist'=>$contactunseenlist,
    'inboxmessage'=>$inboxmessage
    ]);
}



public function contactview($id){
  $contactview=contactModel::find($id);
  $pagelist=pageModel::all();
  $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();
  return view('admin_panel.sub_page.contactview',[
      'pagelist'=>$pagelist,
      'contactview'=>$contactview,
      'inboxmessage'=>$inboxmessage
    ]);
}


public function sennupdate($id){
  $update=contactModel::find($id);
  $update->status=1;
  $update->save();
  return redirect('inbox');
}

public function unseenupdate($id){
  $update=contactModel::find($id);
  $update->status=0;
  $update->save();
  return redirect('inbox');
}

public function contactdelete($id){
  $delete=contactModel::find($id);
  $delete->delete();
  return redirect('inbox');
}

public function changepassword(){
       $pagelist=pageModel::all();

       $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();

     return view('admin_panel.changepassword',[
      'pagelist'=>$pagelist,
      'inboxmessage'=>$inboxmessage
      ]);
}

public function replymessage($id){
    $contactview=contactModel::find($id);
    $pagelist=pageModel::all();
    $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();
    return view('admin_panel.sub_page.replymessage',[
        'pagelist'=>$pagelist,
        'contactview'=>$contactview,
        'inboxmessage'=>$inboxmessage
    ]);
}

public function replymessagesent(Request $request){
    $id=$request->id;
    $to=$request->toemail;
    $from=$request->femail;
    $subject=$request->subject;
    $message=$request->message;
    
    
}

public function adduser (){
      $pagelist=pageModel::all();
      $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();
       return view('admin_panel.sub_page.adduser',[
        'pagelist'=>$pagelist,
        'inboxmessage'=>$inboxmessage
        ]);
 
}

public function registeruser(Request $request){
  $insert=new User();
  $insert->name=$request->name;
  $insert->email=$request->email;
  $insert->password=bcrypt($request->password);
  $insert->user_role=$request->user_role;
  $insert->save();
  return redirect('adminpage');
}























}
