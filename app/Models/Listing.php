<?php
namespace App\Models;

class Listing {
    public static function all() {
        return [
                [
                   'id' => 1,
                   'title' => 'Listing One',
                   'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh odio, malesuada aliquet rhoncus non, tempor vitae felis. Morbi vel porttitor felis. Ut bibendum, erat quis accumsan tempor, tellus velit efficitur nibh, et pellentesque est arcu sed neque. Etiam condimentum sem quis auctor tristique.'
                ],
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh odio, malesuada aliquet rhoncus non, tempor vitae felis. Morbi vel porttitor felis. Ut bibendum, erat quis accumsan tempor, tellus velit efficitur nibh, et pellentesque est arcu sed neque. Etiam condimentum sem quis auctor tristique.'
                 ]
                ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}