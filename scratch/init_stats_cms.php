<?php
use App\Models\SiteContent;

$statsVisible = SiteContent::firstOrNew(['key' => 'home_stats_visible']);
$statsVisible->value = '1';
$statsVisible->type = 'toggle';
$statsVisible->label = 'Display Hero Stats Section';
$statsVisible->section = 'home';
$statsVisible->save();

$statsData = SiteContent::firstOrNew(['key' => 'home_stats_data']);
$statsData->value = json_encode([
    ['label' => 'Years Active', 'value' => '5+'],
    ['label' => 'Events Covered', 'value' => '200+'],
    ['label' => 'Qualified Staff', 'value' => '20+']
]);
$statsData->type = 'json';
$statsData->label = 'Hero Metrics Data (JSON)';
$statsData->section = 'home';
$statsData->save();

echo "Stats configuration initialized in database.\n";
