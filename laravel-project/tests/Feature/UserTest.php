<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Post;

class UserTest extends TestCase
{
    use RefreshDatabase;

    const TABLE_NAME = 'users';

    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @return int
     * @throws \Exception
     */
    private function factory(): int
    {
        $count = 3;

        // $countの数だけ、新規にUserを作成する
        User::factory($count)->create();

        return $count;
    }

    /**
     * @test
     * @group Model
     * @group User
     *
     * @return void
     * @throws \Exception
     */
    public function 全件取得(): void
    {
        $count = $this->factory();

        // usersテーブルに$countの数だけデータが挿入されているか
        $this->assertDatabaseCount(table: self::TABLE_NAME, count: $count);

        $result = User::all();

        // 全件取得できているか
        $this->assertCount(expectedCount: $count, haystack: $result);
    }
}
