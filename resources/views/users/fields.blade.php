<!-- Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Whatsapp Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('whatsapp_phone', 'Whatsapp Phone:') !!}
    {!! Form::text('whatsapp_phone', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Ref Balance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ref_balance', 'Ref Balance:') !!}
    {!! Form::number('ref_balance', null, ['class' => 'form-control']) !!}
</div>

<!-- Task Balance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('task_balance', 'Task Balance:') !!}
    {!! Form::number('task_balance', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_id', 'Country Id:') !!}
    {!! Form::number('country_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- State Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state_id', 'State Id:') !!}
    {!! Form::number('state_id', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Ref Sort Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ref_sort', 'Ref Sort:') !!}
    {!! Form::number('ref_sort', null, ['class' => 'form-control']) !!}
</div>

<!-- Referred By User Id 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referred_by_user_id_1', 'Referred By User Id 1:') !!}
    {!! Form::number('referred_by_user_id_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Referred By User Id 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referred_by_user_id_2', 'Referred By User Id 2:') !!}
    {!! Form::number('referred_by_user_id_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Role Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role_id', 'Role Id:') !!}
    {!! Form::number('role_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Auth Otp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('auth_otp', 'Auth Otp:') !!}
    {!! Form::number('auth_otp', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Otp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_otp', 'Payment Otp:') !!}
    {!! Form::number('payment_otp', null, ['class' => 'form-control']) !!}
</div>

<!-- Frozen Page Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('frozen_page_url', 'Frozen Page Url:') !!}
    {!! Form::text('frozen_page_url', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Bank Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_name', 'Bank Name:') !!}
    {!! Form::text('bank_name', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Bank Account Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_account_name', 'Bank Account Name:') !!}
    {!! Form::text('bank_account_name', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Bank Account Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_account_number', 'Bank Account Number:') !!}
    {!! Form::text('bank_account_number', null, ['class' => 'form-control', 'maxlength' => 11, 'maxlength' => 11]) !!}
</div>

<!-- Bank Country Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_country_id', 'Bank Country Id:') !!}
    {!! Form::number('bank_country_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Level Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('level_id', 'Level Id:') !!}
    {!! Form::number('level_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Budget Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('budget_id', 'Budget Id:') !!}
    {!! Form::number('budget_id', null, ['class' => 'form-control']) !!}
</div>