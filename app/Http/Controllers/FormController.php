<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormServiceRequest;
use App\Services\FormService;
use Illuminate\Http\JsonResponse;

class FormController extends Controller
{
    private $formService;
    public function __construct(FormService $formService)
    {
        $this->formService = $formService;   
    }
    public function store(FormServiceRequest $request): JsonResponse { 
        $form = $this->formService->create($request);
        return response()->json(['message' => 'Успешно сохранено','data'=>$form], 200);
    }
}
