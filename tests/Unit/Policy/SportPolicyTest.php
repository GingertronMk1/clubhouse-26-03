<?php

use App\Models\Sport;
use App\Models\User;
use App\Policies\SportPolicy;
use App\UserTypeEnum;

it('admin can do anything', function () {
    $sport = new Sport;
    $policy = new SportPolicy;
    $adminUser = new User;
    $adminUser->type = UserTypeEnum::TYPE_ADMIN;
    expect($policy->viewAny($adminUser))->toBeTrue()
        ->and($policy->view($adminUser, $sport))->toBeTrue()
        ->and($policy->create($adminUser))->toBeTrue()
        ->and($policy->update($adminUser, $sport))->toBeTrue()
        ->and($policy->delete($adminUser, $sport))->toBeTrue()
        ->and($policy->restore($adminUser, $sport))->toBeTrue()
        ->and($policy->forceDelete($adminUser, $sport))->toBeTrue();
});
