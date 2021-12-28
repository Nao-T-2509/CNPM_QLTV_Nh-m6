@extends('account.index')

@section('content')

@include('account.style')

<div class="wrapper  wrapper1">
	<div class="container">
		<div class="row">
			<div class="module span12">
				<div class="module-head">
					<h3>Tìm Sách</h3>
				</div>
				<div class="module-body">
					<form class="form-horizontal row-fluid">
						<div class="control-group">
							<label class="control-label">Tên Sách / Tác Giả</label>
							<div class="controls">
								<textarea class="span12" rows="2"></textarea>
							</div>
						</div>

						<div class="control-group">
							<div class="controls" id="search_book_button">
								<a class="btn btn-default">Tìm Sách</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row" style="display: none;">
			<div class="module span12">
				<div class="module-body">
		            <table class="table table-striped table-bordered table-condensed">
		                <thead>
		                    <tr>
		                        <th>ID</th>
		                        <th>Tên Sách</th>
		                        <th>Tác Giả</th>
		                        <th>Mô Tả</th>
		                        <th>Thể Loại</th>
		                        <th>Trạng Thái</th>
		                    </tr>
		                </thead>
		                <tbody id="book-results"></tbody>
		            </table>
				</div>
			</div>
		</div>
	</div>
	<input type="hidden" name="categories_list" id="categories_list" value="{{ json_encode($categories_list) }}">
</div>



@stop

@section('custom_bottom_script')
<script type="text/javascript">
    var categories_list = $('#categories_list').val();
</script>
<script type="text/javascript" src="{{  asset('static/custom/js/script.searchbook.js') }}"></script>

<script type="text/template" id="search_book">
    @include('underscore.search_book')
</script>
@stop