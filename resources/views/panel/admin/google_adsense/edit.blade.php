@extends('panel.layout.app')
@section('title', 'Edit User')

@section('content')
    <div class="page-header">
        <div class="container-xl">
            <div class="row g-2 items-center">
                <div class="col">
                    <a href="{{ LaravelLocalization::localizeUrl( route('dashboard.index') ) }}" class="page-pretitle flex items-center">
                        <svg class="!me-2 rtl:-scale-x-100" width="8" height="10" viewBox="0 0 6 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.45536 9.45539C4.52679 9.45539 4.60714 9.41968 4.66071 9.36611L5.10714 8.91968C5.16071 8.86611 5.19643 8.78575 5.19643 8.71432C5.19643 8.64289 5.16071 8.56254 5.10714 8.50896L1.59821 5.00004L5.10714 1.49111C5.16071 1.43753 5.19643 1.35718 5.19643 1.28575C5.19643 1.20539 5.16071 1.13396 5.10714 1.08039L4.66071 0.633963C4.60714 0.580392 4.52679 0.544678 4.45536 0.544678C4.38393 0.544678 4.30357 0.580392 4.25 0.633963L0.0892856 4.79468C0.0357141 4.84825 0 4.92861 0 5.00004C0 5.07146 0.0357141 5.15182 0.0892856 5.20539L4.25 9.36611C4.30357 9.41968 4.38393 9.45539 4.45536 9.45539Z"/>
                        </svg>
                        {{__('Back to dashboard')}}
                    </a>
                    <h2 class="page-title mb-2">
                        {{__('Editing google Adsense Code: ')}} {{$googleAdsense->type}}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body pt-6">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <form method="POST" action="{{ route('dashboard.admin.adsense.update', $googleAdsense->id) }}">
                        <div class="row">
                            <div class="col-md-12 col-xl-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="form-check form-switch ps-0">
                                            <span class="form-check-label ms-0 me-2">Adsense Status</span>
                                            <input class="form-check-input" name="status" type="checkbox" @if($googleAdsense->status) checked @endif value="1" id="status">
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="code" class="form-label">{{__('Code')}}</label>
                                            <textarea class="form-control" rows="12" name="code" id="code" >{{ $googleAdsense->code }}</textarea>
                                            @error('code')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <a href="{{ route('dashboard.admin.adsense.index') }}" class="btn btn-default mx-1">
                                        {{__('Cancel')}}
                                    </a>
                                    <button type="submit" class="btn btn-primary mx-1">
                                        {{__('Save')}}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/assets/js/panel/adsense.js"></script>
@endsection
