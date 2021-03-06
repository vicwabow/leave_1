@extends('default')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
	<i class="fa fa-calendar"></i> 假單檢視
	<small>View My Leave</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="./index.html"><i class="fa fa-dashboard"></i> Home</a></li>
	<li>基本設定</li>
	<li><a href="./leave.html">我的請假單</a></li>
	<li class="active">假單檢視</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-5">

			<!-- Profile Image -->
			<div class="box box-primary">
				<div class="box-body box-profile">
					<img class="profile-user-img img-responsive img-circle" src="dist/img/users/dio.png" alt="Dio">
          <h3 class="profile-username text-center">Dio</h3>
          <h3 class="text-center"><span class="label label-default bg-green">待核准</span></h3>
          <br />
					<div id="wizard" class="form_wizard wizard_horizontal">
            <ul class="wizard_steps">
              <li>
                <a href="#step-1">
                  <span class="step_no">
                    <img src="dist/img/users/marty.png" title="Marty" alt="Marty">
                  </span>
                  <span class="step_descr">
                      Step 1<br />
                      <small>代理人核准</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-2" class="disabled">
                  <span class="step_no">
                    <img src="dist/img/users/suzy.png" title="Suzy" alt="Suzy" class="pic_gray">
                  </span>
                  <span class="step_descr disabled">
                      Step 2<br />
                      <small>小主管核准</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-3" class="disabled">
                  <span class="step_no">
                    <img src="dist/img/users/default.png" alt="毛毛" title="毛毛" class="pic_gray">
                  </span>
                  <span class="step_descr disabled">
                      Step 3<br />
                      <small>主管核准</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-4" class="disabled">
                  <span class="step_no">
                    <img src="dist/img/users/neo.png" alt="Neo" class="pic_gray">
                  </span>
                  <span class="step_descr disabled">
                      Step 4<br />
                      <small>大ＢＯＳＳ核准</small>
                  </span>
                </a>
              </li>
            </ul>
          </div>
					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>假別</b> <a class="pull-right">善待假</a>
						</li>
						<li class="list-group-item">
							<b>開始時間</b> <a class="pull-right">2017-07-10 14:00</a>
						</li>
						<li class="list-group-item">
							<b>結束時間</b> <a class="pull-right">2017-07-10 15:00</a>
						</li>
						<li class="list-group-item">
							<b>代理人</b> <a class="pull-right">Marty</a>
						</li>
						<li class="list-group-item">
							<b>原因</b> <a class="pull-right">啊咿嗚誒喔，想去看電影，塞喲娜娜唷</a>
						</li>
						<li class="list-group-item">
							<b>額外通知</b> <a class="pull-right">Neo、毛毛</a>
						</li>
						<li class="list-group-item">
							<b>建立時間</b> <a class="pull-right">2017-07-03 09:00</a>
						</li>
					</ul>

					<a href="#" class="btn btn-danger btn-block"><b>我要取消</b></a>
				</div>
			<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
		<div class="col-md-7">
			<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#timeline" data-toggle="tab">Timeline</a></li>
				<li><a href="#settings" data-toggle="tab">證明（補）</a></li>
			</ul>
			<div class="tab-content">
				<!-- /.tab-pane -->
				<div class="active tab-pane" id="timeline">
				<!-- The timeline -->
					<ul class="timeline timeline-inverse">
						<!-- timeline time label -->
						<li class="time-label">
							<span class="bg-red">
								2017-07-09
							</span>
						</li>
						<!-- /.timeline-label -->
						<!-- timeline item -->
						<li>
							<i class="fa bg-blue">
								<img class="profile-user-img img-responsive img-circle" src="dist/img/users/neo.png" alt="Neo">
							</i>

							<div class="timeline-item">
								<span class="time"><i class="fa fa-clock-o"></i> 23:57:00</span>

                <h3 class="timeline-header"><a href="#">Neo</a> 核准假單（大ＢＯＳＳ）</h3>
                <div class="timeline-body">
                  好好玩喔～
                </div>
							</div>
						</li>
						<!-- END timeline item -->
						<!-- timeline item -->
						<li>
							<i class="fa fa-user bg-red"></i>

							<div class="timeline-item">
								<span class="time"><i class="fa fa-clock-o"></i> 23:57:00</span>

								<h3 class="timeline-header no-border"><a href="#">毛毛</a> 核准假單（主管）</h3>
							</div>
						</li>
						<!-- END timeline item -->
						<!-- timeline item -->
						<li>
							<i class="fa bg-green">
								<img class="profile-user-img img-responsive img-circle" src="dist/img/users/suzy.png" alt="Suzy">
							</i>

							<div class="timeline-item">
								<span class="time"><i class="fa fa-clock-o"></i> 18:09:10</span>

								<h3 class="timeline-header"><a href="#">Suzy</a> 核准假單（小主管）</h3>
							</div>
						</li>
						<!-- END timeline item -->
						<!-- timeline time label -->
						<li class="time-label">
							<span class="bg-green">
								2017-07-07
							</span>
						</li>
						<!-- /.timeline-label -->
						<!-- timeline item -->
						<li>
							<i class="fa bg-yellow">
								<img class="profile-user-img img-responsive img-circle" src="dist/img/users/marty.png" alt="Marty">
							</i>

							<div class="timeline-item">
								<span class="time"><i class="fa fa-clock-o"></i> 13:05:05</span>

								<h3 class="timeline-header"><a href="#">Marty</a> 核准假單（職務代理人）</h3>
							</div>
						</li>
						<li>
							<i class="fa bg-aqua">
								<img class="profile-user-img img-responsive img-circle" src="dist/img/users/dio.png" alt="Dio">
							</i>

							<div class="timeline-item">
								<span class="time"><i class="fa fa-clock-o"></i> 09:00:30</span>

								<h3 class="timeline-header no-border"><a href="#">Dio</a> 提出請假申請
								</h3>
							</div>
						</li>
						<!-- END timeline item -->
						<li class="time-label">
							<span class="bg-green">
								2017-07-03
							</span>
						</li>
						<li>
							<i class="fa fa-clock-o bg-gray"></i>
						</li>
					</ul>
				</div>
				<!-- /.tab-pane -->

				<div class="tab-pane" id="settings">
					<form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
						<input id="leave_view_fileupload" name="leave_view[fileupload][]" class="file-loading" type="file" multiple data-min-file-count="1">
					</form>
				</div>
				<!-- /.tab-pane -->
			</div>
			<!-- /.tab-content -->
			</div>
			<!-- /.nav-tabs-custom -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->

</section>
<!-- /.content -->
@stop