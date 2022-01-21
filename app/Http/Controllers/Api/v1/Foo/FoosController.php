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

        return ($outs);

        // $outs = Foo::whereTitle('bar'); // Foo 테이블에서 bar 컬럼의 내용을 보여줘라.

        // $outs = Foo::where('title', "=", 'bar')->get(); (위 코드랑 같은 것)
        // $outs = Foo::pluck('id'); // Foo 테이블 전체 중에 'id'의



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foo\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function show(Foo $foo)          // = (항목으로 보여주는 것)
    {
     //   return $foo; // 반드시 리턴을 해줘야 show함수가 실행되고, 항목이 출력됨.
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)     // = Create (테이블 생성)
    {
        Log::info(__METHOD__);  // store에 요청이 왔어. //
        Log::info($request);  // request 가 어떻게 왔어.              // 라우터에
        // 콘솔을 사용하면, 요청이 안되는 것은 잡을 수 없지만, 요청이 되는 것을 확인하면 그 때부터 잡을 수 있다.
        //Log::info();  / Log 클래스에 info() 함수를 바로 사용하는 것.(new로 생성하지 않고)

        // 저장하는 방법

        $outs = Foo::create($request->all());   // 묶어서 요청하는 것. / Foo 테이블에 리퀘스트를 통째로 저장해! 라고 하는 것.

        return $outs;

        // 저장하는 다른 방법들
//            Foo::create([
//                    'title' => 'foo',   // Foo 테이블에 title이라는 컬럼에 foo 라고 저장해! 라고 지정하는 것.
//                ]) ;
//
//             Foo::create([
//                    'title' => $request->title,     // Foo 테이블에 요청을 넣는 것.
//                ]);



              // return json_encode($outs);


        //Foo::create($request->all());   // 테이블 Foo에 request를 전부 다 통째로 저장하라는 것.
        $outs = Foo::create($request->all()); // 테이블 Foo에 request를 전부 다 통째로 저장하라는 것을 변수 outs에 지정해놓음

        return $outs;









        // ## 에러가 났을 때.
        /*        try{

        } catch (\Exception $e){            //에러가 나면
            Log::info($e->getMessage());	//  메세지(Log)로 보여주라는 의미.
        }*/



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
