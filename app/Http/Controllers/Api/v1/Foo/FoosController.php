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
    public function destroy(Foo $foo)   // = delete. (삭제)

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
    public function index()                // = (목록으로 보여주는 것)
    {

        $outs = Foo::all(); // Foo 테이블의 전체를 보여달라.

        //$outs = Foo::whereTitle('bar'); // Foo 테이블에서 bar 컬럼의 내용을 보여줘라.

        // $outs = Foo::where('title', "=", 'bar')->get(); (위 코드랑 같은 것)
        // $outs = Foo::pluck('id'); // Foo 테이블 전체 중에 'id'의

        return ($outs);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foo\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function show(Foo $foo)          // = (항목으로 보여주는 것)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)     // = Create (테이블 생성)
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
    public function update(Request $request, Foo $foo)  // = ( 수정 )
    {
        Log::info(__METHOD__);

        $outs = $foo->update($request->all());

        return json_encode($outs);
    }
}
