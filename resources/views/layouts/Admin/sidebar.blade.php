 <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
    
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="{{ route('admin.index') }}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.publisher.index') }}">
                            <i class="material-icons">person</i>
                            <p>Yayın Evi</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.writer.index') }}">
                            <i class="material-icons">content_paste</i>
                            <p>Yazarlar</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.category.index') }}">
                            <i class="material-icons">library_books</i>
                            <p>Kategoriler</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.book.index') }}">
                            <i class="material-icons">bubble_chart</i>
                            <p>Kitaplar</p>
                        </a>
                    </li>
               
                    <li class="active-pro">
                        <a href="upgrade.html">
                            <i class="material-icons">unarchive</i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>