@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Thêm Sách</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid">
                <div class="control-group">
                    <label class="control-label">Tên Sách</label>
                    <div class="controls">
                        <input type="text" id="title" data-form-field="title" placeholder="Nhập tên sách" class="span8">
                        <input type="hidden"  data-form-field="token"  value="{{ csrf_token() }}">
                        <input type="hidden"  data-form-field="auth_user"  value="{{ auth()->user()->id }}">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Tên Tác Giả</label>
                    <div class="controls">
                        <input type="text" id="author" data-form-field="author" placeholder="Nhập tên tác giả / nhà xuất bản" class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="basicinput">Mô Tả Sách</label>
                    <div class="controls">
                        <textarea class="span8" id="description" data-form-field="description" rows="5" placeholder="Giới thiệu chung"></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="basicinput">Thể Loại</label>
                    <div class="controls">
                        <select tabindex="1" id="category" data-form-field="category" data-placeholder="Select category.." class="span8">
                            @foreach($categories_list as $category)
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Số Lượng</label>
                    <div class="controls">
                        <input type="number" id="number" data-form-field="number" placeholder="Số lượng" class="span8">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-inverse" id="addbooks">Thêm Sách</button>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>
@stop

@section('custom_bottom_script')

    <script type="text/javascript" src="{{ asset('static/custom/js/script.addbook.js') }}"></script>

@stop