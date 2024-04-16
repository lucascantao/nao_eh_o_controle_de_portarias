@extends('app')
@section('title', 'portarias')
@section('content')
<div>

    <div class="py-12">
        <div class="">
            <div class="p-4 bg-white border-bottom">
                <div class="">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 bg-white border-bottom">
                <div class="">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 bg-white border-bottom">
                <div class="">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection