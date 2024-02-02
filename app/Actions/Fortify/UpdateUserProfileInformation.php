<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'first_name' => ['string','max:50'],
            'last_name' => ['string','max:50'],
            'mobile' => [
                'required',
                'digits:11',
                Rule::unique(User::class),
            ],
            'national_code' => [
                'digits:11',
                Rule::unique(User::class),
            ],
            'address' => ['string','max:200'],
            'postal_code' => ['numeric','max:16'],
            'birthday' => 'date'
        ])->validateWithBag('updateProfileInformation');

        // if ($input['email'] !== $user->email &&
        //     $user instanceof MustVerifyEmail) {
        //     $this->updateVerifiedUser($user, $input);
        // } else {
        //     $user->forceFill([
        //         'name' => $input['name'],
        //         'email' => $input['email'],
        //     ])->save();
        // }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'name' => $input['name'],
            'mobile' => $input['mobile'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
