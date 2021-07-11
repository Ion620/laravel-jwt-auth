<?php

namespace App\Console\Commands;
use App\Http\Controllers\PDFController;
use App\Repositories\PdfRepository;
use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Відправити розклад на пошту';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    protected $pdfRepository;
    public function __construct(PdfRepository $pdfRepository)
    {
        parent::__construct();
        $this->pdfRepository = $pdfRepository;
    }


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->pdfRepository->index();
    }
}
