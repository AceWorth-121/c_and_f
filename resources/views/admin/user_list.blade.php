@extends('admin.main')



@section('AdminMainContent')



@include('admin.include.header')



@include('admin.include.navbar')



@include('admin.include.sidebar')



<style type="text/css">

  .PageTitle{

    margin-right: 1px !important;

  }

 .required-field::before {

    content: "*";

    color: red;

  }

  .Custom-Box {

    /*border: 1px solid #e0dcdc;

    border-radius: 10px;

*/    box-shadow: 0 1px 2px 0 rgba(0,0,0,0.12), 0 1px 2px 4px rgba(0,0,0,0.08);

  }

</style>



<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

          <h1>

            Master User

            <small>Upadate Details</small>

          </h1>

          <ol class="breadcrumb">

            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>

            <li><a href="{{ url('/dashboard') }}">Master</a></li>

            <li class="active"><a href="{{ url('/edit-user/'.base64_encode($user_list->id)) }}">Master User</a></li>

            <li class="active"><a href="{{ url('/edit-user/'.base64_encode($user_list->id)) }}">Edit Mast User</a></li>

          </ol>

        </section>

  <section class="content">

    <div class="row">

      <div class="col-sm-2"></div>

      <div class="col-sm-8">

        <div class="box box-primary Custom-Box">

            <div class="box-header with-border" style="text-align: center;">

              <h2 class="box-title animated bounceInLeft PageTitle" style="font-weight: 800;color: #5696bb;">Upadate Master User</h2>

              

              

            </div><!-- /.box-header -->

            @if(Session::has('alert-success'))



              <div class="alert alert-success alert-dismissible" style="width: 96%;margin-left: 2%;">

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                <h4>

                  <i class="icon fa fa-check"></i>

                  Success...!

                </h4>

                 {!! session('alert-success') !!}

              </div>





            @endif





            @if(Session::has('alert-error'))



              <div class="alert alert-danger alert-dismissible" style="width: 96%;margin-left: 2%;">

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                <h4>

                  <i class="icon fa fa-ban"></i>

                  Error...!

                </h4>

                {!! session('alert-error') !!}

              </div>



            @endif



          <div class="box-body">

            <form action="{{ url('form-mast-user-update') }}" method="POST" >

               @csrf

               <div class="row">

                  <div class="col-md-6">

                  <div class="form-group">

                      <label>

                       Name : 

                        <span class="required-field"></span>

                      </label>

                        <div class="input-group">

                          <span class="input-group-addon"><i class="fa fa-user"></i></span>

                          <input type="hidden" name="UserID" value="{{ $user_list->id }}">

                          <input type="text" class="form-control" name="name" value="{{ $user_list->name }}" placeholder="Enter  Name">

                        </div>

                          <small id="emailHelp" class="form-text text-muted">

                            {!! $errors->first('name', '<p class="help-block" style="color:red;">:message</p>') !!}

                          </small>



                    </div>

                </div>



                  <div class="col-md-6">

                    <div class="form-group">

                      <label>

                        User Name : 

                        <span class="required-field"></span>

                      </label>

                        <div class="input-group">

                          <span class="input-group-addon"><i class="fa fa-user"></i></span>

                          <input type="text" class="form-control" name="user_name" value="{{ $user_list->username }}" placeholder="Enter User Name">

                          

                        </div>

                          <small id="emailHelp" class="form-text text-muted">

                            {!! $errors->first('user_name', '<p class="help-block" style="color:red;">:message</p>') !!}

                          </small>



                    </div>

                    <!-- /.form-group -->

                  </div>



                   

              </div>

              <!-- /.row -->



              <div class="row">

                  <div class="col-md-6">

                    <div class="form-group">

                      <label>

                        User Code : 

                        <span class="required-field"></span>

                      </label>

                      <div class="input-group">

                          <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span>

                          <input type="text" class="form-control" name="user_code" value="{{ $user_list->usercode }}" placeholder="Enter User Code">

                      </div>

                      <small id="emailHelp" class="form-text text-muted">

                        {!! $errors->first('user_code', '<p class="help-block" style="color:red;">:message</p>') !!}

                      </small>

                    </div>

                    <!-- /.form-group -->

                  </div>



                  <div class="col-md-6">

                    <div class="form-group">

                      <label>

                        Email-Id : 

                        <span class="required-field"></span>

                      </label>

                        <div class="input-group">

                          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                          <input type="text" class="form-control" name="email_id" value="{{ $user_list->email_id}}" placeholder="Enter User Email Id">

                        </div>

                          <small id="emailHelp" class="form-text text-muted">

                            {!! $errors->first('email_id', '<p class="help-block" style="color:red;">:message</p>') !!}

                          </small>



                    </div>

                    <!-- /.form-group -->

                  </div>

                 

              </div>

              <!-- /.row -->



              <div class="row">

                 <div class="col-md-6">

                    <div class="form-group">

                      <label>

                        Password : 

                        <span class="required-field"></span>

                      </label>

                      <div class="input-group">

                          <span class="input-group-addon"><i class="fa fa-key"></i></span>

                          <input type="password" class="form-control" name="password" value="{{ $user_list->password }}" readonly="">

                      </div> 

                      <small id="emailHelp" class="form-text text-muted">

                        {!! $errors->first('password', '<p class="help-block" style="color:red;">:message</p>') !!}

                      </small>

                    </div>

                    <!-- /.form-group -->

                  </div>

                  

              </div>



              <div class="row">

                <div class="col-md-6">

                    <div class="form-group">

                      <label>

                        User Type : 

                        <span class="required-field"></span>

                      </label>

                      <div class="input-group">

                          <span class="input-group-addon"><i class="fa fa-code"></i></span>

                         

                          <select class="form-control" name="user_type">

                            <option>--SELECT USERTYPE</option>

                            <option value="admin" <?php if($user_list->user_type== "admin"){ echo "SELECTED"; } ?>>Admin</option>



                            <option value="superAdmin" <?php if($user_list->user_type== "superAdmin"){ echo "SELECTED";} ?>>Superadmin</option>

                            <option value="user" <?php if($user_list->user_type== "user"){ echo "SELECTED";} ?>>User</option>

                          </select>

                      </div>

                      <small id="emailHelp" class="form-text text-muted">

                        {!! $errors->first('user_type', '<p class="help-block" style="color:red;">:message</p>') !!}

                      </small>

                    </div>

                    <!-- /.form-group -->

                 

                </div>

              </div>



              <div style="text-align: center;">

                 <button type="Submit" class="btn btn-primary">

                <i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp; Update 

                 </button>

              </div>

            </form>

          </div><!-- /.box-body -->

           

          </div>

      </div>

      <div class="col-sm-2">

        <div class="box-tools pull-right">

          <a href="{{ url('/view-mast-user') }}" class="btn btn-primary" style="margin-right: 10px;"><i class="fa fa-eye"></i>&nbsp;&nbsp;View User</a>

        </div>

      </div>



    </div>

     

  </section>

</div>



@include('admin.include.footer')





@endsection