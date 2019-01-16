<div class="navbar-header">
    <div type="button" id="nav-icon3" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <a class="navbar-brand" href="dashboard/">
        <figure>
            <img src="<?php echo e(asset('public/images/logo.png')); ?>" width="30px" alt="DashPayroll Logo">
            DashPayroll
        </figure>
    </a>
</div>


<span onclick="toggleFullscreen()" style="cursor: pointer;">
    <a href="#">
        <i class="fa fa-arrows-alt mt-20  ml-40 hidden-xs fulls" aria-hidden="true"></i>
    </a>
</span>



<ul class="nav navbar navbar-right icons hidden-xs">

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i id="icon"class="fa fa-calendar"></i>
            <span class="badge b1">3</span>
        </a>
        <ul class="dropdown-menu">
            <li class="dropdown-title"><h5 class="text-center">Todays Birthday</h5></li>
            <li class="m_2"><a href="#"><i class="fa fa-user"></i> Morales, Jandell</a></li>
            <li class="m_2"><a href="#" ><i class="fa fa-user"></i>Pascua, Renz</a></li>
            <li class="m_2"><a href="#" ><i class="fa fa-user"></i>Pascua, Renz</a></li>
            <li class="m_2"><a href="#" ><i class="fa fa-user"></i>Pascua, Renz</a></li>
            <li class="m_2"><a href="#" ><i class="fa fa-user"></i>Pascua, Renz</a></li>
            <li class="m_2"><a href="dashboard" ><i class="fa fa-user"></i>Dizon, Maverick</a></li>
        </ul>
    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i id="icon"class="fa fa-phone"></i><span class="badge b2">2</span></a>
        <ul class="dropdown-menu">
            <li class="dropdown-title"><h5 class="text-center">Todays Calls</h5></li>
            <li class="m_2"><a href="#"><i class="fa fa-phone-square"></i> 10.39 - Sample Company</a></li>
            <li class="m_2"><a href="dashboard"><i class="fa fa-phone-square"></i> 10.39 - Sample Company</a></li>
        </ul>
    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i id="icon" class="fa fa-bell "></i>
            <span class="badge b3">5</span>
        </a>
        <ul class="dropdown-menu">
            <li class="dropdown-title"><h5 class="text-center">System Notification</h5></li>
            <li class="m_2"><a href="#"><i class="fa fa-plus"></i> 10.39 Am - New Request</a></li>
            <li class="m_2"><a href="#"><i class="fa fa-plus"></i> 12.29 Pm- New Request</a></li>
            <li class="m_2"><a href="#"><i class="fa fa-plus"></i> 1.20 Pm- New Request</a></li>
            <li class="m_2"><a href="#"><i class="fa fa-plus"></i> 5.20 Pm- New Request</a></li>
            <li class="m_2"><a href="dashboard"><i class="fa fa-plus"></i> 12.00 Am- New Request</a></li>
        </ul>
    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
            <img src="<?php echo e(asset('public/images/adminicon.png')); ?>" alt="Admin" style="zoom:80%" /> <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
            <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
            <li class="m_2"><a href="#" id="logout"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
    </li>

</ul>






<ul class="nav navbar navbar-right icons visible-xs">

    <li class="dropdown">
        <a href="#" class="dropdown-toggle " data-toggle="dropdown" aria-expanded="false">
            <i id="icon" class="fa fa-calendar" aria-hidden="true"></i>
            <span class="badge b1">1</span>
        </a>
        <ul class="dropdown-menu">
            <li class="dropdown-title"><h5 class="text-center">Todays Birthday</h5></li>
            <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> April 20 1999</a></li>
            <li class="m_2"><a href="" ><i class="fa fa-sign-out"></i>Jandell Morales</a></li>
        </ul>
    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i id="icon"class="fa fa-phone"></i>
            <span class="badge b2">2</span>
        </a>
        <ul class="dropdown-menu">
            <li class="dropdown-title"><h5 class="text-center">Todays Calls</h5></li>
            <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> 10.39</a></li>
            <li class="m_2"><a href="" ><i class="fa fa-sign-out"></i>Test Test</a></li>
            <li class="m_2"><a href="" ><i class="fa fa-sign-out"></i>Read</a></li>
        </ul>
    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i id="icon" class="fa fa-bell "></i>
            <span class="badge b3">5</span>
        </a>
        <ul class="dropdown-menu">
            <li class="dropdown-title"><h5 class="text-center">System Notification</h5></li>
            <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> 10.39</a></li>
            <li class="m_2"><a href="" ><i class="fa fa-sign-out"></i>Update Test</a></li>
            <li class="m_2"><a href="" ><i class="fa fa-sign-out"></i>Test Summary</a></li>
        </ul>
    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
            <img src="<?php echo e(asset('public/images/adminicon.png')); ?>" alt="Admin" style="zoom:80%" />
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
            <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
            <li class="m_2"><a href="#" id="logout2"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
    </li>

</ul>