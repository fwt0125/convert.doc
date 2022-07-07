<?php

namespace App\Http\Controllers\Convert;

use App\Domain\Admin\Jobs\UnitImport;
use App\Domain\Convert\Jobs\Convert;
use App\Domain\Convert\Jobs\ConvertDoc;
use App\Domain\Convert\Services\DocListsService;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ConvertController extends Controller
{
    use DispatchesJobs;
    /**
     * @var DocListsService
     */
    private $service;

    public function __construct(DocListsService $docListsService)
    {
        $this->service = $docListsService;
    }

    public function index(Request $request)
    {
        try{
            $params = $request->all();
            return view('convert.upload');
        } catch (\Exception $exception) {
            return $this->failed($exception->getMessage());
        }
    }


    public function store(Request $request)
    {
        if ($request->hasFile('doc')) {
            try {
                $fileName = $request->file('doc')->getClientOriginalName();
                $destinationPath = storage_path() . "/upload/convert";
                $fileResult = $request->file('doc')->move($destinationPath, $fileName);

                $data = [
                    'name' => $fileName,
                    'source_file' => $fileResult->getRealPath(),
                ];
                $dbResult = $this->service->store($data);
                $this->dispatch(new ConvertDoc($dbResult->id));

            } catch (\Exception $exception) {
                return $this->failed($exception->getMessage());
            }
        }
    }
}
