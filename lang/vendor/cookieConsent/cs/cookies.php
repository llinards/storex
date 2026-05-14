<?php

return [
    'title' => 'Používáme soubory cookie',
    'intro' => 'Tento web používá soubory cookie ke zlepšení celkového uživatelského zážitku.',
    'link' => 'Podívejte se na naše <a href=":url">Zásady používání cookies</a> pro více informací.',

    'essentials' => 'Pouze nezbytné',
    'all' => 'Přijmout vše',
    'customize' => 'Upravit',
    'manage' => 'Spravovat cookies',
    'details' => [
        'more' => 'Více informací',
        'less' => 'Méně informací',
    ],
    'save' => 'Uložit nastavení',
    'cookie' => 'Cookie',
    'purpose' => 'Účel',
    'duration' => 'Trvání',
    'year' => 'Rok|Roky|Let',
    'day' => 'Den|Dny|Dní',
    'hour' => 'Hodina|Hodiny|Hodin',
    'minute' => 'Minuta|Minuty|Minut',

    'categories' => [
        'essentials' => [
            'title' => 'Nezbytné cookies',
            'description' => 'Některé cookies musíme zahrnout, aby určité webové stránky fungovaly. Z tohoto důvodu nevyžadují váš souhlas.',
        ],
        'analytics' => [
            'title' => 'Analytické cookies',
            'description' => 'Tyto cookies používáme pro interní výzkum, jak můžeme zlepšit služby poskytované všem našim uživatelům. Tyto cookies hodnotí, jak interagujete s naším webem.',
        ],
        'optional' => [
            'title' => 'Volitelné cookies',
            'description' => 'Tyto cookies umožňují funkce, které by mohly zlepšit váš uživatelský zážitek, ale jejich absence neovlivní vaši schopnost procházet náš web.',
        ],
    ],

    'defaults' => [
        'consent' => 'Slouží k uložení preferencí uživatele ohledně souhlasu s cookies.',
        'session' => 'Slouží k identifikaci relace prohlížení uživatele.',
        'csrf' => 'Slouží k zabezpečení uživatele i našeho webu před útoky typu cross-site request forgery.',
        '_ga' => 'Hlavní cookie používaná službou Google Analytics, umožňuje rozlišit jednoho návštěvníka od druhého.',
        '_ga_ID' => 'Slouží službě Google Analytics k uchování stavu relace.',
        '_gid' => 'Slouží službě Google Analytics k identifikaci uživatele.',
        '_gat' => 'Slouží službě Google Analytics k omezení četnosti požadavků.',
    ],
];
