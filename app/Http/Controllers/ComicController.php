<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);

        $form_params = $request->all();
        $form_params['price'] = '$' . number_format($form_params['price'], 2);

        $newComic = new Comic();

        $newComic->fill($form_params);

        $newComic->save();

        return redirect()->route('comics.show', $newComic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics/edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validation($request);

        $form_params = $request->all();
        $form_params['price'] = '$' . number_format($form_params['price'], 2);

        $comic->update($form_params);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function validation(Request $request)
    {
        // Validazione con messaggi standard
        // $request->validate([
        //     'title' => 'required|max:50',
        //     'description' => 'required|min:10',
        //     'thumb' => 'required',
        //     'price' => 'required',
        //     'series' => 'required',
        //     'sale_date' => 'required',
        //     'type' => 'required|max:50',
        //     'artists' => 'required',
        //     'writers' => 'required',
        // ]);

        // Validazione con messaggi personalizzati
        $form_data = $request->all();

        $validator = Validator::make(
            $form_data,
            [
                'title' => 'required|max:50',
                'description' => 'required|min:10',
                'thumb' => 'required',
                'price' => 'required',
                'series' => 'required',
                'sale_date' => 'required',
                'type' => 'required|max:50',
                'artists' => 'required',
                'writers' => 'required',
            ],
            [
                'title.required' => 'Il titolo deve essere indicato',
                'title.max' => 'Il titolo non può essere più lungo di 50 caratteri',
                'description.required' => 'La descrizione deve essere indicata',
                'description.min' => 'La descrizione deve essere di almeno 10 caratteri',
                'thumb.required' => 'Il link dell\'immagine deve essere indicato',
                'price.required' => 'Il prezzo deve essere indicato',
                'series.required' => 'La serie deve essere indicata',
                'sale_date.required' => 'La data di uscita deve essere indicata',
                'type.required' => 'Il tipo deve essere indicato',
                'artists.required' => 'Gli artisti devono essere indicati',
                'writers.required' => 'Gli scrittori devono essere indicati',
            ]
        )->validate();
    }
}
