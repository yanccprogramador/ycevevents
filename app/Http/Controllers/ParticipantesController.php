<?php
/**
 * Created by PhpStorm.
 * User: yanccprogramador
 * Date: 22/04/2017
 * Time: 15:14
 */

namespace app\Http\Controllers;
use App\Eventos;
use App\Participantes;
use Illuminate\Http\Request;
use \Illuminate\Routing\Controller;

class ParticipantesController extends Controller
{
    public function inicio($id)
    {
        return view('participar',['evento'=>$id]);

    }
    public function salvar(Request $rq){

        Participantes::create($rq->all());

        return view('eventos',['eventos'=>Eventos::all()]);
    }
}