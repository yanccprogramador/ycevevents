<?php
/**
 * Created by PhpStorm.
 * User: yanccprogramador
 * Date: 07/04/2017
 * Time: 23:04
 */

namespace App\Http\Controllers;


use App\Users;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use DB;

class LoginsController extends Controller
{

    function  Logar(){
        $login=$_POST['login'];
        $password=$_POST['senha'];
             $res = DB::table('users')->where('name','=',$login)->where('password','=',$password)->first();
             if($res!=null){

                 $id=$res->id;
                 $result2=DB::table('eventos')->select("*")->where( 'owner','=',$id )->get();
                 $evt=$result2;
                     return view("adm",['eventos'=>$evt,'dono'=>$res->id]);

             }else{
                 return view("login",['msgm'=>'Preencha os dados']);
             }
    }
    public function getIndex()
    {
        $this->Logar(Auth::user()->getAuthIdentifierName(),Auth::user()->getAuthPassword());

    }

    public function getEntrar()
    {

        return view("login",['msgm'=>'Preencha os dados']);
    }

    public function postEntrar()
    {
        // Opção de lembrar do usuário
        $remember = false;


        // Autenticação
        if (Auth::attempt(array(
            'email' => Input::get('login'),
            'password' => Input::get('senha')
        ), $remember))
        {
            return Redirect::to('artigos');
        }
        else
        {
            return Redirect::to('entrar')
                ->with('flash_error', 1)
                ->withInput();
        }
    }

    public function getSair()
    {
        Auth::logout();
        return Redirect::to('/');
    }



}