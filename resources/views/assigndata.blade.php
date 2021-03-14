@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Data') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('addData') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="Impression" class="col-md-4 col-form-label text-md-right">{{ __('Impression') }}</label>

                            <div class="col-md-6">
                                <input id="Impression" type="text" class="form-control @error('Impression') is-invalid @enderror" name="Impression" value="{{ old('Impression') }}" required autocomplete="Impression" autofocus>

                                @error('Impression')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Clicks" class="col-md-4 col-form-label text-md-right">{{ __('Clicks') }}</label>

                            <div class="col-md-6">
                                <input id="Clicks" type="text" class="form-control @error('Clicks') is-invalid @enderror" name="Clicks" value="{{ old('Clicks') }}" required autocomplete="Clicks">

                                @error('Clicks')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="CTR" class="col-md-4 col-form-label text-md-right">{{ __('CTR') }}</label>

                            <div class="col-md-6">
                                <input id="CTR" type="text" class="form-control @error('CTR') is-invalid @enderror" name="CTR" value="{{ old('CTR') }}" required autocomplete="CTR">

                                @error('CTR')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ECPM" class="col-md-4 col-form-label text-md-right">{{ __('ECPM') }}</label>

                            <div class="col-md-6">
                                <input id="ECPM" type="text" class="form-control @error('ECPM') is-invalid @enderror" name="ECPM" value="{{ old('ECPM') }}" required autocomplete="ECPM">

                                @error('ECPM')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Earnings" class="col-md-4 col-form-label text-md-right">{{ __('Earnings') }}</label>

                            <div class="col-md-6">
                                <input id="Earnings" type="text" class="form-control @error('Earnings') is-invalid @enderror" name="Earnings" value="{{ old('Earnings') }}" required autocomplete="Earnings">

                                @error('Earnings')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="User" class="col-md-4 col-form-label text-md-right">{{ __('User') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="User" id="User">
                                    @foreach ($user as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                    
                                </select>
                                @error('User')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
