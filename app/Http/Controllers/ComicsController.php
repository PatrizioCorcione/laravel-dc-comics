<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Functions\Helper;
use App\Http\Requests\ComicRequest;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all()->sortDesc();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $route =  route('comics.store');
        $method = 'POST';
        $comic = null;
        return view('comics.create-edit', compact('route', 'method', 'comic'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicRequest $request)
    {
        $form_data = $request->all();

        $new_comic = new Comic();
        $new_comic->title = $form_data['title'];
        $new_comic->slug = Helper::makeSlug($new_comic['title'], new Comic());
        $new_comic->description = $form_data['description'];
        $new_comic->thumb = $form_data['thumb'];
        $new_comic->price = $form_data['price'];
        $new_comic->series = $form_data['series'];
        $new_comic->sale_date = $form_data['sale_date'];
        $new_comic->type = $form_data['type'];
        $new_comic->artists = $form_data['artists'];
        $new_comic->writers = $form_data['writers'];
        $new_comic->save();
        // new Comic()->fill
        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $route =  route('comics.update', $comic);
        $method = 'PUT';
        return view('comics.create-edit', compact('comic', 'route', 'method'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        $comic_data = $request->all();
        if ($comic_data['title'] === $comic->title) {
            $comic_data['slug'] = $comic->slug;
        } else {
            $comic_data['slug'] = Helper::makeSlug($comic_data['title'], new Comic());
        }
        $comic->fill($comic_data);
        $comic->update($comic_data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('deleted', 'Il fumetto ' . $comic->title . ' e stato eliminato');
    }
}
