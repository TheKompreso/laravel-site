<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Вывод всех записей
     */
    public function index() : void
    {
        abort(404);
    }
    /**
     * Показ формы создания
     */
    public function create() : void
    {
        abort(404);
    }
    /**
     * Показ определенной записи
     */
    public function show($game): \Illuminate\Http\JsonResponse
    {
        return response()->json([
           'message' => 'done'
        ]);
    }
    /**
     * Создание ресурса
     */
    public function store() : void
    {
        abort(404);
    }
    /**
     * Показ формы редактирования
     */
    public function edit() : void
    {
        abort(401);
    }
    /**
     * Обновление ресурса
     */
    public function update() : void
    {
        abort(404);
    }
    /**
     * Удаление записи
     */
    public function destroy() : void
    {
        abort(404);
    }
}
