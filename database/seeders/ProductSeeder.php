<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => "Apple iPhone 13 (128 GB) - Azul - Distribuidor autorizado",
            'description'=> "Iphon nuevo con mucha pila",
            'price' => 15999,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '12345',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "Smart Tv Hisense A4 Series 43 A4h Led Full Hd 43 120hz 2022",
            'description'=> "Tele con pantalla Led de 43 pulgadas",
            'price' => 4099,
            'priceOff' => 48,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '54321',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "Batidora",
            'description'=> "la mejor batidora bate todo",
            'price' => 1000,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00000',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "collar para perro",
            'description'=> "haz que tu perro luzca bien",
            'price' => 100,
            'priceOff' => 10,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00001',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "xbox",
            'description'=> "consola series s xbox microsoft carbon black 1tb",
            'price' => 7699,
            'priceOff' => 5,
            'stock' => 6,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00002',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "nintendo switch",
            'description'=> "consola nintendo switch modelo oled blanca",
            'price' => 4944,
            'priceOff' => null,
            'stock' => 15,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00003',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "EA sports fc",
            'description'=> "videojuego fisico para nintendo switch",
            'price' => 1450,
            'priceOff' => null,
            'stock' => 12,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00004',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "play station 5",
            'description'=> "consola estandar",
            'price' => 9450,
            'priceOff' => null,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00005',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "control para nintendo switch",
            'description'=> "control inalambrico para mayor comodidad",
            'price' => 1349,
            'priceOff' => null,
            'stock' => 8,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00006',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "consola nintendo switch lite",
            'description'=> "llevala donde quieras color rosa",
            'price' => 3349,
            'priceOff' => null,
            'stock' => 7,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00007',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "mario kart",
            'description'=> "juego fisico para nintendo switch",
            'price' => 1054,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00008',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "animal crossing",
            'description'=> "juego fisico nintendo switch edition",
            'price' => 1320,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00009',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "the legend of zelda",
            'description'=> "juego fisico para nintendo switch",
            'price' => 1050,
            'priceOff' => null,
            'stock' => 2,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00010',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "luigis mansion",
            'description'=> "juego fisico para nintendo switch",
            'price' => 1045,
            'priceOff' => null,
            'stock' => 7,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00011',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "bundle videojuegos nintendo switch",
            'description'=> "contiene Super Smash Bros Ultimate y Mario party",
            'price' => 2149,
            'priceOff' => 10,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00012',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "Halo Infinite Microsoft Xbox",
            'description'=> "Juego fisico para xbox",
            'price' => 879,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00013',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "Kirby and the Forgoten Land",
            'description'=> "Juego fisico para Nintendo Switch",
            'price' => 1055,
            'priceOff' => null,
            'stock' => 6,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00014',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "Control Alámbrico Power A Xbox",
            'description'=> "Xbox Metallic Blue Camo",
            'price' => 749,
            'priceOff' => 25,
            'stock' => 8,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00015',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "Pokemon Legends Arceus Nintendo Switch",
            'description'=> "Juego fisico para Nintendo Switch",
            'price' => 1098,
            'priceOff' => 15,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00016',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "Tarjeta de regalo Xbox",
            'description'=> "Tarjeta de regalo Xbox mil pesos",
            'price' => 999,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00017',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "Joy-Con verde y rosa para Nintendo Switch",
            'description'=> "Controles inalambricos para Nintendo Switch",
            'price' => 1279,
            'priceOff' => 8,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00018',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "Steam Deck",
            'description'=> "Consola portatil 16GB",
            'price' => 9999,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00019',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "Kit gamer Volante pedales y palanca Logitech",
            'description'=> "Kit para Xbox one y PC G920",
            'price' => 4899,
            'priceOff' => 15,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00020',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "Olla Express Presto 6 Litros",
            'description'=> "Especial para hogares pequeños",
            'price' => 1299,
            'priceOff' => null,
            'stock' => 9,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00021',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Vaporera Digital Hamilton Beach",
            'description'=> "Hamilton Beach Negra",
            'price' => 899,
            'priceOff' => 10,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00022',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Juego de Cuchillos Ekco Triple Remache",
            'description'=> "6 piezas de cuchillos",
            'price' => 129,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00023',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Vajilla Corelle Frost 78 Piezas",
            'description'=> "Ideal para familias grandes",
            'price' => 4990,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00024',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Banca Zapatera Moderna Bossa",
            'description'=> "Práctica para recibidor",
            'price' => 2399,
            'priceOff' => 20,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00025',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Estante organizador 5 niveles",
            'description'=> "Estante Multiusos",
            'price' => 619,
            'priceOff' => null,
            'stock' => 2,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00026',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Deshidratador de Alimentos Hamilton Beach",
            'description'=> "Hamilton Beach Blanco",
            'price' => 1619,
            'priceOff' => null,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00027',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Escurridor de Trastes Ajustable Acero Inoxidable",
            'description'=> "Rack and Pack",
            'price' => 1499,
            'priceOff' => 50,
            'stock' => 6,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00028',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Bote de Basura de Acero Inoxidable con pedal",
            'description'=> "Evita los malos olores en tu hogar",
            'price' => 1199,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00029',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Bateria de cocina Jadecook 4 pzas con 5 cuchillos",
            'description'=> "Adiós a la grasa",
            'price' => 2999,
            'priceOff' => null,
            'stock' => 6,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00030',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Juego de 6 copas de vidrio",
            'description'=> "Ideal para Vino",
            'price' => 699,
            'priceOff' => null,
            'stock' => 8,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00031',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Plato Pastelero con base 33 cm",
            'description'=> "Ideal para pasteles grandes",
            'price' => 269,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00032',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Flanera Ekco Antihaderente 18 cm",
            'description'=> "Uso en horno y estufa",
            'price' => 159,
            'priceOff' => 5,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00033',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Molde para paletas de hielo reutilizables",
            'description'=> "Solo uso alimenticio",
            'price' => 149,
            'priceOff' => null,
            'stock' => 6,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00034',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Juego de tazas de medicion",
            'description'=> "4 piezas",
            'price' => 549,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00035',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Juego de duyas para reposteria",
            'description'=> "perfectas para decoración",
            'price' => 268,
            'priceOff' => null,
            'stock' => 7,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00036',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Kit para galletas navideñas",
            'description'=> "Indispensables para la venida de Santa",
            'price' => 389,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00037',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Juego de 3 moldes desmontables para pasteles",
            'description'=> "Moldes de 34 cm",
            'price' => 358,
            'priceOff' => 5,
            'stock' => 2,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00038',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Moldes de silicona para cupcakes reutilizables",
            'description'=> "12 piezas v1",
            'price' => 279,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00039',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Sofa Cama",
            'description'=> "Especial para reuniones inesperadas",
            'price' => 5800,
            'priceOff' => 9,
            'stock' => 1,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00040',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Sofa Cama",
            'description'=> "Especial para reuniones inesperadas",
            'price' => 5800,
            'priceOff' => 9,
            'stock' => 1,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '10040',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "Traje de baño juvenil de dama",
            'description'=> "1 pieza completa",
            'price' => 309,
            'priceOff' => null,
            'stock' => 7,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00041',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Set de pijama para dama",
            'description'=> "3 piezas",
            'price' => 499,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00042',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Pack 2 playeras para dama cuello V",
            'description'=> "Moda casual",
            'price' => 199,
            'priceOff' => null,
            'stock' => 6,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00043',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "vestido corte A para dama",
            'description'=> "Ideal para un dia de campo",
            'price' => 579,
            'priceOff' => 6,
            'stock' => 2,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00044',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "chamarra de mezclilla para dama",
            'description'=> "Dama corte slim",
            'price' => 899,
            'priceOff' => null,
            'stock' => 9,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00045',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Jeans para hombre corte recto",
            'description'=> "Slim fit azul",
            'price' => 479,
            'priceOff' => 25,
            'stock' => 2,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00046',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Playera Ghostbusters negra",
            'description'=> "Solo disponible en talla G",
            'price' => 169,
            'priceOff' => null,
            'stock' => 1,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00047',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Playera Guns N Roses",
            'description'=> "Solo disponible en talla M",
            'price' => 169,
            'priceOff' => null,
            'stock' => 1,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00048',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Playera Red Bull Racing",
            'description'=> "Playera Checo Perez oficial",
            'price' => 1899,
            'priceOff' => 25,
            'stock' => 6,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00049',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Tenis Puma Tiburion",
            'description'=> "Motosport Red Bull Racing",
            'price' => 1999,
            'priceOff' => 30,
            'stock' => 8,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00050',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Sudadera NFL San Francisco 49ers",
            'description'=> "NFL original",
            'price' => 419,
            'priceOff' => null,
            'stock' => 6,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00051',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Playera para niña de Disney Dumbo",
            'description'=> "Apparel Studio",
            'price' => 311,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00052',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Conjunto Nike Suit para niñas",
            'description'=> "Ideal para hiking",
            'price' => 1399,
            'priceOff' => 10,
            'stock' => 2,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00053',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Set 3 pzas Carter",
            'description'=> "Estampado animales 18M",
            'price' => 369,
            'priceOff' => 40,
            'stock' => 1,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00054',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Pijama para niño dinosaurios",
            'description'=> "18M en adelante",
            'price' => 299,
            'priceOff' => 20,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00055',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Playera Marvel para niño",
            'description'=> "18M en adelante",
            'price' => 99,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00056',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "chamarra para niño",
            'description'=> "Impermeable, ideal para caminar bajo la lluvia",
            'price' => 699,
            'priceOff' => null,
            'stock' => 9,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00057',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Botas impermeables para niño",
            'description'=> "Ideal para los pequeños exploradores del hogar",
            'price' => 399,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00058',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Tenis Converse para Mujer Plataforma Chuck Taylor",
            'description'=> "Luce aesthetic a donde vayas",
            'price' => 1899,
            'priceOff' => null,
            'stock' => 7,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00059',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Pantufla penguin",
            'description'=> "Mayor comodidad dentro de tu hogar",
            'price' => 999,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00060',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "Samsung Galaxy A54 256GB 8RAM",
            'description'=> "Graphite Samsung Galaxy",
            'price' => 5499,
            'priceOff' => null,
            'stock' => 6,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00061',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "iPhone 11 64 GB",
            'description'=> "Apple iPhone 11",
            'price' => 5384,
            'priceOff' => null,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00062',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Cámara deportiva GoPro Hero 10",
            'description'=> "graba momentos inesperados",
            'price' => 4994,
            'priceOff' => 35,
            'stock' => 1,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00063',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Cámara Fujifilm Instax Mini 90",
            'description'=> "Cámara instantanea",
            'price' => 4599,
            'priceOff' => 30,
            'stock' => 8,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00064',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "TV LG 70 Pulgadas Ultra HD 4K",
            'description'=> "LG original",
            'price' => 17119,
            'priceOff' => 20,
            'stock' => 2,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00065',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Licuadora Ninja Profesional",
            'description'=> "Licua todo",
            'price' => 2319,
            'priceOff' => 15,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00066',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Cafetera Estilosa para Espresso",
            'description'=> "Rinde 5 tazas",
            'price' => 2990,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00067',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Horno de conveccion Hamilton Beach",
            'description'=> "Hornea, rostiza y muchas funciones mas",
            'price' => 2549,
            'priceOff' => null,
            'stock' => 7,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00068',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Wafflera Master Chef",
            'description'=> "Como lo vio en TV",
            'price' => 499,
            'priceOff' => null,
            'stock' => 8,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00069',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Freidora de aire digital",
            'description'=> "10 en 1",
            'price' => 4599,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00070',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Lavasecadora LG 12 kg",
            'description'=> "2 funcones para ahorrar espacio en casa",
            'price' => 13969,
            'priceOff' => null,
            'stock' => 9,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00071',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Refrigerador Atvio AT-17MD",
            'description'=> "3 puertas",
            'price' => 21990,
            'priceOff' => null,
            'stock' => 8,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00072',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Estufa Acros de piso 30 pulgadas",
            'description'=> "6 hornillas 1 horno",
            'price' => 7590,
            'priceOff' => 15,
            'stock' => 2,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00073',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Horno de microondas",
            'description'=> "multifuncional",
            'price' => 1690,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00074',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Frigobar Coca-Cola 2.6 Pies",
            'description'=> "almacena 24 botellas de 500 ml",
            'price' => 4490,
            'priceOff' => null,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00075',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Cooler Enfriador de 115 latas y botellas AVERA",
            'description'=> "Ayuda a no combinar olores del refrigerador",
            'price' => 12700,
            'priceOff' => 35,
            'stock' => 7,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00076',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Cava de vino enfriadora AVERA",
            'description'=> "Capacidad de 33 botellas de vino",
            'price' => 11167,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00077',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Parrilla Acros de gas 24 pulgadas",
            'description'=> "4 parrilas ensamblable",
            'price' => 2990,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00078',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Multiolla de Presion Electrica",
            'description'=> "Capacidad 6 litros",
            'price' => 2258,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00079',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Smartwatch Xiaomi",
            'description'=> "Watch 2 Lite",
            'price' => 1299,
            'priceOff' => null,
            'stock' => 2,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00080',
            'category_id' => 4
        ]);

        DB::table('products')->insert([
            'name' => "Combo Secadora y Plancha profesional",
            'description'=> "Ideal para iniciar tu peluqueria",
            'price' => 1759,
            'priceOff' => null,
            'stock' => 2,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00081',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "Cepillo Secador Revlon",
            'description'=> "voluminizador oval",
            'price' => 1099,
            'priceOff' => 15,
            'stock' => 1,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00082',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "Serum Niacimide The Ordinary",
            'description'=> "Juventud facial",
            'price' => 399,
            'priceOff' => null,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00083',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "Serum Acido Glicolico The Ordinary",
            'description'=> "Para noche",
            'price' => 599,
            'priceOff' => 45,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00084',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "Fotoprotector Isdin Dry",
            'description'=> "Uso diario",
            'price' => 427,
            'priceOff' => null,
            'stock' => 7,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00085',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "Crema CeraVe hidratante 454g",
            'description'=> "Uso diario piel seca",
            'price' => 364,
            'priceOff' => null,
            'stock' => 8,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00086',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "Polvo compacto Revlon 7.1g",
            'description'=> "Photo ready",
            'price' => 289,
            'priceOff' => 15,
            'stock' => 9,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00087',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "Bloqueador solar antimanchas",
            'description'=> "Piel mixta y grasa",
            'price' => 289,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00088',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "Desmaquillante bifasico 150ml",
            'description'=> "Vitamina E y colageno",
            'price' => 198,
            'priceOff' => null,
            'stock' => 6,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00089',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "Agua de rosas hidratante",
            'description'=> "Para rostro",
            'price' => 189,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00090',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "Paleta de sombras revlon Color Stay",
            'description'=> "Colores basicos",
            'price' => 232,
            'priceOff' => 10,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00091',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "Balsamo labial labello original",
            'description'=> "Uso diario",
            'price' => 92,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00092',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "Labial liquido Revlon",
            'description'=> "Satin Fire de noche",
            'price' => 179,
            'priceOff' => null,
            'stock' => 2,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00093',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "Bissu polvo fijador traslucido",
            'description'=> "Bissu traslucido 12g",
            'price' => 119,
            'priceOff' => null,
            'stock' => 9,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00094',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "Pre-maquillaje hidratante reafirmante",
            'description'=> "Uso de dia",
            'price' => 348,
            'priceOff' => null,
            'stock' => 8,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00095',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "Polvo de arroz natural",
            'description'=> "Ricepowder",
            'price' => 249,
            'priceOff' => null,
            'stock' => 7,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00096',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "The Top Choice Croqueta para perro",
            'description'=> "22 kg",
            'price' => 599,
            'priceOff' => 15,
            'stock' => 7,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00097',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Croquetas para perro Nupec",
            'description'=> "20 kg Original",
            'price' => 1498,
            'priceOff' => null,
            'stock' => 6,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00098',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Alimento humedo para gato",
            'description'=> "Purina Felix 12 pack",
            'price' => 109,
            'priceOff' => null,
            'stock' => 7,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00099',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Transportadora con camita",
            'description'=> "aguanta hasta 9 kg",
            'price' => 1599,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00100',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Cama para mascota",
            'description'=> "Cama cuna grande",
            'price' => 699,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00101',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Cama para mascota",
            'description'=> "Cama cuna grande",
            'price' => 699,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '10101',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Casa para mascota",
            'description'=> "ideal para perros grandes",
            'price' => 2500,
            'priceOff' => 15,
            'stock' => 6,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00102',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Casa rascador y centro de entretenimiento para gatos",
            'description'=> "ideal para dos gatos",
            'price' => 1322,
            'priceOff' => null,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00103',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Pasta y cepillo dental para perro",
            'description'=> "Sabor Hierbabuena 90g",
            'price' => 149,
            'priceOff' => null,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00104',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Tabletas masticables para perro 60 tabs",
            'description'=> "Vitaminas para perros",
            'price' => 236,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00105',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Correa para perro retractil con Luz led",
            'description'=> "Ideal para paseos de noche",
            'price' => 199,
            'priceOff' => 25,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00106',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Corral para mascotas plegable y con malla",
            'description'=> "Para mascotas pequeñas",
            'price' => 999,
            'priceOff' => null,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00107',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "6 pack shampoo para mascotas 600ml",
            'description'=> "Clean & Dry",
            'price' => 270,
            'priceOff' => null,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00108',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Pipeta antipulgas para perro",
            'description'=> "apto para perros de hasta 6 kg",
            'price' => 279,
            'priceOff' => null,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00109',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Plato para perro 24 oz",
            'description'=> "Fancy pets",
            'price' => 92,
            'priceOff' => null,
            'stock' => 7,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00110',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Set para perro The mandalorian",
            'description'=> "Correa y collar",
            'price' => 499,
            'priceOff' => 49,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00111',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Premios para perro Canine Chew",
            'description'=> "Bastones de carne",
            'price' => 226,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00112',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Cama elevada con casa azul marino para perro",
            'description'=> "Pet products",
            'price' => 2598,
            'priceOff' => 30,
            'stock' => 6,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00113',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Cama para perro chico sasquatch",
            'description'=> "2 kg maximo",
            'price' => 599,
            'priceOff' => null,
            'stock' => 8,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00114',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Juguete para perro Marvel",
            'description'=> "Pelota Avengers",
            'price' => 179,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00115',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Pechera para perro arnes y correa",
            'description'=> "The mandalorian",
            'price' => 529,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00116',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Dispensador de bolsas para residuos de mascota",
            'description'=> "5 rollos de 20 pzas",
            'price' => 145,
            'priceOff' => null,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00117',
            'category_id' => 6
        ]);

        DB::table('products')->insert([
            'name' => "Muñeca de colección Barbie Signature Maria Felix",
            'description'=> "Barbie Signature",
            'price' => 1499,
            'priceOff' => null,
            'stock' => 9,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00118',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Muñeco de colección Barbie Signature Dia de Muertos Ken",
            'description'=> "Barbie Signature 2023",
            'price' => 1899,
            'priceOff' => null,
            'stock' => 9,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00119',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Rompecabezas 4D Puzzles Spin Master Spiderman",
            'description'=> "Casco spiderman",
            'price' => 279,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00120',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Juguete de Construcción Mega Construx Barbie Casa Malibu",
            'description'=> "Mega Construx",
            'price' => 749,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00121',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Pista Hot Wheels City Ultiate Garage",
            'description'=> "Hot Wheels",
            'price' => 2999,
            'priceOff' => null,
            'stock' => 6,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00122',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Patines NEXT de Aprendizaje Tallas Ajustables",
            'description'=> "16-19",
            'price' => 499,
            'priceOff' => 25,
            'stock' => 7,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00123',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Destreza Hasbro Gaming",
            'description'=> "Hasbro Multicolor",
            'price' => 599,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00124',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Juego de Mesa Spin Master Headbanz",
            'description'=> "Family Fall",
            'price' => 345,
            'priceOff' => 35,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00125',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Mega casa Polly Pocket Mattel de Sorpresas",
            'description'=> "Polly Pocket",
            'price' => 1809,
            'priceOff' => 15,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00126',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Scooter Apache Cars con Luces en Plataforma",
            'description'=> "3 ruedas",
            'price' => 799,
            'priceOff' => null,
            'stock' => 8,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00127',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Monopoly Clásico Hasbro Gaming",
            'description'=> "Juego de Mesa",
            'price' => 599,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00128',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Set de Juego My Little Pony Hasbro Sunny Starscout",
            'description'=> "Camion de batidos",
            'price' => 619,
            'priceOff' => null,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00129',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Set de Figuras Gabby Dollhouse Fiesta de Baile",
            'description'=> "Gabby Dollhouse",
            'price' => 629,
            'priceOff' => null,
            'stock' => 4,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00130',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "My Little Pony Pet Friends 12 Pack",
            'description'=> "My Little Pony",
            'price' => 617,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00131',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Set de Juego Barbie Profesiones Clinica de Atencion Medica",
            'description'=> "Muñeca se vende por separado",
            'price' => 1429,
            'priceOff' => 30,
            'stock' => 7,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00132',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Casa de los Sueños de Barbie",
            'description'=> "Casa 2021",
            'price' => 4399,
            'priceOff' => null,
            'stock' => 2,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00133',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Muñeca Bratz Meygan Original",
            'description'=> "Bratz",
            'price' => 759,
            'priceOff' => null,
            'stock' => 5,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00134',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Squishville Playset de Peluche Tienda de Dulces",
            'description'=> "Squishville",
            'price' => 799,
            'priceOff' => 35,
            'stock' => 2,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00135',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Peluche Flashlight Skye Paw Patrol",
            'description'=> "Spin Master con Sonido",
            'price' => 689,
            'priceOff' => null,
            'stock' => 8,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00136',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "Peluche Hasbro Furreal Kitty Morado",
            'description'=> "Baterias no incluidas",
            'price' => 295,
            'priceOff' => null,
            'stock' => 2,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00137',
            'category_id' => 7
        ]);

        DB::table('products')->insert([
            'name' => "BTS BT21 Peluche de Chimmy",
            'description'=> "20 cm BTS",
            'price' => 375,
            'priceOff' => null,
            'stock' => 3,
            'image' => json_encode(['img1.jpg', 'img2.jpg']),
            'sku' => '00138',
            'category_id' => 7
        ]);
    }
}
