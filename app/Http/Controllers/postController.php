<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\postModel;
use App\catModel;
use App\copyrightModel;
use App\websiteModel;
use App\socialModel;
use App\pageModel;
use App\contactModel;
use App\commentModel;

use Illuminate\Support\Facades\Auth;
class postController extends Controller
{
    public function index(){
        $recentallpost=postModel::orderBy('time','desc')->paginate(3);
        $postalldata = postModel::orderBy('id', 'desc')->paginate(3);
        $popular_all_post=postModel::orderBy('comment_count','desc')->paginate(3);
    	$cat_all_data=catModel::all();
        $copyright=copyrightModel::find(1);
        $websitename=websiteModel::find(1);
        $sociallink=socialModel::find(1);
        $pagelist=pageModel::all();
        

      
        return view('user_panel.home',[
            'postalldata'=>$postalldata,
            'cat_all_data'=>$cat_all_data,
            'recentallpost'=>$recentallpost,
            'copyright'=>$copyright,
            'websitename'=>$websitename,
            'sociallink'=>$sociallink,
            'pagelist'=>$pagelist,
            'popular_all_post'=>$popular_all_post
            ]);

    	/*return view('user_panel.home',[
    		'postalldata'=>$postalldata,
    		'cat_all_data'=>$cat_all_data,
    		'recent_all_post'=>$recent_all_post
    		]);*/
    }

    public function getpost($cat,$id){
        $recentallpost=postModel::orderBy('time','desc')->paginate(3);
        $popular_all_post=postModel::orderBy('comment_count','desc')->paginate(3);
        $postalldata=postModel::paginate(3);
        $cat_all_data=catModel::all();
        $copyright=copyrightModel::find(1);
        $websitename=websiteModel::find(1);
        $sociallink=socialModel::find(1);
        $pagelist=pageModel::all();
        $commentlist=commentModel::where('single_comment',$id)->get();
        
        $limitallpost=postModel::join('tbl_category', 'tbl_category.id', '=', 'tbl_post.cat')
            ->where('tbl_post.cat',$cat)
            ->select('tbl_post.*', 'tbl_post.id','tbl_category.category','tbl_post.body','tbl_post.cat','tbl_post.image')
            
            ->get();
            //echo $id;

        $post_get_by_id=postModel::find($id);


        return view('user_panel.post',[
            'postalldata'=>$postalldata,
            'cat_all_data'=>$cat_all_data,
            'recentallpost'=>$recentallpost,
            'post_get_by_id'=>$post_get_by_id,
            'limitallpost'=>$limitallpost,
            'copyright'=>$copyright,
            'websitename'=>$websitename,
            'sociallink'=>$sociallink,
            'pagelist'=>$pagelist,
            'commentlist'=>$commentlist,
            'popular_all_post'=>$popular_all_post
            ]);

    }

    public function catpost($id){
        $recentallpost=postModel::orderBy('time','desc')->paginate(3);
        $popular_all_post=postModel::orderBy('comment_count','desc')->paginate(3);
        $postalldata = postModel::where('cat', $id)->paginate(2);
        $cat_all_data=catModel::all();
        $copyright=copyrightModel::find(1);
        $websitename=websiteModel::find(1);
        $sociallink=socialModel::find(1);
        $pagelist=pageModel::all();
        return view('user_panel.home',[
            'postalldata'=>$postalldata,
            'cat_all_data'=>$cat_all_data,
            'recentallpost'=>$recentallpost,
            'copyright'=>$copyright,
            'websitename'=>$websitename,
            'sociallink'=>$sociallink,
            'pagelist'=>$pagelist,
            'popular_all_post'=>$popular_all_post
            ]);
    }   

   public function searchpost(Request $request){

    $sercchalldata = postModel::where('title','LIKE',"%$request->search%")
                ->orWhere('body','LIKE',"%$request->search%")
                ->paginate(3);


       
        $recentallpost=postModel::orderBy('time','desc')->paginate(3);
        $postalldata = postModel::orderBy('id', 'desc')->paginate(2);
        $popular_all_post=postModel::orderBy('comment_count','desc')->paginate(3);

        $cat_all_data=catModel::all();
        $copyright=copyrightModel::find(1);
        $websitename=websiteModel::find(1);
        $sociallink=socialModel::find(1);
        $pagelist=pageModel::all();
      
        return view('user_panel.searchpost',[
            'postalldata'=>$postalldata,
            'cat_all_data'=>$cat_all_data,
            'recentallpost'=>$recentallpost,
            'copyright'=>$copyright,
            'websitename'=>$websitename,
            'sociallink'=>$sociallink,
            'sercchalldata'=>$sercchalldata,
            'pagelist'=>$pagelist,
            'popular_all_post'=>$popular_all_post
            ]);



   }

