<?php

namespace Tests\Unit;

use Mockery;
use App\Models\Report;
use App\Services\GuzzleService;
use PHPUnit\Framework\TestCase;
use App\Services\KanyeRepository;
use Illuminate\Database\Eloquent\Collection;

class KanyeRepositoryTest extends TestCase
{
    const MOCK_DATA = ['url'=>'www.test.com'];

    public $repository;
    public $guzzle;
    public $model;

    protected function setUp(): void
    {
        $this->model = \Mockery::mock('overload:App\Models\Report');
        $this->guzzle = Mockery::mock(GuzzleService::class);
        $this->repository = new KanyeRepository($this->model,$this->guzzle);
    }
   
    public function test_create(): void
    {
        $this->model->shouldReceive('create')->with(self::MOCK_DATA)
        ->andReturn(true);
        $result = $this->repository->create(self::MOCK_DATA);
        $this->assertEquals(true,$result);
    }

    public function test_getAll(): void
    {
        $this->model->shouldReceive('all')->andReturn([self::MOCK_DATA]);
        $result = $this->repository->getAll();
        $this->assertEquals([self::MOCK_DATA],$result);
    }

    public function test_fetchQuotes(): void
    {
        $this->guzzle->shouldReceive('makeRequest')->with($this->repository::URL,$this->model)
            ->andReturn((object)['quote'=>'Test quote']);
        $result = $this->repository->fetchQuotes();
        $this->assertEquals('Test quote',$result);
    }

    protected function tearDown(): void
    {
        $this->model = null;
        $this->guzzle = null;
        $this->repository = null;
        Mockery::close();
    }
}
