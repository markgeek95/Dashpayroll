<div class="navbar-default sidebar circle" role="navigation">

    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu" >



            <li id="rippleoff">
                <a href="<?php echo e(url('company_information')); ?>">
                    <i class="fa fa-home"
                       aria-hidden="true">
                    </i>
                    Dashboard
                </a>
            </li>


            <li id="rippleon">
                <a href="#">
                    <i class="fa fa-laptop nav_icon" aria-hidden="true"></i>
                    Maintenance
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo e(url('philhealth')); ?>">Government Tables</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('withholding_tax')); ?>">Tax Tables</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('statutory_deduction_schedule')); ?>">Statutory Deduction Schedule</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('leave')); ?>">Leave Table</a>
                    </li>
                    <li id="rippleon">
                        <a href="#">
                            <i class="fa fa-plus-circle nav_icon" aria-hidden="true"></i>
                            Other Setup
                            <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo e(url('banks')); ?>">Banks</a>
                            </li>
                            <li>
                                <a href="Maintenance/shift/">Shift</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('departments')); ?>">Department</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('positions')); ?>">Position</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('cost_center')); ?>">Cost Center</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('class_list')); ?>">Class List</a>
                            </li>
                            <li>
                                <a href="Maintenance/payrollsetup/">Payroll Setup</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('employee_status')); ?>">Employee Status</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('holiday')); ?>">Holiday And Rest Day Tables</a>
                            </li>
                            <li>
                                <a href="Maintenance/otnightdifferential/">Overtime and Night Differential Tables</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>




            <li id="rippleon">
                <a href="#">
                    <i class="fa fa-money nav_icon" aria-hidden="true"></i>
                    Payroll
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="payroll/payrolltimesheet/">Timesheet</a>
                    </li>
                    <li>
                        <a href="payroll/whtax/">Statutory and Whtax Setup</a>
                    </li>
                    <li>
                        <a href="payroll/employeefrequency/">Employee Frequency</a>
                    </li>
                    <li>
                        <a href="payroll/salary/">Salary</a>
                    </li>
                    <li>
                        <a href="payroll/restday/">RestDay</a>
                    </li>
                    <li>
                        <a href="payroll/adjustments/">Adjustments</a>
                    </li>
                </ul>
            </li>





            <li id="rippleon">
                <a href="#">
                    <i class="fa fa-list nav_icon" aria-hidden="true"></i>
                    Reports
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="reports/" >Summary Reports</a>
                    </li>
                    <li>
                        <a href="#">Government Reports</a>
                    </li>
                </ul>
            </li>
            <li id="rippleoff">
                <a href="<?php echo e(url('payroll_user')); ?>">
                    <i class="fa fa-user nav_icon" aria-hidden="true" aria-hidden="true"></i>
                    Admin
                </a>
            </li>

        </ul>

    </div>

</div>