@extends('layouts.app', ['page' => __('Klijenti novi'), 'pageSlug' => 'klijenti'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Dodavanje klijenta') }}</h5>
                </div>
                <form method="post" action="{{ route('klijenti-novi.novi') }}" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        @method('put')

                        @include('alerts.success')

                        <div class="form-group{{ $errors->has('company_name') ? ' has-danger' : '' }}">
                            <label>{{ __('Naziv kompanije') }}</label>
                            <input type="text" name="company_name" class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" >
                        </div>

                        <div class="form-group{{ $errors->has('company_mb') ? ' has-danger' : '' }}">
                            <label>{{ __('MB Kompanije') }}</label>
                            <input type="text" name="company_mb" class="form-control{{ $errors->has('company_mb') ? ' is-invalid' : '' }}" >
                        </div>

                        <div class="form-group{{ $errors->has('company_pib') ? ' has-danger' : '' }}">
                            <label>{{ __('PIB kompanije') }}</label>
                            <input type="text" name="company_pib" class="form-control{{ $errors->has('company_pib') ? ' is-invalid' : '' }}" >

                        </div>

                        <div class="form-group{{ $errors->has('company_address') ? ' has-danger' : '' }}">
                            <label>{{ __('Adresa kompanije') }}</label>
                            <input type="text" name="company_address" class="form-control{{ $errors->has('company_address') ? ' is-invalid' : '' }}" >
                        </div>

                        <div class="form-group{{ $errors->has('grad') ? ' has-danger' : '' }}">
                            <label>{{ __('Grad') }}</label>
                            <input type="text" name="grad" class="form-control{{ $errors->has('grad') ? ' is-invalid' : '' }}" >
                        </div>

                        <div class="form-group{{ $errors->has('company_post_code') ? ' has-danger' : '' }}">
                            <label>{{ __('Poštanski broj') }}</label>
                            <input type="text" name="company_post_code" class="form-control{{ $errors->has('company_post_code') ? ' is-invalid' : '' }}" >
                        </div>

                        <div class="form-group{{ $errors->has('broj_aktivnih_magacina') ? ' has-danger' : '' }}">
                            <label>{{ __('Broj aktivnih magacina') }}</label>
                            <input type="text" name="broj_aktivnih_magacina" class="form-control{{ $errors->has('broj_aktivnih_magacina') ? ' is-invalid' : '' }}" >
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
