<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard'); ?>">
		<div class="sidebar-brand-icon">
			<img src="<?= base_url('frontend/assets/images/') . $komunitas->logo ?>" width="50" height="" alt="Logo">
		</div>
		<div class="sidebar-brand-text mx-3"></div>
	</a>
	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item <?= ($breadcumb == 'Dashboard') ? 'active' : NULL ?>">
		<a class="nav-link" href="<?= base_url('dashboard'); ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Nav Item - Profile -->
	<li class="nav-item <?= ($breadcumb == 'Profile') ? 'active' : NULL ?>">
		<a class="nav-link" href="<?= base_url('dashboard/profile'); ?>">
			<i class="fas fa-fw fa-address-card"></i>
			<span>Profile</span>
		</a>
	</li>

	<!-- Nav Item - Announcement -->
	<li class="nav-item <?= ($breadcumb == 'Announcement') ? 'active' : NULL ?>">
		<a class="nav-link" href="<?= base_url('dashboard/announcement'); ?>">
			<i class="fas fa-fw fa-folder-open"></i>
			<span>Announcement</span>
		</a>
	</li>

	<!-- Nav Item - Anggota -->
	<li class="nav-item <?= ($breadcumb == 'Users') ? 'active' : NULL ?>">
		<a class="nav-link" href="<?= base_url('dashboard/users'); ?>">
			<i class="fas fa-fw fa-users"></i>
			<span>Users</span>
		</a>
	</li>

	<!-- Nav Item - Sabuk -->
	<li class="nav-item <?= ($breadcumb == 'Sabuk') ? 'active' : NULL ?>">
		<a class="nav-link" href="<?= base_url('dashboard/sabuk'); ?>">
			<i class="fas fa-fw fa-user-ninja"></i>
			<!-- <i class="fa-solid fa-bacon"></i> -->
			<span>Sabuk</span>
		</a>
	</li>

	<!-- Nav Item - Unlat -->
	<li class="nav-item <?= ($breadcumb == 'Unlat') ? 'active' : NULL ?>">
		<a class="nav-link" href="<?= base_url('dashboard/unlat'); ?>">
			<i class="fa fa-fw fa-home"></i>
			<span>Unlat</span>
		</a>
	</li>

	<!-- Nav Item - News -->
	<li class="nav-item <?= ($breadcumb == 'News') ? 'active' : NULL ?>">
		<a class="nav-link" href="<?= base_url('news'); ?>">
			<i class="fas fa-fw fa-paper-plane"></i>
			<span>News</span>
		</a>
	</li>

	<!-- Nav Item - Slider -->
	<li class="nav-item <?= ($breadcumb == 'Slider') ? 'active' : NULL ?>">
		<a class="nav-link" href="<?= base_url('dashboard/slider'); ?>">
			<i class="fas fa-fw fa-object-group"></i>
			<span>Slider</span>
		</a>
	</li>

	<!-- Nav Item - Menu -->
	<li class="nav-item <?= ($breadcumb == 'Menu') ? 'active' : NULL ?>">
		<a class="nav-link" href="<?= base_url('dashboard/menu'); ?>">
			<i class="fas fa-fw fa-bars"></i>
			<span>Menu</span>
		</a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">
	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>
</ul>
<!-- End of Sidebar -->
