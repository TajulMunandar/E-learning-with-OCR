<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CallArticle2Controller extends Controller
{
    public function call0(Request $request)
    {
        $materi2 = intval($request->materi2);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi2 != null && $request->id != null ){

            if($materi<$materi2){
                $rules = [
                    'materi2' => 'required|min:1'
                ];

                $rules['materi2'] = $materi2;

                User::where('id', $id)->update($rules);

                return redirect('/article11');
            }

        }
        return redirect('/article11');
    }

    public function call1(Request $request)
    {
        $materi2 = intval($request->materi2);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi2 != null && $request->id != null ){

            if($materi<$materi2){
                $rules = [
                    'materi2' => 'required|min:1'
                ];

                $rules['materi2'] = $materi2;

                User::where('id', $id)->update($rules);

                return redirect('/article12');
            }

        }
        return redirect('/article12');
    }

    public function call2(Request $request)
    {
        $materi2 = intval($request->materi2);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi2 != null && $request->id != null ){

            if($materi<$materi2){
                $rules = [
                    'materi2' => 'required|min:1'
                ];

                $rules['materi2'] = $materi2;

                User::where('id', $id)->update($rules);

                return redirect('/article13');
            }

        }
        return redirect('/article13');
    }

    public function call3(Request $request)
    {
        $materi2 = intval($request->materi2);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi2 != null && $request->id != null ){

            if($materi<$materi2){
                $rules = [
                    'materi2' => 'required|min:1'
                ];

                $rules['materi2'] = $materi2;

                User::where('id', $id)->update($rules);

                return redirect('/article14');
            }

        }
        return redirect('/article14');
    }

    public function call4(Request $request)
    {
        $materi2 = intval($request->materi2);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi2 != null && $request->id != null ){

            if($materi<$materi2){
                $rules = [
                    'materi2' => 'required|min:1'
                ];

                $rules['materi2'] = $materi2;

                User::where('id', $id)->update($rules);

                return redirect('/article15');
            }

        }
        return redirect('/article15');
    }

    public function call5(Request $request)
    {
        $materi2 = intval($request->materi2);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi2 != null && $request->id != null ){

            if($materi<$materi2){
                $rules = [
                    'materi2' => 'required|min:1'
                ];

                $rules['materi2'] = $materi2;

                User::where('id', $id)->update($rules);

                return redirect('/article16');
            }

        }
        return redirect('/article16');
    }

    public function call6(Request $request)
    {
        $materi2 = intval($request->materi2);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi2 != null && $request->id != null ){

            if($materi<$materi2){
                $rules = [
                    'materi2' => 'required|min:1'
                ];

                $rules['materi2'] = $materi2;

                User::where('id', $id)->update($rules);

                return redirect('/article17');
            }

        }
        return redirect('/article17');
    }
    public function call7(Request $request)
    {
        $materi2 = intval($request->materi2);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi2 != null && $request->id != null ){

            if($materi<$materi2){
                $rules = [
                    'materi2' => 'required|min:1'
                ];

                $rules['materi2'] = $materi2;

                User::where('id', $id)->update($rules);

                return redirect('/beranda');
            }

        }
        return redirect('/beranda');
    }
    
}
