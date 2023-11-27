  <li class="menu-header">Main menu</li>
  <li class="nav-item ">
      <a href="<?= site_url('Dashboard'); ?>" class="nav-link "><i
              class="fas fa-solid fa-window-restore"></i><span>Dashboard</span></a>
  </li>
  <li class="nav-item dropdown">
      <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-solid fa-users"></i>
          <span>Panggil Antrian</span></a>
      <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?= site_url('loketa'); ?>">Loket-A</a></li>
          <li><a class="nav-link" href="<?= site_url('loketb'); ?>">Loket-B</a></li>
          <li><a class="nav-link" href="<?= site_url('loketc'); ?>">Loket-C</a></li>
      </ul>
  </li>
  <li class="nav-item ">
      <a href="<?= site_url('Rekap'); ?>" class="nav-link "><i class="fas fa-solid fa-print"></i><span>Rekap
              Antrian</span></a>
  </li>

  <li class=""><a class="nav-link" href=""><i class="far fa-square"></i>
          <span>Blank Page</span></a></li>