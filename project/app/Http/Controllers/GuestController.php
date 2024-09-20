<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuestRequest;
use App\Http\Requests\UpdateGuestRequest;
use App\Services\GuestService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class GuestController extends Controller
{
    protected GuestService $guestService;

    public function __construct(GuestService $guestService)
    {
        $this->guestService = $guestService;
    }

    /**
     * Получить список всех гостей.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json($this->guestService->list());
    }

    /**
     * Создать нового гостя.
     *
     * @param StoreGuestRequest $request
     * @return JsonResponse
     */
    public function store(StoreGuestRequest $request): JsonResponse
    {
        $guest = $this->guestService->create($request->all());

        return response()->json($guest, 201);
    }

    /**
     * Получить информацию о конкретном госте.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return response()->json($this->guestService->one($id));
    }

    /**
     * Обновить информацию о конкретном госте.
     *
     * @param UpdateGuestRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(UpdateGuestRequest $request, int $id): JsonResponse
    {
        $guest = $this->guestService->update($id, $request->all());

        return response()->json($guest);
    }

    /**
     * Удалить конкретного гостя.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): Response
    {
        $this->guestService->delete($id);

        return response()->noContent();
    }
}
