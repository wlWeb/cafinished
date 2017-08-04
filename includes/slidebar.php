    <!-- Side Bar -->
    <div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
      <div class="sb-slidebar-container">
        <header class="ms-slidebar-header">
          <div class="ms-slidebar-login">
            <a href="admin-login.php" class="withripple">
              <i class="zmdi zmdi-account"></i> Login</a>
            <!--<a href="javascript:void(0)" class="withripple">
              <i class="zmdi zmdi-account-add"></i> Register</a>-->
          </div>
          <div class="ms-slidebar-title">
            <!--<form class="search-form">
              <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" />
              <label for="search-box-slidebar">
                <i class="zmdi zmdi-search"></i>
              </label>
            </form>-->
            <div class="ms-slidebar-t">
              <span class="ms-logo ms-logo-sm">CA</span>
              <?php if(isset($_SESSION['username'])) { ?>
              <h3>Welcome
                <span><?php echo $_SESSION['username'] ?? ''; ?></span>
              </h3>
              <?php } ?>
            </div>
          </div>
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
          <li>
            <a class="link" href="index.php">
              <i class="zmdi zmdi-home"></i> Home</a>
          </li>
          <li>
            <a class="link" href="locations.php">
              <i class="zmdi zmdi-globe"></i> Locations</a>
          </li>
          <li>
            <a class="link" href="jobs.php">
              <i class="zmdi zmdi-globe"></i> Job Posts</a>
          </li>
          <li>
            <a class="link" href="aboutus.php">
              <i class="zmdi zmdi-account-circle"></i> About Us</a>
          </li>
          <li>
            <a class="link" href="faq.php">
              <i class="zmdi zmdi-view-compact"></i> FAQ</a>
          </li>
          <li>
            <a class="link" href="contact.php">
              <i class="zmdi zmdi-link"></i> Contact Us</a>
          </li>
        </ul>
      </div>
    </div>