@extends('layouts.admin')

@section('title', 'Admin Dashboard')


@section('content')

<div class="container-fluid"
     id="container-wrapper">


    {{-- PAGE TITLE --}}

    <div class="d-sm-flex align-items-center
                justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800">

            Admin Dashboard

        </h1>


        <ol class="breadcrumb">

            <li class="breadcrumb-item">

                <a href="{{ route('admin.home') }}">
                    Home
                </a>

            </li>

            <li class="breadcrumb-item active">

                 Admin Dashboard

            </li>

        </ol>

    </div>


    {{-- ================= STATISTICS ================= --}}

    <div class="row mb-3">


        {{-- Students --}}

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card h-100">

                <div class="card-body">

                    <div class="row align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold
                                        text-uppercase mb-1">

                                Students

                            </div>


                            <div class="h5 mb-0
                                        font-weight-bold
                                        text-gray-800">

                                {{ $totalStudents ?? 0 }}

                            </div>


                            <div class="mt-2 mb-0
                                        text-muted text-xs">

                                Total registered students

                            </div>

                        </div>


                        <div class="col-auto">

                            <i class="fas fa-user-graduate
                                      fa-2x text-primary"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- Teachers --}}

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card h-100">

                <div class="card-body">

                    <div class="row align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold
                                        text-uppercase mb-1">

                                Teachers

                            </div>


                            <div class="h5 mb-0
                                        font-weight-bold
                                        text-gray-800">

                                {{ $totalTeachers ?? 0 }}

                            </div>


                            <div class="mt-2 mb-0
                                        text-muted text-xs">

                                Total teachers

                            </div>

                        </div>


                        <div class="col-auto">

                            <i class="fas fa-chalkboard-teacher
                                      fa-2x text-success"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- Courses --}}

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card h-100">

                <div class="card-body">

                    <div class="row align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold
                                        text-uppercase mb-1">

                                Courses

                            </div>


                            <div class="h5 mb-0
                                        font-weight-bold
                                        text-gray-800">

                                {{ $totalCourses ?? 0 }}

                            </div>


                            <div class="mt-2 mb-0
                                        text-muted text-xs">

                                Available courses

                            </div>

                        </div>


                        <div class="col-auto">

                            <i class="fas fa-book
                                      fa-2x text-info"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- Departments --}}

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card h-100">

                <div class="card-body">

                    <div class="row align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold
                                        text-uppercase mb-1">

                                Departments

                            </div>


                            <div class="h5 mb-0
                                        font-weight-bold
                                        text-gray-800">

                                {{ $totalDepartments ?? 0 }}

                            </div>


                            <div class="mt-2 mb-0
                                        text-muted text-xs">

                                Academic departments

                            </div>

                        </div>


                        <div class="col-auto">

                            <i class="fas fa-building
                                      fa-2x text-warning"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- ================= MIDDLE CONTENT ================= --}}

    <div class="row">


        {{-- Recent Users --}}

        <div class="col-xl-8 col-lg-7 mb-4">

            <div class="card">


                <div class="card-header py-3
                            d-flex flex-row
                            align-items-center
                            justify-content-between">

                    <h6 class="m-0 font-weight-bold text-primary">

                        Recent Users

                    </h6>

                </div>


                <div class="table-responsive">

                    <table class="table align-items-center
                                  table-flush">

                        <thead class="thead-light">

                        <tr>

                            <th>ID</th>

                            <th>Name</th>

                            <th>Email</th>

                            <th>Role</th>

                        </tr>

                        </thead>


                        <tbody>

                        @forelse($recentUsers ?? [] as $user)

                            <tr>

                                <td>
                                    {{ $user->id }}
                                </td>

                                <td>
                                    {{ $user->name }}
                                </td>

                                <td>
                                    {{ $user->email }}
                                </td>

                                <td>

                                    <span class="badge badge-info">

                                        {{ ucfirst($user->role) }}

                                    </span>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="4"
                                    class="text-center">

                                    No users found.

                                </td>

                            </tr>

                        @endforelse

                        </tbody>

                    </table>

                </div>


            </div>

        </div>


        {{-- Quick Actions --}}

        <div class="col-xl-4 col-lg-5 mb-4">

            <div class="card">


                <div class="card-header py-3">

                    <h6 class="m-0 font-weight-bold text-primary">

                        Quick Actions

                    </h6>

                </div>


                <div class="card-body">


                    <button class="btn btn-primary btn-block">

                        <i class="fas fa-user-plus"></i>

                        Add Student

                    </button>


                    <button class="btn btn-success btn-block">

                        <i class="fas fa-chalkboard-teacher"></i>

                        Add Teacher

                    </button>


                    <button class="btn btn-info btn-block">

                        <i class="fas fa-book"></i>

                        Add Course

                    </button>


                    <button class="btn btn-warning btn-block">

                        <i class="fas fa-building"></i>

                        Add Department

                    </button>


                </div>

            </div>

        </div>


    </div>


</div>

@endsection