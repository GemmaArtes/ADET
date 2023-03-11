<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Log;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;


use Hash;

  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function login()
    {
        return view('auth.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('view')
                        ->withSuccess('You have Successfully logged in');
        }
  
        return redirect("login")->withSuccess('Opps! You have entered invalid credentials');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("login")->withSuccess('Great! You have Successfully Registered');
    }


    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('view');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

    public function view()
    {
        $products = Log::all();
        return view ('view', compact('products'));

    }

     public function home()
    {
        $products = Product::count();
        $category = Category::count();
        $totalByProduct = DB::table('reports')
            ->join('products', 'products.id', '=', 'reports.product_id')
            ->select('product_id', 'products.name', DB::raw('SUM(quantity_add) as total'))
            ->groupBy('product_id','products.name')
            ->get();

        return view('home', compact('category', 'products', 'totalByProduct')); 
    }

     public function products()
    {
        $category = \DB::table('categories')
            ->get();
        
        return view('products', compact('category')); 
    }

    public function category()
    {
        return view('category'); 
    }

    public function showcategory()
    {
        $products = Category::all();
        return view ('showcategory', compact('products')); 
    }

    public function instock()
    {
        $products = Product::all();
        $category = \DB::table('categories')
            ->get();
        
        

        return view ('instock', compact('products', 'category'));
    }

    public function notifications()
    {
        $logs = DB::table('logs')->where('quantity', '<=', 5)->get();
        return view('notifications', compact('logs')); 
    }

    public function reports()
    {
        $report = DB::table('reports')
            ->join('products', 'reports.product_id', '=', 'products.id')
            ->select('products.*', 'reports.*')
            ->get();
        return view ('reports', compact('report'));
    }

    public function sold(Request $request, $id)
    {
        
        $productid = DB::table('products')->where('id', $id)->value('id');
        $report = new Report([
        'product_id' => $productid,
        'quantity_add' => $request->input('quantity_add'),
        'stockleft' => $request->input('stockleft'),
        ]);
        $report->save();

        $left = $request->input('stockleft');

        DB::table('logs')->where('id', $id)->update(['quantity' => $left]);
         return redirect('instock')->with('product', $id);
        
    }

    public function addstock(Request $request, $id)
    {
        $productid = DB::table('products')->where('id', $id)->value('id');
        $report = new Report([
        'product_id' => $productid,
        'quantity_add' => $request->input('quantity_add'),
        'stockleft' => $request->input('stockleft'),
        ]);
        $report->save();

        $add = $request->input('quantity_add');
        DB::table('logs')->where('id', $id)->increment('quantity', $add);

         return redirect('instock')->with('product', $id);
        
    }




     
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */


     public function addcategory(Request $request)
    {
        $requestData = $request->all();
        Category::create($requestData);
        return redirect()->back()->with('message',
        'New Category Added Successfully');

    }

    public function addproduct(Request $request)
    {
        $product = new Product([
        'code' => $request->input('code'),
        'name' => $request->input('name'),
        'quantity' => 0,
        'price' => $request->input('price'),
        'category' => $request->input('category'),
        ]);
        $product->save();

        $log = new Log([
        'code' => $request->input('code'),
        'name' => $request->input('name'),
        'quantity' => 0,
        'price' => $request->input('price'),
        'category' => $request->input('category'),
        ]);
        $log->save();

        return redirect()->back()->with('message',
        'New Product Added Successfully');

    }

    public function deletefunction($id)
    {
        DB::delete('delete from categories where id = ?', [$id]);
        return redirect('showcategory');
    }

    public function deleteproduct($id)
    {
        DB::delete('delete from products where id = ?', [$id]);
        return redirect('view');
    }


  

}