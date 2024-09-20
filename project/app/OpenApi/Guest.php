<?php

namespace App\OpenApi;

/**
 * @OA\Schema(
 *     schema="Guest",
 *     type="object",
 *     required={"first_name", "last_name", "phone"},
 *     @OA\Property(property="first_name", type="string", example="Иван"),
 *     @OA\Property(property="last_name", type="string", example="Иванов"),
 *     @OA\Property(property="email", type="string", example="ivan@example.com"),
 *     @OA\Property(property="phone", type="string", example="+79161234567"),
 *     @OA\Property(property="country", type="string", example="Россия"),
 * )
 */
class Guest
{

}
