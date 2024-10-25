<table class="table table-bordered">
    <thead>
        <tr>
            <th style="5%">ID</th>
            <th style="5%">First Name</th>
            <th style="5%">Last Name</th>
            <th style="10%">Email</th>
            <th style="10%">Date of Birth</th>
            <th style="10%">Country</th>
            <th style="10%">Province/ City</th>
            <th style="5%">District</th>
            <th style="5%">Ward</th>
            <th style="10%">Address</th>
            <th style="10%">Phone Number</th>
            <th style="5%">User Type</th> <!-- Thêm cột User Type -->
            <th style="15%">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->usertype }}</td> <!-- Hiển thị usertype -->
                <td>{{ $user->email }}</td>
                <td>{{ $user->date_of_birth }}</td>
                <td>{{ $user->country }}</td>
                <td>{{ $user->province }}</td>
                <td>{{ $user->district }}</td>
                <td>{{ $user->ward }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->phone_number }}</td>
                <td>{{ $user->usertype }}</td> <!-- Hiển thị usertype -->
                <td>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                        style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
