<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    
    
    public function home()
    {
        return view('admin.pages.login');
    }
    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }
    public function addrole()
    {
        return view('admin.pages.addrole');
    }
    public function rolelist()
    {
        $role = DB::table('user_roles')->where('status',1)->get();
        return view('admin.pages.rolelist')->with('role',$role);
    }
    public function editrole($id)
    {
        $role = DB::table('user_roles')->where('id',$id)->first();
        return view('admin.pages.editrole')->with('role',$role);
    }
    public function deleterole($id)
    {
        $role = array(
           
            'status'=>0,
            'updated_at' => date("Y-m-d H:i:s")
        );
        $updaterole=DB::table('user_roles')->where('id', $id)->update($role);
        return redirect('admin/rolelist ');
       
    }
    public function addpermission()
    {
        $role = DB::table('user_roles')->get();
        return view('admin.pages.addpermission')->with('role',$role);
    }
    public function permissionlist()
    {
        $user = DB::table('user_permission')->where('status',1)->get();
        return view('admin.pages.permissionlist')->with('user',$user);
    }
    public function editpermission($id)
    {
        $role = DB::table('user_roles')->get();
        $user = DB::table('user_permission')->where('id',$id)->first();
        //dd($user);
        $action=$user->productcategory;
        $user_act=$user->user;
        $product=$user->product;

        $p_cat = explode(",", $action);
        $user_act = explode(",", $user_act);
        $product = explode(",", $product);

      //dd($product);
        return view('admin.pages.editpermission',compact('role','p_cat','user_act','product','user'));
    
    }
    public function deletepermission($id)
    {
        $role = array(
           
            'status'=>0,
            'updated_at' => date("Y-m-d H:i:s")
        );
        $updaterole=DB::table('user_roles')->where('id', $id)->update($role);
        return redirect('admin/permissionlist ');
       
    }
    public function adduser()
    {
        return view('admin.pages.adduser');
    }
    public function userlist()
    {
        $user = DB::table('user_details')->where('status',1)->get();
        return view('admin.pages.userlist')->with('user',$user);
    }
    public function edituser($id)
    {
        $user = DB::table('user_details')->where('id',$id)->first();
        return view('admin.pages.edituser')->with('user',$user);
    }
    public function deleteuser($id)
    {
        $role = array(
           
            'status'=>0,
            'updated_at' => date("Y-m-d H:i:s")
        );
        $updaterole=DB::table('user_details')->where('id', $id)->update($role);
        return redirect('admin/userlist ');   
    }

    public function addproducts()
    {
        $category = DB::table('product_category')->get();
        return view('admin.pages.addproduct')->with('category',$category);
    }

    public function productslist()
    {
        $products = DB::table('products')->where('status',1)->get();
        return view('admin.pages.productslist')->with('products',$products);
    }
    public function editproducts($id)
    {
        $products = DB::table('products')->where('id',$id)->first();
        $category = DB::table('product_category')->get();
        return view('admin.pages.editproducts')->with('products',$products)->with('category',$category);
    }
    public function deleteproducts($id)
    {
        $products = array(
           
            'status'=>0,
            'updated_at' => date("Y-m-d H:i:s")
        );
        $updateproducts=DB::table('products')->where('id', $id)->update($products);
        return redirect('admin/productslist ');
       
    }
    public function addcategory()
    {
        return view('admin.pages.addcategory');
    }

    public function productcategorylist()
    {
        $productcategory = DB::table('product_category')->where('status',1)->get();
        return view('admin.pages.productcategorylist')->with('productcategory',$productcategory);
    }
    public function editproductcategory($id)
    {
        
        $productcategory = DB::table('product_category')->where('id',$id)->first();
        //dd($productcategory);
        return view('admin.pages.editproductcategory')->with('productcategory',$productcategory);
    }
    public function deleteproductcategory($id)
    {
        $productcategory = array(
           
            'status'=>0,
            'updated_at' => date("Y-m-d H:i:s")
        );
        $updateproductcategory=DB::table('product_category')->where('id', $id)->update($productcategory);
        return redirect('admin/productcategorylist ');
       
    }
   
    
}
