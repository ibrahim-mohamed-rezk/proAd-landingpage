<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    @php
        $meta = App\Models\GeneralSetting::where('page_name', 'meta')->get();
    @endphp
    @if (isset($meta))
        @foreach ($meta as $data)
            @php
                preg_match('/name="([^"]+)"/', $data->desc, $nameMatches);
                $nameValue = isset($nameMatches[1]) ? $nameMatches[1] : '';
                preg_match('/content="([^"]+)"/', $data->desc, $contentMatches);
                $contentValue = isset($contentMatches[1]) ? $contentMatches[1] : '';
            @endphp
            <meta name="{{ $nameValue }}" content="{{ $contentValue }}">
        @endforeach
    @endif
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('theproaddash/assets/images/logo.svg') }}" type="image/svg+xml">
    
    
    <link rel="stylesheet" href="{{url('')}}/assets/src/fonts/icomoon/style.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('')}}/assets/src/css/bootstrap.min.css" />
    <!-- animate.css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!-- Style -->
    <link rel="stylesheet" href="{{url('')}}/assets/src/css/style1.css" />
    <title>ProAd</title>
  </head>
  <body>
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">
      <div class="container">
        <div class="site-nav">
          <!-- mobile logo -->
          <h1 class="site-logo">
            <a href="{{url('/')}}" class="">
              <img src="{{asset('theproad/assets/images/logo.svg')}}" alt="" />
            </a>
          </h1>

          <!--navigations -->
          <nav class="site-navigation" role="navigation">
            <ul class="site-menu js-clone-nav">
              <li class="active"><a href="{{ route('mainhome') }}">Home</a></li>
              <li><a href="{{ route('createcontactus') }}">Contact Us </a></li>
              <li><a href="{{ route('terms') }}">Terms</a></li>
              <li><a href="{{ route('blogs') }}">Blogs</a></li>
              <li><a href="https://www.facebook.com/">fan page</a></li>
              <li><a href="{{ route('polices') }}">Policy</a></li>
            </ul>
          </nav>

          <div class="auth-buttons">
                @guest
                    <!--<button class="register" onclick="window.location.href='{{ route('register') }}'">Register</button>-->
                    <button class="sigin" onclick="window.location.href='{{ route('login') }}'">Sing In</button>
                @endguest
                @auth
                    <button class="sigin" onclick="window.location.href='{{ route('dashboard') }}'">My Dashboard</button>
                @endauth
          </div>

          <!-- mobile menue -->
          <div class="mobile-menue-button">
            <a href="#" class="site-menu-toggle js-menu-toggle text-white">
              <span class="icon-menu h3"></span>
            </a>
          </div>
        </div>
      </div>
    </header>

    <div class="hero" style=" background-image: url('{{url('')}}/assets/src/images/hero_2.png');">
      <div class="container">
        <div class="hero-text">
          <h2>The Proad</h2>
          <h3 class="hero-text-slider">
            <div>Easy to earn 5 $ per day</div>
            <div>Watch, enjoy and win</div>
            <div>7 ways to make money for free</div>
          </h3>
        </div>
        <div class="hero-buttons">
          <button class="fqa" onclick="window.location.href='#faq'">FAQ</button>
          <button class="services" onclick="window.location.href='#features'">
            <span>Services</span>
            <svg
              width="34"
              height="34"
              viewBox="0 0 34 34"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M19.799 9.89948L19.0919 19.0919L9.89952 19.799"
                stroke="white"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M19.799 9.89948L19.0919 19.0919L9.89952 19.799"
                stroke="white"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- about -->
    <div
      class="wow animate__animated animate__fadeInUp about-proad"
      data-wow-duration=".8s"
      data-wow-delay="0s"
      data-wow-offset="100"
    >
      <h2>
        <span>About Us.</span>
        <div></div>
      </h2>
      <p>
        {!! $aboutpage->desc !!}
      </p>
    </div>

    <!-- achievements -->
    <div
      class="wow animate__animated animate__fadeInUp achievements-sec"
      data-wow-duration=".8s"
      data-wow-delay="0s"
      data-wow-offset="100"
    >
      <div class="container" style="height: 338px;">
        <div class="achievements-desc">
          <h2>
            <span>Lots of</span>
            <span>achievements</span>
          </h2>
          <p>With our super powers we have reached this</p>
        </div>
        <div class="achievements">
          <div class="achievements-row">
            <div class="achievement">
              <svg
                width="32"
                height="33"
                viewBox="0 0 32 33"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_73_17)">
                  <path
                    d="M24 13.8333H32L28 8.5L24 13.8333ZM24 19.1667H32L28 24.5L24 19.1667Z"
                    fill="#DBE6FF"
                  />
                  <path
                    d="M1.33333 0.5H9.33333V32.5H1.33333C0.979711 32.5 0.640572 32.3595 0.390523 32.1095C0.140475 31.8594 0 31.5203 0 31.1667V1.83333C0 1.47971 0.140475 1.14057 0.390523 0.890523C0.640572 0.640475 0.979711 0.5 1.33333 0.5Z"
                    fill="white"
                  />
                  <path
                    d="M12 0.5H20C20.3536 0.5 20.6928 0.640475 20.9428 0.890523C21.1929 1.14057 21.3333 1.47971 21.3333 1.83333V31.1667C21.3333 31.5203 21.1929 31.8594 20.9428 32.1095C20.6928 32.3595 20.3536 32.5 20 32.5H12V0.5Z"
                    fill="#1DB5BE"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_73_17">
                    <rect
                      width="32"
                      height="32"
                      fill="white"
                      transform="translate(0 0.5)"
                    />
                  </clipPath>
                </defs>
              </svg>
              <div>
                <h3>10,000+</h3>
                <p>Active Users per Week</p>
              </div>
            </div>
            <div class="achievement">
              <svg
                width="32"
                height="33"
                viewBox="0 0 32 33"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_73_70)">
                  <path
                    d="M28 32.5H16C15.6463 32.5 15.3072 32.3595 15.0571 32.1094C14.8071 31.8594 14.6666 31.5202 14.6666 31.1666V28.5C14.6666 28.1463 14.8071 27.8072 15.0571 27.5571C15.3072 27.3071 15.6463 27.1666 16 27.1666H28C28.3536 27.1666 28.6927 27.3071 28.9428 27.5571C29.1928 27.8072 29.3333 28.1463 29.3333 28.5V31.1666C29.3333 31.5202 29.1928 31.8594 28.9428 32.1094C28.6927 32.3595 28.3536 32.5 28 32.5Z"
                    fill="#DBE6FF"
                  />
                  <path
                    d="M28 0.5H3.99996C3.64634 0.5 3.3072 0.640475 3.05715 0.890523C2.8071 1.14057 2.66663 1.47971 2.66663 1.83333V4.5C2.66663 4.85362 2.8071 5.19276 3.05715 5.44281C3.3072 5.69286 3.64634 5.83333 3.99996 5.83333H28C28.3536 5.83333 28.6927 5.69286 28.9428 5.44281C29.1928 5.19276 29.3333 4.85362 29.3333 4.5V1.83333C29.3333 1.47971 29.1928 1.14057 28.9428 0.890523C28.6927 0.640475 28.3536 0.5 28 0.5Z"
                    fill="#1DB5BE"
                  />
                  <path
                    d="M28 8.5H3.99996C3.64634 8.5 3.3072 8.64047 3.05715 8.89052C2.8071 9.14057 2.66663 9.47971 2.66663 9.83333V23.1667C2.66663 23.5203 2.8071 23.8594 3.05715 24.1095C3.3072 24.3595 3.64634 24.5 3.99996 24.5H28C28.3536 24.5 28.6927 24.3595 28.9428 24.1095C29.1928 23.8594 29.3333 23.5203 29.3333 23.1667V9.83333C29.3333 9.47971 29.1928 9.14057 28.9428 8.89052C28.6927 8.64047 28.3536 8.5 28 8.5Z"
                    fill="white"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_73_70">
                    <rect
                      width="32"
                      height="32"
                      fill="white"
                      transform="translate(0 0.5)"
                    />
                  </clipPath>
                </defs>
              </svg>

              <div>
                <h3>887</h3>
                <p>Users</p>
              </div>
            </div>
          </div>
          <div class="achievements-row">
            <div class="achievement">
              <svg
                width="32"
                height="33"
                viewBox="0 0 32 33"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M6.66665 1.83337H2.66665C2.31302 1.83337 1.97388 1.97385 1.72384 2.2239C1.47379 2.47395 1.33331 2.81309 1.33331 3.16671V29.8334C1.33331 30.187 1.47379 30.5261 1.72384 30.7762C1.97388 31.0262 2.31302 31.1667 2.66665 31.1667H6.66665V1.83337Z"
                  fill="#DBE6FF"
                />
                <path
                  d="M9.33331 31.1667H22.6666V1.83337H9.33331V31.1667ZM16 25.8334C15.6464 25.8334 15.3072 25.6929 15.0572 25.4429C14.8071 25.1928 14.6666 24.8537 14.6666 24.5C14.6666 24.1464 14.8071 23.8073 15.0572 23.5572C15.3072 23.3072 15.6464 23.1667 16 23.1667C16.3536 23.1667 16.6927 23.3072 16.9428 23.5572C17.1928 23.8073 17.3333 24.1464 17.3333 24.5C17.3333 24.8537 17.1928 25.1928 16.9428 25.4429C16.6927 25.6929 16.3536 25.8334 16 25.8334ZM16 7.16671C16.3536 7.16671 16.6927 7.30718 16.9428 7.55723C17.1928 7.80728 17.3333 8.14642 17.3333 8.50004C17.3333 8.85366 17.1928 9.1928 16.9428 9.44285C16.6927 9.6929 16.3536 9.83337 16 9.83337C15.6464 9.83337 15.3072 9.6929 15.0572 9.44285C14.8071 9.1928 14.6666 8.85366 14.6666 8.50004C14.6666 8.14642 14.8071 7.80728 15.0572 7.55723C15.3072 7.30718 15.6464 7.16671 16 7.16671ZM16 15.1667C16.3536 15.1667 16.6927 15.3072 16.9428 15.5572C17.1928 15.8073 17.3333 16.1464 17.3333 16.5C17.3333 16.8537 17.1928 17.1928 16.9428 17.4429C16.6927 17.6929 16.3536 17.8334 16 17.8334C15.6464 17.8334 15.3072 17.6929 15.0572 17.4429C14.8071 17.1928 14.6666 16.8537 14.6666 16.5C14.6666 16.1464 14.8071 15.8073 15.0572 15.5572C15.3072 15.3072 15.6464 15.1667 16 15.1667Z"
                  fill="white"
                />
                <path
                  d="M29.3333 1.83337H25.3333V31.1667H29.3333C29.6869 31.1667 30.0261 31.0262 30.2761 30.7762C30.5262 30.5261 30.6666 30.187 30.6666 29.8334V3.16671C30.6666 2.81309 30.5262 2.47395 30.2761 2.2239C30.0261 1.97385 29.6869 1.83337 29.3333 1.83337Z"
                  fill="#1DB5BE"
                />
              </svg>

              <div>
                <h3>500+</h3>
                <p>Clients</p>
              </div>
            </div>
            <div class="achievement">
              <svg
                width="32"
                height="33"
                viewBox="0 0 32 33"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12 13.8334H2.66671C2.31309 13.8334 1.97395 13.6929 1.7239 13.4429C1.47385 13.1928 1.33337 12.8537 1.33337 12.5V3.16671C1.33337 2.81309 1.47385 2.47395 1.7239 2.2239C1.97395 1.97385 2.31309 1.83337 2.66671 1.83337H12C12.3537 1.83337 12.6928 1.97385 12.9429 2.2239C13.1929 2.47395 13.3334 2.81309 13.3334 3.16671V12.5C13.3334 12.8537 13.1929 13.1928 12.9429 13.4429C12.6928 13.6929 12.3537 13.8334 12 13.8334Z"
                  fill="white"
                />
                <path
                  d="M12 31.1667H2.66671C2.31309 31.1667 1.97395 31.0263 1.7239 30.7762C1.47385 30.5262 1.33337 30.187 1.33337 29.8334V20.5001C1.33337 20.1465 1.47385 19.8073 1.7239 19.5573C1.97395 19.3072 2.31309 19.1667 2.66671 19.1667H12C12.3537 19.1667 12.6928 19.3072 12.9429 19.5573C13.1929 19.8073 13.3334 20.1465 13.3334 20.5001V29.8334C13.3334 30.187 13.1929 30.5262 12.9429 30.7762C12.6928 31.0263 12.3537 31.1667 12 31.1667Z"
                  fill="white"
                />
                <path
                  d="M17.3334 3.16675H30.6667V5.83341H17.3334V3.16675Z"
                  fill="#1DB5BE"
                />
                <path
                  d="M30.6667 20.5H17.3334V23.1667H30.6667V20.5Z"
                  fill="#1DB5BE"
                />
                <path
                  d="M30.6667 27.1667H17.3334V29.8334H30.6667V27.1667Z"
                  fill="#DBE6FF"
                />
                <path
                  d="M30.6667 9.83337H17.3334V12.5H30.6667V9.83337Z"
                  fill="#DBE6FF"
                />
              </svg>

              <div>
                <h3>$350,000</h3>
                <p>total was withdrawn by users</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- features -->
    <div
      class="wow animate__animated animate__fadeInUp features-sec"
      data-wow-duration=".8s"
      data-wow-delay="0s"
      data-wow-offset="100"
      id="features"
    >
      <div class="container">
        <div class="features-desc">
          <h2>Features</h2>
          <!--<p>-->
          <!--  Features section .-->
          <!--</p>-->
        </div>

        <div class="features">
            @foreach ($featurepage as $data)

                <div class="feature">
                    <img src="{{ asset($data->image) }}"  alt="" width="32px" height="32px">

                    <h3>{{$data->title}}</h3>
                    <p>
                      {!! $data->desc !!}
                    </p>
                </div>
            @endforeach

        </div>
      </div>
    </div>

    <!-- payments -->
    <div
      class="wow animate__animated animate__fadeInUp payments-sec"
      data-wow-duration=".8s"
      data-wow-delay="0s"
      data-wow-offset="100"
    >
      <div class="container">
        <svg
          width="100%"
          height="auto"
          viewBox="0 0 1532 1223"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M1435.97 843.245C1361.56 1355.52 325.316 1240.82 -183.503 1119.44C-254.469 797.779 -392.474 148.767 -376.765 125.992C-357.129 97.5223 -259.464 71.6027 -11.9445 15.5142C235.575 -40.5743 132.743 65.6539 377.679 170.607C622.615 275.561 794.174 226.696 1229.79 212.674C1665.4 198.652 1528.98 202.901 1435.97 843.245Z"
            fill="#4680FF"
          />
        </svg>

        <div class="payments-desc">
          <h2>payment methods</h2>
          <p>
            Enjoy the freedom to choose how you pay! We offer a wide range of
            secure and convenient payment options tailored to your preferences.
            Whether it鈥檚 using your credit card, debit card, or trusted
            e-wallets like PayPal, we鈥檝e got you covered. Worried about
            security? Rest assured, all transactions are encrypted to protect
            your personal data. Prefer a hands-on approach? Opt for cash on
            delivery for maximum flexibility. At ProAd, our goal
            is to make your shopping experience seamless, safe, and hassle-free
            from start to finish.
          </p>
        </div>

        <div class="payments">
          <div>
            <img src="{{url('')}}/assets/src/images/payment1.png" alt="payment1" />
            <img src="{{url('')}}/assets/src/images/payment2.png" alt="payment2" />
          </div>
          <div>
            <img src="{{url('')}}/assets/src/images/payment3.png" alt="payment3" />
          </div>
        </div>
      </div>
    </div>

    <!-- questions -->
    <div
      class="wow animate__animated animate__fadeInUp questions-sec"
      data-wow-duration=".8s"
      data-wow-delay="0s"
      data-wow-offset="100"
      id ="faq"
    >
      <div class="container">
        <div class="questions-desc">
          <h2>
            <span>Frequently </span>
            <span> asked questions</span>
          </h2>
          <p>
            If you are not sure whether Draft is suitable is for you or not, do
            not worry. We are here to explain everything you might want to know
          </p>
        </div>
        <div class="questions">
            @foreach ($FAQpage as $key=>$data)
                <div class="question">
                    <button
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseQuestion{{$key}}"
                      aria-expanded="false"
                      aria-controls="collapseQuestion{{$key}}"
                    >
                      <span>{{ $data->title }}</span>
                      <svg
                        width="32"
                        height="32"
                        viewBox="0 0 32 32"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M2.66663 16.0001C2.66663 15.2637 3.26359 14.6667 3.99996 14.6667H28C28.7364 14.6667 29.3333 15.2637 29.3333 16.0001C29.3333 16.7365 28.7364 17.3334 28 17.3334H3.99996C3.26359 17.3334 2.66663 16.7365 2.66663 16.0001Z"
                          fill="#6A6D9E"
                        />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M16 2.66675C16.7364 2.66675 17.3333 3.26371 17.3333 4.00008V28.0001C17.3333 28.7365 16.7364 29.3334 16 29.3334C15.2636 29.3334 14.6667 28.7365 14.6667 28.0001V4.00008C14.6667 3.26371 15.2636 2.66675 16 2.66675Z"
                          fill="#6A6D9E"
                        />
                      </svg>
                    </button>
                    <div class="collapse" id="collapseQuestion{{$key}}">
                      <div class="card card-body">
                        {!! $data->desc !!}
                      </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="contact-sec">
          <div class="contact-desc">
            <h2>
              <span>Would you like us to contact you?</span>
              <span>We鈥檙e always in touch</span>
            </h2>
            <p>
              <span>{{ $info->email }}</span>
              <span>
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M7 17L17 7"
                    stroke="#4680FF"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M7 7H17V17"
                    stroke="#4680FF"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </span>
            </p>
          </div>
          <form class="contact-from" action="{{ route('storecontactus') }}" method="POST">
              @csrf
              @if ($errors->any())
                <div class="alert alert-primary">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
              @endif
              @if (Session::has('done'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('done') }}
                </div>
             @endif
            <input placeholder="Your Name" type="text" name="name" id="" />
            <input placeholder="Your Your Number" type="number" name="phone" id="" />
            <input placeholder="E-mail" type="email" name="email" id="" />
            <textarea name="message" id="" placeholder="Note....."></textarea>
            <button type="submit">
              <span>Send</span>
              <div>
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M7 17L17 7"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M7 7H17V17"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
            </button>
          </form>
        </div>
      </div>
    </div>

    <div
      class="wow animate__animated animate__fadeInUp blogs-sec"
      data-wow-duration=".8s"
      data-wow-delay="0s"
      data-wow-offset="100"
    >
      <div class="container">
        <div class="blogs-desc">
          <h2>News & Blog</h2>
          <p>
            If you are not sure whether Draft is suitable is for you or not, do
            not worry. We are here to explain everything you might want to know
          </p>
        </div>

        <div class="blogs">
            @foreach ($blogpage as $post)
                <div class="blog">
                    <a href="{{ route('blogsdetails', $post->id) }}">
                        <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" />
                    </a>
                    <br>
                <h2>
                  <svg
                    width="11"
                    height="11"
                    viewBox="0 0 11 11"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect
                      x="0.25"
                      y="0.25"
                      width="10.313"
                      height="10.5"
                      rx="1.75"
                      fill="#4680FF"
                      stroke="black"
                      stroke-width="0.5"
                    />
                    <path
                      d="M9.7317 4.5L5.40649 4.5"
                      stroke="white"
                      stroke-width="0.25"
                      stroke-linecap="round"
                    />
                    <path
                      d="M9.7317 3.5L5.40649 3.5"
                      stroke="white"
                      stroke-width="0.25"
                      stroke-linecap="round"
                    />
                    <path
                      d="M9.73169 5.5L1.08128 5.5"
                      stroke="white"
                      stroke-width="0.25"
                      stroke-linecap="round"
                    />
                    <path
                      d="M9.73169 7.5L1.08128 7.5"
                      stroke="white"
                      stroke-width="0.25"
                      stroke-linecap="round"
                    />
                    <path
                      d="M9.73169 8.5L1.08128 8.5"
                      stroke="white"
                      stroke-width="0.25"
                      stroke-linecap="round"
                    />
                    <path
                      d="M9.73169 6.5L1.08128 6.5"
                      stroke="white"
                      stroke-width="0.25"
                      stroke-linecap="round"
                    />
                    <path
                      d="M4.32519 2.5V4.5C4.32519 4.77614 4.10133 5 3.82519 5H1.58128C1.30514 5 1.08128 4.77614 1.08128 4.5V2.5C1.08128 2.22386 1.30514 2 1.58128 2H3.82519C4.10133 2 4.32519 2.22386 4.32519 2.5Z"
                      fill="white"
                    />
                  </svg>
                  <span>{{ $post->title }}</span>
                </h2>
                <div class="date">
                  <svg
                    width="10"
                    height="10"
                    viewBox="0 0 10 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <g clip-path="url(#clip0_122_98)">
                      <path
                        d="M7.91667 0.833333H7.5V0.416667C7.5 0.30616 7.4561 0.200179 7.37796 0.122039C7.29982 0.0438987 7.19384 0 7.08333 0C6.97283 0 6.86685 0.0438987 6.7887 0.122039C6.71057 0.200179 6.66667 0.30616 6.66667 0.416667V0.833333H3.33333V0.416667C3.33333 0.30616 3.28943 0.200179 3.21129 0.122039C3.13315 0.0438987 3.02717 0 2.91667 0C2.80616 0 2.70018 0.0438987 2.62204 0.122039C2.5439 0.200179 2.5 0.30616 2.5 0.416667V0.833333H2.08333C1.531 0.833995 1.00148 1.0537 0.610925 1.44426C0.220367 1.83482 0.000661607 2.36434 0 2.91667L0 7.91667C0.000661607 8.469 0.220367 8.99852 0.610925 9.38908C1.00148 9.77963 1.531 9.99934 2.08333 10H7.91667C8.469 9.99934 8.99852 9.77963 9.38908 9.38908C9.77963 8.99852 9.99934 8.469 10 7.91667V2.91667C9.99934 2.36434 9.77963 1.83482 9.38908 1.44426C8.99852 1.0537 8.469 0.833995 7.91667 0.833333ZM0.833333 2.91667C0.833333 2.58515 0.965029 2.2672 1.19945 2.03278C1.43387 1.79836 1.75181 1.66667 2.08333 1.66667H7.91667C8.24819 1.66667 8.56613 1.79836 8.80055 2.03278C9.03497 2.2672 9.16667 2.58515 9.16667 2.91667V3.33333H0.833333V2.91667ZM7.91667 9.16667H2.08333C1.75181 9.16667 1.43387 9.03497 1.19945 8.80055C0.965029 8.56613 0.833333 8.24819 0.833333 7.91667V4.16667H9.16667V7.91667C9.16667 8.24819 9.03497 8.56613 8.80055 8.80055C8.56613 9.03497 8.24819 9.16667 7.91667 9.16667Z"
                        fill="#8C9EC5"
                      />
                      <path
                        d="M5 6.875C5.34518 6.875 5.625 6.59518 5.625 6.25C5.625 5.90482 5.34518 5.625 5 5.625C4.65482 5.625 4.375 5.90482 4.375 6.25C4.375 6.59518 4.65482 6.875 5 6.875Z"
                        fill="#8C9EC5"
                      />
                      <path
                        d="M2.9166 6.875C3.26177 6.875 3.5416 6.59518 3.5416 6.25C3.5416 5.90482 3.26177 5.625 2.9166 5.625C2.57142 5.625 2.2916 5.90482 2.2916 6.25C2.2916 6.59518 2.57142 6.875 2.9166 6.875Z"
                        fill="#8C9EC5"
                      />
                      <path
                        d="M7.08339 6.875C7.42857 6.875 7.70839 6.59518 7.70839 6.25C7.70839 5.90482 7.42857 5.625 7.08339 5.625C6.73821 5.625 6.45839 5.90482 6.45839 6.25C6.45839 6.59518 6.73821 6.875 7.08339 6.875Z"
                        fill="#8C9EC5"
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0_122_98">
                        <rect width="10" height="10" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                  <span>{{ $post->created_at->format('F j, Y') }}</span>
                </div>
                <p>
                  {!! \Illuminate\Support\Str::words($post->desc, 20, '...') !!}
                </p>
            </div>
            
            @endforeach

        </div>
      </div>
    </div>

    <!-- footer -->
    <footer class="proAd-footer">
      <div class="footer--default">
        <div class="container" style="max-width: 1300px !important;">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
              <!-- Description -->
              <div class="proAd-text proAd-text-white">
                <h5>FOOTER</h5>
                <p style="opacity: 0.6; margin: 20px 0;">THEPROAD</p>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 offset-lg-1">
              <!-- Description -->
              <div class="proAd-text proAd-text-white">
                <h5>Get in Touch</h5>
                <p style="opacity: 0.6;  margin: 20px 0;">
                  <a
                    href="tel:{{ $info->phone }}"
                    style="color: #fff; opacity: .6;"
                    target="_blank"
                    >phone:+2 {{ $info->phone }}</a
                  ><br />
                  <a
                    href="mailto:{{ $info->email }}"
                    style="color: #fff; opacity: .6;"
                    target="_blank"
                    >Email:{{ $info->email }}</a
                  >
                </p>
              </div>
            </div>
          </div>

          <div class="separator"></div>

          <div class="row">
            <div
              class="col-xs-12 col-sm-12 col-md-6 col-lg-6 align-self-center"
            >
              <!-- Copyright -->
              <div class="copyright proAd-text-white">
                © 2023 All rights reserved.
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 align-right">
              <!-- Social-->
              <div class="proAd-social-1 proAd-social-active">
                <ul>
                  <li>
                    <a
                      class="proAd-social-link proAd-hover-2"
                      href="https://www.facebook.com/theproad/"
                      title="Dribbble"
                      target="_blank"
                    >
                    <i class="fab fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="proAd-social-link proAd-hover-2"
                      href="https://t.me/ThePROAD"
                      title="Dribbble"
                      target="_blank"
                    >
                      <i class="fab fa-telegram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="{{url('')}}/assets/src/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('')}}/assets/src/js/bootstrap.min.js"></script>
    <script src="{{url('')}}/assets/src/js/jquery.sticky.js"></script>
    <script src="{{url('')}}/assets/src/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  </body>
</html>
