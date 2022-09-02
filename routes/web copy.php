<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\QuestionCategoryController;
use App\Http\Controllers\Admin\DownloadController as AdminDownloadController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\UserDetailsController;
use App\Http\Controllers\Admin\SearchController as AdminSearchController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\UploadDetailsController;
use App\Http\Controllers\User\AuthController as UserAuthController;
use App\Http\Controllers\User\CommentController;
use App\Http\Controllers\User\DownloadController;
use App\Http\Controllers\User\QuestionController as UserQuestionController;
use App\Http\Controllers\User\SearchController;
use App\Http\Controllers\User\SubjectController as UserSubjectController;
use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\FacebooksocialiteController;
use App\Http\Controllers\User\UserController;
use App\Models\Category;
use App\Models\Question;
use App\Models\Subject;
use App\Models\UserQuestion;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// admin part
Route::get('/admin-login', function () {
    return view('admin.login');
});
Route::get('/admin-register', function () {
    return view('admin.register');
});
Route::post('/admin-login1',[AuthController::class, 'loginCheck']);
Route::post('/admin-register',[AuthController::class, 'registerUpload']);

// Forgot Password
Route::get('/admin-forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/admin-confirm-password', [AuthController::class, 'confirmPassword']);
Route::match(['get', 'post'], '/admin-change-password/{code}', [AuthController::class, 'changePassword']);
Route::post('/admin-password-change', [AuthController::class, 'passwordChange']);

Route::group(['middleware'=>['Admin']], function(){ 
  
    Route::get('/admin-index',[AuthController::class, 'AdminIndex']);
    //admin delete
    Route::get('/admin-delete/{id}', [AuthController::class, 'adminDelete']);
    
    //user details
    Route::get('/user-details', [UserDetailsController::class, 'userList']);
    Route::get('/user-details-export',[UserDetailsController::class, 'userDetailsExport']);    // Export user details

    Route::get('/changeStatus', [AuthController::class, 'changeStatus']);
    
    // show/add/edit/delete subject
    Route::post('/subject-form-submit', [SubjectController::class, 'SubjectFormSubmit']);   //add subject
    Route::get('/add-subject', [SubjectController::class, 'ShowSubjectList']);    //show subject
    Route::get('/edit-subject/{id}', [SubjectController::class, 'editSubjectList']);    //edit subject page
    Route::post('/edit-submit', [SubjectController::class, 'editSubmit']);    //edit Subject submit
    Route::get('/delete-subject/{id}', [SubjectController::class, 'deleteSubjectList']);    //delete Subject
    
    //referral
    Route::get('/referral-list', [SubjectController::class, 'referralList']);

    // show/add/edit category
    Route::get('/show-category', [CategoryController::class, 'showCategory']);   // show/add category
    Route::post('/add-category', [CategoryController::class, 'addCategory']);    // add category submit
    Route::get('/edit-category/{id}', [CategoryController::class, 'editCategoryShow']);   // edit category page
    Route::post('/edit-category', [CategoryController::class, 'editCategorySubmit']);     // edit category upload
    Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory']);     // delete category
    
    // show/add/edit question category
    Route::get('/show-question-category', [QuestionCategoryController::class, 'showCategory']);   // show/add category
    Route::post('/add-question-category', [QuestionCategoryController::class, 'addCategory']);    // add category submit
    Route::get('/edit-question-category/{id}', [QuestionCategoryController::class, 'editCategoryShow']);   // edit category page
    Route::post('/edit-question-category', [QuestionCategoryController::class, 'editCategorySubmit']);     // edit category upload
    Route::get('/delete-question-category/{id}', [QuestionCategoryController::class, 'deleteCategory']);     // delete category

    // accept/delete user upload subject
    Route::get('/user-upload-subject', [SubjectController::class, 'userSubjectUploadList']);
    Route::get('/accept-subject/{id}', [SubjectController::class, 'acceptSubject']);
    Route::post('/accept-subject', [SubjectController::class, 'acceptSubjectUpload']);
    Route::get('/deny-subject/{id}', [SubjectController::class, 'denySubject']);
    Route::get('/download-subject/{id}', [AdminDownloadController::class, 'downloadSubject']);

    // question
    Route::post('/question-form-submit', [QuestionController::class, 'questionFormSubmit']);   //add question
    Route::get('/add-question', [QuestionController::class, 'showQuestionList']);    //show question
    Route::get('/edit-question/{id}', [QuestionController::class, 'editQuestionList']);    //edit question page
    Route::post('/edit-question', [QuestionController::class, 'editQuestion']);    //edit question submit
    Route::get('/delete-question/{id}', [QuestionController::class, 'deleteQuestionList']);    //delete question

    // accept/delete user upload question
    Route::get('/user-upload-question', [QuestionController::class, 'userQuestionUploadList']);
    Route::get('/accept-question/{id}', [QuestionController::class, 'acceptQuestion']);
    Route::post('/accept-question', [QuestionController::class, 'acceptQuestionUpload']);
    Route::get('/deny-question/{id}', [QuestionController::class, 'denyQuestion']);
    Route::get('/download-question/{id}', [AdminDownloadController::class, 'downloadQuestion']);

     // slot
    Route::get('/user-group', [adminController::class, 'userGroup']);   // user-group
    Route::get('/user-reffer', [adminController::class, 'userRefer']);   // user-refer
    Route::get('/slot-detail/{id}', [adminController::class, 'slotDetail']);   // user-refer
    Route::get('/group-details-export',[adminController::class, 'groupDetailsExport']);    // Export group details
    
    // search
    Route::post('/search-admin-subject', [AdminSearchController::class, 'searchSubject']);
    Route::post('/search-admin-question', [AdminSearchController::class, 'searchQuestion']);
    
    //signup download
     Route::get('/download/file/{image}', [AdminDownloadController::class, 'downloadImage']);
    
    // cache clear
    Route::get('/cache-clear', function() {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        return redirect()->back();
    });
});
Route::get('/admin-logout',[AuthController::class, 'logout']);





