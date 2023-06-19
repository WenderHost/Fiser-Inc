<?php

function my_acf_google_map_api( $api ){
  if( ! defined( 'GOOGLE_MAPS_API_KEY' ) )
    return $api;

  $api['key'] = ACF_GOOGLE_MAPS_API;

  return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');