<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminare\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function post(Request $request)
    {
        $items = DB::table('users')->where('email', $request->email)->first();
        if (Hash::check($request->password, $items->password)) {
            return response()->json(['auth' => true], 200);
            /**auth→認証 */
        } else{
            return response()->json(['auth' => false], 200);
        }
    }
}
