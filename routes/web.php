<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/top', function () {
    return view('main');
});
*/

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/cart', function () {
    return view('cart');
});


Route::get("/",function(){
    $menues = DB::select("SELECT * FROM menues");
    return view("main",[
        "menues" => $menues
    ]);
});

Route::get("/detail/{sushi}",function($menuId){
    $menues = DB::select("SELECT * FROM menues where id = ?",[$menuId]);
    if(count($menues)){
        return view("sushi",[
            "menu" => $menues[0]
        ]);
    }else{
        return abort(404);
    }
});


Route::get("/session_test",function(){
    $count = request()->session()->get("COUNTER",0);
    $count = $count + 1;
    request()->session()->put("COUNTER",$count);
    return "{$count}回目のアクセスです";
});


//寿司割り当て
Route::get("/detail/{menu_id}",function($sushi){
    return view("sushi",[
        "menu_id" => $sushi
    ]);
});


// [POST] /cart/{item_id} カートの追加
Route::post("/cart/{menu_id}",function($menuId){
    $menues = DB::select("SELECT * FROM menues where id = ?",[$menuId]);
    if(count($menues)){
        $cartMenues = request()->session()->get("CART",[]);
        $cartMenues[] = $menues[0];
        request()->session()->put("CART",$cartMenues);
        return redirect("/cart");
    }else{
        return abort(404);
    }
});

// [GET] /cart カートの表示
Route::get("/cart",function(){
    $cartMenues = request()->session()->get("CART",[]);
    return view("cart",[
        "cartMenues" => $cartMenues
    ]);
});

//購入画面
Route::get("buy",function(){
    return view("buy");
});

//購入処理
Route::post("buy",function(){
    $validator = Validator::make(request()->all(), [
        'name' => ['required'],
        'email' => ['required'],
    ])->validate();
    return redirect("thanks");
});

//購入後画面
Route::get("thanks",function(){
    return view("thanks");
});


//削除
Route::get("/cartdelete",function(){
    $cartItems= request()->session()->forget("CART");
    return redirect("cart");
});


Route::get("wa",function(){
    return view("wa");
});

Route::get("you",function(){
    return view("you");
});

Route::get("chu",function(){
    return view("chu");
});

// 和食
Route::get("wa",function(){
    $menues = DB::select("SELECT * FROM menues WHERE category LIKE '%和食'");
    return view("wa",[
        "menues" => $menues
    ]);
});

//洋食
Route::get("you",function(){
    $menues = DB::select("SELECT * FROM menues WHERE category LIKE '%洋食'");
    return view("you",[
        "menues" => $menues
    ]);
});

//中華
Route::get("chu",function(){
    $menues = DB::select("SELECT * FROM menues WHERE category LIKE '%中華'");
    return view("chu",[
        "menues" => $menues
    ]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');