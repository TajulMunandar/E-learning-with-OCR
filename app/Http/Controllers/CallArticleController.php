<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CallArticleController extends Controller
{
    public function call0(Request $request)
    {
        $materi1 = intval($request->materi1);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi1 != null && $request->id != null ){

            if($materi<$materi1){
                $rules = [
                    'materi1' => 'required|min:1'
                ];

                $rules['materi1'] = $materi1;

                User::where('id', $id)->update($rules);

                return redirect('/article1');
            }

        }
        return redirect('/article1');
    }

    public function call1(Request $request)
    {
        $materi1 = intval($request->materi1);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi1 != null && $request->id != null ){

            if($materi<$materi1){
                $rules = [
                    'materi1' => 'required|min:1'
                ];

                $rules['materi1'] = $materi1;

                User::where('id', $id)->update($rules);

                return redirect('/article');
            }

        }
        return redirect('/article');
    }

    public function call2(Request $request)
    {
        $materi1 = intval($request->materi1);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi1 != null && $request->id != null){

            if($materi<$materi1){
                $rules = [
                    'materi1' => 'required|min:1'
                ];

                $rules['materi1'] = $materi1;

                User::where('id', $id)->update($rules);

                return redirect('/article2');
            }
            return redirect('/article2');
        }
        return redirect('/article2');
    }

    public function call3(Request $request)
    {
        $materi1 = intval($request->materi1);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi1 != null && $request->id != null){

            if($materi<$materi1){
                $rules = [
                    'materi1' => 'required|min:1'
                ];

                $rules['materi1'] = $materi1;

                User::where('id', $id)->update($rules);

                return redirect('/article3');
            }
            return redirect('/article3');
        }
        return redirect('/article3');
    }

    public function call4(Request $request)
    {
        $materi1 = intval($request->materi1);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi1 != null && $request->id != null){

            if($materi<$materi1){
                $rules = [
                    'materi1' => 'required|min:1'
                ];

                $rules['materi1'] = $materi1;

                User::where('id', $id)->update($rules);

                return redirect('/article4');
            }
            return redirect('/article4');
        }
        return redirect('/article4');
    }

    public function call5(Request $request)
    {
        $materi1 = intval($request->materi1);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi1 != null && $request->id != null){

            if($materi<$materi1){
                $rules = [
                    'materi1' => 'required|min:1'
                ];

                $rules['materi1'] = $materi1;

                User::where('id', $id)->update($rules);

                return redirect('/article5');
            }
            return redirect('/article5');
        }
        return redirect('/article5');
    }

    public function call6(Request $request)
    {
        $materi1 = intval($request->materi1);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi1 != null && $request->id != null){

            if($materi<$materi1){
                $rules = [
                    'materi1' => 'required|min:1'
                ];

                $rules['materi1'] = $materi1;

                User::where('id', $id)->update($rules);

                return redirect('/article6');
            }
            return redirect('/article6');
        }
        return redirect('/article6');
    }

    public function call7(Request $request)
    {
        $materi1 = intval($request->materi1);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi1 != null && $request->id != null){

            if($materi<$materi1){
                $rules = [
                    'materi1' => 'required|min:1'
                ];

                $rules['materi1'] = $materi1;

                User::where('id', $id)->update($rules);

                return redirect('/quiz');
            }
            return redirect('/quiz');
        }
        return redirect('/quiz');
    }

    public function call8(Request $request)
    {
        $materi1 = intval($request->materi1);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi1 != null && $request->id != null){

            if($materi<$materi1){
                $rules = [
                    'materi1' => 'required|min:1'
                ];

                $rules['materi1'] = $materi1;

                User::where('id', $id)->update($rules);

                return redirect('/selesai');
            }
            return redirect('/selesai');
        }
        return redirect('/selesai');
    }

    public function call9(Request $request)
    {
        $materi1 = intval($request->materi1);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi1 != null && $request->id != null){

            if($materi<$materi1){
                $rules = [
                    'materi1' => 'required|min:1'
                ];

                $rules['materi1'] = $materi1;

                User::where('id', $id)->update($rules);

                return redirect('/beranda');
            }
            return redirect('/beranda');
        }
        return redirect('/beranda');
    }
}
