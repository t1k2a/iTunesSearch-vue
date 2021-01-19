<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encyclopedia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class EncyclopediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $items = Encyclopedia::orderBy('updated_at', 'desc')->get();

        return view('pedia.index', ['items' => $items, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pedia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pediadata = new Encyclopedia;
        $form = $request->all();
        unset($form['_token']);
        $pediadata->fill($form)->save();
        return redirect('/pedia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $item = Encyclopedia::findOrFail($id);
        return view('pedia.show', ['item' => $item, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Encyclopedia::findOrFail($id);
        return view('pedia.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        EncyClopedia::where('id', $request->id)
                      ->update(['title' => $request->title,
                                'contents' => $request->contents,
                                ]);
        return redirect('pedia/'.$request->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Encyclopedia::findOrFail($id)->delete();
        return redirect('/pedia');
    }
}
