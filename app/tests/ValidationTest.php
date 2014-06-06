<?php
use Illuminate\Support\Facades\Validator;

class ValidationTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function runtimeSettingCustomValidationMessage()
    {
        // 事前準備
        $assign = '1行目:';
        $input = array(
            'name' => ''
        );
        $rules = array(
            'name' => 'required'
        );
        $message = array(
            'required' => $assign . '名前を入力してください'
        );

        // 実行
        $actual = Validator::make($input, $rules, $message);

        // 検証
        $this->assertContains($assign . '名前を入力してください', $actual->messages()->toArray()['name']);
    }
}
