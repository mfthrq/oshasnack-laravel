<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Pelanggan</title>

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logo_oshasnack.jpg') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">

    <script>
        // Render localStorage JS:
        if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
        if (localStorage.layout) document.documentElement.setAttribute("data-nav", localStorage.navbar);
        if (localStorage.layout) document.documentElement.setAttribute("dir", localStorage.layout);
    </script>
</head>

<body class="geex-dashboard">
    <header class="geex-header">
        <div class="geex-header__wrapper">
            <div class="geex-header__logo-wrapper">
                <a href="/admin" class="geex-header__logo">
                    <img class="logo-lite" src="assets/img/logo-dark.svg" alt="Header logo" />
                    <img class="logo-dark" src="assets/img/logo-lite.svg" alt="Header logo" />
                </a>
            </div>
            <nav class="geex-header__menu-wrapper">
                <ul class="geex-header__menu">
                    <li class="geex-header__menu__item has-children">
                        <a href="#" class="geex-header__menu__link">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1139_9707)">
                                    <path
                                        d="M21.1943 8.31319L14.2413 1.35936C13.3808 0.501345 12.2152 0.0195312 11 0.0195312C9.78482 0.0195312 8.61921 0.501345 7.75868 1.35936L0.805761 8.31319C0.549484 8.56782 0.3463 8.8708 0.207987 9.20454C0.0696733 9.53829 -0.00101787 9.89617 1.10729e-05 10.2574V19.2564C1.10729e-05 19.9857 0.289742 20.6852 0.805467 21.2009C1.32119 21.7166 2.02067 22.0064 2.75001 22.0064H19.25C19.9794 22.0064 20.6788 21.7166 21.1946 21.2009C21.7103 20.6852 22 19.9857 22 19.2564V10.2574C22.001 9.89617 21.9303 9.53829 21.792 9.20454C21.6537 8.8708 21.4505 8.56782 21.1943 8.31319ZM13.75 20.173H8.25001V16.5669C8.25001 15.8375 8.53974 15.138 9.05547 14.6223C9.57119 14.1066 10.2707 13.8169 11 13.8169C11.7294 13.8169 12.4288 14.1066 12.9446 14.6223C13.4603 15.138 13.75 15.8375 13.75 16.5669V20.173ZM20.1667 19.2564C20.1667 19.4995 20.0701 19.7326 19.8982 19.9045C19.7263 20.0764 19.4931 20.173 19.25 20.173H15.5833V16.5669C15.5833 15.3513 15.1005 14.1855 14.2409 13.3259C13.3814 12.4664 12.2156 11.9835 11 11.9835C9.78444 11.9835 8.61865 12.4664 7.75911 13.3259C6.89956 14.1855 6.41668 15.3513 6.41668 16.5669V20.173H2.75001C2.5069 20.173 2.27374 20.0764 2.10183 19.9045C1.92992 19.7326 1.83334 19.4995 1.83334 19.2564V10.2574C1.83419 10.0145 1.93068 9.78168 2.10193 9.60935L9.05485 2.65827C9.57157 2.14396 10.271 1.85522 11 1.85522C11.7291 1.85522 12.4285 2.14396 12.9452 2.65827L19.8981 9.61211C20.0687 9.78375 20.1651 10.0155 20.1667 10.2574V19.2564Z"
                                        fill="#B9BBBD" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1139_9707">
                                        <rect width="22" height="22" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>Demo</span>
                        </a>
                        <ul class="geex-header__submenu">
                            <li class="geex-header__menu__item">
                                <a href="/admin" class="geex-header__menu__link">Server Management</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="index-2.html" class="geex-header__menu__link">Banking</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="index-3.html" class="geex-header__menu__link">Crypto</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="index-4.html" class="geex-header__menu__link">Invoicing</a>
                            </li>
                        </ul>
                    </li>

                    <li class="geex-header__menu__item has-children">
                        <a href="#" class="geex-header__menu__link">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1139_9709)">
                                    <path
                                        d="M1.83333 10.0833H11.9167C12.4029 10.0833 12.8692 9.89018 13.213 9.54636C13.5568 9.20255 13.75 8.73623 13.75 8.25V1.83333C13.75 1.3471 13.5568 0.880788 13.213 0.536971C12.8692 0.193154 12.4029 0 11.9167 0L1.83333 0C1.3471 0 0.880788 0.193154 0.536971 0.536971C0.193154 0.880788 0 1.3471 0 1.83333L0 8.25C0 8.73623 0.193154 9.20255 0.536971 9.54636C0.880788 9.89018 1.3471 10.0833 1.83333 10.0833ZM1.83333 1.83333H11.9167V8.25H1.83333V1.83333Z"
                                        fill="#B9BBBD" />
                                    <path
                                        d="M20.1673 0H17.4173C16.9311 0 16.4648 0.193154 16.121 0.536971C15.7771 0.880788 15.584 1.3471 15.584 1.83333V8.25C15.584 8.73623 15.7771 9.20255 16.121 9.54636C16.4648 9.89018 16.9311 10.0833 17.4173 10.0833H20.1673C20.6535 10.0833 21.1199 9.89018 21.4637 9.54636C21.8075 9.20255 22.0007 8.73623 22.0007 8.25V1.83333C22.0007 1.3471 21.8075 0.880788 21.4637 0.536971C21.1199 0.193154 20.6535 0 20.1673 0V0ZM20.1673 8.25H17.4173V1.83333H20.1673V8.25Z"
                                        fill="#B9BBBD" />
                                    <path
                                        d="M4.58333 11.917H1.83333C1.3471 11.917 0.880788 12.1101 0.536971 12.454C0.193154 12.7978 0 13.2641 0 13.7503L0 20.167C0 20.6532 0.193154 21.1195 0.536971 21.4633C0.880788 21.8072 1.3471 22.0003 1.83333 22.0003H4.58333C5.06956 22.0003 5.53588 21.8072 5.8797 21.4633C6.22351 21.1195 6.41667 20.6532 6.41667 20.167V13.7503C6.41667 13.2641 6.22351 12.7978 5.8797 12.454C5.53588 12.1101 5.06956 11.917 4.58333 11.917ZM4.58333 20.167H1.83333V13.7503H4.58333V20.167Z"
                                        fill="#B9BBBD" />
                                    <path
                                        d="M20.1667 11.917H10.0833C9.5971 11.917 9.13079 12.1101 8.78697 12.454C8.44315 12.7978 8.25 13.2641 8.25 13.7503V20.167C8.25 20.6532 8.44315 21.1195 8.78697 21.4633C9.13079 21.8072 9.5971 22.0003 10.0833 22.0003H20.1667C20.6529 22.0003 21.1192 21.8072 21.463 21.4633C21.8068 21.1195 22 20.6532 22 20.167V13.7503C22 13.2641 21.8068 12.7978 21.463 12.454C21.1192 12.1101 20.6529 11.917 20.1667 11.917ZM20.1667 20.167H10.0833V13.7503H20.1667V20.167Z"
                                        fill="#B9BBBD" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1139_9709">
                                        <rect width="22" height="22" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>Layout</span>
                        </a>
                        <ul class="geex-header__submenu">
                            <li class="geex-header__menu__item">
                                <a href="#" class="geex-header__menu__link geex-customizer__btn--top">Top Menu</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="#" class="geex-header__menu__link geex-customizer__btn--side">Side
                                    Menu</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="#" class="geex-header__menu__link geex-customizer__btn--light">Light
                                    Demo</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="#" class="geex-header__menu__link geex-customizer__btn--dark">Dark
                                    Demo</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="#" class="geex-header__menu__link geex-customizer__btn--ltr">LTR Demo</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="#" class="geex-header__menu__link geex-customizer__btn--rtl">RTL Demo</a>
                            </li>
                        </ul>
                    </li>

                    <li class="geex-header__menu__item has-children">
                        <a href="#" class="geex-header__menu__link">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1139_9714)">
                                    <path
                                        d="M6.41667 0H3.66667C2.69421 0 1.76158 0.386308 1.07394 1.07394C0.386308 1.76158 0 2.69421 0 3.66667L0 6.41667C0 7.38913 0.386308 8.32176 1.07394 9.00939C1.76158 9.69702 2.69421 10.0833 3.66667 10.0833H6.41667C7.38913 10.0833 8.32176 9.69702 9.00939 9.00939C9.69702 8.32176 10.0833 7.38913 10.0833 6.41667V3.66667C10.0833 2.69421 9.69702 1.76158 9.00939 1.07394C8.32176 0.386308 7.38913 0 6.41667 0V0ZM8.25 6.41667C8.25 6.9029 8.05684 7.36921 7.71303 7.71303C7.36921 8.05684 6.9029 8.25 6.41667 8.25H3.66667C3.18044 8.25 2.71412 8.05684 2.3703 7.71303C2.02649 7.36921 1.83333 6.9029 1.83333 6.41667V3.66667C1.83333 3.18044 2.02649 2.71412 2.3703 2.3703C2.71412 2.02649 3.18044 1.83333 3.66667 1.83333H6.41667C6.9029 1.83333 7.36921 2.02649 7.71303 2.3703C8.05684 2.71412 8.25 3.18044 8.25 3.66667V6.41667Z"
                                        fill="#B9BBBD" />
                                    <path
                                        d="M18.3327 0H15.5827C14.6102 0 13.6776 0.386309 12.99 1.07394C12.3023 1.76158 11.916 2.69421 11.916 3.66667V6.41667C11.916 7.38913 12.3023 8.32176 12.99 9.0094C13.6776 9.69703 14.6102 10.0833 15.5827 10.0833H18.3327C19.3051 10.0833 20.2378 9.69703 20.9254 9.0094C21.613 8.32176 21.9993 7.38913 21.9993 6.41667V3.66667C21.9993 2.69421 21.613 1.76158 20.9254 1.07394C20.2378 0.386309 19.3051 0 18.3327 0V0ZM20.166 6.41667C20.166 6.9029 19.9728 7.36922 19.629 7.71303C19.2852 8.05685 18.8189 8.25 18.3327 8.25H15.5827C15.0964 8.25 14.6301 8.05685 14.2863 7.71303C13.9425 7.36922 13.7493 6.9029 13.7493 6.41667V3.66667C13.7493 3.18044 13.9425 2.71412 14.2863 2.37031C14.6301 2.02649 15.0964 1.83333 15.5827 1.83333H18.3327C18.8189 1.83333 19.2852 2.02649 19.629 2.37031C19.9728 2.71412 20.166 3.18044 20.166 3.66667V6.41667Z"
                                        fill="#B9BBBD" />
                                    <path
                                        d="M6.41667 11.9167H3.66667C2.69421 11.9167 1.76158 12.3031 1.07394 12.9907C0.386308 13.6783 0 14.611 0 15.5834L0 18.3334C0 19.3059 0.386308 20.2385 1.07394 20.9262C1.76158 21.6138 2.69421 22.0001 3.66667 22.0001H6.41667C7.38913 22.0001 8.32176 21.6138 9.00939 20.9262C9.69702 20.2385 10.0833 19.3059 10.0833 18.3334V15.5834C10.0833 14.611 9.69702 13.6783 9.00939 12.9907C8.32176 12.3031 7.38913 11.9167 6.41667 11.9167ZM8.25 18.3334C8.25 18.8197 8.05684 19.286 7.71303 19.6298C7.36921 19.9736 6.9029 20.1668 6.41667 20.1668H3.66667C3.18044 20.1668 2.71412 19.9736 2.3703 19.6298C2.02649 19.286 1.83333 18.8197 1.83333 18.3334V15.5834C1.83333 15.0972 2.02649 14.6309 2.3703 14.2871C2.71412 13.9432 3.18044 13.7501 3.66667 13.7501H6.41667C6.9029 13.7501 7.36921 13.9432 7.71303 14.2871C8.05684 14.6309 8.25 15.0972 8.25 15.5834V18.3334Z"
                                        fill="#B9BBBD" />
                                    <path
                                        d="M18.3327 11.9167H15.5827C14.6102 11.9167 13.6776 12.3031 12.99 12.9907C12.3023 13.6783 11.916 14.611 11.916 15.5834V18.3334C11.916 19.3059 12.3023 20.2385 12.99 20.9262C13.6776 21.6138 14.6102 22.0001 15.5827 22.0001H18.3327C19.3051 22.0001 20.2378 21.6138 20.9254 20.9262C21.613 20.2385 21.9993 19.3059 21.9993 18.3334V15.5834C21.9993 14.611 21.613 13.6783 20.9254 12.9907C20.2378 12.3031 19.3051 11.9167 18.3327 11.9167ZM20.166 18.3334C20.166 18.8197 19.9728 19.286 19.629 19.6298C19.2852 19.9736 18.8189 20.1668 18.3327 20.1668H15.5827C15.0964 20.1668 14.6301 19.9736 14.2863 19.6298C13.9425 19.286 13.7493 18.8197 13.7493 18.3334V15.5834C13.7493 15.0972 13.9425 14.6309 14.2863 14.2871C14.6301 13.9432 15.0964 13.7501 15.5827 13.7501H18.3327C18.8189 13.7501 19.2852 13.9432 19.629 14.2871C19.9728 14.6309 20.166 15.0972 20.166 15.5834V18.3334Z"
                                        fill="#B9BBBD" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1139_9714">
                                        <rect width="22" height="22" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>App</span>
                        </a>
                        <ul class="geex-header__submenu">
                            <li class="geex-header__menu__item">
                                <a href="todo.html" class="geex-header__menu__link">Todo</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="chat.html" class="geex-header__menu__link">Chat</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="contact.html" class="geex-header__menu__link">Contact</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="file-manager.html" class="geex-header__menu__link">File Manager</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="calendar.html" class="geex-header__menu__link">Calendar</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="kanban.html" class="geex-header__menu__link">Kanban</a>
                            </li>
                        </ul>
                    </li>

                    <li class="geex-header__menu__item has-children">
                        <a href="#" class="geex-header__menu__link">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1141_9730)">
                                    <path
                                        d="M20.6108 10.0608L10.9996 15.8285L1.3883 10.0608C1.17983 9.93573 0.930209 9.89858 0.694351 9.95755C0.458493 10.0165 0.255718 10.1668 0.130635 10.3752C0.0055526 10.5837 -0.0315922 10.8333 0.0273724 11.0692C0.0863369 11.305 0.236581 11.5078 0.445052 11.6329L10.5284 17.6829C10.671 17.7686 10.8341 17.8138 11.0005 17.8138C11.1668 17.8138 11.33 17.7686 11.4726 17.6829L21.5559 11.6329C21.7644 11.5078 21.9146 11.305 21.9736 11.0692C22.0325 10.8333 21.9954 10.5837 21.8703 10.3752C21.7452 10.1668 21.5424 10.0165 21.3066 9.95755C21.0707 9.89858 20.8211 9.93573 20.6126 10.0608H20.6108Z"
                                        fill="#B9BBBD" />
                                    <path
                                        d="M20.6108 14.2476L10.9995 20.0143L1.3883 14.2476C1.28507 14.1856 1.17066 14.1446 1.05159 14.1269C0.932525 14.1092 0.811133 14.1151 0.694348 14.1443C0.577563 14.1735 0.467672 14.2254 0.37095 14.2971C0.274227 14.3688 0.192567 14.4588 0.130633 14.562C0.0686979 14.6652 0.0277013 14.7796 0.00998337 14.8987C-0.00773452 15.0178 -0.00182666 15.1392 0.0273696 15.256C0.0863342 15.4918 0.236578 15.6946 0.445049 15.8197L10.5284 21.8697C10.671 21.9553 10.8341 22.0006 11.0005 22.0006C11.1668 22.0006 11.33 21.9553 11.4725 21.8697L21.5559 15.8197C21.7644 15.6946 21.9146 15.4918 21.9736 15.256C22.0325 15.0201 21.9954 14.7705 21.8703 14.562C21.7452 14.3535 21.5424 14.2033 21.3066 14.1443C21.0707 14.0854 20.8211 14.1225 20.6126 14.2476H20.6108Z"
                                        fill="#B9BBBD" />
                                    <path
                                        d="M10.9997 13.5424C10.5052 13.5421 10.0201 13.4074 9.59629 13.1528L0.444293 7.66104C0.308762 7.57955 0.19662 7.46437 0.118767 7.32672C0.0409147 7.18906 0 7.0336 0 6.87546C0 6.71731 0.0409147 6.56186 0.118767 6.4242C0.19662 6.28654 0.308762 6.17137 0.444293 6.08987L9.59629 0.598125C10.0201 0.343501 10.5053 0.208984 10.9997 0.208984C11.4942 0.208984 11.9793 0.343501 12.4031 0.598125L21.5551 6.08987C21.6907 6.17137 21.8028 6.28654 21.8807 6.4242C21.9585 6.56186 21.9994 6.71731 21.9994 6.87546C21.9994 7.0336 21.9585 7.18906 21.8807 7.32672C21.8028 7.46437 21.6907 7.57955 21.5551 7.66104L12.4031 13.1528C11.9793 13.4074 11.4942 13.5421 10.9997 13.5424ZM2.69838 6.87546L10.5414 11.5807C10.6799 11.6636 10.8383 11.7073 10.9997 11.7073C11.1611 11.7073 11.3195 11.6636 11.458 11.5807L19.301 6.87546L11.458 2.17021C11.3195 2.08735 11.1611 2.04359 10.9997 2.04359C10.8383 2.04359 10.6799 2.08735 10.5414 2.17021L2.69838 6.87546Z"
                                        fill="#B9BBBD" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1141_9730">
                                        <rect width="22" height="22" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>Features</span>
                        </a>
                        <ul class="geex-header__submenu">
                            <li class="geex-header__menu__item">
                                <a href="chart.html" class="geex-header__menu__link">Chart</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="badge.html" class="geex-header__menu__link">Badge</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="button.html" class="geex-header__menu__link">Button</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="color.html" class="geex-header__menu__link">Color</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="form.html" class="geex-header__menu__link">Form</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="table.html" class="geex-header__menu__link">Table</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="icon.html" class="geex-header__menu__link">Icon</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="navigation.html" class="geex-header__menu__link">Navigation</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="typography.html" class="geex-header__menu__link">Typography</a>
                            </li>
                        </ul>
                    </li>

                    <li class="geex-header__menu__item has-children">
                        <a href="#" class="geex-header__menu__link">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1141_9723)">
                                    <path
                                        d="M17.4167 0.916748H4.58333C3.3682 0.918204 2.20326 1.40156 1.34403 2.26078C0.484808 3.12001 0.00145554 4.28495 0 5.50008L0 16.5001C0.00145554 17.7152 0.484808 18.8802 1.34403 19.7394C2.20326 20.5986 3.3682 21.082 4.58333 21.0834H17.4167C18.6318 21.082 19.7967 20.5986 20.656 19.7394C21.5152 18.8802 21.9985 17.7152 22 16.5001V5.50008C21.9985 4.28495 21.5152 3.12001 20.656 2.26078C19.7967 1.40156 18.6318 0.918204 17.4167 0.916748ZM4.58333 2.75008H17.4167C18.146 2.75008 18.8455 3.03981 19.3612 3.55554C19.8769 4.07126 20.1667 4.77074 20.1667 5.50008V6.41675H1.83333V5.50008C1.83333 4.77074 2.12306 4.07126 2.63879 3.55554C3.15451 3.03981 3.85399 2.75008 4.58333 2.75008ZM17.4167 19.2501H4.58333C3.85399 19.2501 3.15451 18.9604 2.63879 18.4446C2.12306 17.9289 1.83333 17.2294 1.83333 16.5001V8.25008H20.1667V16.5001C20.1667 17.2294 19.8769 17.9289 19.3612 18.4446C18.8455 18.9604 18.146 19.2501 17.4167 19.2501ZM17.4167 11.9167C17.4167 12.1599 17.3201 12.393 17.1482 12.5649C16.9763 12.7368 16.7431 12.8334 16.5 12.8334H5.5C5.25689 12.8334 5.02373 12.7368 4.85182 12.5649C4.67991 12.393 4.58333 12.1599 4.58333 11.9167C4.58333 11.6736 4.67991 11.4405 4.85182 11.2686C5.02373 11.0967 5.25689 11.0001 5.5 11.0001H16.5C16.7431 11.0001 16.9763 11.0967 17.1482 11.2686C17.3201 11.4405 17.4167 11.6736 17.4167 11.9167ZM13.75 15.5834C13.75 15.8265 13.6534 16.0597 13.4815 16.2316C13.3096 16.4035 13.0764 16.5001 12.8333 16.5001H5.5C5.25689 16.5001 5.02373 16.4035 4.85182 16.2316C4.67991 16.0597 4.58333 15.8265 4.58333 15.5834C4.58333 15.3403 4.67991 15.1071 4.85182 14.9352C5.02373 14.7633 5.25689 14.6667 5.5 14.6667H12.8333C13.0764 14.6667 13.3096 14.7633 13.4815 14.9352C13.6534 15.1071 13.75 15.3403 13.75 15.5834ZM2.75 4.58342C2.75 4.40212 2.80376 4.22489 2.90449 4.07414C3.00521 3.9234 3.14837 3.80591 3.31587 3.73653C3.48337 3.66715 3.66768 3.64899 3.8455 3.68436C4.02332 3.71973 4.18665 3.80704 4.31485 3.93523C4.44305 4.06343 4.53035 4.22677 4.56572 4.40458C4.60109 4.5824 4.58294 4.76671 4.51356 4.93421C4.44418 5.10171 4.32668 5.24487 4.17594 5.3456C4.02519 5.44632 3.84797 5.50008 3.66667 5.50008C3.42355 5.50008 3.19039 5.4035 3.01849 5.2316C2.84658 5.05969 2.75 4.82653 2.75 4.58342ZM5.5 4.58342C5.5 4.40212 5.55376 4.22489 5.65449 4.07414C5.75521 3.9234 5.89838 3.80591 6.06587 3.73653C6.23337 3.66715 6.41768 3.64899 6.5955 3.68436C6.77332 3.71973 6.93665 3.80704 7.06485 3.93523C7.19305 4.06343 7.28035 4.22677 7.31572 4.40458C7.35109 4.5824 7.33294 4.76671 7.26356 4.93421C7.19418 5.10171 7.07668 5.24487 6.92594 5.3456C6.77519 5.44632 6.59797 5.50008 6.41667 5.50008C6.17355 5.50008 5.94039 5.4035 5.76849 5.2316C5.59658 5.05969 5.5 4.82653 5.5 4.58342ZM8.25 4.58342C8.25 4.40212 8.30376 4.22489 8.40449 4.07414C8.50521 3.9234 8.64837 3.80591 8.81587 3.73653C8.98337 3.66715 9.16768 3.64899 9.3455 3.68436C9.52332 3.71973 9.68665 3.80704 9.81485 3.93523C9.94305 4.06343 10.0304 4.22677 10.0657 4.40458C10.1011 4.5824 10.0829 4.76671 10.0136 4.93421C9.94418 5.10171 9.82668 5.24487 9.67594 5.3456C9.5252 5.44632 9.34797 5.50008 9.16667 5.50008C8.92355 5.50008 8.69039 5.4035 8.51849 5.2316C8.34658 5.05969 8.25 4.82653 8.25 4.58342Z"
                                        fill="#B9BBBD" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1141_9723">
                                        <rect width="22" height="22" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>Pages</span>
                        </a>
                        <ul class="geex-header__submenu">
                            <li class="geex-header__menu__item">
                                <a href="blog.html" class="geex-header__menu__link">Blog</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="faq.html" class="geex-header__menu__link">Faq</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="pricing.html" class="geex-header__menu__link">Pricing</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="testimonial.html" class="geex-header__menu__link">Testimonial</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="terms.html" class="geex-header__menu__link">Terms & Conditions</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="signin.html" class="geex-header__menu__link">Sign In</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="signup.html" class="geex-header__menu__link">Sign Up</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="forgot-password.html" class="geex-header__menu__link">Forget Password</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="verification.html" class="geex-header__menu__link">Two Step Verification</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="error.html" class="geex-header__menu__link">Error</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="coming-soon.html" class="geex-header__menu__link">Coming Soon</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="maintenance.html" class="geex-header__menu__link">Maintenance</a>
                            </li>
                            <li class="geex-header__menu__item">
                                <a href="blank.html" class="geex-header__menu__link">Blank Page</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="geex-header__action">
                <div class="geex-header__action__item">
                    <button class="geex-btn geex-btn__customizer">
                        <i class="uil uil-pen"></i>
                        <span>Customizer</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main class="geex-main-content">
        @include('layouts.sidebar')

        <div class="geex-content">
            <div class="geex-content__header">
                <div class="geex-content__header__content">
                    <h2 class="geex-content__header__title">Data Pelanggan</h2>
                </div>

                @include('layouts.header')
            </div>

            <div class="d-flex justify-content-end">
                <button class="mb-3 geex-btn geex-btn--primary" data-bs-toggle="modal" data-bs-target="#formModal">
                    <i class="uil-plus"></i> Tambah Data
                </button>
            </div>

            <div class="geex-content__section geex-content__form table-responsive">
                <table class="table-reviews-geex-1">
                    <thead>
                        <tr style="width: 100%">
                            <th style="width: 20%">No</th>
                            <th style="width: 20%">Email</th>
                            <th style="width: 20%">Username</th>
                            <th style="width: 20%">No Telp</th>
                            <th style="width: 20%">Alamat</th>
                            <th style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($pelanggans->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center">Data tidak ada.</td>
                            </tr>
                        @else
                            @foreach ($pelanggans as $index => $pelanggan)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $pelanggan->email }}</td>
                                    <td>{{ $pelanggan->username }}</td>
                                    <td>{{ $pelanggan->no_telp }}</td>
                                    <td>{{ $pelanggan->alamat }}</td>
                                    <td>
                                        <div class="d-flex justify-content-end">
                                            <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}" method="POST" onsubmit="return confirmDelete();">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="geex-btn geex-btn--danger"> Hapus</button>
                                            </form>
                                            <button class="ms-2 geex-btn edit-btn" data-bs-toggle="modal" data-bs-target="#formModalEdit" 
                                            data-id="{{ $pelanggan->id }}" 
                                            data-email="{{ $pelanggan->email }}" 
                                            data-username="{{ $pelanggan->username }}" 
                                            data-no_telp="{{ $pelanggan->no_telp }}" 
                                            data-alamat="{{ $pelanggan->alamat }}" 
                                            style="background-color: #FEC10F;"> 
                                                Edit
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>            
        </div>
    </main>

    <script src="{{ asset('assets/vendor/js/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/jquery/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.6.6/dragula.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- endinject-->
    @if (session('success'))
        <script>
            Swal.fire("Berhasil!", "{{ session('success') }}", "success");
        </script>
    @endif

    <script>
        function confirmDelete() {
            return confirm('Yakin ingin menghapus data?');
        }
    </script>
