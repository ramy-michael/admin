<style>
    .row .col-md-12 .panel-default .panel-body .form-horizontal .col-lg-12 .form-group label{
        width: 10%;
        float: right;
    }
    .row .col-md-12 .panel-default .panel-body .form-horizontal .col-lg-12 .form-group input{
        width: 36%;
        float: right;
    }
    @media(max-width: 650px){
        .row .col-md-12 .panel-default .panel-body .form-horizontal .col-lg-12 .form-group label{
            width: 15%;
        }
        .row .col-md-12 .panel-default .panel-body .form-horizontal .col-lg-12 .form-group input{
            width: 50%;
        }
    }
</style>
@extends('layouts.app')

@section('title', 'Create Customer')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"> اضافه منتج</div>
                <div class="panel-body" style="height: 300px;">
                    <!-- Display Validation Errors -->
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('Items') }}">
                        {{ csrf_field() }}

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <!-- <legend class="section">Basic & Contact Info</legend> -->
                            <div class="form-group required{{ $errors->has('name') ? ' has-error' : '' }} row" style="float: right;width: 100%">
                                {{-- <div class="col-lg-11"> --}}
                                    <label for="name" class="col-lg-1 control-label">الاسم</label>
                                    <input id="name" name="name" type="text" class="form-control col-lg-11"
                                           value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                                    @endif
                                {{-- </div> --}}
                                
                            </div>
                            <!-- <br>
                            <div class="form-group required{{ $errors->has('address1') ? ' has-error' : '' }} row" style="margin-top: 20px;">
                                <div class="col-lg-11">
                                    <input id="address1" name="address1" type="text" class="form-control" style="width: 300px;"
                                           value="{{ old('address1') }}" required>
                                    @if ($errors->has('address1'))
                                        <span class="help-block"><strong>{{ $errors->first('address1') }}</strong></span>
                                    @endif
                                </div>
                                <label for="address1" class="col-lg-1 control-label">عنوان</label>
                            </div> -->
                            <br>
                            <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }} row" style="float: right;width: 100%">
                                {{-- <div class="col-lg-11"> --}}
                                    <label for="code" class="col-lg-1 control-label">كود</label>
                                    <input id="code" name="code" type="text" class="form-control col-lg-11"
                                           value="{{ old('code') }}">
                                    @if ($errors->has('code'))
                                        <span class="help-block"><strong>{{ $errors->first('code') }}</strong></span>
                                    @endif
                                {{-- </div> --}}
                                
                            </div>
                            <br>
                            <!-- <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }} row" style="margin-top: 20px;">
                                <div class="col-lg-11">
                                    <input id="balance" name="balance" type="text" class="form-control" style="width: 300px;"
                                           value="{{ old('balance') }}">
                                    @if ($errors->has('balance'))
                                        <span class="help-block"><strong>{{ $errors->first('balance') }}</strong></span>
                                    @endif
                                </div>
                                <label for="code" class="col-lg-1 control-label">balance</label>
                            </div> -->
                            <br>
                            <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }} row" style="float: right;width: 100%">
                                {{-- <div class="col-lg-11"> --}}
                                    <label for="quantity" class="col-lg-1 control-label"> الكميه</label>
                                    <input id="quantity" name="quantity" type="text" class="form-control col-lg-11"
                                           value="{{ old('quantity') }}">
                                           <input id="state" name="state" type="hidden" class="form-control"
                                                  value=1>
                                    @if ($errors->has('quantity'))
                                        <span class="help-block"><strong>{{ $errors->first('quantity') }}</strong></span>
                                    @endif
                                {{-- </div> --}}
                                
                            </div>

                            <legend class="section"></legend>
                            <div class="form-group required{{ $errors->has('status') ? ' has-error' : '' }}">

                            </div>



                        </div>

                        <br>
                        <div class="form-group" style="margin-top: 30px;">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary"> حفظ</button>
                                <a class="btn btn-link" href="{{ url('Items') }}"> الغاء</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @include('layouts.app')
@endsection
