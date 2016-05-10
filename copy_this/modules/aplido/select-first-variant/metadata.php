<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.0';

/**
 * Module information
 */
$aModule = array(
    'id'            => 'aplido_variantRedirect',
    'title'         => 'aplido Varient Redirect',
    'description'   => 'Wenn ein Vaterartikel aufgerufen wird, wird man automatisch zu der ersten verfügbaren Variante weitergeleitet',
    'version'       => '1.0',
    'author'        => 'Aplido GmbH',
    'url'           => 'http://www.aplido.de',
    'email'         => 'service@aplido.de',
    'extend'        => array(
        'details'   => 'aplido/select-first-variant/aplido_details'
    )
);
