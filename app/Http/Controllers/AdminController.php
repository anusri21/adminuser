<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Validator;
use Response;
use DB;
use Session;
use Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\URL;

class AdminController extends Controller
{
    public function __construct() 
    {
        $this->admin = new Admin();
    }

    public function addrole(Request $request)
    {
        $data=$request->all();
         //dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'role' => isset($data['role']) ? $data['role'] : '',
                'desc' => isset($data['desc']) ? $data['desc'] : '',
               
            ];
            $rules = array(
                'role' => 'required',
                'desc' => 'required',
               
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                $data = Session::flash('error', 'Please Provide All Datas!');
                return Redirect::back()
                ->withInput()
                ->withErrors($data);
            } else { 
               
                $roleInput = array(
                    'id' => $input['id'],
                    'role' => $input['role'],
                    'desc' => $input['desc'],
                    'status'=>1
                );
                $role = $this->admin->addRole($roleInput);
               if ($role) {
                   
                return redirect('admin/rolelist');
                } else {
                    $data = Session::flash('warning', 'Something Error Occured!');
                    return Redirect::back()->with(['data', $data], ['warning', $data]);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
       
    }

    public function adduser(Request $request)
    {
        $data=$request->all();
         //dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'name' => isset($data['name']) ? $data['name'] : '',
                'email' => isset($data['email']) ? $data['email'] : '',
                'phone' => isset($data['phone']) ? $data['phone'] : '',
                'gender' => isset($data['gender']) ? $data['gender'] : '',
                'address' => isset($data['address']) ? $data['address'] : '',
               
            ];
            $rules = array(
                'name' => 'required',
                'email' => 'required',
               
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                $data = Session::flash('error', 'Please Provide All Datas!');
                return Redirect::back()
                ->withInput()
                ->withErrors($data);
            } else { 
               
                $userInput = array(
                    'id' => $input['id'],
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'phone' => $input['phone'],
                    'gender' => $input['gender'],
                    'address' => $input['address'],
                    'status'=>1
                );
                $user = $this->admin->addUser($userInput);
               if ($user) {
                   
                return redirect('admin/userlist');
                } else {
                    $data = Session::flash('warning', 'Something Error Occured!');
                    return Redirect::back()->with(['data', $data], ['warning', $data]);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
       
    }

    public function addpermission(Request $request)
    {
        $data=$request->all();
         //dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'role' => isset($data['role']) ? $data['role'] : '',
                'user' => isset($data['user']) ? $data['user'] : '',
                'productcategory' => isset($data['productcategory']) ? $data['productcategory'] : '',
                'product' => isset($data['product']) ? $data['product'] : '',
               
            ];
            $user =  json_encode($input['user']);
            //dd($user);
            $user_act = str_replace( array( '\'', '"', '[',']', '"', '>' ), '', $user);
            //dd($user_act);
            $productcategory =  json_encode($input['productcategory']);
            $pcat_act = str_replace( array( '\'', '"', '[',']', '"', '>' ), '', $productcategory);

            $product =  json_encode($input['product']);
            $product_act = str_replace( array( '\'', '"', '[',']', '"', '>' ), '', $product);

            $rules = array(
                'role' => 'required',
               
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                $data = Session::flash('error', 'Please Provide All Datas!');
                return Redirect::back()
                ->withInput()
                ->withErrors($data);
            } else { 
               
                $addInput = array(
                    'id' => $input['id'],
                    'role' => $input['role'],
                    'user' => $user_act,
                    'productcategory'=> $pcat_act,
                    'product'=> $product_act,
                    'status'=>1
                );
                //dd($addInput);
                $permission = $this->admin->addPermission($addInput);
               if ($permission) {
                   
                return redirect('admin/permissionlist');
                } else {
                    $data = Session::flash('warning', 'Something Error Occured!');
                    return Redirect::back()->with(['data', $data], ['warning', $data]);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
       
    }

    public function addcategory(Request $request)
    {
        $data=$request->all();
         //dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'category' => isset($data['category']) ? $data['category'] : '',
                'desc' => isset($data['desc']) ? $data['desc'] : '',
               
            ];
            //dd($input);
           
            $rules = array(
                'category' => 'required',
                'desc' => 'required',
               
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                $data = Session::flash('error', 'Please Provide All Datas!');
                return Redirect::back()
                ->withInput()
                ->withErrors($data);
            } else { 
               
                $categoryInput = array(
                    'id' => $input['id'],
                    'category' => $input['category'],
                    'desc' => $input['desc'],
                    'status'=>1
                );
                $category = $this->admin->addCategory($categoryInput);
               if ($category) {
                   
                return redirect('admin/productcategorylist');
                } else {
                    $data = Session::flash('warning', 'Something Error Occured!');
                    return redirect('login')->with(['data', $data], ['warning', $data]);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
       
    }
    public function addproducts(Request $request)
    {
        $data=$request->all();
         //dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'productcategory' => isset($data['productcategory']) ? $data['productcategory'] : '',
                'producttitle' => isset($data['producttitle']) ? $data['producttitle'] : '',
                'desc' => isset($data['desc']) ? $data['desc'] : '',
                'p_image' => isset($data['p_image']) ? $data['p_image'] : '',
                'productprice' => isset($data['productprice']) ? $data['productprice'] : '',
            ];
           // dd($input);
                $rules = array(
                    'productcategory' => 'required',
                    'producttitle' => 'required',
                    'desc' => 'required',
                // 'productimage' => 'required',
                    'productprice' => 'required',
                
                );
                $checkValid = Validator::make($input, $rules);
                if ($checkValid->fails()) {
                    $data = Session::flash('error', 'Please Provide All Datas!');
                    return Redirect::back()
                    ->withInput()
                    ->withErrors($data);
                }

           if($input['p_image']!='')
           {
            $images=array();
            if($files=$request->file('p_image')){
                foreach($files as $file){
                    $name=$file->getClientOriginalExtension();
                    $rand=substr(number_format(time() * rand(), 0, '', ''), 0, 4);
                    $image = 'image' . '-' . $rand . '.' . $name;
                    $file->move(public_path() . '/upload/products', $image);
                    $images[]=$image;
                }
            }
           
                $categoryInput = array(
                    'id' => $input['id'],
                    'productcategory' => $input['productcategory'],
                    'producttitle' => $input['producttitle'],
                    'desc' => $input['desc'],
                    'productimage' => implode(",",$images),
                    'productprice' => $input['productprice'],
                    'status'=>1
                );
            }else{
                $categoryInput = array(
                    'id' => $input['id'],
                    'productcategory' => $input['productcategory'],
                    'producttitle' => $input['producttitle'],
                    'desc' => $input['desc'],
                   // 'productimage' => implode(",",$images),
                    'productprice' => $input['productprice'],
                    'status'=>1
                );
            }
                $products = $this->admin->products($categoryInput);
               if ($products) {
                   
                return redirect('admin/productslist');
                } else {
                    $data = Session::flash('warning', 'Something Error Occured!');
                    return redirect('login')->with(['data', $data], ['warning', $data]);
                }
         
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
       
    }
}
