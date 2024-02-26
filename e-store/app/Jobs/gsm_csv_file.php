<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use app\Models\Gsm;


class gsm_csv_file implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels,Batchable;
    public $header;
    public $data;

    /**
     * Create a new job instance.
     */
    public function __construct($data,$header)
    {
        //
        $this->data=$data instanceof Collection ? $data->toArray() : $data;
        $this->header=$header;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach($this->data as $phone){
            $phoneInput= array_combine($this->header,$phone);
            Gsm::create($phoneInput);
        }
    }
}
