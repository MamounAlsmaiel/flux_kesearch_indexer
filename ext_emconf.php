<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'flux_kesearch_indexer',
    'description' => 'ke_search Indexer For Flux Elements',
    'category' => 'backend',
    'version' => '1.0.0',
    'dependencies' => 'ke_search',
    'state' => 'stable',
    'author' => 'Mamoun Alsmaiel',
    'author_email' => 'mamoun.alsmaiel@gmail.com',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.7.0-9.9.99',
            'flux' => ''
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
    
);
