@extends('admin.default')
@section('content')
     <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">User Role List</h3>
                                    <ul class="panel-controls">
                                    <a href="{{url('admin/addrole')}}"><button type="button" class="btn btn-box-tool" ><b>ADD</b><i class="fa fa-plus-circle"></i></button></a>
                                        <!-- <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li> -->
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Role</th>
                                                <th>Description</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                $i=0;
                                            ?>
                                        @foreach ($role as $val)
                                            
                                                <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{ $val->role}}</td>
                                                
                                                <td>{{ $val->desc}}</td>
                                                
                                                
                                                <!-- <td><a href="{{ url('admin/viewcategory/'.$val->id) }}"  class="btn btn-gradient-ibiza waves-effect waves-light m-1 .btn-small" > <i class="fa fa-edit"></i> <span>View</span></a></td> -->
                                                <td><a href="{{ url('admin/editrole/'.$val->id) }}"  class="btn btn-gradient-ibiza waves-effect waves-light m-1 .btn-small" > <i class="fa fa-edit"></i> <span>Edit</span></a></td>
                                                <td><button type="button" class="btn btn-gradient-forest waves-effect waves-light m-1 delete" data-id="{{ $val->id }}" > <i class="fa fa fa-trash-o"></i> <span>Delete</span> </button></td>
                                                </tr>
                                                @endforeach
                                          
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
                           
 <script>
 $(document).on('click','.delete',function(){
   //alert('alert');
    var $this = $(this);
    var id = $this.attr('data-id');
    var url = "{{ url('admin/deleterole') }}"+"/"+id;
    //alert(url);
    window.location.href = url;
  });
</script>
                           
@stop