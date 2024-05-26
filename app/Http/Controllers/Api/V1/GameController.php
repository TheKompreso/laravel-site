<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\GameModel;
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
    public function show($game_id): \Illuminate\Http\JsonResponse
    {
        if(is_numeric($game_id))
        {
            $game = GameModel::where('id', $game_id)->first();
            if($game == null)
            {
                return response()->json([
                    'message' => 'error',
                    'search_id' => $game_id,
                ],404);
            }
            else
            {
                return response()->json([
                    'message' => 'success',
                    'search_id' => $game_id,
                    'game' => $game,
                ], 200);
            }
        }
        else
        {
            return response()->json([
                'message' => 'error',
                'search_id' => $game_id,
            ],400);
        }
    }
    /**
     * Создание ресурса
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:60',
            'image_url' => 'required|min:3|max:100',
            'platform' => 'required|min:1|max:20',
            'release_date' => 'required|date_format:Y-m-d',
        ]);

        $game = new GameModel();
        $game->name = $validated['name'];
        $game->image_url = $validated['image_url'];
        $game->platform = $validated['platform'];
        $game->release_date = $validated['release_date'];

        $game->save();

        return response()->json([
            'message' => 'success',
            'game' => $game,
        ], 201);
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
    public function update(Request $request, $game_id)
    {
        $validated = $request->validate([
            'name' => 'nullable|min:3|max:60',
            'image_url' => 'nullable|min:3|max:100',
            'platform' => 'nullable|min:1|max:20',
            'release_date' => 'nullable|date_format:Y-m-d',
        ]);
        $game = GameModel::where('id', $game_id)->first();
        if($game == null)
        {
            return response()->json([],404);
        }
        $game->update($validated);
        return response()->json([
            'message' => 'success',
            'game_id' => $game_id,
            'game' => $game,
        ], 202);
    }

    /**
     * Удаление записи
     */
    public function destroy($game_id): \Illuminate\Http\JsonResponse
    {
        $game = GameModel::where('id', $game_id)->first();
        if($game == null) return response()->json([],404);
        return response()->json([
            'message' => 'success'
        ], 200);
    }
}
