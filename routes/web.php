<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
// use App\Models\Blog; ini jika mengunakakn model
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

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
// ==== defaultnya laravel =========================
// Route::get('/', function () { //controlernya
//     return view('welcome'); // viewnya
// });




// ================tes route 1==========================
// Route::get('/', function () { //controlernya
//     return "halaman home"; // viewnya
// });
// Route::get('/tesabout', function () { //controlernya
//     return "halaman about"; // viewnya
// });
// Route::get('/tesblog', function () { //controlernya
//     return "halaman blog"; // viewnya
// });






// ================tes route  kirim data array=========================
Route::get('/', function () { //controlernya
    return view('home', ["title" => "Home"]); // viewnya
});
Route::get('/about', function () { //controlernya
    return view(
        "about",
        [
            "email" => "tedyzhu@gmail.com",
            "name" => "Trisna juanda",
            "title" => "About",
            "img" => "product6.jpg"
        ]
    ); // viewnya

});


// ===========  krim data array static =================
// Route::get('/blog', function () { //controlernya
//     $data = [
//         [

//             "title" => "judul post pertama",
//             "slug" => "judul-post-pertama",
//             "penulis" => "teddy juanda",
//             "body" => "voluptatibus ipsam consequuntur soluta corrupti culpa nesciunt, beatae voluptatibus ipsam consequuntur soluta corrupti culpa nesciunt, beatae",
//         ],
//         [
//             'title' => "judul post ke dua",
//             'slug' => "judul-post-kedua",
//             'penulis' => "teddy juanda",
//             'body' => 'voluptatibus ipsam consequuntur soluta corrupti culpa nesciunt, beatae'
//         ]
//     ];
//     return view(
//         "post",
//         [
//             "title" => "Blog",
//             "blog" => $data
//         ]
//     ); // viewnya
// });
// ==== kesimpun mengirim data dari route hanya bisa di bungkus oleh array 






// ============ halaman detail / mengirim parameter =======================
// Route::get('/detail/{slug}', function ($param) {

//     return view(
//         'detail',
//         [
//             "title" => "single post",
//             "content" => Blog::find($param),
//         ]
//     );
// });




// ======= ============== pasing data dari model =====================
// Route::get('/blog', function () { //controlernya
//     return view(
//         "post",
//         [
//             "title" => "Blog",
//             "blog" => Blog::inifungsi_all()
//             // "value" => nama_model::methotd
//         ]
//     ); // viewnya
// });




// =========== route dengan controler ===========
// /'nama_url',[nama_controler::class , "nama_method"]
Route::get('/blog', [BlogController::class, 'index']);

Route::get('/Categories', [BlogController::class, 'allcategories']);

Route::get('/category/{category:slug}', function (Category $category) {
    return view('category_post', [
        "title"    => $category->name,
        "blog"     => $category->posts->load('category', 'user'),
        "category" => $category->name,
    ]);
});
// // get by id 
// Route::get('/detail/{post}', [BlogController::class, 'show']);

// post:slug itu penganti  detail id
Route::get('/detail/{post:slug}', [BlogController::class, 'show']);
Route::get('/author/{author:username}', [BlogController::class, 'author']);

// Route::metot('/url/{model:param_yg_dicari_pda_table}', [nama_kontroler::class, 'nama_klass']);
// Route::get('/author/{user:id}', function (User $user) {
//     return view('postautor', [
//         "title"   => $user->name,
//         "blog"    => $user->posts,
//         "nama" => $user->name,
//     ]);
// });
