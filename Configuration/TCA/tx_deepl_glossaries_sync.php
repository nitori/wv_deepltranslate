<?php

if (!defined('TYPO3_MODE')) {
    die();
}

$ll = 'LLL:EXT:wv_deepltranslate/Resources/Private/Language/locallang_db.xlf:';

return [
    'ctrl' => [
        'title' => 'Deepl Glossaries Sync',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'iconfile' => 'EXT:wv_deepltranslate/Resources/Public/Icons/deepl.svg',
        'hideTable' => true,
        'rootLevel' => true,
        'sortby' => 'sorting',
        'delete' => 'deleted',
    ],
    'columns' => [
        'crdate' => [
            'label' => 'crdate',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
            ],
        ],
        'tstamp' => [
            'label' => 'tstamp',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
            ],
        ],
        'glossary_id' => [
            'label' => 'Glossary Id',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'readOnly' => true,
            ],
        ],
        'source_lang' => [
            'label' => 'Source Language',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'readOnly' => true,
            ],
        ],
        'target_lang' => [
            'label' => 'Target Language',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'readOnly' => true,
            ],
        ],
        'entries' => [
            'label' => 'Glossary Entries',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'readOnly' => true,
            ],
        ],
    ],
    'types' => [
        0 => [
            'showitem' => 'glossary_id,source_lang,target_lang,entries',
        ],
    ],
];