@extends('admin.default')
@section('content')
<div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" action="{{url('admin/addproducts')}}" method="post" enctype="multipart/form-data"> 
                            {{csrf_field() }}
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit Products</strong> </h3>
                                    <div class="flash-message">
                                        @include('admin.pages.notification')
                                    </div>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                
                                <div class="panel-body">                                                                        
                                <input type="hidden" name="id" value="{{$products->id}}" class="form-control"/>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Product Category</label>
                                        <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" name="productcategory">
                                                <option value="select">Select</option>
                                                <option value="<?php echo $products->productcategory;?>" <?php echo ($products->productcategory) ? ' selected="selected"' : '';?>><?php echo $products->productcategory;?></option>

                                                @foreach ($category as $val)
                                                <option value="{{$val->category}}">{{$val->category}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">ProductTitle</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="producttitle" value="{{$products->producttitle}}" class="form-control"/>
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                    
                                    
                                   
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Description</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="desc" rows="3">{{$products->desc}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">ProductPrice</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="productprice" value="{{$products->productprice}}" class="form-control"/>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Product Images</label>
                                        <!-- <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" name="productprice" class="form-control">
                                        </div> -->
                                    </div>
                                    <?php 
                                        $images = explode(',',$products->productimage,-1);
                                    ?>
                                  @if ($images != "")
                                   @foreach($images as $val) 
                                    <div class="form-group">    
                                    <label class="col-md-3 col-xs-12 control-label"></label>

                                       <div class="col-md-6 col-xs-6">   
                                             <img class="" img-responsive" src="{{ asset('public/upload/products/'.$val) }}" width="100px">                                         
                                            <input type="file" name="p_image[]" >     

                                        </div>    
                                    </div>
                                    @endforeach
                                    @endif

                                    @if($images="")
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Image 2</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="file" name="p_image[]" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Image 3</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="file" name="p_image[]" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Image 4</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="file" name="p_image[]" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Image 5</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="file" name="p_image[]" class="form-control">
                                        </div>
                                    </div>
                                    @endif
                                                        
                                                            
                                                        
                                

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