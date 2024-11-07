<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'username',
        'email',
        'password',
        'phone',
        'whatsapp_phone',
        'ref_balance',
        'task_balance',
        'country_id',
        'state_id',
        'city',
        'ref_sort',
        'referred_by_user_id_1',
        'referred_by_user_id_2',
        'role_id',
        'auth_otp',
        'payment_otp',
        'frozen_page_url',
        'bank_name',
        'bank_account_name',
        'bank_account_number',
        'bank_country_id',
        'level_id',
        'budget_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return User::class;
    }
}
