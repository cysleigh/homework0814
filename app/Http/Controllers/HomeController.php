<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;

class HomeController extends Controller
{
    public function nologin()
    {
        $newsList = news::all();
        //$user = userinfo::all();
        return view('home.page', compact('newsList'));
    }

    public function index()
    {
        $newsList = news::all();
        //$user = userinfo::all();
        return view('home.login', compact('newsList'));
    }

    public function adminpage()
    {
        $newsList = news::all();
        return view('home.adminpage', compact('newsList'));
    }
    
    public function userpage()
    {
        $newsList = news::all();
        return view('home.userpage', compact('newsList'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newsList = new news();
        $newsList->title = $request->title;
        $newsList->content = $request->content;
        $newsList->save();  //插入資料庫
        return redirect("/homeadmin");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newsList = news::find($id);
        return view('home.detailpage', compact('newsList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newsList = news::find($id);
        return view('home.edit', compact('newsList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newsList = news::find($id);
        $newsList->title = $request->title;
        $newsList->content = $request->content;
        $newsList->date = $request->date;
        $newsList->save();
        return redirect("/homeadmin");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
