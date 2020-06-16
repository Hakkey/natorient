@extends('layouts.app')

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row mb-3">
        <img src="{{ asset('images/natorient.jpg') }}" class="img-fluid" alt="Manufacturing of Palm Oil Products">
      </div>

      <div class="row">
        <div class="col">
          <div class="card card-success shadow p-3 mb-5 bg-white rounded">
            <div class="card-header d-flex justify-content-center">
              <h3>About Nat Orient Resources Sdn Bhd</h3>
            </div>
            <div class="card-body">
              <p class="justify-content">
                Malaysia's position as the World's leading Palm Oil-producing country has allowed the industry to flourish in the way it has never been before. Now, we are churning out a wider variety of by-products as a result of continuous R&D efforts; making the downstream manufacturing into an industry itself. This allows Malaysia to remain heads and shoulders above its other competitors.(MPOC Industry Overview)<br><br>

                In line with above statement, NAT Orient Resources Sdn Bhd is moving forward on the right track to capture a bigger slice of the global market as well as ensuring its prominent present on the home front. NAT Orient Resources Sdn Bhd was incorporate in 2012 and started the factory operation in 2016 as new member in Malaysia palm oil industry. Our core business activities are exporting palm oil products and our company already been registered and licensed by the Malaysian Palm Oil Registration and Licensing Authority (MPOB).<br><br>
                
                Our products are packed in distinctive packaging material such as tins, jerry cans, pet bottles, carton boxes, and flexi tanks. Versatile packing sizes ranging from 500ml bottles to 20MT flexi tanks enable us to penetrate a wider market, from household consumers to the food industry and more importantly to meet each and every customer’s requirement and that including oem brands.</p>
            </div>
          </div>
        </div>
      </div>

      @include('layouts.footer')
      
    </div>
  </section>

@endsection
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
