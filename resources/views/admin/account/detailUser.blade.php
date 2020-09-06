@extends('admin.layout_admin_master')

@section('title', 'Chi tiết tài khoản người dùng')

@section('header-script')
    <link rel="stylesheet" href="/Admin/plugins/bootstrap/css/bootstrap.min.css">
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="/admin/account/user" class="gobacklist"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp; Danh sách tài khoản người dùng</a>
        </div>
        <div class="col-12">
            <div class="container-fluid bg-white p-3 content_form" style="box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);border-radius: 5px;">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="text-center">
                            <img src="/img/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar" style="border-radius: 50% !important;width: 13rem;height: 13rem; border: 2px solid #20c997;">
                            <input type="file" class="text-center center-block file-upload d-none" style="margin-top: 20px;">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <h5>
                            Thông tin chung
                            <button class="btn btn-sm btn-outline-warning float-right" id="edit">
                                <i class="fa fa-edit"></i>&nbsp; Sửa
                            </button>
                            <button class="btn btn-sm btn-outline-secondary float-right mr-2" style="border: 1px solid #ddd;">
                                <i class="fa fa-envelope-open"></i>&nbsp; Xác minh
                            </button>
                        </h5>
                        <hr/>
                        <div class="content_information">
                            <div class="row my-4">
                                <div class="col-md-2 font-weight-bold">Tên tài khoản:</div>
                                <div class="col-md-4">Hát như hót</div>
                                <div class="col-md-2 font-weight-bold">Tên đầy đủ:</div>
                                <div class="col-md-4">Trần Khiêm Tư</div>
                            </div>
                            <div class="row my-4">
                                <div class="col-md-2 font-weight-bold">Số điện thoại</div>
                                <div class="col-md-4">0399899288</div>
                                <div class="col-md-2 font-weight-bold">Email:</div>
                                <div class="col-md-4">tukhiemton@gmail.com</div>
                            </div>
                            <div class="row my-4">
                                <div class="col-md-2 font-weight-bold">Địa chỉ:</div>
                                <div class="col-md-4">Số 2, Duy Tân, Cầu Giấy, Hà Nội</div>
                                <div class="col-md-2 font-weight-bold">Xác minh tài khoản: </div>
                                <div class="col-md-4">Chưa kích hoạt</div>
                            </div>
                        </div>
                        <form class="form row d-none" action="#" method="post" id="accountForm">
                            @csrf
                            <div class="form-group col-md-6">
                                <label>Tên tài khoản</label>
                                <input type="text" class="form-control" id="userName" placeholder="Tên tài khoản">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tên đầy đủ</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Tên đầy đủ">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Số điện thoại</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" placeholder="Mật khẩu">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Địa chỉ</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Nhập địa chỉ của bạn">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kiểm chứng</label>
                                <input type="password" class="form-control" id="password2" placeholder="Nhập lại mật khẩu">
                            </div>
                            <div class="form-group col-md-12 ">
                                <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-save"></i>&nbsp; Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main-script')
    <script src="/Admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/admin/account/detailUser.js"></script>
@endsection
