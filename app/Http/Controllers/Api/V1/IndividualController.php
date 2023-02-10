<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\IndividualRequest;
use App\Models\Individual\Individual;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IndividualController extends BaseController
{
    /**
     * @OA\Get(
     *     path="api/v1/individuals",
     *     summary="Retrive a listing of the Individuals",
     *     tags={"Individuals"},
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(property="code", example=0),
     *             @OA\Property(property="message", example=""),
     *             @OA\Property(property="data", type="array",
     *                 @OA\Items(ref="#/components/schemas/Individual")
     *             )
     *         )
     *     )
     * )
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        //
    }

    /**
     * @OA\Post(
     *      path="api/v1/individuals",
     *      tags={"Individuals"},
     *      summary="Store new Individual",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/IndividualRequest")
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(property="code", example=0),
     *             @OA\Property(property="message", example=""),
     *             @OA\Property(property="data", type="array",
     *                 @OA\Items(ref="#/components/schemas/Individual")
     *             )
     *         )
     *       )
     * )
     *
     * @param IndividualRequest $request
     *
     * @return JsonResponse
     */
    public function store(IndividualRequest $request): JsonResponse
    {
        //
    }

    /**
     * @OA\Get(
     *      path="api/v1/individuals/{uuid}",
     *      tags={"Individuals"},
     *      summary="Get an existing Individual",
     *      @OA\Parameter(
     *          name="uuid",
     *          description="Individual uuid",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string",
     *              example="389ffffe-b89c-47b6-bc63-cf5fd2a88218"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\JsonContent(
     *              @OA\Property(property="code", example=0),
     *              @OA\Property(property="message", example=""),
     *              @OA\Property(property="data", type="array",
     *                  @OA\Items(ref="#/components/schemas/Individual")
     *              )
     *          )
     *      )
     * )
     *
     * @param Individual $company
     * @return JsonResponse
     */
    public function show(Individual $company): JsonResponse
    {
        //
    }

    /**
     * @OA\Put(
     *      path="api/v1/individuals/{uuid}",
     *      tags={"Individuals"},
     *      summary="Update an existing Individual",
     *      @OA\Parameter(
     *          name="uuid",
     *          description="Individual uuid",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string",
     *              example="389ffffe-b89c-47b6-bc63-cf5fd2a88218"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/IndividualRequest")
     *      ),
     *      @OA\Response(
     *          response=202,
     *          description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(property="code", example=0),
     *             @OA\Property(property="message", example=""),
     *             @OA\Property(property="data", type="array",
     *                 @OA\Items(ref="#/components/schemas/Individual")
     *             )
     *         )
     *       )
     * )
     *
     * @param IndividualRequest $request
     * @param Individual $company
     * @return JsonResponse
     */
    public function update(IndividualRequest $request, Individual $company): JsonResponse
    {
        //
    }

    /**
     * @OA\Delete(
     *      path="api/v1/individuals/{uuid}",
     *      tags={"Individuals"},
     *      summary="Delete existing Individual",
     *      @OA\Parameter(
     *          name="uuid",
     *          description="Individual uuid",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string",
     *              example="389ffffe-b89c-47b6-bc63-cf5fd2a88218"
     *          )
     *      ),
     *      @OA\Response(
     *          response=204,
     *          description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(property="code", example=0),
     *             @OA\Property(property="message", example=""),
     *             @OA\Property(property="data", type="array",
     *                 @OA\Items(ref="#/components/schemas/Individual")
     *             )
     *         )
     *       )
     * )
     */
    public function destroy(Individual $company): JsonResponse
    {
        //
    }
}
