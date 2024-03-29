<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'flux_kesearch_indexer',
    'description' => 'ke_search Indexer For Flux Elements',
    'category' => 'backend',
    'version' => '3.0.1',
    'dependencies' => 'ke_search',
    'state' => 'stable',
    'author' => 'Mamoun Alsmaiel',
    'author_email' => 'mamoun.alsmaiel@gmail.com',
    'constraints' => array(
        'depends' => array(
            'typo3' => '11.0.0-11.5.99',
            'flux' => '9.0.0-9.9.99'
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),

);
