<?php


namespace FavourUp\EcommAPI;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use Http;

class EcommAPI extends Model
{
	public function getWooCommerceProducts($base_url, $authentication = array('ck' => 'is_string', 'cs'=> 'is_string')){
        
        $client = new Client();
        $url = $base_url;
        $consumer_key = $authentication['ck'];
        $consumer_secret = $authentication['cs'];

        $response = $client->request('GET', $url, [
            'query' => [
                'consumer_key' => $consumer_key,
                'consumer_secret' => $consumer_secret,
            ],
        ]);

        if($response->getStatusCode() !== 200 ){
            return 'Cannot contact WooCommerce API';
        }

        return json_decode($response->getBody());

        // Laravel 7 Way
  //       $response = Http::get($url, [
		//     'consumer_key' => $consumer_key,
  //           'consumer_secret' => $consumer_secret,
		// ]);

  //       if($response->status() !== 200 ){
  //           return 'Cannot contact WooCommerce API';
  //       }

  //       dd($response->json());
    }
}
