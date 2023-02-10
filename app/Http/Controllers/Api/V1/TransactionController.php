<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\TransactionRequest;
use App\Models\Transaction\Transaction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TransactionController extends BaseController
{
    /**
     * @OA\Get(
     *     path="api/v1/transactions",
     *     summary="Retrive a listing of the Transactions",
     *     tags={"Transactions"},
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(property="code", example=0),
     *             @OA\Property(property="message", example=""),
     *             @OA\Property(property="data", type="array",
     *                 @OA\Items(ref="#/components/schemas/Transaction")
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
     *      path="api/v1/transactions",
     *      tags={"Transactions"},
     *      summary="Store new Transaction",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/TransactionRequest")
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(property="code", example=0),
     *             @OA\Property(property="message", example=""),
     *             @OA\Property(property="data", type="array",
     *                 @OA\Items(ref="#/components/schemas/Transaction")
     *             )
     *         )
     *       )
     * )
     *
     * @param TransactionRequest $request
     *
     * @return JsonResponse
     */
    public function store(TransactionRequest $request): JsonResponse
    {
        //
    }

    /**
     * @OA\Get(
     *      path="api/v1/transactions/{uuid}",
     *      tags={"Transactions"},
     *      summary="Get an existing Transaction",
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
     *                  @OA\Items(ref="#/components/schemas/Transaction")
     *              )
     *          )
     *      )
     * )
     *
     * @param Transaction $company
     * @return JsonResponse
     */
    public function show(Transaction $company): JsonResponse
    {
        //
    }

    /**
     * @OA\Put(
     *      path="api/v1/transactions/{uuid}",
     *      tags={"Transactions"},
     *      summary="Update an existing Transaction",
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
     *          @OA\JsonContent(ref="#/components/schemas/TransactionRequest")
     *      ),
     *      @OA\Response(
     *          response=202,
     *          description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(property="code", example=0),
     *             @OA\Property(property="message", example=""),
     *             @OA\Property(property="data", type="array",
     *                 @OA\Items(ref="#/components/schemas/Transaction")
     *             )
     *         )
     *       )
     * )
     *
     * @param TransactionRequest $request
     * @param Transaction $company
     * @return JsonResponse
     */
    public function update(TransactionRequest $request, Transaction $company): JsonResponse
    {
        //
    }

    /**
     * @OA\Delete(
     *      path="api/v1/transactions/{uuid}",
     *      tags={"Transactions"},
     *      summary="Delete existing Transaction",
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
     *                 @OA\Items(ref="#/components/schemas/Transaction")
     *             )
     *         )
     *       )
     * )
     */
    public function destroy(Transaction $company): JsonResponse
    {
        //
    }
}
