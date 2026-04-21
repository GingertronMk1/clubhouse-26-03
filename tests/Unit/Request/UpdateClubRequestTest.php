<?php

use App\Http\Requests\UpdateClubRequest;

it('authorizes', function () {
    $request = new UpdateClubRequest;
    expect($request->authorize())->toBeTrue();
});

it('has the correct rules', function () {
    $request = new UpdateClubRequest;
    expect($request->rules())->toBe([]);
});
