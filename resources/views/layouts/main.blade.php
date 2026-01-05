<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>পূর্বধলার দর্পন। পূর্বধলার নিউজ পোর্টাল</title>
    @stack('social-meta')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/pd_logo.png') }}">
    @vite(['resources/css/style.css','resources/css/app.css'])
    @livewireStyles
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="@if(isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') dark-theme @else light-theme @endif" bgcolor="white">
    <header class="header-z">
        <div class="container">
            <nav class="navbar">
                <a href="/" class="navbar-logo" >
                    <span class="nav-logo"><span style="color: green;">পূর্বধলার</span> <span style="color:red;">দর্পন</span></span>
                </a>
                <div class="btn-group">
                    <button class="theme-btn theme-btn-mobile light">
                        <svg class="sun" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path d="M232.6 56.1C225.9 51.7 217.5 50.9 210.1 53.9C202.7 56.9 197.4 63.5 195.9 71.3L175 174.6L71.7 195.4C63.9 197 57.3 202.4 54.3 209.7C51.3 217 52.1 225.5 56.5 232.2L114.7 320L56.5 407.8C52.1 414.5 51.3 422.9 54.3 430.3C57.3 437.7 63.9 443.1 71.7 444.6L175 465.4L195.9 568.7C197.5 576.5 202.9 583.1 210.2 586.1C217.5 589.1 226 588.3 232.7 583.9L320.5 525.7L408.3 583.9C415 588.3 423.4 589.1 430.8 586.1C438.2 583.1 443.6 576.5 445.1 568.7L466 465.5L569.2 444.6C577 443 583.6 437.6 586.6 430.3C589.6 423 588.8 414.5 584.4 407.8L526.2 320L584.4 232.2C588.8 225.5 589.6 217.1 586.6 209.7C583.6 202.3 577 196.9 569.2 195.4L465.8 174.6L445 71.3C443.4 63.5 438 57 430.6 53.9C423.2 50.8 414.8 51.7 408.1 56.1L320.4 114.3L232.6 56.1zM218.9 199.7L235.9 115.8L307.2 163.1C315.2 168.4 325.7 168.4 333.7 163.1L405 115.8L422 199.7C423.9 209.2 431.3 216.5 440.8 218.5L524.7 235.5L477.4 306.8C472.1 314.8 472.1 325.3 477.4 333.3L524.7 404.6L440.8 421.6C431.3 423.5 423.9 430.9 422 440.4L405 524.3L333.7 477C325.7 471.7 315.2 471.7 307.2 477L235.9 524.3L218.9 440.4C217 430.9 209.6 423.5 200.1 421.6L116.2 404.6L163.5 333.3C168.8 325.3 168.8 314.8 163.5 306.8L116.2 235.5L200.1 218.5C209.6 216.6 216.9 209.2 218.9 199.7zM271.6 320C271.6 293.3 293.3 271.6 320 271.6C346.7 271.6 368.4 293.3 368.4 320C368.4 346.7 346.7 368.4 320 368.4C293.3 368.4 271.6 346.7 271.6 320zM416.4 320C416.4 266.8 373.2 223.6 320 223.6C266.8 223.6 223.6 266.8 223.6 320C223.6 373.2 266.8 416.4 320 416.4C373.2 416.4 416.4 373.2 416.4 320z"/></svg>
                        <svg class="moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576C388.8 576 451.3 548.8 497.3 504.6C504.6 497.6 506.7 486.7 502.6 477.5C498.5 468.3 488.9 462.6 478.8 463.4C473.9 463.8 469 464 464 464C362.4 464 280 381.6 280 280C280 207.9 321.5 145.4 382.1 115.2C391.2 110.7 396.4 100.9 395.2 90.8C394 80.7 386.6 72.5 376.7 70.3C358.4 66.2 339.4 64 320 64z"/></svg>
                    </button>
                    <button class="nav-menu-btn">
                        <svg class="menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M96 160C96 142.3 110.3 128 128 128L512 128C529.7 128 544 142.3 544 160C544 177.7 529.7 192 512 192L128 192C110.3 192 96 177.7 96 160zM96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320zM544 480C544 497.7 529.7 512 512 512L128 512C110.3 512 96 497.7 96 480C96 462.3 110.3 448 128 448L512 448C529.7 448 544 462.3 544 480z"/></svg>
                    </button>
                </div>
                <div class="flex-wrapper">
                    <ul class="desktop-nav">
                        <li class="social-btn-facebook">
                            <a href="https://www.facebook.com/purbadhala" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 440 146.7 540.8 258.2 568.5L258.2 398.2L205.4 398.2L205.4 320L258.2 320L258.2 286.3C258.2 199.2 297.6 158.8 383.2 158.8C399.4 158.8 427.4 162 438.9 165.2L438.9 236C432.9 235.4 422.4 235 409.3 235C367.3 235 351.1 250.9 351.1 292.2L351.1 320L434.7 320L420.3 398.2L351 398.2L351 574.1C477.8 558.8 576 450.9 576 320z"/></svg>
                            </a>
                        </li>
                        <li class="social-btn-youtube">
                            <a href="https://www.youtube.com/@purbadhala" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M581.7 188.1C575.5 164.4 556.9 145.8 533.4 139.5C490.9 128 320.1 128 320.1 128C320.1 128 149.3 128 106.7 139.5C83.2 145.8 64.7 164.4 58.4 188.1C47 231 47 320.4 47 320.4C47 320.4 47 409.8 58.4 452.7C64.7 476.3 83.2 494.2 106.7 500.5C149.3 512 320.1 512 320.1 512C320.1 512 490.9 512 533.5 500.5C557 494.2 575.5 476.3 581.8 452.7C593.2 409.8 593.2 320.4 593.2 320.4C593.2 320.4 593.2 231 581.8 188.1zM264.2 401.6L264.2 239.2L406.9 320.4L264.2 401.6z"/></svg>
                            </a>
                        </li>
                        <li class="social-btn-whatsapp">
                            <a href="https://wa.me/8801714-467788" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg>
                            </a>
                    </ul>
                    <button class="theme-btn theme-btn-desktop light">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path d="M232.6 56.1C225.9 51.7 217.5 50.9 210.1 53.9C202.7 56.9 197.4 63.5 195.9 71.3L175 174.6L71.7 195.4C63.9 197 57.3 202.4 54.3 209.7C51.3 217 52.1 225.5 56.5 232.2L114.7 320L56.5 407.8C52.1 414.5 51.3 422.9 54.3 430.3C57.3 437.7 63.9 443.1 71.7 444.6L175 465.4L195.9 568.7C197.5 576.5 202.9 583.1 210.2 586.1C217.5 589.1 226 588.3 232.7 583.9L320.5 525.7L408.3 583.9C415 588.3 423.4 589.1 430.8 586.1C438.2 583.1 443.6 576.5 445.1 568.7L466 465.5L569.2 444.6C577 443 583.6 437.6 586.6 430.3C589.6 423 588.8 414.5 584.4 407.8L526.2 320L584.4 232.2C588.8 225.5 589.6 217.1 586.6 209.7C583.6 202.3 577 196.9 569.2 195.4L465.8 174.6L445 71.3C443.4 63.5 438 57 430.6 53.9C423.2 50.8 414.8 51.7 408.1 56.1L320.4 114.3L232.6 56.1zM218.9 199.7L235.9 115.8L307.2 163.1C315.2 168.4 325.7 168.4 333.7 163.1L405 115.8L422 199.7C423.9 209.2 431.3 216.5 440.8 218.5L524.7 235.5L477.4 306.8C472.1 314.8 472.1 325.3 477.4 333.3L524.7 404.6L440.8 421.6C431.3 423.5 423.9 430.9 422 440.4L405 524.3L333.7 477C325.7 471.7 315.2 471.7 307.2 477L235.9 524.3L218.9 440.4C217 430.9 209.6 423.5 200.1 421.6L116.2 404.6L163.5 333.3C168.8 325.3 168.8 314.8 163.5 306.8L116.2 235.5L200.1 218.5C209.6 216.6 216.9 209.2 218.9 199.7zM271.6 320C271.6 293.3 293.3 271.6 320 271.6C346.7 271.6 368.4 293.3 368.4 320C368.4 346.7 346.7 368.4 320 368.4C293.3 368.4 271.6 346.7 271.6 320zM416.4 320C416.4 266.8 373.2 223.6 320 223.6C266.8 223.6 223.6 266.8 223.6 320C223.6 373.2 266.8 416.4 320 416.4C373.2 416.4 416.4 373.2 416.4 320z"/></svg>
                        <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576C388.8 576 451.3 548.8 497.3 504.6C504.6 497.6 506.7 486.7 502.6 477.5C498.5 468.3 488.9 462.6 478.8 463.4C473.9 463.8 469 464 464 464C362.4 464 280 381.6 280 280C280 207.9 321.5 145.4 382.1 115.2C391.2 110.7 396.4 100.9 395.2 90.8C394 80.7 386.6 72.5 376.7 70.3C358.4 66.2 339.4 64 320 64z"/></svg>
                    </button>
                </div>
                <div class="mobile-nav">
                    <button class="nav-close-btn">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z"/></svg>
                    </button>
                    <div class="wraper">
                        <p class="h3 nav-title">Connect with us</p>
                        <ul class="social-mobile">
                        <li class="social-btn-facebook">
                            <a href="https://www.facebook.com/purbadhala" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 440 146.7 540.8 258.2 568.5L258.2 398.2L205.4 398.2L205.4 320L258.2 320L258.2 286.3C258.2 199.2 297.6 158.8 383.2 158.8C399.4 158.8 427.4 162 438.9 165.2L438.9 236C432.9 235.4 422.4 235 409.3 235C367.3 235 351.1 250.9 351.1 292.2L351.1 320L434.7 320L420.3 398.2L351 398.2L351 574.1C477.8 558.8 576 450.9 576 320z"/></svg>
                            </a>
                        </li>
                        <li class="social-btn-youtube">
                            <a href="https://www.youtube.com/@purbadhala" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M581.7 188.1C575.5 164.4 556.9 145.8 533.4 139.5C490.9 128 320.1 128 320.1 128C320.1 128 149.3 128 106.7 139.5C83.2 145.8 64.7 164.4 58.4 188.1C47 231 47 320.4 47 320.4C47 320.4 47 409.8 58.4 452.7C64.7 476.3 83.2 494.2 106.7 500.5C149.3 512 320.1 512 320.1 512C320.1 512 490.9 512 533.5 500.5C557 494.2 575.5 476.3 581.8 452.7C593.2 409.8 593.2 320.4 593.2 320.4C593.2 320.4 593.2 231 581.8 188.1zM264.2 401.6L264.2 239.2L406.9 320.4L264.2 401.6z"/></svg>
                            </a>
                        </li>
                        <li class="social-btn-whatsapp">
                            <a href="https://wa.me/8801714-467788" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg>
                            </a>
                        </ul>
                    </div>
                    <div class="">
                        <p class="h3 nav-title">Categories</p>
                        <ul>
                            <li class="nav-item">
                                <a href="/" class="nav-link">প্রচ্ছদ</a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">রাজনীতি</a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">সারাদেশ</a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">বিনোদন</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <hr class="container nav-separator">        
        </div>
    </header>
        <div class="categories container" id="category">
            <ul class="category-list">
                <li><a href="/" >প্রচ্ছদ</a></li>
                <li><a href="/" >রাজনীতি</a></li>
                <li><a href="/" >শিক্ষা</a></li>
                <li><a href="/" >সারাদেশ</a></li>
                <li><a href="/" >বিনোদন</a></li>
            </ul>
        </div>
    <main>
        @yield('content')
    </main>
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="wrapper">
                <a href="/" class="footer-logo" >
                    <span class="main-logo"><span style="color: green;">পূর্বধলার</span> <span style="color:red;">দর্পন</span></span>
                </a>
                <p class="footer-text">Learn about webdevelopment,backend development, Database etc.</p>
            </div>
            <div class="wrapper">
                <p class="footer-tittle">Quick Links</p>
                <ul class="footer-links">
                    <li><a href="#" class="footer-link">Home</a></li>
                    <li><a href="#" class="footer-link">About</a></li>
                    <li><a href="#" class="footer-link">Blog</a></li>
                    <li><a href="#" class="footer-link">Contact</a></li>
                </ul>
            </div>
            <!-- Newsletter section -->
            <div class="wrapper">
                <p class="footer-tittle">Newsletter</p>
                    <input type="email" class="newsletter-input" placeholder="Enter Email" required>
                    <button type="submit" class="btn-newsletter">Subscribe</button>
            </div>
        </div>
        <p class="copyright">
            &copy; copyright 2019 <a href="#">Purbadhalar Darpan</a>. Developed by <a href="#">Rafi</a>
        </p>
    </footer>
@vite(['resources/js/script.js'])
@livewireScripts
</body>
</html>