
    <body style="direction:rtl; text-align=rigth;">
      <style>
      #page-wrapper {
    position: inherit;
    margin: 0 220px 0 0px;
    min-height: 1200px;
}</style>
<nav  class="navbar-default navbar-static-side" role="navigation" style="height: 100%;background: #233645;">

    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu" style="background: #233645;padding: 0;">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">admin</strong>
                            </span> <span class="text-muted text-xs block"> admin menu <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element" style="padding: 0;">
                    IN+
                </div>
            </li>

            <li class="<?php echo e(isActiveRoute('Suppliers')); ?>">
                <a href="<?php echo e(url('/Suppliers')); ?>"><span class="nav-label" style="font-size: 20px"> موردين</span><i class="fa fa-th-large"></i></a>
            </li>
             <li class="<?php echo e(isActiveRoute('Clients')); ?>">
                  <a href="<?php echo e(url('/Clients')); ?>"><span class="nav-label" style="font-size: 20px"> العملاء</span><i class="fa fa-th-large"></i></a>
              </li>

              <li class="<?php echo e(isActiveRoute('Items')); ?>">
                  <a href="<?php echo e(url('/Items')); ?>"><span class="nav-label" style="font-size: 20px"> الاصناف</span><i class="fa fa-th-large"></i></a>
              </li>
              <li class="<?php echo e(isActiveRoute('Packages')); ?>">
                  <a href="<?php echo e(url('/Packages')); ?>"><span class="nav-label" style="font-size: 20px"> شكاير</span><i class="fa fa-th-large"></i></a>
              </li>
              <li class="<?php echo e(isActiveRoute('show')); ?>">
                  <a href="<?php echo e(url('/show')); ?>"><span class="nav-label" style="font-size: 20px"> المنتجات</span><i class="fa fa-th-large"></i></a>
              </li>
              <li class="<?php echo e(isActiveRoute('Clients')); ?>">
                  <a href="<?php echo e(url('/Clients')); ?>"><span class="nav-label" style="font-size: 20px"> العملاء</span><i class="fa fa-th-large"></i></a>
              </li>
              <li class="<?php echo e(isActiveRoute('main')); ?>">
                  <a href="<?php echo e(url('/')); ?>"><span class="nav-label" style="font-size: 20px">المبيعات</span><i class="fa fa-th-large"></i></a>
              </li>
              <li class="<?php echo e(isActiveRoute('minor')); ?>">
                  <a href="<?php echo e(url('/minor')); ?>"><span class="nav-label" style="font-size: 20px"> مشتريات</span><i class="fa fa-th-large"></i></a>
              </li>

              <li class="<?php echo e(isActiveRoute('Manufactures ')); ?>">
                  <a href="<?php echo e(url('/Manufactures ')); ?>" style="font-size: 20px"><span class="nav-label"> تصنيع</span><i class="fa fa-th-large"></i></a>
              </li>

              <!-- <li class="<?php echo e(isActiveRoute('Items')); ?>">
                  <a href="<?php echo e(url('/Items')); ?>"><span class="nav-label"> الاصناف</span><i class="fa fa-th-large"></i></a>
              </li>
              <li class="<?php echo e(isActiveRoute('Packages')); ?>">
                  <a href="<?php echo e(url('/Packages')); ?>"><span class="nav-label"> شكاير</span><i class="fa fa-th-large"></i></a>
              </li>
              <li class="<?php echo e(isActiveRoute('show')); ?>">
                  <a href="<?php echo e(url('/show')); ?>"><span class="nav-label"> المنتجات</span><i class="fa fa-th-large"></i></a>
              </li> -->
            <li class="<?php echo e(isActiveRoute('Invoices')); ?>">
                <a href="<?php echo e(url('/Invoices')); ?>" style="font-size: 20px"><span class="nav-label"> فواتير شراء</span><i class="fa fa-th-large"></i></a>
            </li>
            <li class="<?php echo e(isActiveRoute('Sales')); ?>">
                <a href="<?php echo e(url('/Sales')); ?>" style="font-size: 20px"><span class="nav-label"> فواتير بيع</span><i class="fa fa-th-large"></i></a>
            </li>

            <li class="<?php echo e(isActiveRoute('payment')); ?>">
                <a href="<?php echo e(url('/payment')); ?>" style="font-size: 20px"><span class="nav-label">دفع الفواتير  </span><i class="fa fa-th-large"></i></a>
            </li>
            <li class="<?php echo e(isActiveRoute('Users')); ?>">
                <a href="<?php echo e(url('/Users')); ?>" style="font-size: 20px"><span class="nav-label"> مستخدمين</span><i class="fa fa-th-large"></i></a>
            </li>

        </ul>

    </div>
</nav>
