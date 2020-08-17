@extends('admin.layout_admin_master')

@section('header-script')
    <link rel="stylesheet" href="/Admin/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Admin/plugins/daterangepicker/daterangepicker.css">
@endsection

@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="content-table bg-white">
                <div class="card-header bg-white position-relative border-0">
                    <h4 class="card-title" style="margin-bottom: 0 !important;">Danh sách sản phẩm</h4>
                    <div class="breadcrumb">
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <input type="text" name="table_search" class="form-control" placeholder="Tìm kiếm" style="border-radius: 0 !important;">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default" style="border: 1px solid #ced4da; border-radius: 0 !important;"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        <div class="input-group mr-1 ml-1" style="width: 250px;">
                            <input type="text" class="form-control" readonly="" id="dateTime" style="border-radius: 0 !important;"/>
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                        </div>
                        <div class="input-group mr-1 ml-1" style="width: 200px;">
                            <select class="form-control" style="border-radius: 0 !important;">
                                <option value="">Tất cả</option>
                                <option value="new">Mới</option>
                                <option value="stocking">Còn hàng</option>
                                <option value="outofstock">Hết hàng</option>
                                <option value="inventory">Tồn kho</option>
                                <option value="sale">Giảm giá</option>
                                <option value="stop">Dừng bán</option>
                            </select>
                        </div>
                        <a href="/admin/product/new" type="button" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>&nbsp; Thêm mới</a>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table id="example" class="table table-head-fixed text-nowrap table-hover">
                        <thead>
                        <tr>
                            <th class="text-xl-center ver-middle">
                                <input type="checkbox" class="form-check-input" id="check-th">
                                <label class="form-check-label" for="check-th"></label>
                            </th>
                            <th class="ver-middle">Mã sản phẩm</th>
                            <th class="ver-middle">Tên sản phẩm</th>
                            <th class="ver-middle">Cửa hàng</th>
                            <th class="ver-middle">Loại sản phẩm</th>
                            <th class="text-xl-right ver-middle">Giá bán</th>
                            <th class="ver-middle">Số lượng</th>
                            <th class="ver-middle">Trạng thái</th>
                            <th class="ver-middle"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-xl-center ver-middle">
                                <input type="checkbox" class="form-check-input" id="check-1">
                                <label class="form-check-label" for="check-1"></label>
                            </td>
                            <td class="ver-middle">GGS0001</td>
                            <td class="ver-middle">Ghế gỗ trắng sau sửa lại</td>
                            <td class="ver-middle">Hiện recycling</td>
                            <td class="ver-middle">Gỗ</td>
                            <td class="ver-middle">300.000 VND</td>
                            <td class="ver-middle">2</td>
                            <td class="ver-middle">Còn hàng</td>
                            <td class="text-xl-right ver-middle">
                                <a href="/admin/product/detail" type="button" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>&nbsp; Sửa</a>
                                <button type="button" class="btn btn-sm btn-danger" value="1" onclick="showModalDeleteProduct(this)"><i class="fa fa-trash"></i>&nbsp; Xoá</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-xl-center ver-middle">
                                <input type="checkbox" class="form-check-input" id="check-2">
                                <label class="form-check-label" for="check-2"></label>
                            </td>
                            <td class="ver-middle">GGS0001</td>
                            <td class="ver-middle">Ghế gỗ trắng sau sửa lại</td>
                            <td class="ver-middle">Hiện recycling</td>
                            <td class="ver-middle">Gỗ</td>
                            <td class="ver-middle">300.000 VND</td>
                            <td class="ver-middle">2</td>
                            <td class="ver-middle">Còn hàng</td>
                            <td class="text-xl-right ver-middle">
                                <a href="/admin/product/detail" type="button" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>&nbsp; Sửa</a>
                                <button type="button" class="btn btn-sm btn-danger" value="2" onclick="showModalDeleteProduct(this)"><i class="fa fa-trash"></i>&nbsp; Xoá</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-xl-center ver-middle">
                                <input type="checkbox" class="form-check-input" id="check-1">
                                <label class="form-check-label" for="check-1"></label>
                            </td>
                            <td class="ver-middle">GGS0001</td>
                            <td class="ver-middle">Ghế gỗ trắng sau sửa lại</td>
                            <td class="ver-middle">Hiện recycling</td>
                            <td class="ver-middle">Gỗ</td>
                            <td class="ver-middle">300.000 VND</td>
                            <td class="ver-middle">2</td>
                            <td class="ver-middle">Còn hàng</td>
                            <td class="text-xl-right ver-middle">
                                <a href="/admin/product/detail" type="button" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>&nbsp; Sửa</a>
                                <button type="button" class="btn btn-sm btn-danger" value="3" onclick="showModalDeleteProduct(this)"><i class="fa fa-trash"></i>&nbsp; Xoá</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-xl-center ver-middle">
                                <input type="checkbox" class="form-check-input" id="check-1">
                                <label class="form-check-label" for="check-1"></label>
                            </td>
                            <td class="ver-middle">GGS0001</td>
                            <td class="ver-middle">Ghế gỗ trắng sau sửa lại</td>
                            <td class="ver-middle">Hiện recycling</td>
                            <td class="ver-middle">Gỗ</td>
                            <td class="ver-middle">300.000 VND</td>
                            <td class="ver-middle">2</td>
                            <td class="ver-middle">Còn hàng</td>
                            <td class="text-xl-right ver-middle">
                                <a href="/admin/product/detail" type="button" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>&nbsp; Sửa</a>
                                <button type="button" class="btn btn-sm btn-danger" value="4" onclick="showModalDeleteProduct(this)"><i class="fa fa-trash"></i>&nbsp; Xoá</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-xl-center ver-middle">
                                <input type="checkbox" class="form-check-input" id="check-1">
                                <label class="form-check-label" for="check-1"></label>
                            </td>
                            <td class="ver-middle">GGS0001</td>
                            <td class="ver-middle">Ghế gỗ trắng sau sửa lại</td>
                            <td class="ver-middle">Hiện recycling</td>
                            <td class="ver-middle">Gỗ</td>
                            <td class="ver-middle">300.000 VND</td>
                            <td class="ver-middle">2</td>
                            <td class="ver-middle">Còn hàng</td>
                            <td class="text-xl-right ver-middle">
                                <a href="/admin/product/detail" type="button" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>&nbsp; Sửa</a>
                                <button type="button" class="btn btn-sm btn-danger" value="5" onclick="showModalDeleteProduct(this)"><i class="fa fa-trash"></i>&nbsp; Xoá</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row footer-table">
                    <div class="col-md-6">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Hiển thị 1 đến 10 trong số 57</div>
                    </div>
                    <nav class="col-md-6 clearfix">
                        <ul class="pagination float-right">
                            <li class="page-item disabled">
                                <a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <span class="page-link">2
                                    <span class="sr-only">(current)</span>
                                </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="modal-delete-account">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #20c997;color: #fff;">
                    <h5 class="modal-title" id="exampleModalLabel">Xoá sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-0">Bạn có muốn xoá sản phẩm này?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Huỷ</button>
                    <button id="delete_product" type="button" class="btn btn-sm btn-success"><i class="fa fa-check"></i>&nbsp; Đồng ý</button>
                </div>
            </div>
        </div>
    </div>
@stop
@section('main-script')
    <script src="/Admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Admin/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="/Admin/plugins/moment/moment.min.js"></script>
    <script src="/Admin/plugins/moment/locale/vi.js"></script>
    <script src="/js/product.js"></script>

@endsection
