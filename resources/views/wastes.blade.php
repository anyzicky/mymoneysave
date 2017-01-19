@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Striped Table with Hover</h4>
                <p class="category">Все затраты</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Salary</th>
                    <th>Date</th>
                    </thead>
                    <tbody>
                    @foreach($wastes as $waste)
                        <tr>
                            <td>{{ $waste->id }}</td>
                            <td>{{ $waste->name }}</td>
                            <td>{{ $waste->price }} руб.</td>
                            <td>{{ $waste->date_buy }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection