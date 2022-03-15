<div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">

                <h4>
                <?php $users= \App\User::all()->where('employee_id', $empid);
                    foreach($users as $user){
                    $empname=$user->name;
                    $idno=$user->id_number;
                    $joindate=$user->joining_date;
                    $contact=$user->contact_no_one;
                    $datebirth=$user->date_of_birth;
                    $designation=$user->designation_id;
                    $prsaddress=$user->present_address;
                    $prmaddress=$user->permanent_address;
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1> Hartle Labs Pvt. Ltd.  </h1>
                                </div>
                                <div class="col-md-6">
                                
                                    <img src="<?php echo url('/profile_picture/ht.png'); ?>" alt="blank_profile_picture" class="img-responsive img-thumbnail">
                                </div>
                               
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">Name of Employee :</span> <small class="ms-3"><?php echo $empname; ?></small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">Number of day in Month :</span> <small class="ms-3">30</small> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">Employee code :</span> <small class="ms-3">EMPID<?php echo $empid; ?></small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">No of days worked :</span> <small class="ms-3">22</small> </div>
                                </div>
                            </div>
                            <div class="row">
                            <?php $__currentLoopData = $salarystats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payroll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">Month :</span> <small class="ms-3"><?php echo date("d F Y", strtotime($payroll->payment_month)); ?></small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">Date of joining_date :</span> <small class="ms-3"><?php echo $joindate; ?></small> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">Bank Account Number :</span> <small class="ms-3">*******0701</small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">Leave Balance :</span> <small class="ms-3">5</small> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <?php $desig= \App\Designation::find($designation)->designation;?>
                                <div> <span class="fw-bolder">Designation :</span> <small class="ms-3"><?php echo $desig; ?></small> </div>           
                                
                                    <!-- <div> <span class="fw-bolder">Designation :</span> <small class="ms-3"><?php echo $designation; ?></small> </div> -->
                                </div>
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">PF UAN Number :</span> <small class="ms-3">*********</small> </div>
                                </div>
                            </div>
                            <br/>
                            <br/>
                        </div>
                        <br/>
                        <table class="mt-4 table table-bordered">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th scope="col">Particulars</th>
                                    <th scope="col">Amount(Rs)</th>
                                    <th scope="col">Deductions</th>
                                    <th scope="col">Amount(Rs)</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <th scope="row">Basic Salary</th>
                                    <td><?php echo $payroll->payment_amount; ?></td>
                                    <td>Employee Provident Fund</td>
                                    <td><?php echo $payroll->provident_fund; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">HRA</th>
                                    <td>0.00</td>
                                    <td>Employer Provident Fund</td>
                                    <td>0.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Fix Conveyance</th>
                                    <td>0.00 </td>
                                    <td>T D S</td>
                                    <td>0.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Medical Allowance</th>
                                    <td>0.00 </td>
                                    <td>Professional Tax</td>
                                    <td>0.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Internet Allowance</th>
                                    <td>0.00 </td>
                                    <td>Other</td>
                                    <td>0.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Telephone</th>
                                    <td>0.00 </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Prof Development</th>
                                    <td>0.00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Special Allowance</th>
                                    <td>0.00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <!-- <tr>
                                    <th scope="row">Leave Encashment</th>
                                    <td>0.00</td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Holiday Wages</th>
                                    <td>500.00</td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Special Allowance</th>
                                    <td>100.00</td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Bonus</th>
                                    <td>1400.00</td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Individual Incentive</th>
                                    <td>2400.00</td>
                                    <td colspan="2"></td>
                                </tr> -->
                                <tr class="border-top">
                                    <th scope="row">Gross Salary</th>
                                    <td><?php echo $payroll->gross_salary; ?></td>
                                    <td>Total Deductions</td>
                                    <td><?php echo $payroll->total_deduction; ?></td>
                                </tr>
                                <tr class="border-top">
                                    <th scope="row"></th>
                                    <td></td>
                                    <td><span class="border-top">Net take-home Pay : </span></td>
                                    <td><?php echo $payroll->net_salary; ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </h4>
                    <div class="row">
                        <!-- <div class="col-md-4"> <br> <span class="fw-bold">Net Pay : 24528.00</span> </div> -->
                        <!-- <div class="border col-md-8">
                            <div class="d-flex flex-column"> <span>In Words</span> <span>Twenty Five thousand nine hundred seventy only</span> </div>
                        </div> -->
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="d-flex flex-column mt-2"> <span class="border-top">For Hartle Lab</span>  </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="d-flex justify-content-end">
                        <div class="d-flex flex-column mt-2"> <span class="border-top">HR Department</span> </div>
                    </div>

                </div>
            </div>
        </div>