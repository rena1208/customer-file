<?php

namespace Tests\Feature;

use Illuminate\Http\Request;
use App\Http\Requests\PostItemRequest;

use App\User;
use App\Item;
use App\PurchaseData;
use App\PurchasedItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class PostItemTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function testGetPostItem()
    {
        $data = ['id' => 3];
        $items = Item::orderBy('name')->get();
        $response = $this->actingAs(User::find(1))->get(route('item.create', $data));
        $response->assertStatus(200)
                ->assertViewIs('customer.postItem')
                ->assertViewHasAll(['items' => $items]);
    }    

    public function testPostItem()
    {
        $data = ['id' => 9];
        $postItemData=[
                        'ids' => [10],
                        'quantities' => [1],
                        'customer_id' => 9,
                        'date' => '2022/10/30',
                        'comment' => 'テスト用',
                        'sample' => 'プロメディアル化粧水',
                        ];

        $response = $this->actingAs(User::find(1))->post(route('item.store',$data),$postItemData);
    
        $response->assertSessionHasNoErrors(); //エラーメッセージがないか
        $response->assertStatus(302); //リダイレクトされているか
        $response->assertRedirect(route('item.index',$data)); //購入履歴画面へリダイレクトされているか
        //保存したデータがデータベースに存在するか
        $this->assertDatabaseHas('purchase_data', ['date' => '2022/10/29']);
        $response = $this->get(route('item.index',$data));
        $response->assertStatus(200);

        $response->assertViewIs('customer.purchaseIndex');
        $response->assertSeeText($postItemData['comment']); //投稿したコメントが表示されているか
        
        //投稿された日付が"Y年m月d日"の形で表示されているか
        $response->assertSeeText(Carbon::parse($postItemData['date'])->format("Y年m月d日"));
    }
}
