<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChapitreStoreRequest;
use App\Models\Chapitre;


class ChapitreController extends Controller
{
    public function store($formationId,ChapitreStoreRequest $request){
        $params = $request->validated();
        $params['id_formation'] = $formationId;
        Chapitre::create($params);
        return back();
    }

    public function delete($id){
        $chapitre = Chapitre::find($id);
        $chapitre->delete();
        return back();
    }
}
