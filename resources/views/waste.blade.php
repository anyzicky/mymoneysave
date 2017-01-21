@extends('layouts.app')

@section('title', 'Statistic')

@section('content')

    <div class="col-md-8">
        <div class="card">
            <div class="header">
                <h4 class="title">Edit {{ $waste->name }}</h4>
            </div>
            <div class="content">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" value="{{ $waste->name }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control" placeholder="Price" value="{{ $waste->price }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date Buy</label>
                                <input type="text" class="form-control" placeholder="Date" value="{{ $waste->date_buy }}">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Element</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection