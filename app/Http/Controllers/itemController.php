<?php
namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;

class itemController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = item::all(); // fetch all items from DB
        return view('item.index', [
            'items' => $items
        ]); // returns the view with items
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newItem = item::create([
            'artikelname' => $request->name,
            'beschreibung' => $request->desc,
            'preis' => $request->cost
        ]);
        return redirect('item/' . $newItem->id);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\item $item
     * @return \Illuminate\Http\Response
     */
    public function show(item $item)
    {
        return view('item.show', [
            'item' => $item
        ]); // returns the view with the item
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\item $item
     * @return \Illuminate\Http\Response
     */
    public function edit(item $item)
    {
        return view('item.edit', [
            'item' => $item
        ]); // returns the edit view with the post
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\item $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, item $item)
    {
        $item->update([
            'artikelname' => $request->name,
            'beschreibung' => $request->desc,
            'preis' => $request->cost
        ]);
        return redirect('item/' . $item->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\item $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $item)
    {
        $item->delete();
        return redirect('/item');
    }
}
