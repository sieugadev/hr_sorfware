<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Nhanvien;
use DB;
class NhanvienController extends Controller
{
    //list danh sách nhân viên
    public function nhanvien()
    {
           $nhanvien= DB::table('nhanvien')
           ->join('chucvu','nhanvien.ma_cv','=','chucvu.ma_cv')->paginate(3);
           return view('nhanvien.nhanvien',compact('nhanvien'))->with('i',(request()->input('page',1)-1)*3);
   }
   //thêm nhân viên mới
   public function them_nv()
    {
           return view('nhanvien.them_nv'); // ok
    }
   //thêm nhân viên theo phong ban
   public function luu_nv(Request $request)
   {
       $request->validate([
           'txt_hoten_nv'=>'required|min:6',
           'txt_diachi_nv'=>'required|min:10',
           'txt_sdt_nv'=>'required|integer|min:10' ,
           'txt_gioitinh_nv'=>'required',

       ],
       ['txt_hoten_nv.required'=>'Tên nhân viên không được để trống',
       'txt_hoten_nv.min'=>'Tên không được nhỏ hơn 6',
       'txt_diachi_nv.required'=>'Địa chỉ không được để trống',
       'txt_diachi_nv.min'=>'Địa chỉ không được nhỏ hơn 10 ký tự',
       'txt_sdt_nv.required'=>'Số điện thoại không được để trống',
       'txt_sdt_nv.integer'=>'Số điện thoại phải là dạng số',
       'txt_sdt_nv.min'=>'Số điện thoại không được nhỏ hơn 10 ký tự',
       'txt_gioitinh_nv.required'=>'Giới tính không được để trống',
       
]);

     $result=  DB::table('nhanvien')->insert([
           
              'hoten_nv'=>$request->txt_hoten_nv,
              'diachi_nv'=>$request->txt_diachi_nv,
              'gioitinh_nv'=>$request->txt_gioitinh_nv,
              'sdt_nv'=>$request->txt_sdt_nv,
       ]);
       dd($result);
       return redirect()->route('nhanvien');

//       $data= DB::table('nhanvien')
//        ->join('chucvu','nhanvien.ma_cv','=','chucvu.ma_cv')
//       ->paginate(3);
    
  }
   
}
