<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "ckeditor_a11ychecker"
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'CKEditor Accessibility Checker',
    'description' => 'The CKEditor Accessibility Checker plugin',
    'category' => 'be',
    'author' => 'Torben Hansen',
    'author_email' => 'derhansen@gmail.com',
    'state' => 'stable',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
