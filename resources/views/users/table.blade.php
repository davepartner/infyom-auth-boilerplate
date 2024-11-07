<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="users-table">
            <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Whatsapp Phone</th>
                <th>Ref Balance</th>
                <th>Task Balance</th>
                <th>Country Id</th>
                <th>State Id</th>
                <th>City</th>
                <th>Ref Sort</th>
                <th>Referred By User Id 1</th>
                <th>Referred By User Id 2</th>
                <th>Role Id</th>
                <th>Auth Otp</th>
                <th>Payment Otp</th>
                <th>Frozen Page Url</th>
                <th>Bank Name</th>
                <th>Bank Account Name</th>
                <th>Bank Account Number</th>
                <th>Bank Country Id</th>
                <th>Level Id</th>
                <th>Budget Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->whatsapp_phone }}</td>
                    <td>{{ $user->ref_balance }}</td>
                    <td>{{ $user->task_balance }}</td>
                    <td>{{ $user->country_id }}</td>
                    <td>{{ $user->state_id }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->ref_sort }}</td>
                    <td>{{ $user->referred_by_user_id_1 }}</td>
                    <td>{{ $user->referred_by_user_id_2 }}</td>
                    <td>{{ $user->role_id }}</td>
                    <td>{{ $user->auth_otp }}</td>
                    <td>{{ $user->payment_otp }}</td>
                    <td>{{ $user->frozen_page_url }}</td>
                    <td>{{ $user->bank_name }}</td>
                    <td>{{ $user->bank_account_name }}</td>
                    <td>{{ $user->bank_account_number }}</td>
                    <td>{{ $user->bank_country_id }}</td>
                    <td>{{ $user->level_id }}</td>
                    <td>{{ $user->budget_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('users.show', [$user->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('users.edit', [$user->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $users])
        </div>
    </div>
</div>
