@extends('layout.main')
@section('nhanvien')
        <div class="container">
          
          <div class ="col-sm-12 border ">
               <div class="card-header bg-primary text-white">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn"> THÔNG TIN </h1>
                                  </div>
                    
                     </div>
</div>
</br>
<div> <a href="{!! URL::route('them_nv')!!}" class=" btn btn-primary"><i class="btn-icon-only icon-edit">Thêm mới</i></a> <br></div> 
                   <div class="card-body">
                  
                                <table class="table table-bordered ">
                                     <thread >
                                         </tr >
                                           <th align="center">STT</th>
                                           <th align="center">MÃ SINH VIÊN</th>
                                           <th align="center">HỌ TÊN SINH VIÊN</th>
                                           <th align="center">PHÒNG BAN</th>
                                           <th align="center">ĐỊA CHỈ</th>
                                           <th align="center">TỦY CHỈNH</th>
                                          </tr>
                                     </thread>
                                    
                                     <tbody>
                                     @foreach ($nhanvien as $sv)
                                     <tr>
                                     
                                        <td>{{$sv->id}}</td>
                                        <td>{{$sv->hoten_nv}}</td>
                                        <td>{{$sv->diachi_nv}}</td>
                                        <td>{{$sv->ten_cv}}</td>
                                        <td>{{$sv->sdt_nv}}</td>
                                        <td class="td-actions">
                        <a href="" class="  btn btn-primary"><i class="btn-icon-only icon-edit">Sửa</i></a>

                        <a href="" class="  btn btn-danger">
                            <i class="btn-icon-only icon-remove">Xóa</i>
                        </a>
                    </td>
                                     </tr>
                                       @endforeach 
                                   
                                    </tbody>
                               </table>
                             
                 
                 </div >   
              </div>
           </div>
           
</div> <!--||KẾT THÚC VÙNG CHIA DIV THÀNH 2 PHẦN||-->
       </div>
       @endsection

