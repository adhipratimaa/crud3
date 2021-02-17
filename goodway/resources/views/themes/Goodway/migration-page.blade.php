@extends('themes.goodway.layouts.frame')
@section('content')
		<!-- BEGIN: PAGE CONTAINER -->
		<div class="c-layout-page">
			<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
			<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background-image: url(assets/base/img/content/backgrounds/bg-29.jpg)">
				<div class="container">
					<div class="c-page-title c-pull-left">
						<h1 class="c-font-uppercase c-font-bold c-font-white c-font-35 c-font-slim">Migration - NOICC</h1>
					</div>
				</div>
			</div><!--BEGIN: CONTENT/MISC/LATEST-ITEMS-1 -->
			<div class="c-content-box c-size-md c-bg-grey-1" style="padding-top: 0px;">
				<div class="container">
					<div class="row" data-auto-height="true">
						<div class="col-md-0 c-margin-b-30 wow animate fadeInDown">
							<!--
								<div class="c-content-media-1" data-height="height">
									<div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Blog</div>
									<a href="#" class="c-title c-font-uppercase c-font-bold c-theme-on-hover">Take the web by storm with JANGO</a>
									<p>Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat</p>
									<div class="c-author">
										<div class="c-portrait" style="background-image: url(../../assets/base/img/content/team/team1.jpg)"></div>
										<div class="c-name c-font-uppercase">Jack Nilson</div>
									</div>
								</div> -->
						</div>
						<div class="col-md-8 c-margin-b-30 wow animate fadeInDown" data-wow-delay="0.2s">
							<div class="c-content-media-1" data-height="height">
								<h1 class="c-font-bold c-font-uppercase">Notice of Intention to Consider Cancellation (NOICC)</h1>
								<p>
									<h3 style="margin-bottom: 20px;">A Notice of Intention to Consider Cancellation (NOICC) is the Department's instrument to give visa holders a chance to exhibit contentions in connection to their case to avoid visa cancellation. Migration Act 1958 the Department of Home Affairs can send you a NOICC which offers you a chance to remark on the data. There will be a sure timetable to be met and the reaction must be written in English. The response must be submitted on the offered time to the office with all applicable proof. When the dateline is up, a choice will be made by the agent with the data put together by you. </h3>
								</p>

								<h1 class="c-font-bold c-font-uppercase">In what circumstances are NOICC been issued?</h1>
								<p>
									<h3>There are a few situations where a NOICC may be issued to a visa holder in Australia.</h3>
								</p>
								<ul style="margin-bottom: 10px;">
									<li>Incorrect/false information</li>
									<li>False papers that mislead the Department</li>
									<li>Demands not being sufficed</li>
									<li>Collapse of a business skills visa holder to create the business</li>
									<li>The person is of character concern</li>
									<li>A student visa holder does not meet course conditions</li>
									<li>The holder of a Regional Sponsored Migration Scheme (RSMS) Visa not operating well</li>
								</ul>

								<p>
									<h3 style="margin-bottom: 30px;">Usually, the power to cancel a visa is optional. This means that, even though there are spots for cancellation, the Department does not have to terminate the visa. However, there are some situations in which a visa must be eliminated.</h3>
								</p>

								<h1 class="c-font-bold c-font-uppercase">What can you do when you receive a NOICC?</h1>
								<p>
									<h3>Generally, the visa holder will get a notice from the Department and will give a specific time allotment to react to it. For the most part, the time period will be of 5 working days from the day you get the NOICC. Subsequent to getting the reaction the agent will consider:</h3>
								</p>
								<ul>
									<li>The reason for your trip to or stay in Australia</li>
									<li>The length of your visa agreement with any visa requirements</li>
									<li>The level of difficulty which may be caused to you and any family members if the visa is revoked</li>
									<li>The situations in which the spot for revocation occurred</li>
									<li>Your performance in relation to the business, now and on earlier moments</li>
									<li>Whether there remain any people in Australia whose visas would, or maybe removed if your visa is revoked</li>
									<li>Whether there are any necessary legal outcomes to a judgment to revoke your visa such as detention and removal from Australia</li>
									<li>Whether Australia has responsibilities under appropriate international arrangements that would be breached as a result of the revocation arrangements</li>
									<li>And any other important matters</li>
								</ul>
							</div>
						</div>
                        @include('themes/'.$runner->theme->name.'/migration_links')
					</div>
				</div><!-- END: CONTENT/MISC/LATEST-ITEMS-1 -->
			</div>
			<!-- END: PAGE CONTAINER -->
@endsection
