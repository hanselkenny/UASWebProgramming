<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;
use App\Shoe;
use App\ShoeType;
use App\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class ArticleController extends Controller
{
    //
    public function articlelist()
    {
        $articles = Article::all();
        return view('article.articlelist', [
            'articles' => $articles
        ]);
    }
    public function managearticlelist(Request $request)
    {
        $search = $request->input('search');
        $shoes = Article::where('title', 'like', "%$search%")->paginate(6);
        return view('article.managearticlelist', [
            'articles' => $shoes
        ]);
    }
    public function delete($id)
    {
        $article = Article::find($id)->delete();
        return redirect()->action([ArticleController::class, 'managearticlelist']);
    }
    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'description'    => 'required',
            'category_id' => 'required',
            'title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
        ];

        //custom validation error messages.
        $messages = [
            'image.mimes' => 'The file must be jpeg,jpg,png,or gif.',
            'image.max' => 'The file must be less than 10 Mb.',
        ];

        //validate the request.
        $request->validate($rules,$messages);
    }
    public function saveadd(Request $request)
    {

        $this->validator($request);
        if (!is_null(Auth::user())) {
            $new_article = new Article();
            $path = $request->file('image')->getRealPath();
            $logo = file_get_contents($path);
            $base64 = base64_encode($logo);
            $new_article->image = $base64;
            $new_article->user_id = Auth::id();
            $new_article->description = $request->get('description');
            $new_article->title = $request->get('title');
            $new_article->category_id = $request->get('category_id');
            $new_article->save();
            return redirect()->action([ArticleController::class, 'articlelist']);
        }else{

            return back()->with('error', 'You must be logged in.');
        }
    }
    public function add()
    {
        $categories= Category::all();
        return view('article.addarticle',[
            'category_list'=>$categories
        ]);
    }
    public function detail($id)
    {
        $article=Article::find($id);
        return view('article.articledetail',['article'=>$article]);
    }
    public function category($id)
    {
        $articles=Article::where('category_id',"$id")->get();
        $category = Category::find($id);
        return view('article.articlelist', [
            'articles' => $articles,
            'category_name'=>$category->name
        ]);
    }
}
