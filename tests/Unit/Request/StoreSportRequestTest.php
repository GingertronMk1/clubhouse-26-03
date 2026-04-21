<?php

use App\Http\Requests\StoreSportRequest;

it('authorizes', function () {
    $request = new StoreSportRequest;
    expect($request->authorize())->toBeTrue();
});

it('has the correct rules', function () {
    $request = new StoreSportRequest;
    expect($request->rules())->toBe([]);
});
