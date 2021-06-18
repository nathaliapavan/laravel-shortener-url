<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('urls')->insert([
            [
                'original_url' => 'https://produto.mercadolivre.com.br/MLB-1635456979-boneco-funko-pop-the-mandalorian-baby-yoda-com-copo-378-_JM#position=8&search_layout=grid&type=item&tracking_id=e9286d72-4c3c-465c-9735-b03b456448ea',
                'expiration_date' => date('Y-m-d', strtotime('+7 days')),
                "shortener_url" => "http://127.0.0.1:8000/api/09JR2",
            ],
            [
                'original_url' => 'https://produto.mercadolivre.com.br/MLB-1533180132-boneco-funko-pop-movies-john-wick-com-dog-cachorro-580-_JM#position=12&search_layout=grid&type=pad&tracking_id=e9286d72-4c3c-465c-9735-b03b456448ea&is_advertising=true&ad_domain=VQCATCORE_LST&ad_position=12&ad_click_id=YzQ1NzFkZjgtMTY2Yi00YjAyLTlmZGItNjRhNDhjZDgxZTdh',
                'expiration_date' => date('Y-m-d', strtotime('+7 days')),
                "shortener_url" => "http://127.0.0.1:8000/api/YQ9to",
            ],
            [
                'original_url' => 'https://produto.mercadolivre.com.br/MLB-1411615104-malevola-maleficent-627-mistress-of-evil-funko-pop-_JM#position=10&search_layout=grid&type=item&tracking_id=e9286d72-4c3c-465c-9735-b03b456448ea',
                'expiration_date' => date('Y-m-d', strtotime('+7 days')),
                "shortener_url" => "http://127.0.0.1:8000/api/ZjzY1",
            ],
            [
                'original_url' => 'https://produto.mercadolivre.com.br/MLB-1799225895-boneco-funko-pop-freddie-mercury-183-queen-rocks-live-aid-_JM#position=13&search_layout=grid&type=item&tracking_id=e9286d72-4c3c-465c-9735-b03b456448ea',
                'expiration_date' => date('Y-m-d', strtotime('+7 days')),
                "shortener_url" => "http://127.0.0.1:8000/api/XaxmJ",
            ],
            [
                'original_url' => 'https://produto.mercadolivre.com.br/MLB-1803861250-boneco-funko-pop-rocks-queen-freddie-mercury-king-184-_JM#position=18&search_layout=grid&type=item&tracking_id=e9286d72-4c3c-465c-9735-b03b456448ea',
                'expiration_date' => date('Y-m-d', strtotime('+7 days')),
                "shortener_url" => "http://127.0.0.1:8000/api/hMjOL",
            ],
            [
                'original_url' => 'https://produto.mercadolivre.com.br/MLB-1470487382-boneco-funko-pop-movies-harry-potter-hogwarts-01-_JM#position=16&search_layout=grid&type=item&tracking_id=e9286d72-4c3c-465c-9735-b03b456448ea',
                'expiration_date' => date('Y-m-d', strtotime('+7 days')),
                "shortener_url" => "http://127.0.0.1:8000/api/pIP1i",
            ],
            [
                'original_url' => 'https://produto.mercadolivre.com.br/MLB-1499261702-pop-funko-naruto-71-naruto-_JM#position=20&search_layout=grid&type=item&tracking_id=e9286d72-4c3c-465c-9735-b03b456448ea',
                'expiration_date' => date('Y-m-d', strtotime('+7 days')),
                "shortener_url" => "http://127.0.0.1:8000/api/t0eke",
            ],
            [
                'original_url' => 'https://produto.mercadolivre.com.br/MLB-1504497402-pop-funko-peely-566-fortnite-_JM#position=24&search_layout=grid&type=item&tracking_id=e9286d72-4c3c-465c-9735-b03b456448ea',
                'expiration_date' => date('Y-m-d', strtotime('+7 days')),
                "shortener_url" => "http://127.0.0.1:8000/api/Dn848",
            ],
            [
                'original_url' => 'https://produto.mercadolivre.com.br/MLB-1820025308-boneco-funko-pop-anime-avatar-a-lenda-de-aang-zuko-glow-838-_JM#position=31&search_layout=grid&type=item&tracking_id=e9286d72-4c3c-465c-9735-b03b456448ea',
                'expiration_date' => date('Y-m-d', strtotime('+7 days')),
                "shortener_url" => "http://127.0.0.1:8000/api/UwB9S",
            ],
            [
                'original_url' => 'https://produto.mercadolivre.com.br/MLB-1702199107-boneco-iron-spider-287-avengers-infinity-war-funko-pop-_JM#position=35&search_layout=grid&type=item&tracking_id=e9286d72-4c3c-465c-9735-b03b456448ea',
                'expiration_date' => date('Y-m-d', strtotime('+7 days')),
                "shortener_url" => "http://127.0.0.1:8000/api/As7uU",
            ],
            [
                'original_url' => 'https://produto.mercadolivre.com.br/MLB-1626827722-boneco-funko-pop-games-marvel-avengers-thor-gamer-verse-628-_JM#reco_item_pos=2&reco_backend=machinalis-seller-items-pdp&reco_backend_type=low_level&reco_client=vip-seller_items-above&reco_id=9dac30f7-8126-4a10-9f95-29a832954b59',
                'expiration_date' => date('Y-m-d', strtotime('+7 days')),
                "shortener_url" => "http://127.0.0.1:8000/api/MSoOU",
            ],
        ]);
    }
}
