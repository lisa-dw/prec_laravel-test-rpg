<?php

namespace App\Http\Controllers\Api\v1\Foo;

use App\Http\Controllers\Controller;
use App\Models\Foo\Foo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class FoosController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foo\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foo $foo)
    {
        Log::info(__METHOD__);

        $outs = $foo->delete();

        return json_encode($outs);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::info(__METHOD__);

        $outs = Foo::all();

        //return json_encode($outs);
        return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foo\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function show(Foo $foo)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info(__METHOD__);

        $outs = Foo::create($request->all());
        Log::info($outs);

        return json_encode($outs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foo\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foo $foo)
    {
        Log::info(__METHOD__);

        $outs = $foo->update($request->all());

        return json_encode($outs);
    }
}
