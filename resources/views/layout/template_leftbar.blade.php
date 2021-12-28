<div class="span3" >
    <div class="sidebar" >
        <ul class="widget widget-menu unstyled">
            <li>
                <a href="{{ URL::route('home') }}">
                    <i class="menu-icon icon-home"></i>Trang Chủ
                </a>
            </li>
            <li>
                <a href="{{ URL::route('students-for-approval') }}">
                    <i class="menu-icon icon-filter"></i>Yêu Cầu Thông Tin
                </a>
            </li>
            <li>
                <a href="{{ URL::route('registered-students') }}">
                    <i class="menu-icon icon-group"></i>Thông Tin Sinh Viên
                </a>
            </li>
            <li>
                <a href="{{ URL::route('all-books') }}">
                    <i class="menu-icon icon-th-list"></i>Danh Mục Sách
                </a>
            </li>
            <li>
                <a href="{{ URL::route('add-book-category') }}">
                    <i class="menu-icon icon-folder-open-alt"></i>Thêm Thể Loại
                </a>
            </li>
            <li>
                <a href="{{ URL::route('add-books') }}">
                    <i class="menu-icon icon-folder-open-alt"></i>Thêm Sách
                </a>
            </li>
            <li>
                <a href="{{ URL::route('settings') }}">
                    <i class="menu-icon icon-cog"></i>Thêm Thiết Lập
                </a>
            </li>

            <li>
                <a href="{{ URL::route('issue-return') }}">
                    <i class="menu-icon icon-signout"></i>Mượn Trả Sách
                </a>
            </li>
            <li>
                <a href="{{ URL::route('currently-issued') }}">
                    <i class="menu-icon icon-list-ul"></i>Loại Sách Đã Mượn
                </a>
            </li>
        </ul>
        
        <ul class="widget widget-menu unstyled">
            <li><a href="{{ URL::route('account-sign-out') }}"><i class="menu-icon icon-wrench"></i>Đăng Xuất</a></li>
        </ul>
    </div>
</div>