</body>

<!-- Modal Insert -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="formModalLabel">Tambah Data</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form untuk input data pelanggan -->
                <form action="{{ route('pelanggan.store') }}" method="POST" id="myForm">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input placeholder="Masukkan Email" type="email" name="email" class="form-control" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama Lengkap</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input placeholder="Masukkan Nama Lengkap" name="username" class="form-control" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No Telp</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input placeholder="Masukkan No Telp" type="number" name="no_telp" class="form-control" min="1" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <div class="geex-content__form__single__box mb-20">
                            <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" rows="4" required></textarea>
                        </div>
                    </div>                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input placeholder="Masukkan Password" type="password" name="password" class="form-control" required />
                        </div>
                    </div>
                    <button type="submit" class="geex-btn geex-btn--primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit-->
<div class="modal fade" id="formModalEdit" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="formModalLabel">Edit Data</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form untuk input data pelanggan -->
                <form id="editForm" method="POST" action="">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="editId">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="email" class="form-control" name="email" id="editEmail" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="text" class="form-control" name="username" id="editUsername" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No Telp</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="text" class="form-control" name="no_telp" id="editNoTelp" min="1" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="text" class="form-control" name="alamat" id="editAlamat" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password (kosongkan jika tidak ingin mengubah)</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="password" class="form-control" name="password" placeholder="Masukkan Password jika ingin mengganti">
                        </div>
                    </div>
                    <button type="submit" class="geex-btn geex-btn--primary">Perbarui</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const email = this.getAttribute('data-email');
            const username = this.getAttribute('data-username');
            const no_telp = this.getAttribute('data-no_telp');
            const alamat = this.getAttribute('data-alamat');

            // Set value input di modal
            document.getElementById('editId').value = id;
            document.getElementById('editEmail').value = email;
            document.getElementById('editUsername').value = username;
            document.getElementById('editNoTelp').value = no_telp;
            document.getElementById('editAlamat').value = alamat;

            // Update action URL form edit
            document.getElementById('editForm').action = `/admin/pelanggan/${id}`; // Ganti sesuai route Anda
        });
    });
</script>

</html>
