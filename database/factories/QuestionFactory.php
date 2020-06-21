<?php

use Faker\Generator as Faker;
use App\User;
use App\Model\Category;


$factory->define(App\Model\Question::class, function (Faker $faker) {

    return [
        'title'=>$faker->sentence,
        'slug'=>str_slug($faker->sentence),
        'category_id'=>function(){
        	return Category::all()->random();
        },
        'body'=>$faker->text,
        'user_id'=>function (){
        	return User::all()->random();
        }
    ];
});
