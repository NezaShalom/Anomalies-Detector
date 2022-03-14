<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Serviceseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => "Icyemezo cy'uko uringaragu",
                'description' => "L'Attestation de Célibat est un document officiel qui certifie qu'une personne est célibataire. Ce document peut etre utilisé pour demander des services tels que l'Enregistrement du Mariage, un prêt bancaire, un service d'assurance, etc. Le dossier est traité par les autorités de l'Administration Locale au niveau du Secteur
                ",
                'price' => "500",
                'iminsi' => 1,
                'yatanzwe' => "MINALOC",
            ],
            [
                'name' => "Icyemezo cy'uko umuntu ariho",
                'description' => "Le Certificat de Vie est un document officiel qui certifie qu'une personne est en vie. Le dossier est traité par les autorités de l'Administration Locale au niveau du Secteur.",
                'price' => "1000",
                'iminsi' => 1,
                'yatanzwe' => "MINALOC",
            ],
            [
                'name' => "Gusaba Indangamuntu",
                'description' => "Iyi servisi ifasha umunyarwanda wese ubyifuza gusaba indangamuntu ubwa mbere. Usaba agomba kuba afite nomero y'ifishi muri NIDA. Udafite nomero y’ifishi agomba kujya kuyisaba umukozi ushinzwe irangamimerere mu murenge yitwaje icyangombwa kimuranga afite. Kubindi bisobanuro: info@nida.gov.rw",
                'price' => "500",
                'iminsi' => 30,
                'yatanzwe' => "NIDA",
            ],
            [
                'name' => "Icyemezo cy'ubupfakazi",
                'description' => "Icyemezo cy'Ubupfakazi ni icyemezo cyiriho umukono y'ushinzwe irangamimerere ku murenge. Gihabwa abanyarwanda iyo abo bashakanye bitabye Imana, cyikagaragaza irangamimerere yabo. Dosiye isaba yoherezwa mu buyobozi bw’inzego z'ibanze ku murenge kugirango isuzumwe.",
                'price' => "1500",
                'iminsi' => 1,
                'yatanzwe' => "MINALOC",
            ],

            [
                'name' => "Icyangombwa cyogutwara byagateganyo",
                'description' => "VBUSUDVBVDBDVBDSUSDBV.",
                'price' => "2000",
                'iminsi' => 3,
                'yatanzwe' => "MINALOC",
            ],

            [
                'name' => "Icyemezo cy'ubwenegihugu",
                'description' => "Icyemezo cy' Ubwenegihugu gihabwa umunyarwanda kugirango gihamye ko afite ubwenegihugu bw'u Rwanda.Dosiye isaba yoherezwa ku buyobozi bw’inzego z’ibanze ku rwego rw'umurenge kugirango isuzumwe.",
                'price' => "1500",
                'iminsi' => 1,
                'yatanzwe' => "MINALOC",
            ],

            [
                'name' => "Icyemezo gisimbura indangamuntu",
                'description' => "Icyangombwa gisimbura indangamuntu yatakaye gihabwa abanyarwanda kugirango bagikoreshe by'agateganyo mu gihe bategereje gukorerwa indangamuntu nshya.. Dosiye isaba yoherezwa ku buyobozi bwu2019inzego zu2019ibanze ku rwego rw'umurenge kugirango isuzumwe.",
                'price' => "500",
                'iminsi' => 1,
                'yatanzwe' => "MINALOC",
            ],

            [
                'name' => "Icyemezo cy'ubutane",
                'description' => "Icyemezo cy'uwatandukanye n'uwo bashakanye gihabwa abanyarwanda bamaze gusesa amasezerano yo gushyingirwa. Icyi cyemezo gitangwa na serivisi y'rangamimerere cyikemeza ko ugihawe yatandukanye n'uwo bashakanye nyuma y'uko byemejwe n'urukiko. Gitangirwa ku murenge, abagisaba berekana inyandiko y'urubanza rwemeza ko batandukanye.",
                'price' => "1500",
                'iminsi' => 1,
                'yatanzwe' => "MINALOC",
            ],

            [
                'name' => "Serivisi z'ishyingirwa",
                'description' => "Kwandikisha ishyingirwa bifasha abanyarwanda n'abanyamahanga baba mu Rwanda kwiyandikisha kugirango bashyingirwe byemewe n'amategeko. Mbere yo gushyingirwa, abashaka gushyingirwa bagomba kwiyandikisha iminsi 21 mbere y'uko bashyingirwa. Iyo ntambogamizi zihari, ishyingirwa riraba, abayobozi b'umurenge baha abashyingiranwe inyandiko y'ishyingirwa.",
                'price' => "1500",
                'iminsi' => 3,
                'yatanzwe' => "MINALOC",
            ],

            [
                'name' => "Icyangombwa cyerekana ko umuntu atakatiwe nincyiko",
                'description' => "Iyi serivisi ifasha abanyarwanda n'abanyamahanga baba cyangwa babaye mu Rwanda gusaba icyangombwa cyerekana ko umuntu yakatiwe cg atakatiwe n'inkiko. Iki cyangombwa kimara amezi 6.",
                'price' => "1200",
                'iminsi' => 3,
                'yatanzwe' => "NPPA",
            ],
        ]);
    }
}
