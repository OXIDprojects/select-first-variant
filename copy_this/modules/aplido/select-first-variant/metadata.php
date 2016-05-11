<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.0';

/**
 * Module information
 */
$aModule = array(
    'id'            => 'apl_sfv_details',
    'title'         => '<strong style="color: #0b6eb5;border: 1px solid #F7961E;padding: 0 2px;background:white;">Aplido</strong> Select First Variant',
    'description'   => 'Wenn ein Vaterartikel aufgerufen wird, wird man automatisch zu der ersten verf&uuml;gbaren Variante weitergeleitet',
    'version'       => '1.0',
    'author'        => 'Aplido GmbH',
    'url'           => 'http://www.aplido.de',
    'email'         => 'service@aplido.de',
    'thumbnail'    => 'aplido.png',
    'extend'        => array(
        'details'   => 'aplido/select-first-variant/apl_sfv_details'
    )
);
