@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Amazop
                </div>

                <div class="links">
                    <a href="{{ route('products.index') }}">See All Products</a>
                    <a href="{{ route('students.index') }}">See All Students</a>
                </div>
            </div>
        </div>
@endsection