// user part
// login
Route::get('/login',[UserAuthController::class, 'loginPage']);
Route::post('/login-check', [UserAuthController::class, 'loginCheck']);
Route::get('/email-confirmation/{id}', [UserAuthController::class, 'emailConfirmation']);
// register
Route::get('/register',[UserAuthController::class, 'registerPage']);
Route::post('/register', [UserAuthController::class, 'save']);
// logout
Route::get('/logout',[UserAuthController::class, 'logout']);
// Forgot Password
Route::get('/forgot-password', [UserAuthController::class, 'forgotPassword']);
Route::post('/confirm-password', [UserAuthController::class, 'confirmPassword']);
Route::match(['get', 'post'], '/change-password/{code}', [UserAuthController::class, 'changePassword']);
Route::post('/password-change', [UserAuthController::class, 'passwordChange']);
// resend verification link
Route::get('/resend-verification-link/{id}', [UserAuthController::class, 'resendVerificationLink']);

//google signup
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);
//facebook signup
Route::get('auth/facebook', [FacebooksocialiteController::class, 'redirectToFB']);
Route::get('callback/facebook', [FacebooksocialiteController::class, 'handleCallback']);

// home page
// index panel
Route::get('/talent-hub',[UserSubjectController::class, 'index']);

// show subject under category
$categoryList = Category::select('url')->get()->pluck('url')->toArray();
foreach ($categoryList as $category) {
    Route::get('/'.$category, [UserSubjectController::class, 'subjectListUnderCategory']);
}

// show subject details
$subjectSlugs = Subject::select('slug')->get()->pluck('slug')->toArray();
foreach ($subjectSlugs as $slug) {
    Route::get('/'.$slug, [UserSubjectController::class, 'subjectDetails']);
}

// download file
Route::get('/download/{id}',[DownloadController::class, 'download']);

// question
Route::get('/',[UserQuestionController::class, 'index']);
Route::get('/question-index', function(){
  	return redirect('/');
});
Route::get('/question/{slug}',[UserQuestionController::class, 'questionListUnderCategory']);    // show question under category

