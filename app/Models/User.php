<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'users';

    public $fillable = [
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

    protected $casts = [
        'username' => 'string',
        'email' => 'string',
        'password' => 'string',
        'phone' => 'string',
        'whatsapp_phone' => 'string',
        'ref_balance' => 'float',
        'task_balance' => 'float',
        'city' => 'string',
        'ref_sort' => 'float',
        'frozen_page_url' => 'string',
        'bank_name' => 'string',
        'bank_account_name' => 'string',
        'bank_account_number' => 'string'
    ];

    public static array $rules = [
        'username' => 'nullable|string|max:255',
        'email' => 'required|string|max:255',
        'password' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'whatsapp_phone' => 'nullable|string|max:255',
        'ref_balance' => 'nullable|numeric',
        'task_balance' => 'nullable|numeric',
        'country_id' => 'required',
        'state_id' => 'nullable',
        'city' => 'nullable|string|max:255',
        'ref_sort' => 'nullable|numeric',
        'referred_by_user_id_1' => 'nullable',
        'referred_by_user_id_2' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'role_id' => 'nullable',
        'auth_otp' => 'nullable',
        'payment_otp' => 'nullable',
        'frozen_page_url' => 'nullable|string|max:255',
        'bank_name' => 'nullable|string|max:255',
        'bank_account_name' => 'nullable|string|max:255',
        'bank_account_number' => 'nullable|string|max:11',
        'bank_country_id' => 'nullable',
        'level_id' => 'nullable',
        'budget_id' => 'nullable'
    ];

    
}
