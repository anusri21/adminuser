@extends('admin.default')
@section('content')

<div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" action="{{url('admin/addpermission')}}" method="post">
                            {{csrf_field() }}
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Add Role</strong> </h3>
                                    <div class="flash-message">
                                        @include('admin.pages.notification')
                                    </div>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">User Role</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="role">
                                            
                                            <option selected="selected">Select </option>
                                                @foreach ($role as $val)
                                                <option value="{{$val->role}}">{{$val->role}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">User</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <label class="check"><input type="checkbox" name="user[]" class="icheckbox" value="add" /> Add</label>
                                            <label class="check"><input type="checkbox" name="user[]"  class="icheckbox" value="edit" /> Edit</label>
                                            <label class="check"><input type="checkbox"  name="user[]" class="icheckbox" value="delete" /> Delete</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Product Category</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <label class="check"><input type="checkbox"  name="productcategory[]" class="icheckbox" value="add" /> Add</label>
                                            <label class="check"><input type="checkbox"  name="productcategory[]" class="icheckbox" value="edit" /> Edit</label>
                                            <label class="check"><input type="checkbox"  name="productcategory[]" class="icheckbox" value="delete" /> Delete</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Products</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <label class="check"><input type="checkbox"  name="product[]"  class="icheckbox" value="add" /> Add</label>
                                            <label class="check"><input type="checkbox"  name="product[]" class="icheckbox" value="edit" /> Edit</label>
                                            <label class="check"><input type="checkbox"  name="product[]" class="icheckbox" value="delete" /> Delete</label>
                                        </div>
                                    </div>
                                    
        

                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>

            @stop    