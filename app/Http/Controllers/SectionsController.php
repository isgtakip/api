<?php


namespace App\Http\Controllers;
use App\Interfaces\ISections;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SectionsController extends Controller
{
    //
    private ISections $sectionsRepository;
 
    public function __construct(ISections $_sectionsRepository)
    {
        $this->sectionsRepository = $_sectionsRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json($this->sectionsRepository->getAllSections());
    }

    public function store(Request $request): JsonResponse 
    {

        return response()->json($this->sectionsRepository->updateSectionsOrder($request->sections));
    }

    public function update(Request $request, $id):JsonResponse
    {
       
        return response()->json($this->sectionsRepository->updateSection($request->Html,$id),200);      
    
    }

}
