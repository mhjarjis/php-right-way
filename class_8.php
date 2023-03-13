<?php
//ARRAY
$programmingLanguages = [
    'php' => [
        'creator' => 'Rasmus Lerdorf',
        'extension' => '.php',
        'website' => 'www.php.net',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 8, 'releaseDate' => 'Nov 6, 2020'],
            ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019']
        ]
    ],
    'python' => [
        'creator' => 'Guido Van Rossum',
        'extension' => '.py',
        'website' => 'www.python.org',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
            ['version' => 3.8, 'releaseDate' => 'Oct 14, 2019']
        ]
    ],

];
$programmingLanguages['vue'] = [
  'creator'=>'Evan You'
];
echo $programmingLanguages['php']['versions'][0]['version'];
echo '<br>';
echo count($programmingLanguages);
echo '<pre>';
print_r($programmingLanguages);
echo '<pre>';