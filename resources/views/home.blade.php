<!DOCTYPE html>
<html>
<head>
    <title>Rencana Tabungan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(180deg, #2a9d8f 0%, #264653 100%);
            color: #fff;
            width: 250px;
            height: 100vh;
            border-radius: 0 20px 20px 0;
            box-shadow: 3px 0 15px rgba(38, 70, 83, 0.3);
            z-index: 1050;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease;
        }

        #sidebarToggle {
            position: fixed;
            top: 10px;
            left: 10px;
            z-index: 1100;

            background-color:#21867a;
            border-radius: 6px;
            padding: 6px 12px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            border: none;
            font-weight: 600;
            color: #000000FF;
            cursor: pointer;
            user-select: none;
            transition: background-color 0.3s ease;
        }

        #sidebarToggle:hover {
        background-color: #2DB3A3FF;
        }

        .sidebar-header h4 {
            font-weight: 700;
            letter-spacing: 1.2px;
            font-size: 1.3rem;
        }

        .nav-link {
            color: #cde4e1;
            font-weight: 500;
            padding: 1rem;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            background-color: #82cbb2;
            color: #1b3a33;
            box-shadow: 0 4px 10px rgba(130, 203, 178, 0.6);
        }

        .btn-logout {
            background-color: #e63946;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            box-shadow: 0 4px 8px rgba(230, 57, 70, 0.5);
            font-size: 1rem;
            width: 100%;
        }

        .btn-logout:hover {
            background-color: #d62828;
            box-shadow: 0 6px 12px rgba(214, 40, 40, 0.7);
        }

        @media (min-width: 768px) {
            .sidebar {
                transform: translateX(0);
            }

            main.content {
                margin-left: 250px;
            }
        }

        @media (max-width: 767.98px) {
            .sidebar {
                transform: translateX(-100%);
                width: 250px;
                height: 100vh;
                border-radius: 0;
                position: fixed;
                top: 0;
                left: 0;
            }

            .sidebar.show {
                transform: translateX(0);
            }

            main.content {
                margin-left: 0;
                padding: 1rem;
            }

            #sidebarOverlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0,0,0,0.4);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease;
            z-index: 999;
            }
            #sidebarOverlay.active {
                opacity: 1;
                visibility: visible;
            }

            #sidebarToggle {
                position: fixed;
                top: 10px;
                left: 10px;
                z-index: 1100;
            }
        }

    </style>
</head>
<body>

@yield('auth')

@auth

    <button id="sidebarToggle" class="btn btn-outline-secondary btn-sm d-md-none">
        ☰ Menu
    </button>


    @include('Component.sidebar')
    <main class="content">
        @yield('content')
    </main>

    <div id="sidebarOverlay"></div>
@endauth

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('sidebarToggle');
        const overlay = document.getElementById('sidebarOverlay');

        toggleBtn?.addEventListener('click', () => {
            sidebar.classList.add('show');
            overlay.classList.add('active');
            toggleBtn.style.display = 'none';
        });

        overlay?.addEventListener('click', () => {
            sidebar.classList.remove('show');
            overlay.classList.remove('active');
            toggleBtn.style.display = 'inline-block';
        });
    });

</script>

</body>
</html>
