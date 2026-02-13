<?php

arch('services should not depend on controllers')
    ->expect('App\Services')
    ->not->toUse('App\Http\Controllers');

arch('controllers should not depend on other controllers')
    ->expect('App\Http\Controllers')
    ->not->toUse('App\Http\Controllers');

arch('models should not depend on controllers')
    ->expect('App\Models')
    ->not->toUse('App\Http\Controllers');

arch('models should not depend on services')
    ->expect('App\Models')
    ->not->toUse('App\Services');

arch('requests should extend FormRequest')
    ->expect('App\Http\Requests')
    ->toExtend('Illuminate\Foundation\Http\FormRequest');

arch('controllers should extend base Controller')
    ->expect('App\Http\Controllers')
    ->toExtend('App\Http\Controllers\Controller');

arch('models should extend Eloquent Model')
    ->expect('App\Models')
    ->toExtend('Illuminate\Database\Eloquent\Model');

arch('no debugging statements left in code')
    ->expect(['dd', 'dump', 'ray', 'var_dump', 'print_r'])
    ->not->toBeUsed();

arch('strict types should not be enforced')
    ->expect('App')
    ->not->toUseStrictTypes();

arch('services should be classes')
    ->expect('App\Services')
    ->toBeClasses();

arch('models should use HasFactory trait')
    ->expect('App\Models')
    ->toUseTrait('Illuminate\Database\Eloquent\Factories\HasFactory');
