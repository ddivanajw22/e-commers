<?php

namespace App\Data;

class ProductData
{
    public static function all()
    {
        return array_merge(
            self::tops(),
            self::bottom(),
            self::dresses(),
            self::outerwear(),
            self::activewear(),
        );
    }

    public static function tops()
    {
        return [
            [
                'name' => 'Tops Product 1',
                'price' => 45000,
                'image' => 'https://via.placeholder.com/300x400',
                'rating' => 4.8,
                'sold' => 120,
                'is_discount' => false,
                'category' => 'tops',
            ],
        ];
    }

    public static function bottom()
    {
        return [
            [
                'name' => 'Bottom Product 1',
                'price' => 50000,
                'image' => 'https://via.placeholder.com/300x400',
                'rating' => 4.7,
                'sold' => 300,
                'is_discount' => true,
                'category' => 'bottom',
            ],
        ];
    }

    public static function dresses()
    {
        return [
            [
                'name' => 'Dress Product 1',
                'price' => 60000,
                'image' => 'https://via.placeholder.com/300x400',
                'rating' => 4.9,
                'sold' => 200,
                'is_discount' => false,
                'category' => 'dresses',
            ],
        ];
    }

    public static function outerwear()
    {
        return [
            [
                'name' => 'Outerwear Product 1',
                'price' => 75000,
                'image' => 'https://via.placeholder.com/300x400',
                'rating' => 4.6,
                'sold' => 500,
                'is_discount' => true,
                'category' => 'outerwear',
            ],
        ];
    }

    public static function activewear()
    {
        return [
            [
                'name' => 'Activewear Product 1',
                'price' => 55000,
                'image' => 'https://via.placeholder.com/300x400',
                'rating' => 4.8,
                'sold' => 150,
                'is_discount' => false,
                'category' => 'activewear',
            ],
        ];
    }
}