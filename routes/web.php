<?php

use App\Enums\TypesEnum;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/enums', function () {
    $types =  TypesEnum::toValues();
    $typesArray =  TypesEnum::toArray();
    $typesLabels =  TypesEnum::toLabels();
    $typesCases =  TypesEnum::cases();
    $draft = TypesEnum::draft();
    $published = TypesEnum::Published();
    return [
        compact('types'),
        compact('typesArray'),
        compact('typesLabels'),
        $typesCases,
        $draft->value,
        $draft->label,
        $published,
        $published->label,
        $draft->equals(TypesEnum::draft()),
        $published->equals(TypesEnum::draft()),
    ];
});
