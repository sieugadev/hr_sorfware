@extends('layout.main')
@section('nhanvien')
<div class="container">
<div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger text-center">
                    Vui lòng kiểm tra lại!!!
                </div>
                @endif
            <form action="{!! URL ::route('luu_nv')!!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    
                   <div class="col">
                        <label>Họ và Tên Nhân Viên</label>
                        <input id="new-pass-control" name="txt_hoten_nv" class="form-control" type="text" value="{!! old('txtTen') !!}">
                     
                        @error('txt_hoten_nv')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                    </div> 
</div>

<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>Địa chỉ</label>
                        <input id="current-pass-control" name="txt_diachi_nv" class="form-control" type="text" value="{!! old('txtgioitinh') !!}">
                        @error('txt_diachi_nv')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                    </div>
                   <div class="col">
                        <label>Số điện thoại</label>
                        <input id="new-pass-control" name="txt_sdt_nv" class="form-control" type="text" value="{!! old('txtpban') !!}">
                        @error('txt_sdt_nv')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                    </div>
</div>
<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>Giới tính</label>
                        <input id="current-pass-control" name="txt_gioitinh_nv" class="form-control" type="text" value="{!! old('txtgioitinh') !!}">
                        @error('txt_gioitinh_nv')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                    </div>
                   
</div>


<div class="card-header text-white">
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>&nbsp&nbspLưu Lại&nbsp&nbsp</button>
                    <a href="" class="btn btn-primary"><i class="icon-remove"></i>&nbsp&nbspLàm Mới&nbsp&nbsp</a>
</div>


</div>

    </div>
    </div>
    @endsection