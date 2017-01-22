@extends('layouts.app')

@section('title', 'Add waste')

@section('content')

    <div class="col-md-8">
        <div class="card">
            <div class="header">
                <h4 class="title">Add new waste</h4>
            </div>
            <div class="content">
                <form method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control" name="price" placeholder="Price" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date Buy</label>
                                <input type="date" name="date_buy" class="form-control" placeholder="Date" value="">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn-fill pull-right">Add</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

    @if($add)
        <script>
            $(document).ready(function(){
                $.notify({
                    icon: 'pe-7s-gift',
                    message: "New waste success add"

                },{
                    type: 'info',
                    timer: 4000
                });
            })
        </script>
    @endif
@endsection