@extends('layouts.main')

@section('content')

<div class="card">
  <div class="card-header">
    <h4>All Employees</h4>
  </div>
  <div class="card-body">
      <table class="table" cellpadding="10" >
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Lastname</th>
            <th>Birthdate</th>
            <th>Personal_ID</th>
            <th>Salary</th>
        </tr>
        <form action="{{ route('employees.add') }}" method="POST">
            @csrf
            <tr>
                <td colspan="2"><input class="form-control" type="text" name="name" placeholder="Employee Name"></td>
                <td><input class="form-control" type="text" name="lastname" placeholder="Employee Lastname"></td>
                <td><input class="form-control" type="date" name="birthdate" placeholder="Employee Birthdate"></td>
                <td><input class="form-control" type="number" name="personal_id" placeholder="Employee ID"></td>
                <td><input class="form-control" type="number" name="salary" placeholder="Employee Salary"></td>
                <td><button class="btn btn-success" type="submit">Add</button</td>
            </tr>
        </form>

        @foreach($employees as $emp)
            <tr>
                <td>{{ $emp->id }}</td>
                <td>{{ $emp->name }}</td>
                <td>{{ $emp->lastname }}</td>
                <td>{{ $emp->birthdate }}</td>
                <td>{{ $emp->personal_id }}</td>
                <td>{{ $emp->salary }}</td>
                <td>
                    <form action="{{ route('employees.delete') }}" method="post">
                        @csrf
                        <input type="hidden" name="employee_id" value="{{ $emp->id }}" />
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ route('employees.edit', ['id' => $emp->id]) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach

      </table>
  </div>
</div>
  
@endsection