<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdminApiController;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\CommentApiController;
use App\Http\Controllers\Api\ImageApiController;
use App\Http\Controllers\Api\TopicApiController;
use App\Http\Controllers\Api\NewsApiController;
use App\Http\Controllers\Api\NewsImageApiController;
use App\Http\Controllers\Api\ReplyApiController;

use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\Api\LoginUserController;






/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!


*/
//Admin
Route :: get('get-all-admin' , [AdminApiController::class , 'getAllAdmin']);

Route :: get('get-admin-by-id/{id}' , [AdminApiController::class , 'getAdminById']);

Route :: put('update-admin/{id}' , [AdminApiController::class , 'updateAdmin']);

Route :: post('create-admin' , [AdminApiController::class , 'createAdmin']);

Route :: delete('delete-admin/{id}' , [AdminApiController::class , 'deleteAdmin']);

//User
Route :: get('get-all-user-score-desc', [UserController::class , 'index']);
Route :: get('get-all-user-count', [UserController::class , 'userCount']);
Route :: get('get-all-new-user', [UserController::class , 'newUser']);




Route :: get('get-all-user', [UserApiController::class , 'getAllUser']);

Route :: get('get-user-by-id/{id}' ,    [UserApiController::class , 'getUserById']);

Route :: put('update-user/{id}' , [UserApiController::class , 'updateUser']);

Route :: post('create-user' , [UserApiController::class , 'createUser']);

Route :: delete('delete-user/{id}' , [UserApiController::class , 'deleteUser']);



//Category
Route :: get('get-all-categorys' , [CategoryController::class , 'getCategory']);


Route :: get('get-all-category' , [CategoryApiController::class , 'getAllCategory']);

Route :: get('get-category-by-id/{id}' ,   [CategoryApiController::class , 'getCategoryById']);

Route :: put('update-category/{id}' , [CategoryApiController::class , 'updateCategory']);

Route :: post('create-category' ,   [CategoryApiController::class , 'createCategory']);

Route :: delete('delete-category/{id}' , [CategoryApiController::class , 'deleteCategory']);

//News
Route :: get('get-detail' , [NewController::class , 'showNew']);
Route :: get('get-all-news' , [NewsApiController::class , 'getAllNews']);

Route :: get('get-new-by-user-id/{id}' , [NewsApiController::class , 'getNewsByUserId']);

Route :: get('get-news-by-category-id/{id}' , [NewsApiController::class , 'getNewsByCategoryId']);

Route :: get('get-news-by-id/{id}' , [NewsApiController::class , 'getNewsById']);

Route :: put('update-news/{id}' , [NewsApiController::class , 'updateNews']);

Route :: post('create-news' , [NewsApiController::class , 'createNews']);

Route :: delete('delete-news/{id}' , [NewsApiController::class , 'deleteNews']);

//NewsImage
Route :: get('get-all-news-image' , [NewsImageApiController::class , 'getAllNewsImage']);

Route :: get('get-news-image-by-news-id/{id}' , [NewsImageApiController::class , 'getNewsImageByNewsId']);

Route :: get('get-news-image-by-id/{id}' , [NewsImageApiController::class , 'getNewsImageById']);

Route :: put('update-news-image/{id}' , [NewsImageApiController::class , 'updateNewsImage']);

Route :: post('create-news-image' , [NewsImageApiController::class , 'createNewsImage']);

Route :: delete('delete-news-image/{id}' , [NewsImageApiController::class , 'deleteNewsImage']);

//Topic
Route :: post('get-like-topic', [TopicController::class , 'likeTopic']);
Route :: post('get-create-new-topic', [TopicController::class , 'createTopic']);
Route :: get('get-all-topic-like-desc', [TopicController::class , 'index']);
Route :: get('get-all-topics' , [TopicController::class , 'show']);
Route :: get('get-all-topics-by-id' , [TopicController::class , 'shows']);
Route :: get('get-all-topic-count', [TopicController::class , 'topicCount']);




