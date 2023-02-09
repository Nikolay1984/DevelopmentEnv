@extends('layouts.app')

@section('content')

    @php
        /** @var \App\Models\BlogCategory $item */
    @endphp

    <form method="POST" action="{{ route('blog.admin.categories.update', $item->id)  }}">
        @method('PATCH')
        @csrf

        <div class="container">
            <div class="row justify-content-center common-test">
                <div class="col-md-8 test-up">
                    @include('blog.admin.categories.includes.item_edit_main_col')
                </div>
                <div class="col-md-3 test-down">
                    @include('blog.admin.categories.includes.item_edit_add_col')
                </div>
            </div>
        </div>

    </form>

@endsection
