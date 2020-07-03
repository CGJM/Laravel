<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//carrerupt
Route::get('carrer','ControladoresBd\CarrerController@getAllCarrer')->name('getAllCarrer');
Route::post('carrer','ControladoresBd\CarrerController@addCarrer')->name('addCarrer');
Route::get('carrer/{idCarrer}','ControladoresBd\CarrerController@getCarrer')->name('getCarrer');
Route::put('carrer/{idCarrer}','ControladoresBd\CarrerController@editCarrer')->name('editCarrer');
Route::delete('carrer/{idCarrer}','ControladoresBd\CarrerController@deleteCarrer')->name('deleteCarrer');

//group
Route::get('group','ControladoresBd\GroupController@getAllGroup')->name('getAllGroup');
Route::post('group','ControladoresBd\GroupController@addGroup')->name('addGroup');
Route::get('group/{idGroup}','ControladoresBd\GroupController@getGRoup')->name('getGroup');
Route::put('group/{idGroup}','ControladoresBd\GroupController@editGroup')->name('editGroup');
Route::delete('group/{idGroup}','ControladoresBd\GroupController@deleteGroup')->name('deleteGroup');

//subject
Route::get('subject','ControladoresBd\SubjectController@getAllSubject')->name('getAllSubject');
Route::post('subject','ControladoresBd\SubjectController@addSubject')->name('addSubject');
Route::get('subject/{idSubject}','ControladoresBd\SubjectController@getSubject')->name('getSubject');
Route::put('subject/{idSubject}','ControladoresBd\SubjectController@editSubject')->name('editSubject');
Route::delete('subject/{idSubject}','ControladoresBd\SubjectController@deleteSubject')->name('deleteSubject');

//student
Route::get('student','ControladoresBd\StudentController@getAllStudent')->name('getAllStudent');
Route::post('student','ControladoresBd\StudentController@addStudent')->name('addStudent');
Route::get('student/{idStudent}','ControladoresBd\StudentController@getStudent')->name('getStudent');
Route::put('student/{idStudent}','ControladoresBd\StudentController@editStudent')->name('editStudent');
Route::delete('student/{idStudent}','ControladoresBd\StudentController@deleteStudent')->name('deleteStudent');

//teacher
Route::get('teacher','ControladoresBd\TeacherController@getAllTeacher')->name('getAllTeacher');
Route::post('teacher','ControladoresBd\TeacherController@addTeacher')->name('addTeacher');
Route::get('teacher/{idTeacher}','ControladoresBd\TeacherController@getTeacher')->name('getTeacher');
Route::put('teacher/{idTeacher}','ControladoresBd\TeacherController@editTeacher')->name('editTeacher');
Route::delete('teacher/{idTeacher}','ControladoresBd\TeacherController@deleteTeacher')->name('deleteTeacher');

//schedule
Route::get('schedule','ControladoresBd\ScheduleController@getAllSchedule')->name('getAllSchedule');
Route::post('schedule','ControladoresBd\ScheduleController@addSchedule')->name('addSchedule');
Route::get('schedule/{idTeacher}','ControladoresBd\ScheduleController@getSchedule')->name('getSchedule');
Route::put('schedule/{idTeacher}','ControladoresBd\ScheduleController@editSchedule')->name('editSchedule');
Route::delete('schedule/{idTeacher}','ControladoresBd\ScheduleController@deleteSchedule')->name('deleteSchedule');

//login
#Route::post('login','Auth\LoginController@login')->name('login');
Route::post('registro','ControladoresBd\TeacherController@addUser')->name('registro');
