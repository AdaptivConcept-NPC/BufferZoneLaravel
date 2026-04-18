<?php
use App\Models\SiteContent;

$title = SiteContent::firstOrNew(['key' => 'home_hero_title']);
$title->value = 'Time Saves Lives.<br /><span style="color: #D31111; font-family: \'RaceSport\', sans-serif; -webkit-text-stroke: 1.5px white; paint-order: stroke fill;">Buffer Zone</span> Saves You Both.';
$title->save();

$loc = SiteContent::firstOrNew(['key' => 'home_location_label']);
$loc->value = '<i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i>Gauteng, South Africa';
$loc->save();

echo "Database Synchronized Successfully\n";
