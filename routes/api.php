<?php

use App\Http\Controllers\NachdController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/* story */
Route::get('datastory', [NachdController::class, 'story'])-> name('datastory');
Route::get('datalaststory', [NachdController::class, 'laststory'])-> name('datalaststory');
Route::get('datalast4story', [NachdController::class, 'last4story'])-> name('datalast4story');
Route::get('datalast8story', [NachdController::class, 'last8story'])-> name('datalast8story');
Route::get('dataalllaststory', [NachdController::class, 'alllaststory'])-> name('dataalllaststory');
Route::get('dataCategoristory', [NachdController::class, 'Categoristory'])-> name('dataCategoristory');
/* post */
Route::get('datapost', [NachdController::class, 'post'])-> name('datapost');
Route::get('datalastpost', [NachdController::class, 'lastpost'])-> name('datalastpost');
Route::get('dataCategoripost', [NachdController::class, 'Categoripost'])-> name('dataCategoripost');
/* service */
Route::get('dataservice', [NachdController::class, 'service'])-> name('dataservice');
/*  project*/
Route::get('dataproject', [NachdController::class, 'project'])-> name('dataproject');
Route::get('datalastproject', [NachdController::class, 'lastproject'])-> name('datalastproject');
Route::get('dataCategoriproject', [NachdController::class, 'Categoriproject'])-> name('dataCategoriproject');
Route::get('databyproject/{id}', [NachdController::class, 'byproject'])-> name('databyproject');

/* profile//home */
Route::get('dataprofile', [NachdController::class, 'profile'])-> name('dataprofile');
/* nachdums */
Route::get('datanachdums', [NachdController::class, 'nachdum'])-> name('datanachdums');
Route::get('datanachdumservice', [NachdController::class, 'nachdumservice'])-> name('datanachdumservice');
Route::get('datanachdumsfeedback', [NachdController::class, 'nachdumsfeedback'])-> name('datanachdumsfeedback');

/* membre */
Route::get('datamembre', [NachdController::class, 'membre'])-> name('datamembre');
/* feedback */
Route::get('datafeedback', [NachdController::class, 'feedback'])-> name('datafeedback');
/* ariere plan */
Route::get('dataariereplan', [NachdController::class, 'ariereplan'])-> name('dataariereplan');
/* partenaire */
Route::get('datapartenaire', [NachdController::class, 'partenaire'])-> name('datapartenaire');
/* about us */
Route::get('dataaboutus', [NachdController::class, 'aboutus'])-> name('dataaboutus');
/* formulaire */
Route::post('datacontact', [NachdController::class, 'contact'])-> name('datacontact');
