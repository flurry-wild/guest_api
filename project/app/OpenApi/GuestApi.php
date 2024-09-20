<?php

namespace App\OpenApi;

/**
 * @OA\Info(
 *     title="Guest API",
 *     version="1.0",
 *     description="API для управления гостями"
 * )
 */
class GuestApi {
    /**
     * @OA\Tag(
     *     name="guests",
     *     description="Operations about guests"
     * )
     */

    /**
     * @OA\Get(
     *     path="/api/guests",
     *     tags={"guests"},
     *     summary="Получить список всех гостей",
     *     @OA\Response(
     *         response=200,
     *         description="Список гостей успешно получен"
     *     ),
     * )
     */
    public function index()
    {
    }

    /**
     * @OA\Post(
     *     path="/api/guests",
     *     tags={"guests"},
     *     summary="Создать нового гостя",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Guest")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Гость успешно создан"
     *     )
     * )
     */
    public function store()
    {
    }

    /**
     * @OA\Get(
     *     path="/api/guests/{id}",
     *     tags={"guests"},
     *     summary="Получить информацию о конкретном госте",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID гостя",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Информация о госте успешно получена"
     *     )
     * )
     */
    public function show()
    {
    }

    /**
     * @OA\Put(
     *     path="/api/guests/{id}",
     *     tags={"guests"},
     *     summary="Обновить информацию о конкретном госте",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID гостя",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Guest")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Гость успешно обновлен"
     *     )
     * )
     */
    public function update()
    {
    }

    /**
     * @OA\Delete(
     *   path="/api/guests/{id}",
     *   tags={"guests"},
     *   summary="Удалить конкретного гостя",
     *   @OA\Parameter(
     *       name="id",
     *       in="path",
     *       required=true,
     *       description="ID гостя",
     *       @OA\Schema(type="integer")
     *   ),
     *   @OA\Response(
     *       response=204,
     *       description="Гость успешно удален"
     *   )
     *)
     */
    public function destroy()
    {
    }
}











