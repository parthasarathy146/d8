<?php

/**
 * The Controller class
 */

namespace Drupal\endeavorin_world_clock\Controller;

use Drupal\Core\Controller\ControllerBase;

class EndeavorinWorldClockController extends ControllerBase {
	public function content() {
	  $region_nids = \Drupal::entityQuery('node')
      ->condition('type','world_clock')
      ->condition('status',1)
      ->execute();
	  
    $regions = node_load_multiple($region_nids);
    foreach ($regions as $region) {
      $timezone = $region->get('field_timezone')->getValue()[0]['value'];
      $timeZoneObject = new \DateTimeZone($timezone);
      $date = new \DateTime('now',$timeZoneObject);
      $hours = intval($date->format('g'));
      $minutes = intval($date->format('i'));
      $seconds = intval($date->format('s'));
      $meridiem = $date->format('A');
      $clocks[] = array(
        'name' => $region->getTitle(),
        'hours' => $hours,
        'minutes' => $minutes,
        'seconds' => $seconds,
        'meridiem' => $meridiem
      );
    }
    
		return array(
			'#theme' => 'endeavor_world_clock',
			'#clocks' => $clocks,
			'#attached' => array(
					'library' => array(
            'endeavorin_world_clock/endeavor-world-clock'
					)
			)
		);
	}
}