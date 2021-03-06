@extends('administrator.master')
@section('title', __('Salary Statement'))

@section('main_content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           {{ __('Salary Statement') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
            <li><a>{{ __('Increment') }}</a></li>
            <li class="active">{{ __('Salary Statement') }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box-header with-border">
                <h3 class="box-title">{{ __('Salary Statement') }}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="btn-body">
                <a href="{{ url('hrm/salary/statement/search') }}" class="tip btn btn-primary btn-flat"><i class="fa fa-plus"></i> {{ __('add new Salary Statement') }}</a>



                    <form action="{{ url('/hrm/salary/statement/preview') }}" method="get">

                        {{ csrf_field() }}

                        <input type="hidden" name="emp_id" value="{{$empid}}">
                        <input type="hidden" name="date1" value="{{$startdate}}">
                        <input type="hidden" name="date2" value="{{$enddate}}">
                        <button type="submit" class="tip btn btn-primary btn-flat">{{ __('Preview') }} </button>
                        
                    </form>


                 <form action="{{ url('/hrm/salary/statement/pdf') }}" method="get">
                        {{ csrf_field() }}
                       <input type="hidden" name="emp_id" value="{{$empid}}">
                        <input type="hidden" name="date1" value="{{$startdate}}">
                        <input type="hidden" name="date2" value="{{$enddate}}">
                        <button type="submit" class="tip btn btn-primary btn-flat">{{ __('PDF') }} </button>
                        
                    </form>
                </div>
                <hr>

                <!-- Notification Box -->
                <div class="col-md-12">
                    @if (!empty(Session::get('message')))
                    <div class="alert alert-success alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
                        <i class="icon fa fa-check"></i> {{ Session::get('message') }}
                    </div>
                    @elseif (!empty(Session::get('exception')))
                    <div class="alert alert-warning alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
                        <i class="icon fa fa-warning"></i> {{ Session::get('exception') }}
                    </div>
                    @endif
                </div>
                <!-- /.Notification Box -->

        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">

                <h4>
                @foreach($users as $payroll)
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1> Hartle Labs Pvt. Ltd.  </h1>
                                </div>
                                <div class="col-md-6">
                                
                                    <img src="{{ url('/profile_picture/ht.png') }}" alt="blank_profile_picture" class="img-responsive img-thumbnail">
                                </div>
                               
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">Name of Employee :</span> <small class="ms-3">{{$payroll->name}}</small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">Number of day in Month :</span> <small class="ms-3">30</small> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">Employee code :</span> <small class="ms-3">EMPID{{$empid}}</small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">No of days worked :</span> <small class="ms-3">22</small> </div>
                                </div>
                            </div>
                            <div class="row">
                            
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">Month :</span> <small class="ms-3">{{ date("d F Y", strtotime($payroll->payment_month)) }}</small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">Date of joining_date :</span> <small class="ms-3">{{$payroll->joining_date}}</small> </div>
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
                                <?php $desig= \App\Designation::find($payroll->designation_id)->designation;?>
                                <div> <span class="fw-bolder">Designation :</span> <small class="ms-3">{{$desig}}</small> </div>           
                                
                                    <!-- <div> <span class="fw-bolder">Designation :</span> <small class="ms-3"></small> </div> -->
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
                                    <td>{{$payroll->payment_amount}}</td>
                                    <td>Employee Provident Fund</td>
                                    <td>{{$payroll->provident_fund_contribution}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">HRA</th>
                                    <td>{{$payroll->house_rent_allowance}}</td>
                                    <td>Employer Provident Fund</td>
                                    <td>{{$payroll->provident_fund_deduction}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Fix Conveyance</th>
                                    <td>0.00 </td>
                                    <td>T D S</td>
                                    <td>0.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Medical Allowance</th>
                                    <td>{{$payroll->medical_allowance}} </td>
                                    <td>Professional Tax</td>
                                    <td>{{$payroll->tax_deduction}}</td>
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
                                    <td>{{$payroll->special_allowance}}</td>
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
                                    <td>{{$payroll->gross_salary}}</td>
                                    <td>Total Deductions</td>
                                    <td>{{$payroll->total_deduction}}</td>
                                </tr>
                                <tr class="border-top">
                                    <th scope="row"></th>
                                    <td></td>
                                    <td><span class="border-top">Net take-home Pay : </span></td>
                                    <td>{{$payroll->net_salary}}</td>
                                </tr>
                                @endforeach
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
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
@endsection
