@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                   <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <label name="theaters"> Theater </label>
                        <input type="text" name="theaters" placeholder="Theater name">
                        </div>

                        <div class="form-group">
                        <label name="movie"> Movie </label>
                        <input type="text" name="movie" placeholder="Movie name">
                        </div>

                        <div class="form-group">
                        <label name="show_date"> Show Date : </label>
                        <input type="date" name="show_date">
                        </div>

                        <div class="form-group">
                        <label name="no_seats"> Number of Seats :  </label>
                        <input type="number" name="no_seats">
                        </div>

                        <div class="form-group">
                        <label name="image"> Image :  </label>
                        <input type="file" name="image">
                        </div>

                        <div class="form-group">
                        <label name="time_show"> Time of Show :  </label>
                        <input type="time" name="time_show">
                        </div>

                        <div class="form-group">
                        <input type="submit" name="submit" value="submit">
                        </div>
                
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
