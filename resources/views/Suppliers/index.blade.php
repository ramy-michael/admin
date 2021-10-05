@extends('layouts.app')

@section('title', 'Suppliers')

@section('content')
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Data Tables</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->


</head>
    <div class="row" style="dir:rtl">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
              {{session()->get('name') }}
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="ibox-title">
                    <h5>الموردين</h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover dataTables-example" id="gettable">
                            <thead>
                            <tr>
                                <th class="text-center">كود</th>
                                <th class="text-center">الاسم</th>
                                <th class="text-center">رقم التليفون</th>
                                <th class="text-center">العنوان</th>

                                <th class="text-center">الاعدادات</th>
                            </tr>
                            </thead>
                            <a href="{{ route('Suppliers.create')}}" class="btn btn-success"style="margin-left:1207px;">اضافه مورد</a>
                            <tbody>
                            @foreach ($suppliers as $key => $supplier)
                                <tr class="gradeX">
                                    <td class="text-center">
                                      {{ $supplier->code }}
                                    </td>
                                    <td class="text-center">{{ $supplier->name }}</td>
                                    <td class="text-center">{{ $supplier->phone }}</td>
                                    <td class="text-center">{{ $supplier->address1 }}</td>



                                    <td class="text-center">

                                        <a class="btn btn-xs btn-primary"
                                           href="{{ route('Suppliers.edit',$supplier->id) }}"><i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ url('Suppliers/'.$supplier->id) }}" method="POST"
                                              style="display: inline-block">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" id="delete-task-{{ $supplier->id }}"
                                                    class="btn btn-xs btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- <script src="js/plugins/dataTables/datatables.min.js"></script>
<script src="js/plugins/dataTables/dataTables.bootstrap4.min.js"></script> -->
<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>



<!-- Page-Level Scripts -->
<script>

    $(document).ready(function(){
        $('#gettable').DataTable({
            pageLength: 25,
            responsive: true,
            order: [] ,
            // dom: '<"html5buttons"B>lTfgitp',
            // buttons: [
            //     { extend: 'copy'},
            //     {extend: 'csv'},
            //     {extend: 'excel', title: 'ExampleFile'},
            //     {extend: 'pdf', title: 'ExampleFile'},
            //
            //     {extend: 'print',
            //      customize: function (win){
            //             $(win.document.body).addClass('white-bg');
            //             $(win.document.body).css('font-size', '10px');
            //
            //             $(win.document.body).find('table')
            //                     .addClass('compact')
            //                     .css('font-size', 'inherit');
            //     }
            //     }
            // ]

        });

    });

</script>
