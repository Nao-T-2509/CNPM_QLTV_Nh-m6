<div class="" style="background:#9400D3; color:#fff"><center>Thông Tin Sách</center></div>

<%
            for(var book in obj.issued_books){
%>
<dl class="dl-horizontal">
    <dt>Tên Sách</dt>
    <dd><%= obj.book_name %></dd>
    <dt>Tác Giả</dt>
    <dd><%= obj.author %></dd>
    <dt>Thể Loại</dt>
    <dd><%= obj.category %></dd>
    <dt>Trạng thái</dt>
    <dd><%= obj.available_status %></dd>
    <dt>Ngày Thêm</dt>
    <dd><%= obj.updated_at %></dd>
</dl>
<%
    }
%>


<%
    if(obj.hasOwnProperty('student')){
%>
<div class="" style="background:#9400D3; color:#fff"><center>Thông Tin Sinh Viên</center></div>
<dl class="dl-horizontal">
    <dt>ID Sinh Viên</dt>
    <dd><%= obj.student.student_id %></dd>
    <dt>Họ Tên Sinh Viên</dt>
    <dd><%= obj.student.first_name %> <%= obj.student.last_name %></dd>
    <dt>Khoa</dt>
    <dd><%= obj.student.category %></dd>
    <dt>Số Điện Thoại</dt>
    <dd><%= obj.student.roll_num %></dd>
</dl>
<%
    }
%>
