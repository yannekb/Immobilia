<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bien;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;


class BienController extends Controller
{
    public function create()
    {
        return view('ajout');
    }

    public function mesBiens()
    {

        $biens = Bien::where('user_id',Auth::id());
        return view('mes-biens', compact('biens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'adress' => 'required',
            'surface' => 'required',
            'prix' => 'required',
            'type_contrat' => 'required',
            'type_bien' => 'required',
            'cover' => 'required',
        ]);

        $cover = '';

        if(Input::hasFile('cover')){
            $file = Input::file('cover');
            do {
                $filename = str_random(5) . strrchr( $file->getClientOriginalName(), '.' );
                if($file->move(public_path(). '/uploads/images',$filename)){
                    $cover = URL::to('/') . '/uploads/images/' . $filename;
                }
            } while(file_exists($cover));
        }

        $bien = new Bien();
        $bien->user_id = Auth::id();
        $bien->ref = str_random(7);
        $bien->adress = $request->input('adress');
        $bien->surface = $request->input('surface');
        $bien->prix = $request->input('prix');
        $bien->type_contrat = $request->input('type_contrat');
        $bien->type_bien = $request->input('type_bien');
        $bien->cover = $cover;


        $bien->save();

        return redirect()
            ->back()
            ->with('response','Bien ajouté avec succes');

    }
}
