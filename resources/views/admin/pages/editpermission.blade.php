@extends('admin.default')
@section('content')
<div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" action="{{url('admin/addpermission')}}" method="post">
                            {{csrf_field() }}
                            <input type="hidden" class="form-control" value="{{$user->id}}" name="id" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit User Permission</strong> </h3>
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
                                            <option value="<?php echo $user->role;?>" <?php echo ($user->role) ? ' selected="selected"' : '';?>><?php echo $user->role;?></option>

                                                @foreach ($role as $val)
                                                <option value="{{$val->role}}">{{$val->role}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">User</label>
                                        <div class="col-md-6 col-xs-12"> 
                                     
                                          
                                                                                                                                                                        
                                            <label class="check"><input type="checkbox" name="user[]" class="icheckbox" value="add"<?php if(in_array("add", $user_act)){ echo " checked=\"checked\""; } ?> /> Add</label>
                                            <label class="check"><input type="checkbox" name="user[]"  class="icheckbox" value="edit" <?php if(in_array("edit", $user_act)){ echo " checked=\"checked\""; } ?> /> Edit</label>
                                            <label class="check"><input type="checkbox"  name="user[]" class="icheckbox" value="delete" <?php if(in_array("delete", $user_act)){ echo " checked=\"checked\""; } ?> /> Delete</label>
                                           
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Product Category</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                  
                                            <label class="check"><input type="checkbox"  name="productcategory[]" class="icheckbox" value="add" <?php if(in_array("add", $p_cat)){ echo " checked=\"checked\""; } ?>/> Add</label>
                                            <label class="check"><input type="checkbox"  name="productcategory[]" class="icheckbox" value="edit" <?php if(in_array("edit", $p_cat)){ echo " checked=\"checked\""; } ?>/> Edit</label>
                                            <label class="check"><input type="checkbox"  name="productcategory[]" class="icheckbox" value="delete" <?php if(in_array("delete", $p_cat)){ echo " checked=\"checked\""; } ?>/> Delete</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Products</label>
                                            <label class="check"><input type="checkbox"  name="product[]"  class="icheckbox" value="add" <?php if(in_array("add", $product)){ echo " checked=\"checked\""; } ?>/> Add</label>
                                            <label class="check"><input type="checkbox"  name="product[]" class="icheckbox" value="edit" <?php if(in_array("edit", $product)){ echo " checked=\"checked\""; } ?>/> Edit</label>
                                            <label class="check"><input type="checkbox"  name="product[]" class="icheckbox" value="delete" <?php if(in_array("delete", $product)){ echo " checked=\"checked\""; } ?>/> Delete</label>
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