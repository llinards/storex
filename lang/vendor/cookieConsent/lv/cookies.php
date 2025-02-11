<?php

return [
    'title' => 'Mēs izmantojam sīkdatnes',
    'intro' => 'Šī vietne izmanto sīkdatnes, lai uzlabotu lietotāja pieredzi.',
    'link'  => 'Apskatiet mūsu <a href=":url">privātuma politiku</a>, lai iegūtu vairāk informācijas.',

    'essentials' => 'Tikai nepieciešamās',
    'all'        => 'Pieņemt visas',
    'customize'  => 'Pielāgot',
    'manage'     => 'Pārvaldīt sīkdatnes',
    'details'    => [
        'more' => 'Vairāk informācijas',
        'less' => 'Mazāk informācijas',
    ],
    'save'       => 'Saglabāt iestatījumus',
    'cookie'     => 'Sīkdatne',
    'purpose'    => 'Mērķis',
    'duration'   => 'Ilgums',
    'year'       => 'Gads|Gadi',
    'day'        => 'Diena|Dienas',
    'hour'       => 'Stunda|Stundas',
    'minute'     => 'Minūte|Minūtes',

    'categories' => [
        'essentials' => [
            'title'       => 'Nepieciešamās sīkdatnes',
            'description' => 'Ir sīkdatnes, kuras mums ir jāiekļauj, lai noteiktas tīmekļa lapas darbotos. Šī iemesla dēļ tās neprasa jūsu piekrišanu.',
        ],
        'analytics'  => [
            'title'       => 'Analītiskās sīkdatnes',
            'description' => 'Mēs tās izmantojam iekšējai izpētei, lai uzlabotu mūsu sniegtos pakalpojumus visiem lietotājiem. Šīs sīkdatnes analizē, kā jūs mijiedarbojaties ar mūsu vietni.',
        ],
        'optional'   => [
            'title'       => 'Izvēles sīkdatnes',
            'description' => 'Šīs sīkdatnes aktivizē funkcijas, kas var uzlabot jūsu lietotāja pieredzi, taču to trūkums neietekmēs jūsu iespēju pārlūkot mūsu vietni.',
        ],
    ],

    'defaults' => [
        'consent' => 'Izmanto, lai saglabātu lietotāja sīkdatņu piekrišanas iestatījumus.',
        'session' => 'Izmanto, lai identificētu lietotāja pārlūkošanas sesiju.',
        'csrf'    => 'Izmanto, lai aizsargātu gan lietotāju, gan mūsu vietni pret starpvietņu pieprasījumu viltošanas uzbrukumiem.',
        '_ga'     => 'Galvenā sīkdatne, ko izmanto Google Analytics, ļauj atšķirt vienu apmeklētāju no cita.',
        '_ga_ID'  => 'Izmanto Google Analytics, lai saglabātu sesijas stāvokli.',
        '_gid'    => 'Izmanto Google Analytics, lai identificētu lietotāju.',
        '_gat'    => 'Izmanto Google Analytics, lai ierobežotu pieprasījumu ātrumu.',
    ],
];
