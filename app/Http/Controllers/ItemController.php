<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('item.index', [
            'items' => Item::query()->orderBy('id')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $item = Item::create($this->attributes($request));

        return redirect()->route('item.show', $item);
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item): View
    {
        return view('item.show', [
            'item' => $item,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item): View
    {
        return view('item.edit', [
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item): RedirectResponse
    {
        $item->update($this->attributes($request));

        return redirect()->route('item.show', $item);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item): RedirectResponse
    {
        $item->delete();

        return redirect()->route('item.index');
    }

    /**
     * Validate and map the form's fields to the item's columns.
     *
     * @return array{artikelname: string, beschreibung: string, preis: string}
     */
    private function attributes(Request $request): array
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'desc' => ['required', 'string'],
            'cost' => ['required', 'numeric', 'min:0'],
        ]);

        return [
            'artikelname' => $validated['name'],
            'beschreibung' => $validated['desc'],
            'preis' => $validated['cost'],
        ];
    }
}
