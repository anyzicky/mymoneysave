@extends('layouts.app')

@section('title', 'Statistic')

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
                            <td>
                                <a href="{{ url('/stat/delete', ['id' => $waste->id]) }}" type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                    <i class="fa fa-times"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    {{ $wastes->links() }}
@endsection