Route :: get('get-all-topic' , [TopicApiController::class , 'getAllTopic']);

Route :: get('get-topic-by-id/{id}' , [TopicApiController::class , 'getTopicById']);

Route :: get('get-topic-by-id-category/{id}' , [TopicApiController::class , 'getTopicByIdCategory']);

Route :: get('get-topic-by-id-user/{id}' , [TopicApiController::class , 'getTopicByIdUser']);

Route :: put('update-topic/{id}' ,  [TopicApiController::class , 'updateTopic']);

Route :: post('create-topic' , [TopicApiController::class , 'createTopic']);

Route ::delete( 'delete-topic/{id}' , [TopicApiController::class , 'deleteTopic']);


//Image
Route :: get('show-image' , [ImageController::class , 'showImage']);

Route :: get('get-all-image' , [ImageApiController::class , 'getAllImage']);

Route :: get('get-image-by-id/{id}' , [ImageApiController::class , 'getImageById']);

Route :: get('get-image-by-topic-id/{id}' , [ImageApiController::class , 'getImageByTopicId']);

Route :: put('update-image/{id}' , [ImageApiController::class , 'updateImage']);

Route :: post('create-image' , [ImageApiController::class , 'createImage']);

Route :: delete('delete-image/{id}' , [ImageApiController::class , 'deleteImage']);


//Reply
Route :: get('get-all-reply-by-comment_id' , [ReplyController::class , 'Reply']);


Route :: get('get-all-reply' , [ReplyApiController::class , 'getAllReply']);

Route :: get('get-reply-by-user-id/{id}' ,[ReplyApiController::class , 'getReplyByUserId']);

Route :: get('get-reply-by-comment-id/{id}' , [ReplyApiController::class , 'getReplyByCommentId']);

Route :: get('get-reply-by-id/{id}' , [ReplyApiController::class , 'getReplyById']);

Route :: put('update-reply/{id}' , [ReplyApiController::class , 'updateReply']);

Route :: post('create-reply' , [ReplyApiController::class , 'createReply']);

Route :: delete('delete-reply/{id}' , [ReplyApiController::class , 'deleteReply']);

//Comment
Route :: get('show-comment' , [CommentController::class , 'showComment']);
Route :: post('add-comment' , [CommentController::class , 'addComment']);


Route :: get('get-all-comment' , [CommentApiController::class , 'getAllComment']);

Route :: get('get-comment-by-user-id/{id}' , [CommentApiController::class , 'getCommentByUserId']);

Route :: get('get-comment-by-topic-id/{id}' , [CommentApiController::class , 'getCommentByTopicId']);

Route :: get('get-comment-by-id/{id}' , [CommentApiController::class , 'getCommentById']);

Route :: put('update-comment/{id}' , [CommentApiController::class , 'updateComment']);

Route :: post('create-comment' , [CommentApiController::class , 'createComment']);

Route :: delete('delete-comment/{id}' , [CommentApiController::class , 'deleteComment']);


Route :: post('login' , [UserApiController::class , 'login']);

Route :: delete('logout' , [UserApiController::class , 'logout']);


Route :: get('get-classifieds' , [NewController::class , 'showClassifileds']);
//Like
Route :: post('like-classifieds' , [NewController::class , 'likeClassifileds']);
Route :: post('dislike-classifieds' , [NewController::class , 'dislikeClassifileds']);
//Watch
Route :: post('view-classifieds' , [NewController::class , 'viewClassifileds']);
//detial
Route :: get('get-declassifiled' , [NewController::class , 'showidClass']);

Route :: post('get-commentclass' , [NewController::class , 'getComment']);

Route :: post('get-comment' , [NewController::class , 'showComment']);

Route :: get('get-classgood' , [NewController::class , 'showClassgood']);

Route :: post('get-create-class' , [NewController::class , 'createClass']);



Route::group(['middleware' => ['web']], function () {
    Route::get('login-google',[LoginUserController::class,'loginGoogle']);
    Route::get('CusGG/callback',[LoginUserController::class,'callback_GG']);
});
