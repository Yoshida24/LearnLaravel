<?php

use Illuminate\Database\Seeder;
use App\restdata2;

class RestdataTable2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->addData('Google Japan', 'http://www.google.co.jp');
      $this->addData('Yahoo Japan','yaho.co.jp');
      $this->addData('livedoor', 'livedoor.co.jp');
    }

    private function addData(string $message, string $url){
      $param = [
        'message'=>$message,
        'url' => $url,
      ];
      $restdata = new restdata2;
      $restdata -> fill($param)->save();
    }
}
