<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigator</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link rel="stylesheet"  href="all.css" />
</head>
<body>
    <nav class="navbar">
        <div class="nav-left">

            <a href="#catalog"  onclick="toggleSidebar()" class="nav-item">
                <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="20" height="20"><path d="M7,6H23a1,1,0,0,0,0-2H7A1,1,0,0,0,7,6Z"/><path d="M23,11H7a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z"/><path d="M23,18H7a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z"/><circle cx="2" cy="5" r="2"/><circle cx="2" cy="12" r="2"/><circle cx="2" cy="19" r="2"/></svg>
            </a>
            <a href="index.php" class="nav-item active">
            <svg id="Layer_1" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m19 3.022c0-.008 0-.014 0-.022v-2a1 1 0 0 0 -2 0v1.1a5 5 0 0 0 -1-.1h-1v-1a1 1 0 0 0 -2 0v1h-2v-1a1 1 0 0 0 -2 0v1h-1a5 5 0 0 0 -1 .1v-1.1a1 1 0 0 0 -2 0v2 .022a4.979 4.979 0 0 0 -2 3.978v12a5.006 5.006 0 0 0 5 5h8a5.006 5.006 0 0 0 5-5v-12a4.979 4.979 0 0 0 -2-3.978zm0 15.978a3 3 0 0 1 -3 3h-8a3 3 0 0 1 -3-3v-12a3 3 0 0 1 3-3h8a3 3 0 0 1 3 3zm-2-11a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 1 1zm0 4a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 1 1zm-4 4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 0-2h4a1 1 0 0 1 1 1z"/></svg>

            </a>
            <a href="#search" class="nav-item">
            <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="20" height="20"><path d="M23.707,22.293l-5.969-5.969a10.016,10.016,0,1,0-1.414,1.414l5.969,5.969a1,1,0,0,0,1.414-1.414ZM10,18a8,8,0,1,1,8-8A8.009,8.009,0,0,1,10,18Z"/></svg>
            
            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
</svg> -->
            </a>
        </div>

        <!-- <div class="nav-center">
            <a href="#" class="nav-logo">
                <img src="/Product Pictures/RVA.png" alt="Logo" style="height: 50px; opacity: 0.8;">
            </a>
        </div> -->


        <div class="nav-right">
            <a href="#support" class="nav-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><g id="_01_align_center" data-name="01 align center"><path d="M21,12.424V11A9,9,0,0,0,3,11v1.424A5,5,0,0,0,5,22H7V12H5V11a7,7,0,0,1,14,0v1H17v8H13v2h6a5,5,0,0,0,2-9.576ZM5,20a3,3,0,0,1,0-6Zm14,0V14a3,3,0,0,1,0,6Z"/></g></svg>
                
            </a>
            <a href="account.php" class="nav-item">
            <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="20" height="20"><path d="M12,12A6,6,0,1,0,6,6,6.006,6.006,0,0,0,12,12ZM12,2A4,4,0,1,1,8,6,4,4,0,0,1,12,2Z"/><path d="M12,14a9.01,9.01,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.01,9.01,0,0,0,12,14Z"/></svg>
                
            </a>
            <div class="nav-right">
                <a href="#" class="nav-item cart">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20"><path d="M18,0H8c-2.05,0-3.81,1.24-4.58,3h-1.42c-.55,0-1,.45-1,1s.45,1,1,1h1v2h-1c-.55,0-1,.45-1,1s.45,1,1,1h1v2h-1c-.55,0-1,.45-1,1s.45,1,1,1h1v2h-1c-.55,0-1,.45-1,1s.45,1,1,1h1v2h-1c-.55,0-1,.45-1,1s.45,1,1,1h1.42c.77,1.76,2.54,3,4.58,3h10c2.76,0,5-2.24,5-5V5c0-2.76-2.24-5-5-5ZM5,19V5c0-1.65,1.35-3,3-3V22c-1.65,0-3-1.35-3-3Zm16,0c0,1.65-1.35,3-3,3H10V2h8c1.65,0,3,1.35,3,3v14Z"/></svg>

                </a>
            </div>
        </div>
    </nav>
    <script>
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > 0) {
            // User has scrolled down
            navbar.classList.add('shadow');
        } else {
            // User is at the top of the page
            navbar.classList.remove('shadow');
        }
    });
</script>