   public function searchpostpage(){
             $recentallpost=postModel::orderBy('time','desc')->paginate(3);
        $postalldata = postModel::orderBy('id', 'desc')->paginate(2);

        $cat_all_data=catModel::all();
        $copyright=copyrightModel::find(1);
        $websitename=websiteModel::find(1);
        $sociallink=socialModel::find(1);
        $pagelist=pageModel::all();
        return view('user_panel.home',[
            'postalldata'=>$postalldata,
            'cat_all_data'=>$cat_all_data,
            'recentallpost'=>$recentallpost,
            'copyright'=>$copyright,
            'websitename'=>$websitename,
            'sociallink'=>$sociallink,
            'pagelist'=>$pagelist
            ]);
   }


public function createdpage($id){
        $recentallpost=postModel::orderBy('time','desc')->paginate(3);
        $popular_all_post=postModel::orderBy('comment_count','desc')->paginate(3);
        $postalldata = postModel::orderBy('id', 'desc')->paginate(2);

        $cat_all_data=catModel::all();
        $copyright=copyrightModel::find(1);
        $websitename=websiteModel::find(1);
        $sociallink=socialModel::find(1);
        $pagelist=pageModel::all();
        $createdpage=pageModel::find($id);
        return view('user_panel.createdpage',[
            'postalldata'=>$postalldata,
            'cat_all_data'=>$cat_all_data,
            'recentallpost'=>$recentallpost,
            'copyright'=>$copyright,
            'websitename'=>$websitename,
            'sociallink'=>$sociallink,
            'pagelist'=>$pagelist,
            'createdpage'=>$createdpage,
            'popular_all_post'=>$popular_all_post
            ]);
  

}

public function contactpage(){

        $recentallpost=postModel::orderBy('time','desc')->paginate(3);
        $popular_all_post=postModel::orderBy('comment_count','desc')->paginate(3);
        $postalldata = postModel::orderBy('id', 'desc')->paginate(2);
        $cat_all_data=catModel::all();
        $copyright=copyrightModel::find(1);
        $websitename=websiteModel::find(1);
        $sociallink=socialModel::find(1);
        $pagelist=pageModel::all();
        
        return view('user_panel.contactpage',[
            'postalldata'=>$postalldata,
            'cat_all_data'=>$cat_all_data,
            'recentallpost'=>$recentallpost,
            'copyright'=>$copyright,
            'websitename'=>$websitename,
            'sociallink'=>$sociallink,
            'pagelist'=>$pagelist,
            'popular_all_post'=>$popular_all_post
            
            ]);

}

public function contactpageinsert(Request $request){
    $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'message' => 'required'
      ]);

    $insert= new contactModel();
    $insert->fname=$request->fname;
    $insert->lname=$request->lname;
    $insert->email=$request->email;
    $insert->message=$request->message;
    $insert->save();
    return redirect('contactpage')->with('message','Data Inserted Successfully');
}

public function system_validation(Request $request)
{

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
           
            $pagelist=pageModel::all();

    $inboxmessage=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();

   
            return view('admin_panel.index',['pagelist'=>$pagelist,
      'inboxmessage'=>$inboxmessage]);
        }
}


public function comment(Request $request){
    $single_comment =$request->single_comment;
    $insert=new commentModel();
    $insert->single_comment=$request->single_comment;
    $insert->name=$request->name;
    $insert->email=$request->email;
    $insert->comment=$request->comment;
    $insert->save();


   $count_comment=postModel::select('comment_count')->where('id',$request->single_comment)->first();
  $Commnet_Increment= ++$count_comment->comment_count;
postModel::where('id',$request->single_comment)->update(["comment_count"=>$Commnet_Increment]);
return back()->withInput();
}













    
}




