<?php
/**
 * Created by PhpStorm.
 * User: yanccprogramador
 * Date: 22/04/2017
 * Time: 13:32
 */

namespace app\Http\Controllers;
use App\Eventos;
use Illuminate\Http\Request;
use \Illuminate\Routing\Controller;

class EventosControllers extends Controller
{
  public function inicio(){
      $eventos=Eventos::all();
     return view("eventos",['eventos'=>$eventos,'msgm'=>null]);
  }
  public function save(Request $rq){
      Eventos::create($rq->all());
      return view('eventos',['eventos'=>Eventos::all()]);
  }
    public function lala($owner){
        return view('cadastrar',['dono'=>$owner]);
    }
}