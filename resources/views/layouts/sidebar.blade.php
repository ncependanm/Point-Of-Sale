<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ url(auth()->user()->foto ?? '') }}" class="img-circle img-profil" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="{{ (Route::current()->getName() == 'dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            @if (auth()->user()->level == 1)
            <li class="treeview {{ (Route::current()->getName() == 'kategori.index')
                || (Route::current()->getName() == 'produk.index')
                || (Route::current()->getName() == 'member.index')
                || (Route::current()->getName() == 'supplier.index') ? 'active menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-th"></i> <span>Master</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::current()->getName() == 'kategori.index') ? 'active' : '' }}">
                        <a href="{{ route('kategori.index') }}">
                            <i class="fa fa-cube"></i> <span>Kategori</span>
                        </a>
                    </li>
                    <li class="{{ (Route::current()->getName() == 'produk.index') ? 'active' : '' }}">
                        <a href="{{ route('produk.index') }}">
                            <i class="fa fa-cubes"></i> <span>Produk</span>
                        </a>
                    </li>
                    <li class="{{ (Route::current()->getName() == 'member.index') ? 'active' : '' }}">
                        <a href="{{ route('member.index') }}">
                            <i class="fa fa-id-card"></i> <span>Member</span>
                        </a>
                    </li>
                    <li class="{{ (Route::current()->getName() == 'supplier.index') ? 'active' : '' }}">
                        <a href="{{ route('supplier.index') }}">
                            <i class="fa fa-truck"></i> <span>Supplier</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview {{ (Route::current()->getName() == 'pengeluaran.index')
                || (Route::current()->getName() == 'pembelian.index')
                || (Route::current()->getName() == 'penjualan.index')
                || (Route::current()->getName() == 'transaksi.baru') ? 'active menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-line-chart"></i> <span>Transaksi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::current()->getName() == 'pengeluaran.index') ? 'active' : '' }}">
                        <a href="{{ route('pengeluaran.index') }}">
                            <i class="fa fa-money"></i> <span>Pengeluaran</span>
                        </a>
                    </li>
                    <li class="{{ (Route::current()->getName() == 'pembelian.index') ? 'active' : '' }}">
                        <a href="{{ route('pembelian.index') }}">
                            <i class="fa fa-download"></i> <span>Pembelian</span>
                        </a>
                    </li>
                    <li class="{{ (Route::current()->getName() == 'penjualan.index') ? 'active' : '' }}">
                        <a href="{{ route('penjualan.index') }}">
                            <i class="fa fa-upload"></i> <span>Penjualan</span>
                        </a>
                    </li>
                    {{-- <li class="{{ (Route::current()->getName() == 'transaksi.index') ? 'active' : '' }}">
                        <a href="{{ route('transaksi.index') }}">
                            <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Aktif</span>
                        </a>
                    </li> --}}
                    <li class="{{ (Route::current()->getName() == 'transaksi.baru') ? 'active' : '' }}">
                        <a href="{{ route('transaksi.baru') }}">
                            <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Baru</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview {{ (Route::current()->getName() == 'laporan.index') ? 'active menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-clipboard"></i> <span>Report</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::current()->getName() == 'laporan.index') ? 'active' : '' }}">
                        <a href="{{ route('laporan.index') }}">
                            <i class="fa fa-file-pdf-o"></i> <span>Laporan</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview {{ (Route::current()->getName() == 'user.index')
                || (Route::current()->getName() == 'setting.index') ? 'active menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-cog"></i> <span>System</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::current()->getName() == 'user.index') ? 'active' : '' }}">
                        <a href="{{ route('user.index') }}">
                            <i class="fa fa-users"></i> <span>User</span>
                        </a>
                    </li>
                    <li class="{{ (Route::current()->getName() == 'setting.index') ? 'active' : '' }}">
                        <a href="{{ route('setting.index') }}">
                            <i class="fa fa-cogs"></i> <span>Pengaturan</span>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- <li class="header">MASTER</li>
            <li>
                <a href="{{ route('kategori.index') }}">
                    <i class="fa fa-cube"></i> <span>Kategori</span>
                </a>
            </li>
            <li>
                <a href="{{ route('produk.index') }}">
                    <i class="fa fa-cubes"></i> <span>Produk</span>
                </a>
            </li>
            <li>
                <a href="{{ route('member.index') }}">
                    <i class="fa fa-id-card"></i> <span>Member</span>
                </a>
            </li>
            <li>
                <a href="{{ route('supplier.index') }}">
                    <i class="fa fa-truck"></i> <span>Supplier</span>
                </a>
            </li> --}}
            {{-- <li class="header">TRANSAKSI</li>
            <li>
                <a href="{{ route('pengeluaran.index') }}">
                    <i class="fa fa-money"></i> <span>Pengeluaran</span>
                </a>
            </li>
            <li>
                <a href="{{ route('pembelian.index') }}">
                    <i class="fa fa-download"></i> <span>Pembelian</span>
                </a>
            </li>
            <li>
                <a href="{{ route('penjualan.index') }}">
                    <i class="fa fa-upload"></i> <span>Penjualan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('penjualan.index') }}">
                    <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Aktif</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transaksi.baru') }}">
                    <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Baru</span>
                </a>
            </li> --}}
            {{-- <li class="header">REPORT</li>
            <li>
                <a href="{{ route('laporan.index') }}">
                    <i class="fa fa-file-pdf-o"></i> <span>Laporan</span>
                </a>
            </li> --}}
            {{-- <li class="header">SYSTEM</li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class="fa fa-users"></i> <span>User</span>
                </a>
            </li>
            <li>
                <a href="{{ route('setting.index') }}">
                    <i class="fa fa-cogs"></i> <span>Pengaturan</span>
                </a>
            </li> --}}
            @else
            {{-- <li>
                <a href="{{ route('transaksi.index') }}">
                    <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Aktif</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transaksi.baru') }}">
                    <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Baru</span>
                </a>
            </li> --}}



            <li class="treeview {{ (Route::current()->getName() == 'transaksi.baru') ? 'active menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-line-chart"></i> <span>Transaksi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class="{{ (Route::current()->getName() == 'transaksi.index') ? 'active' : '' }}">
                        <a href="{{ route('transaksi.index') }}">
                            <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Aktif</span>
                        </a>
                    </li> --}}
                    <li class="{{ (Route::current()->getName() == 'transaksi.baru') ? 'active' : '' }}">
                        <a href="{{ route('transaksi.baru') }}">
                            <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Baru</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
