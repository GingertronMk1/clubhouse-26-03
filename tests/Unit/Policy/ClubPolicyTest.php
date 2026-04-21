<?php

use App\Models\Club;
use App\Models\User;
use App\Policies\ClubPolicy;
use App\UserTypeEnum;

it('admin can do anything', function () {
    $club = Club::factory()->create();
    $policy = new ClubPolicy;
    $adminUser = User::factory()->create();
    $adminUser->type = UserTypeEnum::TYPE_ADMIN;
    $adminUser->save();
    $club->save();
    $club->users()->attach($adminUser, ['type' => UserTypeEnum::TYPE_ADMIN]);
    expect($policy->before($adminUser, 'test'))->toBeTrue()
        ->and($policy->viewAny($adminUser))->toBeTrue()
        ->and($policy->view($adminUser, $club))->toBeTrue()
        ->and($policy->create($adminUser))->toBeTrue()
        ->and($policy->update($adminUser, $club))->toBeTrue()
        ->and($policy->delete($adminUser, $club))->toBeTrue()
        ->and($policy->restore($adminUser, $club))->toBeTrue()
        ->and($policy->forceDelete($adminUser, $club))->toBeTrue();
});
