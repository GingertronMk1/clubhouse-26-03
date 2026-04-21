<?php

use App\Http\Requests\StoreClubRequest;

it('authorizes', function () {
    $request = new StoreClubRequest;
    expect($request->authorize())->toBeTrue();
});

it('has the correct rules', function () {
    $request = new StoreClubRequest;
    expect($request->rules())->toBe([]);
});
