<?php

namespace App\Domain\Convert\Jobs;

use App\Domain\Convert\Repositories\Contracts\DocListsRepository;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ConvertDoc implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $docId;

    /**
     * Create a new job instance.
     *
     * @param int $docId
     */
    public function __construct(int $docId)
    {
        //
        $this->docId = $docId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $DocListsRepository = app(DocListsRepository::class);
//        $docDetail = $DocListsRepository->find($this->docId);
    }
}