// show question details
$questionSlugs = Question::select('slug')->get()->pluck('slug')->toArray();
foreach ($questionSlugs as $slug) {
    Route::get('/'.$slug, [UserQuestionController::class, 'questionDetails']);
}

// search
Route::post('/search-subject',[SearchController::class, 'searchSubject']);
Route::post('/search-question',[SearchController::class, 'searchQuestion']);

// priacy policy and trems
Route::get('/privacy-policy', function () {
    return view('user.privacy-policy');
});
Route::get('/trems-conditions', function () {
    return view('user.trems-condition');
});
Route::get('/404', function () {
    return view('user.404');
});
// redirect login
Route::get('/redirect-login', function () {
  	$message = "You have to login to share this content.";
  	session::flash('error', $message);
    return redirect()->back();
});


Route::group(['middleware'=>['User']], function(){
    // uploaded subject
    Route::post('/upload-subject',[UserSubjectController::class, 'uploadSubject']);    // upload user subject
    Route::get('/upload-subject-list',[UserSubjectController::class, 'uploadSubjectList']);    // show user upload subject list
    Route::get('/delete-user-subject/{id}',[UserSubjectController::class, 'deleteSubject']);    // delete subject
    Route::get('/user-upload-details/{id}',[UserSubjectController::class, 'uploadSubjectDetails']);    // show user upload subject details
    Route::get('/edit-user-subject/{id}',[UserSubjectController::class, 'editDetails']);    // edit user upload subject details
    Route::post('/edit-user-subject',[UserSubjectController::class, 'editDetailsUpload']);    // edit user upload subject details update

    // question
    Route::post('/upload-question',[UserQuestionController::class, 'uploadQuestion']);
    Route::get('/upload-question-list',[UserQuestionController::class, 'uploadQuestionList']);    // show upload question
    Route::get('/delete-user-question/{id}',[UserQuestionController::class, 'deleteQuestion']);    // delete question
    Route::get('/edit-user-question/{id}',[UserQuestionController::class, 'editDetails']);    // edit user upload question details
    Route::post('/edit-user-question',[UserQuestionController::class, 'editDetailsUpload']);    // edit user upload question details update

    // comment  
    Route::post('/comment-upload',[CommentController::class, 'commentUpload']);
    Route::post('/sub-comment-upload',[CommentController::class, 'subCommentUpload']);
    Route::get('/edit-user-comment/{id}',[CommentController::class, 'editComment']);    // edit user upload comment details
    Route::post('/edit-user-comment',[CommentController::class, 'editCommentUpload']);    // edit user upload comment details update
    Route::get('/delete-user-comment/{id}',[CommentController::class, 'deleteComment']);    // delete question

    // profile
    Route::get('/edit-profile',[UserController::class, 'editProfile']);
    Route::post('/edit-profile-upload',[UserController::class, 'editProfileUpload']);
});



Route::get('/answer', function () {
    return view('user.question.answer');
});



// ---------------------------------- slot ---------------------------------------------------------- //
//Create form group
Route::get('/design',[UploadDetailsController::class, 'design']);

// slots
Route::get('/slots',[UploadDetailsController::class, 'slots']);

// group submit for particular user
Route::post('/group-submit',[UploadDetailsController::class, 'groupSubmit']);

//sign up submit
Route::post('/submit-design',[UploadDetailsController::class, 'designSubmit']);

//update setting
Route::post('/submit-slot',[UploadDetailsController::class, 'submitSlot']);

// delete date slot
Route::get('/delete-slots-from-date/{addslot_id}/{adddate_id}',[UploadDetailsController::class, 'deleteSlotsFromDate']);

//update setting----------------------------------------------------------------------------------------------
Route::get('/setting',[UploadDetailsController::class, 'setting']);

// Update design setting
Route::post('/setting-table',[UploadDetailsController::class, 'settingTable']);
// edit date setting
Route::get('/edit-date-setting/{id}',[UploadDetailsController::class, 'SettingeditDate']);

// edit date form setting
Route::post('/edit-date-form-setting',[UploadDetailsController::class, 'SettingeditDateForm']);

