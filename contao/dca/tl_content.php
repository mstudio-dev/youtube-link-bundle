<?php

$GLOBALS['TL_DCA']['tl_content']['palettes']['youtube_link'] =
    '{type_legend},type,headline;{youtube_legend},youtube_link_id,youtube_link_quality;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_content']['fields']['youtube_link_id'] = [
    'label'     => ['YouTube‑Video ID', 'Nur die reine Video‑ID eintragen (z. B. dQw4w9WgXcQ).'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => ['mandatory' => true, 'maxlength' => 32, 'tl_class' => 'w50'],
    'sql'       => "varchar(32) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['youtube_link_quality'] = [
    'label'     => ['Bildqualität', 'Wähle die gewünschte Thumbnail‑Größe.'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => [
        'maxresdefault' => 'Maximal (1280×720)',
        'sddefault'     => 'SD (640×480)',
        'hqdefault'     => 'HQ (480×360)',
        'mqdefault'     => 'MQ (320×180)',
        'default'       => 'Standard (120×90)',
    ],
    'eval'      => ['tl_class' => 'w50'],
    'sql'       => "varchar(16) NOT NULL default 'maxresdefault'",
];
