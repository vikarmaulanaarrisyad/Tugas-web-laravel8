<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ request()->is('dashboard') ? 'active' : '' }}"><a href="/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

    <li class="{{ request()->is('mapel') ? "active" : '' }}"><a href="/mapel"><i class="fa fa-book"></i> <span>Mata Pelajaran</span></a></li>

    <li class="{{ request()->is('guru') ? "active" : '' }}"><a href="/guru"><i class="fa fa-user"></i> <span>Guru</span></a></li>

    <li  class="{{ request()->is('siswa') ? "active" : '' }}"><a href="/siswa"><i class="fa fa-user"></i> <span>Siswa</span></a></li>
</ul>
