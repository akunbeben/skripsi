@extends('adminlte.layouts.app')

@section('title', 'Edit Project')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-6">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Edit Location</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('location.update', $location->id) }}" method="POST">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="form-group row">
                        <label for="location_name" class="col-md-3 col-form-label text-md-right">{{ __('Location Name') }}</label>

                        <div class="col-md-7">
                            <input id="location_name" type="text" name="location_name" class="form-control @error('location_name') is-invalid @enderror" name="location_name" value="{{ $location->location_name }}" required autocomplete="location_name" autofocus>

                            @error('location_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-md-3 col-form-label text-md-right">{{ __('Phone') }}</label>

                        <div class="col-md-7">
                            <input id="phone" type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $location->phone }}" required autocomplete="phone" autofocus>

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-md-3 col-form-label text-md-right">{{ __('Address') }}</label>

                        <div class="col-md-7">
                            <input id="address" type="text" name="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $location->address }}" required autocomplete="address" autofocus>

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_customer" class="col-md-3 col-form-label text-md-right">{{ __('Customer Name') }}</label>

                        <div class="col-md-7">
                            <select class="form-control selec2bs4 @error('nama_customer') is-invalid @enderror"
                                style="width: 100%" name="customer" required>
                                <option disabled selected>Pilih</option>
                                @foreach ($customer as $data)
                                    <option @if($location->customer_id == $data->id) selected @endif value="{{ $data->id }}">
                                        {{$data->nama_customer}}
                                    </option>         
                                @endforeach
                            </select>
                            @error('nama_customer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="grup_name" class="col-md-3 col-form-label text-md-right">{{ __('Grup Name') }}</label>

                        <div class="col-md-7">
                            <input id="grup_name" type="text" name="grup_name" class="form-control @error('grup_name') is-invalid @enderror" name="grup_name" value="{{ $location->grup_name }}" required autocomplete="grup_name" autofocus>

                            @error('grup_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Ubah') }}
                            </button>
                        </div>
                    </div>
		    	</form>
		    </div>
		</div>
	</div>
</div>
@endsection
@push('js')
@endpush