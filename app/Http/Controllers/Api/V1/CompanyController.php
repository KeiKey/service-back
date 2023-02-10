<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\CompanyRequest;
use App\Models\Company\Company;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CompanyController extends BaseController
{
    /**
     * @OA\Get(
     *     path="api/v1/companies",
     *     summary="Retrive a listing of the Companies",
     *     tags={"Companies"},
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(property="code", example=0),
     *             @OA\Property(property="message", example=""),
     *             @OA\Property(property="data", type="array",
     *                 @OA\Items(ref="#/components/schemas/Company")
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
     *      path="api/v1/companies",
     *      tags={"Companies"},
     *      summary="Store new Company",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/CompanyRequest")
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(property="code", example=0),
     *             @OA\Property(property="message", example=""),
     *             @OA\Property(property="data", type="array",
     *                 @OA\Items(ref="#/components/schemas/Company")
     *             )
     *         )
     *       )
     * )
     *
     * @param CompanyRequest $request
     *
     * @return JsonResponse
     */
    public function store(CompanyRequest $request): JsonResponse
    {
        //
    }

    /**
     * @OA\Get(
     *      path="api/v1/companies/{uuid}",
     *      tags={"Companies"},
     *      summary="Get an existing Company",
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
     *                  @OA\Items(ref="#/components/schemas/Company")
     *              )
     *          )
     *      )
     * )
     *
     * @param Company $company
     * @return JsonResponse
     */
    public function show(Company $company): JsonResponse
    {
        //
    }

    /**
     * @OA\Put(
     *      path="api/v1/companies/{uuid}",
     *      tags={"Companies"},
     *      summary="Update an existing Company",
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
     *          @OA\JsonContent(ref="#/components/schemas/CompanyRequest")
     *      ),
     *      @OA\Response(
     *          response=202,
     *          description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(property="code", example=0),
     *             @OA\Property(property="message", example=""),
     *             @OA\Property(property="data", type="array",
     *                 @OA\Items(ref="#/components/schemas/Company")
     *             )
     *         )
     *       )
     * )
     *
     * @param CompanyRequest $request
     * @param Company $company
     * @return JsonResponse
     */
    public function update(CompanyRequest $request, Company $company): JsonResponse
    {
        //
    }

    /**
     * @OA\Delete(
     *      path="api/v1/companies/{uuid}",
     *      tags={"Companies"},
     *      summary="Delete existing Company",
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
     *                 @OA\Items(ref="#/components/schemas/Company")
     *             )
     *         )
     *       )
     * )
     */
    public function destroy(Company $company): JsonResponse
    {
        //
    }
}
