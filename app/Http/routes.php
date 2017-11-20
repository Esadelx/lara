<?php
use App\Post;
use App\User;
use App\Country;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');

});

Route::get('/contacts',function() {
    return" You are in contacts Page";
});

Route::get('/aboutus',function(){
    return "you are in aboutus page";
});

Route::get('/post/{id}/{name}',function($id,$name){

        return"this is post number " . $id ." " . $name;
});

Route::get('admin/posts/example',array('as'=>'admin.home' ,function(){

    $url = route('admin.home');
    return "this url is " . $url;

}));


Route::Get('/post/{id}/{name}','PostsController@show_post');

Route::Get('/contact','PostsController@contact');

*/


/*
|--------------------------------------------------------------------------
| Database Raw sql queries
|--------------------------------------------------------------------------
|*/


/*Route::get('/insert', function (){

    DB::insert('insert into posts(title, content) VALUES (?,?)',['PhP with Laravel','php with laravel is really amazing cool stuff']);
    DB::insert('insert into posts(info,is_admin) VALUES (?,?)',['egyptian','5']);
});

Route::get('/read', function(){

    $results = DB::select('select * from posts where id=?',['1']);

    foreach ($results as $result){

        return $result ->content;
    }

});*/


//Route::get('/update', function(){
//
//    $updated= DB::update('update posts set title ="update title" where id = ?', ['2']);
//
//    return $updated;
//});


/*
|--------------------------------------------------------------------------
| Eloquent Retrieving Data
|--------------------------------------------------------------------------
|*/


/*Route::get('/find', function(){

    $posts = post::all();

    foreach ($posts as $post){

        return $post ->id;
    }



});*/


/*Route::get('/find', function(){

    $post = Post::find(4);


});


Route::get('/findwhere','PostsController@uni');*/

/*
|--------------------------------------------------------------------------
| Eloquent inserting Data
|--------------------------------------------------------------------------
*/


Route::get('/basicinsert','PostsController@ins');
Route::get('/basicinsert2','PostsController@ins2');


/*
|--------------------------------------------------------------------------
| MassAssignmentException
|--------------------------------------------------------------------------
|*/
/*
Route::get('/create', function(){

    $post = Post::create(['title'=>'create Method','content'=>'hallo this contents comes from create method']);


});


Route::get('/delete', function(){

//    $post = Post::find(1);
//    $post->delete();

    Post::destroy(2,3,4);

});*/

/*
|--------------------------------------------------------------------------
| Soft Delete >>>
|--------------------------------------------------------------------------
|*/

/*Route::get('/softdeletes', function(){

   $post = Post::find(2)->delete();



});

Route::get('/readsoftdeletes', function(){

    $post = Post::onlyTrashed()->where('id',3)->get();
    return $post;

});

Route::get('/forcedelete',function(){

    Post::onlyTrashed()->where('is_admin',0)->forceDelete();


});

Route::get('/user_id',function(){
   $post = new Post();
   $post -> user_id= "15" ;
   $post->save();

});
/*
 * make a new user and a relation between two tables
 *
 * */
Route::get('/pass', function(){

    $user = new User();
    $user->id=1;
    $user->name='Ahmed';
    $user->password='123';
    $user->email='ahmed@gmail.com';
    $user->save();

});

/*
 *
 * ELOQUENT RELATIONSHIPS
 *
 */
/*
 * one to one Relationship
 * */
Route::get('/user/{id}/post', function($id){

     return User::find($id)->post->content;

});


Route::get('/post/{id}/user', function($id){

    return Post::find($id)->user->name;
});

Route::get('/user/{id}/posts',function($id){

    $user = User::find($id);
    foreach($user->posts as $post){
        echo $post->title. "<br>";
    }


});

Route::get('/user/country', function(){

    $country = Country::find(1);
    foreach ($country->posts as $post){
        return $post->content;
    }

});