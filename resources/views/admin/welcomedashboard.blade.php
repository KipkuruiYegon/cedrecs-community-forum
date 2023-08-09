{{-- The navbar is included here --}}
@include('admin.partials.mainnavbar')

{{-- Create a post here --}}
<div class="container-fluid p-4  mb-4"  style="margin-top:px;">
  <div class="row">

    @include('admin.partials.sidenavbar')

    <div class=" col-md-10 shadow-sm">
        <div class="row bg-light">
            <div class=" col-md-12 mb-4" >
                <div class="container welcome-div p-5 text-white bg-primary shadow" style="border-radius: 10px;">
                    <h1 class="font-weight-bold"> <i class="bi bi-bar-chart" style="font-size: 28px;"></i> Dashboard</h1>
                    <p class="lead">Overview</p>
                  </div>
            </div>



            <div class=" col-md-4 mb-4">
                <div class="shadow-sm card custom-card">
                  <img src="https://img.freepik.com/premium-vector/thought-leadership-ceo-executive-position-who-guide-company-direction-leading-business-forward-guiding-direction-concept-confident-businessman-leader-pointing-finger-colleagues-follow_212586-2116.jpg?w=900" class="card-img-top" alt="..." style="height: 200px;">
                  <div class="card-body bg-success text-white">
                    <h5 class="card-title">Total Users </h5>

                  </div>
                  <div class=" card-body text-white" style="background-color: #FF330A;">
                      <h4 class="card-text">380</h4>
                    </div>
                </div>
              </div>

            <div class=" col-md-4 mb-4">
              <div class="shadow-sm card custom-card">
                <img src="https://img.freepik.com/premium-vector/investment-strategy-earn-money-plan-invest-wealth-management-profit-financial-planning-market-analysis-concept-businessman-investor-holding-big-money-coin-walk-up-rising-graph_212586-1654.jpg?w=900" class="card-img-top" alt="" style="height: 200px;">
                <div class="card-body bg-primary text-white">
                  <h5 class="card-title">Total Posts </h5>

                </div>
                <div class=" card-body text-white" style="background-color: #FF330A;">
                    <h4 class="card-text">380</h4>
                  </div>
              </div>
            </div>


              <div class="col-md-4 mb-4">
                <div class="shadow-sm card custom-card">
                  <img src="https://img.freepik.com/premium-vector/announcement-storytelling-communication-skill-shouting-out-loud-sending-message-attention-warning-speak-boss-aggression-concept-businessman-boss-shouting-megaphone-loudspeaker_212586-2037.jpg?w=900" class="card-img-top" alt="" style="height: 200px;">
                  <div class="card-body bg-secondary text-white">
                    <h5 class="card-title">Total Comments</h5>

                  </div>
                  <div class=" card-body text-white" style="background-color: #FF330A;">
                      <h4 class="card-text">380</h4>
                    </div>
                </div>
              </div>
          </div>
        <div class="row bg-light">
            <div class=" col-md-6 mb-4" >
                <div class="container welcome-div p-5 shadow" style="border-radius: 10px;">
                    <h2 class="font-weight-bold"> <i class="bi bi-bar-chart" style="font-size: 28px;"></i>Timeline Activities</h2>
                    <p class="lead">Overview</p>
                  </div>
            </div>
            <div class=" col-md-6 mb-4" >
                <div class="container welcome-div p-5 shadow" style="border-radius: 10px;">
                    <h2 class="font-weight-bold"> <i class="bi bi-bar-chart" style="font-size: 28px;"></i>Recent Alerts</h2>
                    <p class="lead">Overview</p>
                  </div>
            </div>
        </div>


</div>
</div>
</div>
{{-- Footer is included here --}}
@include('admin.partials.footerbar')
