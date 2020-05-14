@include('layouts.users.app')
@section('content')
<div class="m-content">
	<!--<div class="row">
		<div class="col-lg-3">
		</div>
		<div class="col-lg-6">
			<div class="m-alert m-alert--icon m-alert--outline alert alert-primary" role="alert">
				<div class="m-alert__icon" style="padding: 1.45rem 0.5rem 1.45rem 3.75rem !important; ">
					<i class="fa flaticon-clock-1"></i>
				</div>
				<div class="m-alert__text m-stack__item m-stack__item--center" style="text-align:center">
					<div class="m-widget25">
						<span class="m-widget25__price m--font-brand">
							00
						</span>
						<span class="m-widget25__price m--font-brand">
							00
						</span>
						<span class="m-widget25__price m--font-brand">
							00
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<div class="row">
		<div class="col-lg-12">
			<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<h2 class="m-portlet__head-label m-portlet__head-label--accent">
									<span>
										Multiple Choice
									</span>
								</h2>
							</div>
						</div>
					</div>
					<div class="m-portlet__body">
						<div class="m-section">
							<div class="m-section__content">
								@for($i=0; $i<=100; $i++)
								@if($i < 9)
								<button type="button" style="padding: 0.5rem 1.4rem !important; " class="btn m-btn--square  btn-outline-primary m-btn m-btn--custom">
									{{$i}}
								</button>
								@else
								<button type="button" style="padding: 0.5rem 1rem !important; " class="btn m-btn--square  btn-outline-primary m-btn m-btn--custom">
									{{$i}}
								</button>
								@endif
								@endfor
							</div>
						</div>
					</div>
				</div>
		</div>
		<div class="col-lg-12">
			<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<span class="m-portlet__head-icon">
								<i class="flaticon-statistics"></i>
							</span>
							<h3 class="m-portlet__head-text">
								Description of test.
							</h3>
							<h2 class="m-portlet__head-label m-portlet__head-label--accent">
								<span>
									Multiple Choice
								</span>
							</h2>
						</div>
					</div>
				</div>
				<div class="m-portlet__body">
					<div class="m-section">
						<div class="m-section__content">
							<div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
								<div class="m-demo__preview">
									<!--begin::Form-->
									<form class="m-form">
										<div class="m-form__group form-group">
											<label >
											Setiap negara memiliki sifat tidak tetap dan harus mengalami perubahan. oleh karena itu, harus dikembangkan pola pemerintah yang relatif tahan terhadap gejolak yang akan datang. Hal ini disebut juga ….
											</label>
											<div class="m-radio-list">
												<label class="m-radio m-radio--state-success">
													<input type="radio" name="example_2" value="1">
													Kompleksitas 
													<span></span>
												</label>
												<label class="m-radio m-radio--state-success">
													<input type="radio" name="example_2" value="1">
													Keragaman
													<span></span>
												</label>
												<label class="m-radio m-radio--state-success">
													<input type="radio" name="example_2" value="1">
													Integritas   
													<span></span>
												</label>
												<label class="m-radio m-radio--state-success">
													<input type="radio" name="example_2" value="1">
													Dinamika  
													<span></span>
												</label>
												<label class="m-radio m-radio--state-success">
													<input type="radio" name="example_2" value="1">
													Pluralitas 
													<span></span>
												</label>
											</div>
										</div>
									</form>
									<!--end::Form-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('layouts.users.footer')