// edit rsvp setting
Route::get('/edit-rsvp-setting/{id}',[UploadDetailsController::class, 'SettingeditRsvp']);

// edit rsvp setting
Route::post('/rsvp-edit-submit-setting',[UploadDetailsController::class, 'SettingrsvpEditSubmit']);

// publish----------------------------------------------------------------------------------------------
Route::get('/publish',[UploadDetailsController::class, 'publish']);
// edit date publish
Route::get('/edit-date-publish/{id}',[UploadDetailsController::class, 'publisheditDate']);

// edit date form setting
Route::post('/edit-date-form-publish',[UploadDetailsController::class, 'publisheditDateForm']);

// edit rsvp setting
Route::get('/edit-rsvp-publish/{id}',[UploadDetailsController::class, 'publisheditRsvp']);

// edit rsvp setting
Route::post('/rsvp-edit-submit-publish',[UploadDetailsController::class, 'publishrsvpEditSubmit']);

// edit date form setting
Route::post('/update-publish',[UploadDetailsController::class, 'updatePublish']);
// -----------------------------------------------------------------------------------------------------------
Route::match(['GET','POST'],'/share/{code}/{id}',[MyAccountController::class,'CheckReferral']);


// process signup-----------------------------------------------------------------------------------
Route::get('/process/{adddate_id}/{addslot_id}',[UploadDetailsController::class, 'processSignup']);
Route::get('/edit-process/{adddate_id}/{addslot_id}/{refer_id}',[UploadDetailsController::class, 'EditprocessSignup']);

//referral slot bookin by user
Route::post('/referral-accepted',[UploadDetailsController::class, 'referralAccepted']);
Route::post('/update-referral-accepted',[UploadDetailsController::class, 'UpdatereferralAccepted']);

//Thanks Page
Route::get('/thanks',[UploadDetailsController::class, 'thanks']);

// delete date
Route::get('/delete-date/{id}',[UploadDetailsController::class, 'deleteDate']);

// edit date
Route::get('/edit-date/{id}',[UploadDetailsController::class, 'editDate']);

// edit date form
Route::post('/edit-date-form',[UploadDetailsController::class, 'editDateForm']);

// edit rsvp
Route::get('/edit-rsvp/{id}',[UploadDetailsController::class, 'editRsvp']);

// edit rsvp
Route::post('/rsvp-edit-submit',[UploadDetailsController::class, 'rsvpEditSubmit']);

// My Account Part

Route::get('/myaccount',[MyAccountController::class, 'myaccount']);

// My share Part

Route::get('/share',[MyAccountController::class, 'share']);






// edit group

Route::get('/edit-group/{addslot_id}/{adddate_id}',[MyAccountController::class, 'editGroup']);

// delete group

Route::get('/delete-accepted-user/{id}',[MyAccountController::class, 'deleteAcceptedUser']);

// add member manually

Route::post('/add-member',[MyAccountController::class, 'addMember']);

// edit created group

Route::get('/edit-created-group/{id}',[MyAccountController::class, 'editCreatedGroup']);

// submit modify group

Route::post('/modify-design-publish',[MyAccountController::class, 'modifyDesignPublish']);

// edit date publish
Route::get('/edit-date-modify/{id}',[MyAccountController::class, 'modifyeditDate']);

// edit date form setting
Route::post('/edit-date-form-modify',[MyAccountController::class, 'modifyeditDateForm']);

// edit rsvp setting
Route::get('/edit-rsvp-modify/{id}',[MyAccountController::class, 'modifyeditRsvp']);

// edit rsvp setting
Route::post('/rsvp-edit-submit-modify',[MyAccountController::class, 'modifyrsvpEditSubmit']);

// delete created group

Route::get('/delete-created-group/{id}',[MyAccountController::class, 'deleteCreatedGroup']);


// edit created group

Route::get('/clone-created-group/{id}',[MyAccountController::class, 'cloneCreatedGroup']);

// clone submit created group

Route::post('/clone-design-publish',[MyAccountController::class, 'cloneDesignGroup']);








