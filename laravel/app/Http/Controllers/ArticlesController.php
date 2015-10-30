<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;

class ArticlesController extends Controller {

	public function index()
	{
		$articles = Article::latest('published_at')->get();

		return view('articles.menu', compact('articles'));
	}

	public function show($id)
	{
		$article = Article::findorFail($id);

		return view('articles.viewpost', compact('article'));
	}

	public function create()
	{
		return view('articles.makepost');
	}

	public function store()
	{
		$input = Request::all();
		$input['published_at'] = Carbon::now();

		Article::create($input);

		return redirect('articles');
	}
}
