@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-4">
        <div class="card">
            <div class="header">
                <h4 class="title">Email Statistics</h4>
                <p class="category">Last Campaign Performance</p>
            </div>
            <div class="content">
                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                <div class="footer">
                    <div class="legend">
                        <i class="fa fa-circle text-info"></i> Open
                        <i class="fa fa-circle text-danger"></i> Bounce
                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="header">
                <h4 class="title">Users Behavior</h4>
                <p class="category">24 Hours performance</p>
            </div>
            <div class="content">
                <div id="chartHours" class="ct-chart"></div>
                <div class="footer">
                    <div class="legend">
                        <i class="fa fa-circle text-info"></i> Open
                        <i class="fa fa-circle text-danger"></i> Click
                        <i class="fa fa-circle text-warning"></i> Click Second Time
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="fa fa-history"></i> Updated 3 minutes ago
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                    <th>Category</th>
                    </thead>
                    <tbody>
                    @foreach($wastes as $waste)
                        <tr>
                            <td>
                                <a href="{{ url('/stat', ['id' => $waste->id]) }}">
                                    {{ $waste->id }}
                                </a>
                            </td>
                            <td>{{ $waste->name }}</td>
                            <td>{{ $waste->price }} руб.</td>
                            <td>{{ $waste->date_buy }}</td>
                            <td>{{ $waste->categories->name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection