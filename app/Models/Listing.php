<?php

namespace App\Models;

class Listing {
  public static function all() {
    return [
      [
          'id' => 1,
          'title' => 'Listing One',
          'description' => 'Hello how are you healllo elllo hlllo hllloe',
      ],
      [
          'id' => 2,
          'title' => 'Listing Two',
          'description' => 'Two Hello how are you healllo elllo hlllo hllloe',
      ]
      ];
  }

  public static function find($id){
    $listings = self::all();
    foreach($listings as $listing){
      if($listing['id'] == $id){
        return $listing;
      }
    }
  }
}
