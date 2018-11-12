@extends('admin.default')
@section('content')

<div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" action="{{url('admin/addcategory')}}" method="post">
                            {{csrf_field() }}
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Add ProductCategory</strong> </h3>
                                    <div class="flash-message">
                                        @include('admin.pages.notification')
                                    </div>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">ProductCategory</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="category" class="form-control"/>
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                    
                                    
                                   
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Description</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="desc" rows="3"></textarea>
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