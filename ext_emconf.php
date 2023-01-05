<?php

########################################################################
# Extension Manager/Repository config file for ext: "patch_install_tool"
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'Patches for the Install Tool',
    'description' => 'Collection of patches for the Backend Layout',
    'category' => 'be',
    'author' => 'Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'author_company' => '',
    'version' => '0.1.4',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];

