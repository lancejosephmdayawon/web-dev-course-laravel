@extends('layout/main')
@section('content')

<div class='container mt-5'>
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert" id="success-alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-danger mt-5">{{ $error }}</div>
    @endforeach
    @endif
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <!-- Email -->
        <div class="mb-3 mt-5">
            <label for="emailAddress" class="form-label">Email address</label>
            <input name="emailAddress" type="email" class="form-control" id="emailAddress" placeholder="name@example.com">
        </div>
        <div class='row'>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <!-- First Name -->
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input name="firstName" type="text" class="form-control" id="firstName" placeholder="First Name">
                </div>
            </div>
            <div class='col-lg-3 col-md-3 col-sm-12'>
                <!-- Middle Name -->
                <div class="mb-3">
                    <label for="middleName" class="form-label">Middle Name</label>
                    <input name="middleName" type="text" class="form-control" id="middleName" placeholder="Middle Name">
                </div>
            </div>
            <div class='col-lg-3 col-md-3 col-sm-12'>
                <!-- Last Name -->
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input name="lastName" type="text" class="form-control" id="lastName" placeholder="Last Name">
                </div>
            </div>
        </div>
        <!-- Date Picker -->
        <div class="mb-3">
            <label for="date" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <!-- Save Button -->
        <button type="submit" class="btn btn-primary mt-4 mb-4">Save</button>
    </form>
</div>

<!-- Auto-hide alert -->
<script>
    setTimeout(() => {
        const alert = document.getElementById('success-alert');
        if (alert) {
            alert.classList.remove('show');
            alert.classList.add('fade');
            setTimeout(() => alert.remove(), 500);
        }
    }, 3000);
</script>

@endSection