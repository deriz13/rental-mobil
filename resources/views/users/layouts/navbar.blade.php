
<div class="container-fluid">
    <div class="row align-items-center py-1 px-xl-4">
        <div class="col-lg-4 d-none d-lg-block">
            <a href="{{ route('home.index') }}" class="text-decoration-none">
                <h4 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">R</span>Rental Mobil</h4>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-center">
                <div class="input-group" style="width: 40%;">
                </div> 
        </div>
        <div class="col-lg-2 col-6 text-right">
            <div class="dropdown">
                <a class="btn border" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('rental_listing') }}">Daftar Sewa</a>
                    <a class="dropdown-item" href="{{ route('return_mobile') }}">Kembalikan Mobile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const moonIcon = document.querySelector('.fa-moon');

        if (moonIcon) {
            moonIcon.addEventListener('click', function() {
            });
        }
    });
</script>

