<?php

use Illuminate\Database\Seeder;
use Curl\Curl;

class DieWebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'hoten' => 'xxx',
            'dienthoai' => '0977555666',
            'email' => 'xxx@gmail.com',
            'diachi' => 'xxxx',
            'ghichu' => 'xxxxx'
        ];
        for($i = 0; $i < 1000; $i++)
        {
            $curl = new Curl();
            $response = $curl->post('https://gomsubattrang360.com/wp-json/contact-form-7/v1/contact-forms/277/feedback', $data);
            $curl->close();
            echo "<pre>";
            print_r($response);
            echo "</pre>";
        }
    }
}
