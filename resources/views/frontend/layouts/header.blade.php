<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{url('/')}}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Mentor</h1>
      </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{url('/')}}" class="menu-link">Home</a></li>
                <li><a href="{{url('/about')}}" class="menu-link">About</a></li>
                <li><a href="{{url('/course')}}" class="menu-link">Courses</a></li>
                <li><a href="{{url('/trainer')}}" class="menu-link">Trainers</a></li>
                <li><a href="{{url('/event')}}" class="menu-link">Events</a></li>
                <li><a href="{{url('/pricing')}}" class="menu-link">Pricing</a></li>
                <li class="dropdown"><a href="#" class="menu-link"><span>Dropdown</span></a>
                    <ul>
                        <li><a href="#" class="menu-link">Dropdown 1</a></li>
                        <li><a href="#" class="menu-link">Dropdown 2</a></li>
                        <li><a href="#" class="menu-link">Dropdown 3</a></li>
                        <li><a href="#" class="menu-link">Dropdown 4</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/contact')}}" class="menu-link">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      <a class="btn-getstarted" href="{{url('/register')}}">Get Started</a>

    </div>
  </header>
<style>
    /* Style for navigation items */
    .navmenu ul {
        list-style: none;
        display: flex;
        gap: 20px;
        margin: 0;
        padding: 0;
    }

    .navmenu li {
        position: relative;
        padding: 0;
    }

    /* Link styles */
    .navmenu .menu-link {
        color: #000;
        text-decoration: none;
        padding: 10px 15px;
        transition: color 0.3s;
    }

    .navmenu .menu-link:hover {
        color: var(--accent-color); /* Change active link color */
        font-weight: bold;
    }

    /* Highlight bar using ::before */
    .navmenu li::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 3px;
        background-color: var(--accent-color);
        transition: width 0.3s;
    }

    .navmenu li:hover::before,
    .navmenu li .menu-link.active::before {
        width: 100%; /* Highlight bar expands fully */
    }

    /* Active state for menu items */
    .navmenu .menu-link.active {
        color: var(--accent-color); /* Change active link color */
        font-weight: bold;
    }


</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuLinks = document.querySelectorAll('.menu-link');

        // Function to set active link
        const setActiveLink = (id) => {
            menuLinks.forEach(link => link.classList.remove('active'));
            const activeLink = document.querySelector(`.menu-link[href="${id}"]`);
            if (activeLink) {
                activeLink.classList.add('active');
            }
        };

        // Check localStorage for active link
        const savedLink = localStorage.getItem('activeMenuLink');
        if (savedLink) {
            setActiveLink(savedLink);
        }

        // Add click event listener to all menu links
        menuLinks.forEach(link => {
            link.addEventListener('click', (event) => {
                const id = link.getAttribute('href');
                localStorage.setItem('activeMenuLink', id); // Save the clicked link to localStorage
                setActiveLink(id); // Set it as active
            });
        });
    });


</script>
