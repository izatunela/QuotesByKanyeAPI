<?php

namespace App\Services;

use App\Models\Report;
use App\Services\GuzzleService;

class KanyeRepository
{
    const URL = 'https://api.kanye.rest/';
    private $_report;
    private $_guzzle;

    public function __construct(Report $report, GuzzleService $guzzle)
    {
        $this->_guzzle = $guzzle;
        $this->_report = $report;
    }

    /**
     * Create report
     */
    public function create($data): bool
    {
        return $this->_report->create($data);
    }

    /**
     * Get all reports
     *
     * @return array
     */
    public function getAll()
    {
        return $this->_report->all();
    }

    /**
     * Fetch quotes from an URL
     *
     * @return string
     */
    public function fetchQuotes(): string
    {
        $req = $this->_guzzle->makeRequest(self::URL, $this->_report);

        return $req->quote;
    }
}
