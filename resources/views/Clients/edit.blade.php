@extends('layouts.app')

@section('title', 'Edit Client')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Client</div>

                    <div class="panel-body">
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


                      <!--  <form class="form-horizontal" role="form" method="POST"
                              action="{{ url('Clients/update/'.$Client->id) }}">-->
                              <form class="form-horizontal" enctype="multipart/form-data" action = "updateClient" method = "post">

                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">الاسم</label>
                                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden"  id="Client_id" value="{{$Client->id }}">

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{$Client->name}}"
                                           required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                                <label for="code" class="col-md-4 control-label">الكود</label>

                                <div class="col-md-6">
                                    <input id="code" type="text" class="form-control" name="code"
                                           value="{{$Client->code}}"
                                           required autofocus>

                                    @if ($errors->has('code'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('balance') ? ' has-error' : '' }}">
                                <label for="balance" class="col-md-4 control-label">balance</label>

                                <div class="col-md-6">
                                    <input id="balance" type="text" class="form-control" name="balance"
                                           value="{{$Client->balance}}"
                                           required autofocus>

                                    @if ($errors->has('balance'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('balance') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="phone"   class="col-md-4 control-label">التليفون</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" value="{{$Client->phone}}" class="form-control" name="phone" autofocus>
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address1') ? ' has-error' : '' }}">
                                <label for="address1" class="col-md-4 control-label">
                                    العنوان</label>

                                <div class="col-md-6">
                                    <input id="address1" type="text" value="{{$Client->address1}}"class="form-control"
                                           name="address1" autofocus>
                                    @if ($errors->has('address1'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address1') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>





                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="button" onclick="update()" class="btn btn-primary">
                                        Update
                                    </button>

                                    <a class="btn btn-link" href="{{ url('Clients') }}">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<script>

function update()
{


  $.ajax({
    url: "{{ URL::to('updateClient') }}",
    type: "post",
    dataType: 'json',
    data: {"_token":$('#_token').val(),
    "name":$('#name').val(),
    "phone":$('#phone').val(),
    "address1":$('#address1').val(),
    "balance":$('#balance').val(),
    "code":$('#code').val(),"id":$('#Client_id').val()},
    success: function(response)
    {
      //if(response['errors'])
    //  {
if(response.status=="success"){
  window.location.href = "/Clients";

}else{

}

    /*  if(response['errors'].phone)
      {var html="";
        for(var i=0;i<response['errors'].phone.length;i++){
        html+=''+response["errors"].phone[i]+'<br>'
      }
        $("#olddoctor_phoneinvalid").html(html);
      }
      if(response['errors'].type)
      {
        $("#olddoctor_typeinvalid").html(response['errors'].type);
      }
      if(response['errors'].docName)
      {
        $("#olddoctor_nameinvalid").html(response['errors'].docName);
      }

    }
      else if(response.success)
      {*/
      //  location.reload();
    //  }
    //  location.reload();
    //window.location.replace("Clients");




   }



    });

}
</script>
@endsection
