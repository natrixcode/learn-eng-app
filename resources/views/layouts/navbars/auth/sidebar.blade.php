
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Ubuntu&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=DM+Sans&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Archivo&display=swap');

  @font-face {
    font-family: 'Recoleta-Bold';
    src: url(Recoleta-Bold.ttf);
  }



.heading {
  font-family: "Playfair Display";
  font-weight: bold;
}

a,p,h1,h2,h3,h4,h5,h6{
  font-family: "Archivo";
}

</style>


<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard') }}">
        
        <span class=" heading ms-3 font-weight-bold fs-4 text-dark">LENG.</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('dashboard') ? 'active' : '') }}" href="{{ url('dashboard') }}">
          
        <?xml version="1.0" encoding="UTF-8"?>
        <defs>
    <style>
      .cls-1 {
        fill: none;
        stroke: #1d1d1b;
        stroke-miterlimit: 10;
        stroke-width: 7px;
      }
    </style>
  </defs>
<svg width="24px" height="24px" id="dashbicon" data-name="dashbicon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 135.53 135.54">
  <rect class="cls-1" x="3.5" y="73.89" width="60.5" height="58.15" rx="12" ry="12"/>
  <rect class="cls-1" x="3.5" y="3.5" width="60.5" height="59.08" rx="12" ry="12"/>
  <rect class="cls-1" x="82.15" y=".92" width="47.3" height="52.45" rx="12" ry="12" transform="translate(132.95 -78.65) rotate(90)"/>
  <rect class="cls-1" x="91.96" y="91.98" width="27.69" height="52.45" rx="8.7" ry="8.7" transform="translate(224 12.4) rotate(90)"/>
  <rect class="cls-1" x="91.96" y="51.62" width="27.69" height="52.45" rx="8.7" ry="8.7" transform="translate(183.65 -27.96) rotate(90)"/>
</svg>
          <span class="nav-link-text ms-3 text-regular">Dashboard</span>
        </a>
      </li>
      <li class="nav-item mt-2">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Your profile</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('user-profile') ? 'active' : '') }} " href="{{ url('user-profile') }}">
        <svg class="ms-2 text-dark" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
            <span class="nav-link-text ms-3">User Profile</span>
        </a>
      </li>
      


    <!-- Rating -->
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('rating') ? 'active' : '') }}" href="{{ url('rating') }}">
        <svg class="ms-2 text-dark" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
          <span class="nav-link-text ms-3">Invite friends</span>
        </a>
      </li>
      <li class="nav-item mt-2">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Learning</h6>
      </li>
      
      

      <!-- Grammar -->
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('grammar') ? 'active' : '') }}" href="{{ url('grammar') }}">
        <svg class="ms-2 text-dark" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
          <span class="nav-link-text ms-3">Grammar</span>
        </a>
      </li>



      <!-- Listening -->
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('listening') ? 'active' : '') }}" href="{{ url('listening') }}">
        <?xml version="1.0" encoding="UTF-8"?>
<svg width="30px" height="30px" id="listeningicon" data-name="listeningicon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 158.17 135.37">
  <defs>
    <style>
      .cls-1 {
        fill: none;
        stroke: #1d1d1b;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-width: 10px;
      }
    </style>
  </defs>
  <path class="cls-1" d="M32.11,130.37h0c-14.91,0-27.11-12.2-27.11-27.11v-13.63c0-10.75,8.8-19.55,19.55-19.55h7.55c6.6,0,12,5.4,12,12v36.29c0,6.6-5.4,12-12,12Z"/>
  <path class="cls-1" d="M126.06,70.08h7.55c10.79,0,19.55,8.76,19.55,19.55v13.63c0,14.96-12.15,27.11-27.11,27.11h0c-6.62,0-12-5.38-12-12v-36.29c0-6.62,5.38-12,12-12Z"/>
  <path class="cls-1" d="M133.61,70.08S138.33,5,76.73,5C21.37,5,24.55,70.08,24.55,70.08"/>
</svg>
          <span class="nav-link-text ms-3">Listening</span>
        </a>
      </li>





      <!-- Reading -->
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('reading') ? 'active' : '') }}" href="{{ url('reading') }}">
        <?xml version="1.0" encoding="UTF-8"?>
        
<svg width="24px" height="24px" id="_Шар_1" data-name="Шар 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 152.95 152.95">
  <rect class="cls-1" x="5" y="5" width="142.95" height="142.95" rx="12" ry="12"/>
  <line class="cls-1" x1="31.92" y1="65.29" x2="105.3" y2="65.29"/>
  <line class="cls-1" x1="31.92" y1="42.92" x2="121.02" y2="42.92"/>
  <line class="cls-1" x1="31.92" y1="87.66" x2="121.02" y2="87.66"/>
  <line class="cls-1" x1="31.92" y1="110.03" x2="85.88" y2="110.03"/>
</svg>
          <span class="nav-link-text ms-3">Reading</span>
        </a>
      </li>




      <!-- Writing -->
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('writing') ? 'active' : '') }}" href="{{ url('writing') }}">
        <?xml version="1.0" encoding="UTF-8"?>
<svg width="24px" height="24px" id="write" data-name="write" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101.02 118.14">
  <defs>
    <style>
      .cls-1 {
        fill: #fff;
        stroke: #1d1d1b;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-width: 10px;
      }
    </style>
  </defs>
  <polygon class="cls-1" points="85.92 38.04 36.01 99.68 20.51 106.41 5 113.14 8.36 96.57 11.7 80.01 61.61 18.36 85.92 38.04"/>
  <path class="cls-1" d="M93.95,28.11l-8.04,9.93-24.31-19.68,8.04-9.93c3.22-3.98,9.05-4.59,13.03-1.37l9.91,8.02c3.97,3.22,4.59,9.05,1.37,13.02Z"/>
</svg>
          <span class="nav-link-text ms-3">Writing</span>
        </a>
      </li>



      <!-- Vocabulary -->
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('vocabulary') ? 'active' : '') }}" href="{{ url('vocabulary') }}">
        <svg class="ms-2 text-dark" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M19.7 34.5c16.3-6.8 35 .9 41.8 17.2L192 364.8 322.5 51.7c6.8-16.3 25.5-24 41.8-17.2s24 25.5 17.2 41.8l-160 384c-5 11.9-16.6 19.7-29.5 19.7s-24.6-7.8-29.5-19.7L2.5 76.3c-6.8-16.3 .9-35 17.2-41.8z"/></svg>
          <span class="nav-link-text ms-3">Vocabulary</span>
        </a>
      </li>



    
      

      
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
      </li>
      
      <!-- <li class="nav-item">
        <a class="nav-link  " href="{{ url('static-sign-in') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>document</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(154.000000, 300.000000)">
                      <path class="color-background opacity-6" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"></path>
                      <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <span class="nav-link-text ms-1">Sign in </span>
        </a>
      </li> -->
      




      <li class="nav-item">
        <a class="nav-link  " href="{{ url('/logout') }}">
        <svg class="ms-2 text-dark" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z"/></svg>
          <span class="nav-link-text ms-3">Sign Out</span>
        </a>
      </li>
      

  



     
      <!-- Sign up -->

<!-- 
      <li class="nav-item">
        <a class="nav-link  " href="{{ url('static-sign-up') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg width="12px" height="20px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>spaceship</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(4.000000, 301.000000)">
                      <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                      <path class="color-background opacity-6" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                      <path class="color-background opacity-6" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"></path>
                      <path class="color-background opacity-6" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <span class="nav-link-text ms-1">Sign Up</span>
        </a>
      </li>
      
    </ul>
  </div> -->
  
</aside>
