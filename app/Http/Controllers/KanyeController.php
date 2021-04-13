<?php

namespace App\Http\Controllers;

use App\Services\KanyeRepository;

class KanyeController extends Controller
{
    /**
     * Repository
     *
     * @var App\Services\KanyeRepository
     */
    private $_repository;
    
    /**
     * KanyeController constructor
     *
     * @param KanyeRepository $repository
     */

    public function __construct(KanyeRepository $repository){
        $this->_repository = $repository;
    }

    /**
     * Show quotes in a view
     *
     * @return Illuminate\View\View
     */
    public function showQuotes()
    {
        return view('index',['data'=>$this->fetchQuotes()]);
    }

    /**
     * Fetch data from API
     *
     * @return array
     */
    public function fetchQuotes(): array
    {
        for($i = 0; $i<5; $i++){

            $data[] = $this->_repository->fetchQuotes();

        }

        return $data;
    }

    /**
     * Show reports in a view
     *
     * @return Illuminate\View\View
     */
    public function showReports()
    {
        return view('reports',['data'=>$this->_repository->getAll()]);
    }
}
