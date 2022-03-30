<div class="container-scroller" >
     
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{url('showproduct')}}"><img style="height:60px" src="admin/assets/images/logo.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="/redirect"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav menu" >
          <li class="nav-item profile">
            <!-- <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="https://i1.sndcdn.com/avatars-k8BmmvYBoHsj2XEC-2qeZ5Q-t240x240.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Billion</h5>
                  <span>Gold Member</span>
                </div>
              </div>
            
            </div> -->
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('addcategory')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Thêm thể loại</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showproduct')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Danh sách sản phẩm</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('addproduct')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Thêm sản phẩm</span>
            </a>
          </li>
        
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showorder')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Đơn hàng</span>
            </a>
          </li>

    
        </ul>
      </nav>