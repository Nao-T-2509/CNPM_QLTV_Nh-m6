<div class="" style="background:#9400D3; color:#fff"><center>Thông Tin Sinh Viên</center></div>
<dl class="dl-horizontal">
<%
    var flag = false;
    if(obj.hasOwnProperty('approved')){
        flag = true;
%>
    <dt></dt>
    <dd><strong><p class="text-error">Không Chấp Nhận</p></strong></dd>
<%
    }
%>
<%
    if(obj.hasOwnProperty('rejected')){
        flag = true;
%>
    <dt></dt>
    <dd><strong><p class="text-error">Từ Chối</p></strong></dd>
<%
    }
%>
    <dt>ID Sinh Viên</dt>
    <dd><%= obj.student_id %></dd>
    <dt>Họ Tên</dt>
    <dd><%= obj.first_name %> <%= obj.last_name %></dd>
    <dt>Sinh Viên Khóa</dt>
    <dd><%= obj.category %></dd>
    <dt>Email</dt>
    <dd><%= obj.email_id %></dd>
    <dt>Số Điện Thoại</dt>
    <dd><%= obj.roll_num %>/<%= obj.branch %>/<%= obj.year %></dd>

    <%
        if(!flag){
    %>
        <dt>Số Lượng Sách Mượn</dt>
        <dd><%= obj.books_issued %></dd>
    <%
        }
    %>
</dl>

<%
    if(!flag){
        if(obj.issued_books.length > 0){
%>

<div class="" style="background:#9400D3; color:#fff"><center>Thông Tin Sách Mượn</center></div>

<%
            for(var book in obj.issued_books){
%>
<dl class="dl-horizontal">
    <dt>ID Mượn</dt>
    <dd><%= obj.issued_books[book].book_issue_id %></dd>
    <dt>Tên Sách</dt>
    <dd><%= obj.issued_books[book].name %></dd>
    <dt>Ngày Mượn</dt>
    <dd><%= obj.issued_books[book].issued_at %></dd>
</dl>
<%
            }
        }
    }
%>