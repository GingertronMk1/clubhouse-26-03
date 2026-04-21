<?php

use App\Http\Requests\UpdateSportRequest;

it('authorizes', function () {
    $request = new UpdateSportRequest;
    expect($request->authorize())->toBeTrue();
});

it('has the correct rules', function () {
    $request = new UpdateSportRequest;
    expect($request->rules())->toBe([]);
});
