<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CallArticleeController extends Controller
{
    public function call0(Request $request)
    {
        $materi3 = intval($request->materi3);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi3 != null && $request->id != null ){

            if($materi<$materi3){
                $rules = [
                    'materi3' => 'required|min:1'
                ];

                $rules['materi3'] = $materi3;

                User::where('id', $id)->update($rules);

                return redirect('/article21');
            }

        }
        return redirect('/article21');
    }

    public function call1(Request $request)
    {
        $materi3 = intval($request->materi3);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi3 != null && $request->id != null ){

            if($materi<$materi3){
                $rules = [
                    'materi3' => 'required|min:1'
                ];

                $rules['materi3'] = $materi3;

                User::where('id', $id)->update($rules);

                return redirect('/article22');
            }

        }
        return redirect('/article22');
    }

    public function call2(Request $request)
    {
        $materi3 = intval($request->materi3);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi3 != null && $request->id != null ){

            if($materi<$materi3){
                $rules = [
                    'materi3' => 'required|min:1'
                ];

                $rules['materi3'] = $materi3;

                User::where('id', $id)->update($rules);

                return redirect('/article23');
            }

        }
        return redirect('/article23');
    }

    public function call3(Request $request)
    {
        $materi3 = intval($request->materi3);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi3 != null && $request->id != null ){

            if($materi<$materi3){
                $rules = [
                    'materi3' => 'required|min:1'
                ];

                $rules['materi3'] = $materi3;

                User::where('id', $id)->update($rules);

                return redirect('/article24');
            }

        }
        return redirect('/article24');
    }

    public function call4(Request $request)
    {
        $materi3 = intval($request->materi3);
        $materi = intval($request->materi);
        $id = intval($request->id);

        if($request->materi != null && $request->materi3 != null && $request->id != null ){

            if($materi<$materi3){
                $rules = [
                    'materi3' => 'required|min:1'
                ];

                $rules['materi3'] = $materi3;

                User::where('id', $id)->update($rules);

                return redirect('/beranda');
            }

        }
        return redirect('/beranda');
    }
}
