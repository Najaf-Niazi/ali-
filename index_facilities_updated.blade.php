<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Website Content | Niazi Hostel Admin
    </title>


    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        html,
        body {
            width: 100%;
            min-height: 100%;
            overflow-x: hidden;
        }


        body {
            font-family: Arial, sans-serif;
            background: #f6f8fb;
            color: #0f1f33;
        }


        a {
            text-decoration: none;
        }


        button,
        input,
        textarea {
            font: inherit;
        }


        .admin-layout {
            width: 100%;
            min-height: 100vh;
        }


        /* =========================
           ADMIN SIDEBAR
        ========================= */

        .admin-sidebar {

            width: 260px;
            height: 100vh;

            position: fixed;

            left: 0;
            top: 0;

            padding: 24px 18px;

            background: linear-gradient(
                180deg,
                #0f1f33 0%,
                #162b45 100%
            );

            color: #ffffff;

            display: flex;
            flex-direction: column;

            overflow-y: auto;
            overflow-x: hidden;

            z-index: 1000;
        }


        .brand {

            display: flex;

            align-items: center;

            gap: 12px;

            padding: 5px 10px 28px;
        }


        .brand-icon {

            width: 46px;
            height: 46px;

            min-width: 46px;

            border-radius: 14px;

            display: flex;

            align-items: center;
            justify-content: center;

            background: #f97066;

            color: #ffffff;

            font-size: 18px;
        }


        .brand h2 {

            margin: 0;

            font-size: 18px;

            font-weight: 700;

            color: #ffffff;

            line-height: 1.1;
        }


        .brand span {

            display: block;

            margin-top: 4px;

            color: #9ba8b7;

            font-size: 9px;

            font-weight: 700;

            letter-spacing: 2px;

            white-space: nowrap;
        }


        .sidebar-nav {

            display: flex;

            flex-direction: column;

            gap: 7px;

            flex: 1;
        }


        .sidebar-nav a {

            display: flex;

            align-items: center;

            gap: 13px;

            min-height: 46px;

            padding: 13px 14px;

            border-radius: 12px;

            color: #cbd3dc;

            font-size: 14px;

            font-weight: 500;

            border-left: 3px solid transparent;

            transition: 0.3s ease;
        }


        .sidebar-nav a i {

            width: 20px;

            min-width: 20px;

            text-align: center;

            font-size: 15px;

            color: inherit;
        }


        .sidebar-nav a:hover {

            background: rgba(
                249,
                112,
                102,
                0.10
            );

            color: #ffffff;
        }


        .sidebar-nav a.active {

            background: rgba(
                249,
                112,
                102,
                0.14
            );

            color: #ffffff;

            border-left-color: #f97066;
        }


        .sidebar-divider {

            height: 1px;

            background: rgba(
                255,
                255,
                255,
                0.12
            );

            margin: auto 8px 10px;
        }


        /* =========================
           MAIN AREA
        ========================= */

        .main-area {

            width: calc(100% - 260px);

            min-height: 100vh;

            margin-left: 260px;

            padding: 28px;

            background: #f6f8fb;
        }


        /* =========================
           TOP HEADER
        ========================= */

        .top-header {

            width: 100%;

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;

            margin-bottom: 20px;
        }


        .top-title {

            min-width: 0;
        }


        .top-title h1 {

            font-size: 28px;

            margin-bottom: 6px;

            color: #162033;
        }


        .top-title p {

            color: #6b7280;

            font-size: 14px;

            line-height: 1.5;
        }


        .top-actions {

            display: flex;

            align-items: center;

            gap: 12px;

            flex-shrink: 0;
        }


        .top-actions form {

            margin: 0;
        }


        .restore-btn,
        .save-all-btn {

            min-height: 44px;

            border: none;

            border-radius: 9px;

            padding: 0 18px;

            font-size: 14px;

            font-weight: 600;

            cursor: pointer;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 9px;

            white-space: nowrap;

            transition: 0.2s ease;
        }


        .restore-btn {

            background: #ffffff;

            border: 1px solid #f1b8b8;

            color: #dc2626;
        }


        .restore-btn:hover {

            background: #fff7f7;
        }


        .save-all-btn {

            background: #0878eb;

            color: #ffffff;
        }


        .save-all-btn:hover {

            background: #066bd2;

            box-shadow:
                0 7px 18px
                rgba(8, 120, 235, 0.18);
        }


        /* =========================
           MESSAGE
        ========================= */

        .message {

            width: 100%;

            background: #dcfce7;

            color: #166534;

            border: 1px solid #bbf7d0;

            padding: 12px 15px;

            border-radius: 9px;

            margin-bottom: 15px;
        }


        .error-message {

            width: 100%;

            background: #fee2e2;

            color: #991b1b;

            border: 1px solid #fecaca;

            padding: 12px 15px;

            border-radius: 9px;

            margin-bottom: 15px;
        }


        /* =========================
           CONTENT LAYOUT
        ========================= */

        .content-layout {

            width: 100%;

            display: grid;

            grid-template-columns:
                230px
                minmax(0, 1fr);

            gap: 18px;

            align-items: start;
        }


        /* =========================
           PAGE SELECTOR
        ========================= */

        .page-selector {

            width: 100%;

            background: #ffffff;

            border: 1px solid #e2e8f0;

            border-radius: 14px;

            padding: 13px;

            position: sticky;

            top: 20px;
        }


        .page-selector h3 {

            font-size: 15px;

            margin-bottom: 13px;

            color: #162033;
        }


        .page-link {

            width: 100%;

            display: flex;

            align-items: center;

            gap: 10px;

            color: #1f2937;

            border: 1px solid #e2e8f0;

            background: #ffffff;

            padding: 11px 12px;

            border-radius: 8px;

            margin-bottom: 8px;

            font-size: 13px;

            transition: 0.2s ease;
        }


        .page-link:last-child {

            margin-bottom: 0;
        }


        .page-link i {

            width: 18px;

            text-align: center;
        }


        .page-link:hover {

            background: #f4f8fd;

            border-color: #bfdbfe;
        }


        .page-link.active {

            background: #0878eb;

            border-color: #0878eb;

            color: #ffffff;
        }


        /* =========================
           EDITOR PANEL
        ========================= */

        .editor-panel {

            width: 100%;

            min-width: 0;

            background: #ffffff;

            border: 1px solid #e2e8f0;

            border-radius: 14px;

            padding: 14px;
        }


        .page-heading {

            display: flex;

            align-items: center;

            gap: 12px;

            padding: 5px 2px 15px;
        }


        .page-heading-icon {

            width: 42px;

            height: 42px;

            flex-shrink: 0;

            background: #dbeafe;

            color: #0878eb;

            border-radius: 10px;

            display: flex;

            align-items: center;

            justify-content: center;
        }


        .page-heading h2 {

            font-size: 20px;

            margin-bottom: 3px;

            color: #162033;
        }


        .page-heading p {

            font-size: 13px;

            color: #718096;

            line-height: 1.5;
        }


        /* =========================
           SECTION CARDS
        ========================= */

        .section-card {

            width: 100%;

            border: 1px solid #dce4ee;

            border-radius: 12px;

            overflow: hidden;

            margin-bottom: 16px;

            background: #ffffff;
        }


        .section-card-header {

            background: #f7f9fc;

            border-bottom:
                1px solid #e2e8f0;

            padding: 12px 14px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 15px;
        }


        .section-title-wrap {

            display: flex;

            align-items: center;

            gap: 11px;

            min-width: 0;
        }


        .section-number {

            width: 36px;

            height: 36px;

            min-width: 36px;

            border-radius: 9px;

            background: #dbeafe;

            color: #0878eb;

            font-weight: 700;

            display: flex;

            align-items: center;

            justify-content: center;
        }


        .section-card-header h3 {

            font-size: 16px;

            margin-bottom: 3px;

            color: #162033;
        }


        .section-card-header p {

            font-size: 12px;

            color: #718096;

            line-height: 1.45;
        }


        .visible-badge {

            background: #d1fae5;

            color: #047857;

            padding: 7px 11px;

            border-radius: 20px;

            font-size: 12px;

            display: flex;

            align-items: center;

            gap: 7px;

            white-space: nowrap;

            flex-shrink: 0;
        }


        .section-body {

            width: 100%;

            padding: 16px;
        }


        /* =========================
           GRID
        ========================= */

        .two-column {

            width: 100%;

            display: grid;

            grid-template-columns:
                repeat(
                    2,
                    minmax(0, 1fr)
                );

            gap: 18px;
        }


        .three-column {

            width: 100%;

            display: grid;

            grid-template-columns:
                repeat(
                    3,
                    minmax(0, 1fr)
                );

            gap: 14px;
        }


        /* =========================
           FIELDS
        ========================= */

        .field-group {

            min-width: 0;

            margin-bottom: 13px;
        }


        .field-group:last-child {

            margin-bottom: 0;
        }


        .field-group label {

            display: block;

            font-size: 12px;

            font-weight: 700;

            margin-bottom: 7px;

            color: #263247;
        }


        .content-input,
        .content-textarea {

            display: block;

            width: 100%;

            min-width: 0;

            border:
                1px solid #ccd6e3;

            border-radius: 8px;

            padding: 10px 11px;

            font-family:
                Arial,
                sans-serif;

            font-size: 13px;

            color: #162033;

            outline: none;

            background: #ffffff;

            transition: 0.2s ease;
        }


        .content-input {

            min-height: 42px;
        }


        .content-textarea {

            min-height: 95px;

            line-height: 1.5;

            resize: vertical;
        }


        .content-input:focus,
        .content-textarea:focus {

            border-color: #0878eb;

            box-shadow:
                0 0 0 3px
                rgba(8, 120, 235, 0.08);
        }


        /* =========================
           IMAGE
        ========================= */

        .image-editor {

            width: 100%;

            min-width: 0;

            border:
                1px solid #e2e8f0;

            border-radius: 10px;

            padding: 10px;

            background: #fafcff;
        }


        .image-editor img {

            width: 100%;

            height: 180px;

            object-fit: cover;

            border-radius: 8px;

            display: block;

            margin-bottom: 10px;
        }


        .image-input {

            display: block;

            width: 100%;

            max-width: 100%;

            font-size: 12px;

            color: #374151;
        }


        .image-note {

            color: #718096;

            font-size: 11px;

            line-height: 1.4;

            margin-top: 6px;
        }


        .mini-card,
        .room-box {

            min-width: 0;

            border:
                1px solid #e2e8f0;

            background: #fafcff;

            padding: 12px;

            border-radius: 10px;
        }


        .mini-card h4,
        .room-box h4 {

            font-size: 13px;

            margin-bottom: 10px;

            color: #162033;
        }


        .bottom-save {

            width: 100%;

            display: flex;

            justify-content: flex-end;

            margin-top: 15px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1100px) {

            .content-layout {

                grid-template-columns:
                    190px
                    minmax(0, 1fr);
            }


            .three-column {

                grid-template-columns: 1fr;
            }
        }


        @media (max-width: 800px) {

            .admin-sidebar {

                width: 80px;

                padding: 20px 10px;
            }


            .brand {

                justify-content: center;

                padding-left: 0;

                padding-right: 0;
            }


            .brand > div:not(.brand-icon) {

                display: none;
            }


            .sidebar-nav a {

                justify-content: center;

                padding-left: 10px;

                padding-right: 10px;

                font-size: 0;
            }


            .sidebar-nav a i {

                font-size: 15px;
            }


            .main-area {

                width:
                    calc(100% - 80px);

                margin-left: 80px;

                padding: 20px;
            }


            .content-layout {

                grid-template-columns: 1fr;
            }


            .page-selector {

                position: static;
            }


            .top-header {

                flex-direction: column;

                align-items: stretch;
            }


            .top-actions {

                width: 100%;

                flex-wrap: wrap;
            }


            .restore-btn,
            .save-all-btn {

                flex: 1;
            }


            .two-column,
            .three-column {

                grid-template-columns: 1fr;
            }
        }


        @media (max-width: 520px) {

            .main-area {

                padding: 16px 10px;
            }


            .top-title h1 {

                font-size: 24px;
            }


            .editor-panel {

                padding: 9px;
            }


            .section-body {

                padding: 12px;
            }


            .visible-badge {

                display: none;
            }


            .top-actions {

                flex-direction: column;
            }


            .restore-btn,
            .save-all-btn {

                width: 100%;
            }
        }

    </style>

</head>


<body>


<div class="admin-layout">


    <!-- =====================================
         ADMIN SIDEBAR
    ====================================== -->

    <aside class="admin-sidebar">


        <div class="brand">

            <div class="brand-icon">

                <i class="fa-solid fa-house"></i>

            </div>


            <div>

                <h2>
                    Niazi Hostel
                </h2>

                <span>
                    ADMIN PANEL
                </span>

            </div>

        </div>



        <nav class="sidebar-nav">


            <a href="{{ url('/admin/dashboard') }}">

                <i class="fa-solid fa-chart-line"></i>

                Dashboard

            </a>


            <a href="{{ url('/admin/admissions') }}">

                <i class="fa-solid fa-file-circle-check"></i>

                Admissions

            </a>


            <a href="{{ url('/admin/students') }}">

                <i class="fa-solid fa-user-graduate"></i>

                Students

            </a>


            <a href="{{ url('/admin/rooms') }}">

                <i class="fa-solid fa-bed"></i>

                Rooms

            </a>


            <a
                href="{{ route('admin.content.index') }}"
                class="active"
            >

                <i class="fa-solid fa-pen-to-square"></i>

                Website Content

            </a>


            <a href="#">

                <i class="fa-solid fa-building"></i>

                Facilities

            </a>


            <a href="#">

                <i class="fa-solid fa-address-book"></i>

                Contact Settings

            </a>


            <a href="#">

                <i class="fa-solid fa-image"></i>

                Images

            </a>


            <a href="#">

                <i class="fa-solid fa-magnifying-glass"></i>

                Search

            </a>


            <div class="sidebar-divider"></div>


            <a href="#">

                <i class="fa-solid fa-right-from-bracket"></i>

                Logout

            </a>


        </nav>


    </aside>



    <!-- =====================================
         MAIN CONTENT
    ====================================== -->

    <main class="main-area">


        <!-- TOP HEADER -->

        <div class="top-header">


            <div class="top-title">

                <h1>
                    Website Content
                </h1>

                <p>
                    Manage and update your website content easily.
                    Make changes and save all at once.
                </p>

            </div>



            <div class="top-actions">


                <form
                    action="{{ route('admin.content.restore') }}"
                    method="POST"
                >

                    @csrf


                    <button
                        type="submit"
                        class="restore-btn"
                        onclick="return confirm('Original website content restore karna hai?')"
                    >

                        <i class="fa-solid fa-rotate-left"></i>

                        Restore Original

                    </button>


                </form>



                <button
                    type="submit"
                    form="websiteContentForm"
                    class="save-all-btn"
                >

                    <i class="fa-solid fa-floppy-disk"></i>

                    Save All Changes

                </button>


            </div>


        </div>



        <!-- SUCCESS MESSAGE -->

        @if(session('success'))

            <div class="message">

                {{ session('success') }}

            </div>

        @endif



        <!-- ERROR MESSAGE -->

        @if($errors->any())

            <div class="error-message">

                {{ $errors->first() }}

            </div>

        @endif



        <div class="content-layout">


            <!-- =====================================
                 PAGE SELECTOR
            ====================================== -->

            <aside class="page-selector">


                <h3>
                    Select Page
                </h3>


                <a
                    href="{{ route('admin.content.index', ['page' => 'home']) }}"
                    class="page-link {{ ($selectedPage ?? 'home') === 'home' ? 'active' : '' }}"
                >

                    <i class="fa-solid fa-house"></i>

                    Home

                </a>



                <a
                    href="{{ route('admin.content.index', ['page' => 'about']) }}"
                    class="page-link {{ ($selectedPage ?? 'home') === 'about' ? 'active' : '' }}"
                >

                    <i class="fa-regular fa-file-lines"></i>

                    About

                </a>



                <a
                    href="{{ route('admin.content.index', ['page' => 'facilities']) }}"
                    class="page-link {{ ($selectedPage ?? 'home') === 'facilities' ? 'active' : '' }}"
                >

                    <i class="fa-solid fa-border-all"></i>

                    Facilities

                </a>



                <a
                    href="{{ route('admin.content.index', ['page' => 'contact']) }}"
                    class="page-link {{ ($selectedPage ?? 'home') === 'contact' ? 'active' : '' }}"
                >

                    <i class="fa-solid fa-phone"></i>

                    Contact

                </a>



                <a
                    href="{{ route('admin.content.index', ['page' => 'admission']) }}"
                    class="page-link {{ ($selectedPage ?? 'home') === 'admission' ? 'active' : '' }}"
                >

                    <i class="fa-solid fa-file-pen"></i>

                    New Admission

                </a>


            </aside>



            <!-- =====================================
                 EDITOR PANEL
            ====================================== -->

            <section class="editor-panel">


                <!-- =====================================
                     ABOUT PAGE
                ====================================== -->

                
@if(($selectedPage ?? 'home') === 'about')


    <div class="page-heading">

        <div class="page-heading-icon">
            <i class="fa-regular fa-file-lines"></i>
        </div>

        <div>

            <h2>
                About Page Content
            </h2>

            <p>
                Update the content for the About page.
                All changes will be saved together.
            </p>

        </div>

    </div>



    <form
        id="websiteContentForm"
        action="{{ url('/admin/content/save-all') }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf


        <!-- =====================================
             01 ABOUT HERO
        ====================================== -->

        <div class="section-card">

            <div class="section-card-header">

                <div class="section-title-wrap">

                    <div class="section-number">
                        01
                    </div>

                    <div>

                        <h3>
                            About Hero
                        </h3>

                        <p>
                            ABOUT US
                        </p>

                    </div>

                </div>


                <div class="visible-badge">

                    <i class="fa-solid fa-eye"></i>

                    Visible on Website

                </div>

            </div>


            <div class="section-body">


                <div class="field-group">

                    <label>
                        Section Tag
                    </label>

                    <input
                        type="text"
                        class="content-input"
                        name="content[about_hero_tag]"
                        value="{{ $items['about_hero_tag']->value ?? 'ABOUT US' }}"
                    >

                </div>



                <div class="two-column">


                    <div class="field-group">

                        <label>
                            Heading Start
                        </label>

                        <input
                            type="text"
                            class="content-input"
                            name="content[about_hero_heading_start]"
                            value="{{ $items['about_hero_heading_start']->value ?? 'More Than a' }}"
                        >

                    </div>



                    <div class="field-group">

                        <label>
                            Highlighted Text
                        </label>

                        <input
                            type="text"
                            class="content-input"
                            name="content[about_hero_heading_highlight]"
                            value="{{ $items['about_hero_heading_highlight']->value ?? 'Place to Stay' }}"
                        >

                    </div>


                </div>



                <div class="field-group">

                    <label>
                        Description
                    </label>

                    <textarea
                        class="content-textarea"
                        name="content[about_hero_description]"
                    >{{ $items['about_hero_description']->value ?? 'At Niazi Hostel, we believe a great stay can shape a brighter future. We provide a safe, comfortable, and inspiring environment where students and professionals can live, learn, and grow.' }}</textarea>

                </div>



                <div class="two-column">


                    <div class="field-group">

                        <label>
                            Our Story Button
                        </label>

                        <input
                            type="text"
                            class="content-input"
                            name="content[about_hero_story_button]"
                            value="{{ $items['about_hero_story_button']->value ?? 'Our Story' }}"
                        >

                    </div>



                    <div class="field-group">

                        <label>
                            Watch Our Story Button
                        </label>

                        <input
                            type="text"
                            class="content-input"
                            name="content[about_hero_watch_story]"
                            value="{{ $items['about_hero_watch_story']->value ?? 'Watch Our Story' }}"
                        >

                    </div>


                </div>


            </div>

        </div>



        <!-- =====================================
             02 OUR JOURNEY
        ====================================== -->

        <div class="section-card">

            <div class="section-card-header">

                <div class="section-title-wrap">

                    <div class="section-number">
                        02
                    </div>

                    <div>

                        <h3>
                            Our Journey
                        </h3>

                        <p>
                            OUR JOURNEY
                        </p>

                    </div>

                </div>


                <div class="visible-badge">

                    <i class="fa-solid fa-eye"></i>

                    Visible on Website

                </div>

            </div>


            <div class="section-body">


                <div class="two-column">


                    <div>


                        <div class="field-group">

                            <label>
                                Hostel Building Image
                            </label>


                            <div class="image-editor">

                                <img
                                    src="{{ isset($items['about_journey_image'])
                                        ? (
                                            str_starts_with($items['about_journey_image']->value, 'website-editor/')
                                            ? asset('storage/' . $items['about_journey_image']->value)
                                            : (
                                                filter_var($items['about_journey_image']->value, FILTER_VALIDATE_URL)
                                                ? $items['about_journey_image']->value
                                                : asset($items['about_journey_image']->value)
                                            )
                                        )
                                        : asset('images/hostel building.png')
                                    }}"
                                    alt="Niazi Hostel Building"
                                >


                                <input
                                    type="file"
                                    name="images[about_journey_image]"
                                    class="image-input"
                                    accept=".jpg,.jpeg,.png,.webp"
                                >


                                <div class="image-note">
                                    Leave empty if you do not want to change this image.
                                </div>

                            </div>

                        </div>



                        <div class="two-column">


                            <div class="field-group">

                                <label>
                                    Badge Title
                                </label>

                                <input
                                    type="text"
                                    class="content-input"
                                    name="content[about_badge_title]"
                                    value="{{ $items['about_badge_title']->value ?? 'Comfortable' }}"
                                >

                            </div>



                            <div class="field-group">

                                <label>
                                    Badge Text
                                </label>

                                <input
                                    type="text"
                                    class="content-input"
                                    name="content[about_badge_text]"
                                    value="{{ $items['about_badge_text']->value ?? 'Living Spaces' }}"
                                >

                            </div>


                        </div>


                    </div>



                    <div>


                        <div class="field-group">

                            <label>
                                Section Tag
                            </label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[about_journey_tag]"
                                value="{{ $items['about_journey_tag']->value ?? 'OUR JOURNEY' }}"
                            >

                        </div>



                        <div class="two-column">


                            <div class="field-group">

                                <label>
                                    Heading Start
                                </label>

                                <input
                                    type="text"
                                    class="content-input"
                                    name="content[about_journey_heading_start]"
                                    value="{{ $items['about_journey_heading_start']->value ?? 'Building a Better' }}"
                                >

                            </div>



                            <div class="field-group">

                                <label>
                                    Highlighted Text
                                </label>

                                <input
                                    type="text"
                                    class="content-input"
                                    name="content[about_journey_heading_highlight]"
                                    value="{{ $items['about_journey_heading_highlight']->value ?? 'Living Experience' }}"
                                >

                            </div>


                        </div>



                        <div class="field-group">

                            <label>
                                First Paragraph
                            </label>

                            <textarea
                                class="content-textarea"
                                name="content[about_journey_paragraph_one]"
                            >{{ $items['about_journey_paragraph_one']->value ?? 'Niazi Hostel was founded with a simple idea — to create a safe, clean and supportive living environment for students and job holders.' }}</textarea>

                        </div>



                        <div class="field-group">

                            <label>
                                Second Paragraph
                            </label>

                            <textarea
                                class="content-textarea"
                                name="content[about_journey_paragraph_two]"
                            >{{ $items['about_journey_paragraph_two']->value ?? 'We understand that a good stay is not only about a room. It is about peace of mind, a positive environment and having the right place to focus on your studies, career and personal growth.' }}</textarea>

                        </div>


                    </div>


                </div>


            </div>

        </div>



        <!-- =====================================
             03 MISSION / VISION / VALUES
        ====================================== -->

        <div class="section-card">

            <div class="section-card-header">

                <div class="section-title-wrap">

                    <div class="section-number">
                        03
                    </div>

                    <div>

                        <h3>
                            Mission, Vision & Values
                        </h3>

                        <p>
                            Our Mission • Our Vision • Our Values
                        </p>

                    </div>

                </div>


                <div class="visible-badge">

                    <i class="fa-solid fa-eye"></i>

                    Visible on Website

                </div>

            </div>


            <div class="section-body">


                <div class="three-column">


                    <!-- MISSION -->

                    <div class="mini-card">

                        <h4>
                            Our Mission
                        </h4>


                        <div class="field-group">

                            <label>
                                Title
                            </label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[about_mission_title]"
                                value="{{ $items['about_mission_title']->value ?? 'Our Mission' }}"
                            >

                        </div>


                        <div class="field-group">

                            <label>
                                Description
                            </label>

                            <textarea
                                class="content-textarea"
                                name="content[about_mission_description]"
                            >{{ $items['about_mission_description']->value ?? 'To provide safe, comfortable and affordable living spaces for students and professionals.' }}</textarea>

                        </div>

                    </div>



                    <!-- VISION -->

                    <div class="mini-card">

                        <h4>
                            Our Vision
                        </h4>


                        <div class="field-group">

                            <label>
                                Title
                            </label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[about_vision_title]"
                                value="{{ $items['about_vision_title']->value ?? 'Our Vision' }}"
                            >

                        </div>


                        <div class="field-group">

                            <label>
                                Description
                            </label>

                            <textarea
                                class="content-textarea"
                                name="content[about_vision_description]"
                            >{{ $items['about_vision_description']->value ?? 'To become a trusted hostel known for quality, community and comfortable living.' }}</textarea>

                        </div>

                    </div>



                    <!-- VALUES -->

                    <div class="mini-card">

                        <h4>
                            Our Values
                        </h4>


                        <div class="field-group">

                            <label>
                                Title
                            </label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[about_values_title]"
                                value="{{ $items['about_values_title']->value ?? 'Our Values' }}"
                            >

                        </div>


                        <div class="field-group">

                            <label>
                                Description
                            </label>

                            <textarea
                                class="content-textarea"
                                name="content[about_values_description]"
                            >{{ $items['about_values_description']->value ?? 'Safety, respect, cleanliness, community and continuous improvement.' }}</textarea>

                        </div>

                    </div>


                </div>


            </div>

        </div>



        <!-- =====================================
             04 STATS
        ====================================== -->

        <div class="section-card">

            <div class="section-card-header">

                <div class="section-title-wrap">

                    <div class="section-number">
                        04
                    </div>

                    <div>

                        <h3>
                            Stats
                        </h3>

                        <p>
                            About page statistics.
                        </p>

                    </div>

                </div>


                <div class="visible-badge">

                    <i class="fa-solid fa-eye"></i>

                    Visible on Website

                </div>

            </div>


            <div class="section-body">


                <div class="two-column">


                    <!-- STAT 1 -->

                    <div class="mini-card">

                        <h4>
                            Happy Residents
                        </h4>


                        <div class="field-group">

                            <label>
                                Number
                            </label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[about_stat_residents_number]"
                                value="{{ $items['about_stat_residents_number']->value ?? '500+' }}"
                            >

                        </div>


                        <div class="field-group">

                            <label>
                                Text
                            </label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[about_stat_residents_text]"
                                value="{{ $items['about_stat_residents_text']->value ?? 'Happy Residents' }}"
                            >

                        </div>

                    </div>



                    <!-- STAT 2 -->

                    <div class="mini-card">

                        <h4>
                            Years of Experience
                        </h4>


                        <div class="field-group">

                            <label>
                                Number
                            </label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[about_stat_years_number]"
                                value="{{ $items['about_stat_years_number']->value ?? '5+' }}"
                            >

                        </div>


                        <div class="field-group">

                            <label>
                                Text
                            </label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[about_stat_years_text]"
                                value="{{ $items['about_stat_years_text']->value ?? 'Years of Experience' }}"
                            >

                        </div>

                    </div>



                    <!-- STAT 3 -->

                    <div class="mini-card">

                        <h4>
                            Average Rating
                        </h4>


                        <div class="field-group">

                            <label>
                                Number
                            </label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[about_stat_rating_number]"
                                value="{{ $items['about_stat_rating_number']->value ?? '4.8' }}"
                            >

                        </div>


                        <div class="field-group">

                            <label>
                                Text
                            </label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[about_stat_rating_text]"
                                value="{{ $items['about_stat_rating_text']->value ?? 'Average Rating' }}"
                            >

                        </div>

                    </div>



                    <!-- STAT 4 -->

                    <div class="mini-card">

                        <h4>
                            Dedicated Staff
                        </h4>


                        <div class="field-group">

                            <label>
                                Number
                            </label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[about_stat_staff_number]"
                                value="{{ $items['about_stat_staff_number']->value ?? '10+' }}"
                            >

                        </div>


                        <div class="field-group">

                            <label>
                                Text
                            </label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[about_stat_staff_text]"
                                value="{{ $items['about_stat_staff_text']->value ?? 'Dedicated Staff' }}"
                            >

                        </div>

                    </div>


                </div>


            </div>

        </div>



        <!-- =====================================
             05 FEATURES
        ====================================== -->

        <div class="section-card">

            <div class="section-card-header">

                <div class="section-title-wrap">

                    <div class="section-number">
                        05
                    </div>

                    <div>

                        <h3>
                            Features
                        </h3>

                        <p>
                            About page feature cards.
                        </p>

                    </div>

                </div>


                <div class="visible-badge">

                    <i class="fa-solid fa-eye"></i>

                    Visible on Website

                </div>

            </div>


            <div class="section-body">


                <div class="two-column">


                    <!-- FEATURE 1 -->

                    <div class="mini-card">

                        <h4>
                            Safe & Secure
                        </h4>


                        <div class="field-group">

                            <label>
                                Title
                            </label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[about_feature_safe_title]"
                                value="{{ $items['about_feature_safe_title']->value ?? 'Safe & Secure' }}"
                            >

                        </div>


                        <div class="field-group">

                            <label>
                                Description
                            </label>

                            <textarea
                                class="content-textarea"
                                name="content[about_feature_safe_description]"
                            >{{ $items['about_feature_safe_description']->value ?? '24/7 security and surveillance.' }}</textarea>

                        </div>

                    </div>



                    <!-- FEATURE 2 -->

                    <div class="mini-card">

                        <h4>
                            Friendly Community
                        </h4>


                        <div class="field-group">

                            <label>
                                Title
                            </label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[about_feature_community_title]"
                                value="{{ $items['about_feature_community_title']->value ?? 'Friendly Community' }}"
                            >

                        </div>


                        <div class="field-group">

                            <label>
                                Description
                            </label>

                            <textarea
                                class="content-textarea"
                                name="content[about_feature_community_description]"
                            >{{ $items['about_feature_community_description']->value ?? 'Live and grow with like-minded people.' }}</textarea>

                        </div>

                    </div>



                    <!-- FEATURE 3 -->

                    <div class="mini-card">

                        <h4>
                            Comfortable Rooms
                        </h4>


                        <div class="field-group">

                            <label>
                                Title
                            </label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[about_feature_rooms_title]"
                                value="{{ $items['about_feature_rooms_title']->value ?? 'Comfortable Rooms' }}"
                            >

                        </div>


                        <div class="field-group">

                            <label>
                                Description
                            </label>

                            <textarea
                                class="content-textarea"
                                name="content[about_feature_rooms_description]"
                            >{{ $items['about_feature_rooms_description']->value ?? 'Clean and modern living spaces.' }}</textarea>

                        </div>

                    </div>



                    <!-- FEATURE 4 -->

                    <div class="mini-card">

                        <h4>
                            Supportive Environment
                        </h4>


                        <div class="field-group">

                            <label>
                                Title
                            </label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[about_feature_environment_title]"
                                value="{{ $items['about_feature_environment_title']->value ?? 'Supportive Environment' }}"
                            >

                        </div>


                        <div class="field-group">

                            <label>
                                Description
                            </label>

                            <textarea
                                class="content-textarea"
                                name="content[about_feature_environment_description]"
                            >{{ $items['about_feature_environment_description']->value ?? 'A peaceful place to focus on your goals.' }}</textarea>

                        </div>

                    </div>


                </div>


            </div>

        </div>



        <div class="bottom-save">

            <button
                type="submit"
                class="save-all-btn"
            >

                <i class="fa-solid fa-floppy-disk"></i>

                Save All Changes

            </button>

        </div>


    </form>



@elseif(($selectedPage ?? 'home') === 'facilities')

    <div class="page-heading">

        <div class="page-heading-icon">
            <i class="fa-solid fa-border-all"></i>
        </div>

        <div>
            <h2>Facilities Page Content</h2>
            <p>
                Update the content and images for the Facilities page.
                All changes will be saved together.
            </p>
        </div>

    </div>


    <form
        id="websiteContentForm"
        action="{{ url('/admin/content/save-all') }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf

        <input type="hidden" name="page" value="facilities">


        <!-- =====================================
             01 FACILITIES HERO
        ====================================== -->

        <div class="section-card">

            <div class="section-card-header">

                <div class="section-title-wrap">

                    <div class="section-number">
                        01
                    </div>

                    <div>
                        <h3>Facilities Hero</h3>
                        <p>OUR FACILITIES</p>
                    </div>

                </div>

                <div class="visible-badge">
                    <i class="fa-solid fa-eye"></i>
                    Visible on Website
                </div>

            </div>


            <div class="section-body">

                <div class="field-group">
                    <label>Section Tag</label>

                    <input
                        type="text"
                        class="content-input"
                        name="content[facilities_hero_tag]"
                        value="{{ $items['facilities_hero_tag']->value ?? 'OUR FACILITIES' }}"
                    >
                </div>


                <div class="two-column">

                    <div class="field-group">
                        <label>Heading Start</label>

                        <input
                            type="text"
                            class="content-input"
                            name="content[facilities_hero_heading_start]"
                            value="{{ $items['facilities_hero_heading_start']->value ?? 'Designed for a' }}"
                        >
                    </div>


                    <div class="field-group">
                        <label>Highlighted Text</label>

                        <input
                            type="text"
                            class="content-input"
                            name="content[facilities_hero_heading_highlight]"
                            value="{{ $items['facilities_hero_heading_highlight']->value ?? 'Better Living Experience' }}"
                        >
                    </div>

                </div>


                <div class="field-group">
                    <label>Description</label>

                    <textarea
                        class="content-textarea"
                        name="content[facilities_hero_description]"
                    >{{ $items['facilities_hero_description']->value ?? 'We provide modern facilities to ensure a safe, comfortable and productive stay for students and job holders.' }}</textarea>
                </div>


                <div class="three-column">

                    <div class="field-group">
                        <label>Mini Feature 1</label>

                        <input
                            type="text"
                            class="content-input"
                            name="content[facilities_mini_safe]"
                            value="{{ $items['facilities_mini_safe']->value ?? 'Safe Environment' }}"
                        >
                    </div>


                    <div class="field-group">
                        <label>Mini Feature 2</label>

                        <input
                            type="text"
                            class="content-input"
                            name="content[facilities_mini_amenities]"
                            value="{{ $items['facilities_mini_amenities']->value ?? 'Modern Amenities' }}"
                        >
                    </div>


                    <div class="field-group">
                        <label>Mini Feature 3</label>

                        <input
                            type="text"
                            class="content-input"
                            name="content[facilities_mini_student]"
                            value="{{ $items['facilities_mini_student']->value ?? 'Student Friendly' }}"
                        >
                    </div>

                </div>


                <div class="two-column">

                    <div class="field-group">

                        <label>Hostel Building Image</label>

                        <div class="image-editor">

                            <img
                                src="{{ isset($items['facilities_hero_building_image']) && $items['facilities_hero_building_image']->value
                                    ? (
                                        str_starts_with($items['facilities_hero_building_image']->value, 'website-editor/')
                                        ? asset('storage/' . $items['facilities_hero_building_image']->value)
                                        : (
                                            filter_var($items['facilities_hero_building_image']->value, FILTER_VALIDATE_URL)
                                            ? $items['facilities_hero_building_image']->value
                                            : asset($items['facilities_hero_building_image']->value)
                                        )
                                    )
                                    : asset('images/hostel building.png')
                                }}"
                                alt="Hostel Building"
                            >

                            <input
                                type="file"
                                name="images[facilities_hero_building_image]"
                                class="image-input"
                                accept=".jpg,.jpeg,.png,.webp"
                            >

                            <div class="image-note">
                                Leave empty if you do not want to change this image.
                            </div>

                        </div>

                    </div>


                    <div class="field-group">

                        <label>Room Image</label>

                        <div class="image-editor">

                            <img
                                src="{{ isset($items['facilities_hero_room_image']) && $items['facilities_hero_room_image']->value
                                    ? (
                                        str_starts_with($items['facilities_hero_room_image']->value, 'website-editor/')
                                        ? asset('storage/' . $items['facilities_hero_room_image']->value)
                                        : (
                                            filter_var($items['facilities_hero_room_image']->value, FILTER_VALIDATE_URL)
                                            ? $items['facilities_hero_room_image']->value
                                            : asset($items['facilities_hero_room_image']->value)
                                        )
                                    )
                                    : asset('images/hostel3.png')
                                }}"
                                alt="Hostel Room"
                            >

                            <input
                                type="file"
                                name="images[facilities_hero_room_image]"
                                class="image-input"
                                accept=".jpg,.jpeg,.png,.webp"
                            >

                            <div class="image-note">
                                Leave empty if you do not want to change this image.
                            </div>

                        </div>

                    </div>

                </div>


                <div class="two-column">

                    <div class="field-group">
                        <label>Floating Card Title</label>

                        <input
                            type="text"
                            class="content-input"
                            name="content[facilities_floating_title]"
                            value="{{ $items['facilities_floating_title']->value ?? 'Comfortable Rooms' }}"
                        >
                    </div>


                    <div class="field-group">
                        <label>Floating Card Description</label>

                        <input
                            type="text"
                            class="content-input"
                            name="content[facilities_floating_description]"
                            value="{{ $items['facilities_floating_description']->value ?? 'Clean, spacious and fully furnished rooms.' }}"
                        >
                    </div>

                </div>

            </div>

        </div>


        <!-- =====================================
             02 FACILITIES INTRO
        ====================================== -->

        <div class="section-card">

            <div class="section-card-header">

                <div class="section-title-wrap">

                    <div class="section-number">
                        02
                    </div>

                    <div>
                        <h3>Facilities Intro</h3>
                        <p>Everything You Need, All in One Place</p>
                    </div>

                </div>

                <div class="visible-badge">
                    <i class="fa-solid fa-eye"></i>
                    Visible on Website
                </div>

            </div>


            <div class="section-body">

                <div class="field-group">
                    <label>Section Tag</label>

                    <input
                        type="text"
                        class="content-input"
                        name="content[facilities_intro_tag]"
                        value="{{ $items['facilities_intro_tag']->value ?? 'FACILITIES' }}"
                    >
                </div>


                <div class="two-column">

                    <div class="field-group">
                        <label>Heading Start</label>

                        <input
                            type="text"
                            class="content-input"
                            name="content[facilities_intro_heading_start]"
                            value="{{ $items['facilities_intro_heading_start']->value ?? 'Everything You Need,' }}"
                        >
                    </div>


                    <div class="field-group">
                        <label>Highlighted Text</label>

                        <input
                            type="text"
                            class="content-input"
                            name="content[facilities_intro_heading_highlight]"
                            value="{{ $items['facilities_intro_heading_highlight']->value ?? 'All in One Place' }}"
                        >
                    </div>

                </div>


                <div class="field-group">
                    <label>Description</label>

                    <textarea
                        class="content-textarea"
                        name="content[facilities_intro_description]"
                    >{{ $items['facilities_intro_description']->value ?? 'From comfortable rooms to high-speed internet, we provide all the essential facilities to make your stay safe, comfortable and stress-free.' }}</textarea>
                </div>

            </div>

        </div>


        <!-- =====================================
             03 FACILITY CARDS
        ====================================== -->

        <div class="section-card">

            <div class="section-card-header">

                <div class="section-title-wrap">

                    <div class="section-number">
                        03
                    </div>

                    <div>
                        <h3>Facility Cards</h3>
                        <p>Manage all Facilities page cards.</p>
                    </div>

                </div>

                <div class="visible-badge">
                    <i class="fa-solid fa-eye"></i>
                    Visible on Website
                </div>

            </div>


            <div class="section-body">

                @php
                    $facilityCards = [
                        ['key' => 'room', 'name' => 'Comfortable Rooms', 'image' => 'images/hostel3.png', 'description' => 'Fully furnished, clean and spacious rooms.'],
                        ['key' => 'wifi', 'name' => 'High Speed WiFi', 'image' => 'images/image.png', 'description' => 'Stay connected for your studies and work.'],
                        ['key' => 'study', 'name' => 'Study Area', 'image' => 'images/study area.png', 'description' => 'Quiet and focused environment for studying.'],
                        ['key' => 'security', 'name' => '24/7 Security', 'image' => 'images/camera.png', 'description' => 'Your safety and peace of mind are our priority.'],
                        ['key' => 'laundry', 'name' => 'Laundry Facilities', 'image' => 'images/washing.png', 'description' => 'Convenient laundry facilities for residents.'],
                        ['key' => 'washroom', 'name' => 'Clean Washrooms', 'image' => 'images/washrooom.png', 'description' => 'Hygienic and regularly maintained washrooms.'],
                        ['key' => 'power', 'name' => 'Power Backup', 'image' => 'images/power backup.png', 'description' => 'Reliable backup power when needed.'],
                        ['key' => 'water', 'name' => 'Drinking Water', 'image' => 'images/water.png', 'description' => 'Clean and safe drinking water for residents.'],
                        ['key' => 'common', 'name' => 'Common Area', 'image' => 'images/common area.png', 'description' => 'Relax, interact and spend time with friends.'],
                        ['key' => 'gallery', 'name' => 'Facilities Gallery', 'image' => 'images/galllery.png', 'description' => 'Explore our hostel and available facilities.'],
                    ];
                @endphp


                <div class="two-column">

                    @foreach($facilityCards as $card)

                        @php
                            $imageKey = 'facilities_' . $card['key'] . '_image';
                            $titleKey = 'facilities_' . $card['key'] . '_title';
                            $descriptionKey = 'facilities_' . $card['key'] . '_description';
                        @endphp


                        <div class="mini-card">

                            <h4>{{ $card['name'] }}</h4>


                            <div class="field-group">

                                <label>Image</label>

                                <div class="image-editor">

                                    <img
                                        src="{{ isset($items[$imageKey]) && $items[$imageKey]->value
                                            ? (
                                                str_starts_with($items[$imageKey]->value, 'website-editor/')
                                                ? asset('storage/' . $items[$imageKey]->value)
                                                : (
                                                    filter_var($items[$imageKey]->value, FILTER_VALIDATE_URL)
                                                    ? $items[$imageKey]->value
                                                    : asset($items[$imageKey]->value)
                                                )
                                            )
                                            : asset($card['image'])
                                        }}"
                                        alt="{{ $card['name'] }}"
                                    >

                                    <input
                                        type="file"
                                        name="images[{{ $imageKey }}]"
                                        class="image-input"
                                        accept=".jpg,.jpeg,.png,.webp"
                                    >

                                    <div class="image-note">
                                        Leave empty if you do not want to change this image.
                                    </div>

                                </div>

                            </div>


                            <div class="field-group">
                                <label>Title</label>

                                <input
                                    type="text"
                                    class="content-input"
                                    name="content[{{ $titleKey }}]"
                                    value="{{ $items[$titleKey]->value ?? $card['name'] }}"
                                >
                            </div>


                            <div class="field-group">
                                <label>Description</label>

                                <textarea
                                    class="content-textarea"
                                    name="content[{{ $descriptionKey }}]"
                                >{{ $items[$descriptionKey]->value ?? $card['description'] }}</textarea>
                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>


        <!-- =====================================
             04 STATS
        ====================================== -->

        <div class="section-card">

            <div class="section-card-header">

                <div class="section-title-wrap">

                    <div class="section-number">
                        04
                    </div>

                    <div>
                        <h3>Facility Stats</h3>
                        <p>Modern Facilities for a Productive Stay</p>
                    </div>

                </div>

                <div class="visible-badge">
                    <i class="fa-solid fa-eye"></i>
                    Visible on Website
                </div>

            </div>


            <div class="section-body">

                <div class="two-column">

                    <div class="field-group">
                        <label>Stats Title</label>

                        <input
                            type="text"
                            class="content-input"
                            name="content[facilities_stats_title]"
                            value="{{ $items['facilities_stats_title']->value ?? 'Modern Facilities' }}"
                        >
                    </div>


                    <div class="field-group">
                        <label>Stats Subtitle</label>

                        <input
                            type="text"
                            class="content-input"
                            name="content[facilities_stats_subtitle]"
                            value="{{ $items['facilities_stats_subtitle']->value ?? 'for a Productive Stay' }}"
                        >
                    </div>

                </div>


                <div class="three-column">

                    <div class="mini-card">

                        <h4>Rooms</h4>

                        <div class="field-group">
                            <label>Number</label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[facilities_stat_rooms_number]"
                                value="{{ $items['facilities_stat_rooms_number']->value ?? '50+' }}"
                            >
                        </div>

                        <div class="field-group">
                            <label>Text</label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[facilities_stat_rooms_text]"
                                value="{{ $items['facilities_stat_rooms_text']->value ?? 'Rooms' }}"
                            >
                        </div>

                    </div>


                    <div class="mini-card">

                        <h4>Facilities</h4>

                        <div class="field-group">
                            <label>Number</label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[facilities_stat_facilities_number]"
                                value="{{ $items['facilities_stat_facilities_number']->value ?? '10+' }}"
                            >
                        </div>

                        <div class="field-group">
                            <label>Text</label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[facilities_stat_facilities_text]"
                                value="{{ $items['facilities_stat_facilities_text']->value ?? 'Facilities' }}"
                            >
                        </div>

                    </div>


                    <div class="mini-card">

                        <h4>Comfort</h4>

                        <div class="field-group">
                            <label>Number</label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[facilities_stat_comfort_number]"
                                value="{{ $items['facilities_stat_comfort_number']->value ?? '100%' }}"
                            >
                        </div>

                        <div class="field-group">
                            <label>Text</label>

                            <input
                                type="text"
                                class="content-input"
                                name="content[facilities_stat_comfort_text]"
                                value="{{ $items['facilities_stat_comfort_text']->value ?? 'Comfort' }}"
                            >
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- =====================================
             05 ADMISSION CTA
        ====================================== -->

        <div class="section-card">

            <div class="section-card-header">

                <div class="section-title-wrap">

                    <div class="section-number">
                        05
                    </div>

                    <div>
                        <h3>Admission CTA</h3>
                        <p>READY TO JOIN?</p>
                    </div>

                </div>

                <div class="visible-badge">
                    <i class="fa-solid fa-eye"></i>
                    Visible on Website
                </div>

            </div>


            <div class="section-body">

                <div class="field-group">
                    <label>CTA Tag</label>

                    <input
                        type="text"
                        class="content-input"
                        name="content[facilities_cta_tag]"
                        value="{{ $items['facilities_cta_tag']->value ?? 'READY TO JOIN?' }}"
                    >
                </div>


                <div class="field-group">
                    <label>Heading</label>

                    <input
                        type="text"
                        class="content-input"
                        name="content[facilities_cta_heading]"
                        value="{{ $items['facilities_cta_heading']->value ?? 'Experience Comfortable Hostel Living' }}"
                    >
                </div>


                <div class="field-group">
                    <label>Description</label>

                    <textarea
                        class="content-textarea"
                        name="content[facilities_cta_description]"
                    >{{ $items['facilities_cta_description']->value ?? 'Submit your admission application today and become part of Niazi Hostel.' }}</textarea>
                </div>


                <div class="field-group">
                    <label>Button Text</label>

                    <input
                        type="text"
                        class="content-input"
                        name="content[facilities_cta_button]"
                        value="{{ $items['facilities_cta_button']->value ?? 'Apply for Admission' }}"
                    >
                </div>

            </div>

        </div>


        <div class="bottom-save">

            <button
                type="submit"
                class="save-all-btn"
            >
                <i class="fa-solid fa-floppy-disk"></i>
                Save All Changes
            </button>

        </div>

    </form>


@else

                <!-- =====================================
                     HOME PAGE
                ====================================== -->

            


                    <div class="page-heading">


                        <div class="page-heading-icon">

                            <i class="fa-solid fa-house"></i>

                        </div>


                        <div>

                            <h2>
                                Home Page Content
                            </h2>

                            <p>
                                Update the content for the Home page.
                                All changes will be saved together.
                            </p>

                        </div>


                    </div>



                    <form
                        id="websiteContentForm"
                        action="{{ url('/admin/content/save-all') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >

                        @csrf



                        <!-- =====================================
                             HOME HERO
                        ====================================== -->

                        <div class="section-card">


                            <div class="section-card-header">


                                <div class="section-title-wrap">


                                    <div class="section-number">

                                        01

                                    </div>


                                    <div>

                                        <h3>
                                            Hero Section
                                        </h3>

                                        <p>
                                            This section appears
                                            at the top of your Home page.
                                        </p>

                                    </div>


                                </div>


                                <div class="visible-badge">

                                    <i class="fa-solid fa-eye"></i>

                                    Visible on Website

                                </div>


                            </div>



                            <div class="section-body">


                                <div class="field-group">

                                    <label>
                                        Small Heading
                                    </label>

                                    <input
                                        type="text"
                                        class="content-input"
                                        name="content[home_hero_small_heading]"
                                        value="{{ $items['home_hero_small_heading']->value ?? 'MORE THAN A HOSTEL' }}"
                                    >

                                </div>



                                <div class="three-column">


                                    <div class="field-group">

                                        <label>
                                            Heading Start
                                        </label>

                                        <input
                                            type="text"
                                            class="content-input"
                                            name="content[home_hero_heading_start]"
                                            value="{{ $items['home_hero_heading_start']->value ?? 'A Comfortable' }}"
                                        >

                                    </div>



                                    <div class="field-group">

                                        <label>
                                            Highlighted Word
                                        </label>

                                        <input
                                            type="text"
                                            class="content-input"
                                            name="content[home_hero_heading_highlight]"
                                            value="{{ $items['home_hero_heading_highlight']->value ?? 'Home' }}"
                                        >

                                    </div>



                                    <div class="field-group">

                                        <label>
                                            Heading End
                                        </label>

                                        <input
                                            type="text"
                                            class="content-input"
                                            name="content[home_hero_heading_end]"
                                            value="{{ $items['home_hero_heading_end']->value ?? 'for a Brighter Tomorrow' }}"
                                        >

                                    </div>


                                </div>



                                <div class="field-group">

                                    <label>
                                        Description
                                    </label>

                                    <textarea
                                        class="content-textarea"
                                        name="content[home_hero_description]"
                                    >{{ $items['home_hero_description']->value ?? 'A safe, clean and peaceful living environment for students and job holders. Focus on your goals while we take care of the rest.' }}</textarea>

                                </div>


                            </div>


                        </div>



                        <!-- =====================================
                             HOME ABOUT SECTION
                        ====================================== -->

                        <div class="section-card">


                            <div class="section-card-header">


                                <div class="section-title-wrap">


                                    <div class="section-number">

                                        02

                                    </div>


                                    <div>

                                        <h3>
                                            About Section
                                        </h3>

                                        <p>
                                            This section shows information
                                            about Niazi Hostel.
                                        </p>

                                    </div>


                                </div>


                                <div class="visible-badge">

                                    <i class="fa-solid fa-eye"></i>

                                    Visible on Website

                                </div>


                            </div>



                            <div class="section-body">


                                <div class="two-column">


                                    <div>


                                        <div class="field-group">

                                            <label>
                                                Section Tag
                                            </label>

                                            <input
                                                type="text"
                                                class="content-input"
                                                name="content[home_about_tag]"
                                                value="{{ $items['home_about_tag']->value ?? 'ABOUT NIAZI HOSTEL' }}"
                                            >

                                        </div>



                                        <div class="two-column">


                                            <div class="field-group">

                                                <label>
                                                    Heading Start
                                                </label>

                                                <input
                                                    type="text"
                                                    class="content-input"
                                                    name="content[home_about_heading_start]"
                                                    value="{{ $items['home_about_heading_start']->value ?? 'A Better Place to' }}"
                                                >

                                            </div>



                                            <div class="field-group">

                                                <label>
                                                    Highlight
                                                </label>

                                                <input
                                                    type="text"
                                                    class="content-input"
                                                    name="content[home_about_heading_highlight]"
                                                    value="{{ $items['home_about_heading_highlight']->value ?? 'Live & Grow' }}"
                                                >

                                            </div>


                                        </div>



                                        <div class="field-group">

                                            <label>
                                                Description
                                            </label>

                                            <textarea
                                                class="content-textarea"
                                                name="content[home_about_description]"
                                            >{{ $items['home_about_description']->value ?? 'Niazi Hostel provides a safe, clean and comfortable living environment for students and job holders. Our goal is to provide peaceful accommodation where residents can focus on their studies, work and personal growth.' }}</textarea>

                                        </div>


                                    </div>



                                    <div>


                                        <div class="field-group">

                                            <label>
                                                Hostel Building Image
                                            </label>


                                            <div class="image-editor">


                                                <img
                                                    src="{{ isset($items['home_about_main_image'])
                                                        ? (
                                                            str_starts_with($items['home_about_main_image']->value, 'website-editor/')
                                                            ? asset('storage/' . $items['home_about_main_image']->value)
                                                            : (
                                                                filter_var($items['home_about_main_image']->value, FILTER_VALIDATE_URL)
                                                                ? $items['home_about_main_image']->value
                                                                : asset($items['home_about_main_image']->value)
                                                            )
                                                        )
                                                        : asset('images/hostel building.png')
                                                    }}"
                                                    alt="Hostel Building"
                                                >


                                                <input
                                                    type="file"
                                                    name="images[home_about_main_image]"
                                                    class="image-input"
                                                    accept=".jpg,.jpeg,.png,.webp"
                                                >


                                                <div class="image-note">

                                                    Leave empty if you do not want
                                                    to change this image.

                                                </div>


                                            </div>


                                        </div>



                                        <div class="field-group">

                                            <label>
                                                Room Image
                                            </label>


                                            <div class="image-editor">


                                                @if(isset($items['home_about_room_image']) && $items['home_about_room_image']->value)

                                                    <img
                                                        src="{{ str_starts_with($items['home_about_room_image']->value, 'website-editor/')
                                                            ? asset('storage/' . $items['home_about_room_image']->value)
                                                            : (
                                                                filter_var($items['home_about_room_image']->value, FILTER_VALIDATE_URL)
                                                                ? $items['home_about_room_image']->value
                                                                : asset($items['home_about_room_image']->value)
                                                            )
                                                        }}"
                                                        alt="Hostel Room"
                                                    >

                                                @endif


                                                <input
                                                    type="file"
                                                    name="images[home_about_room_image]"
                                                    class="image-input"
                                                    accept=".jpg,.jpeg,.png,.webp"
                                                >


                                                <div class="image-note">

                                                    Leave empty if you do not want
                                                    to change this image.

                                                </div>


                                            </div>


                                        </div>


                                    </div>


                                </div>



                                <div class="three-column">


                                    <div class="mini-card">


                                        <h4>
                                            Safe & Secure
                                        </h4>


                                        <div class="field-group">

                                            <label>
                                                Title
                                            </label>

                                            <input
                                                type="text"
                                                class="content-input"
                                                name="content[home_highlight_safe_title]"
                                                value="{{ $items['home_highlight_safe_title']->value ?? 'Safe & Secure' }}"
                                            >

                                        </div>


                                        <div class="field-group">

                                            <label>
                                                Description
                                            </label>

                                            <textarea
                                                class="content-textarea"
                                                name="content[home_highlight_safe_description]"
                                            >{{ $items['home_highlight_safe_description']->value ?? 'Peaceful environment with security support.' }}</textarea>

                                        </div>


                                    </div>



                                    <div class="mini-card">


                                        <h4>
                                            Comfortable Rooms
                                        </h4>


                                        <div class="field-group">

                                            <label>
                                                Title
                                            </label>

                                            <input
                                                type="text"
                                                class="content-input"
                                                name="content[home_highlight_rooms_title]"
                                                value="{{ $items['home_highlight_rooms_title']->value ?? 'Comfortable Rooms' }}"
                                            >

                                        </div>


                                        <div class="field-group">

                                            <label>
                                                Description
                                            </label>

                                            <textarea
                                                class="content-textarea"
                                                name="content[home_highlight_rooms_description]"
                                            >{{ $items['home_highlight_rooms_description']->value ?? 'Clean rooms designed for comfortable living.' }}</textarea>

                                        </div>


                                    </div>



                                    <div class="mini-card">


                                        <h4>
                                            Friendly Community
                                        </h4>


                                        <div class="field-group">

                                            <label>
                                                Title
                                            </label>

                                            <input
                                                type="text"
                                                class="content-input"
                                                name="content[home_highlight_community_title]"
                                                value="{{ $items['home_highlight_community_title']->value ?? 'Friendly Community' }}"
                                            >

                                        </div>


                                        <div class="field-group">

                                            <label>
                                                Description
                                            </label>

                                            <textarea
                                                class="content-textarea"
                                                name="content[home_highlight_community_description]"
                                            >{{ $items['home_highlight_community_description']->value ?? 'A positive environment for students and workers.' }}</textarea>

                                        </div>


                                    </div>


                                </div>


                            </div>


                        </div>



                        <!-- =====================================
                             ROOMS
                        ====================================== -->

                        <div class="section-card">


                            <div class="section-card-header">


                                <div class="section-title-wrap">


                                    <div class="section-number">

                                        03

                                    </div>


                                    <div>

                                        <h3>
                                            Rooms Section
                                        </h3>

                                        <p>
                                            This section contains all room
                                            types and their information.
                                        </p>

                                    </div>


                                </div>


                                <div class="visible-badge">

                                    <i class="fa-solid fa-eye"></i>

                                    Visible on Website

                                </div>


                            </div>



                            <div class="section-body">


                                <div class="field-group">

                                    <label>
                                        Section Tag
                                    </label>

                                    <input
                                        type="text"
                                        class="content-input"
                                        name="content[home_rooms_tag]"
                                        value="{{ $items['home_rooms_tag']->value ?? 'OUR ROOMS' }}"
                                    >

                                </div>



                                <div class="two-column">


                                    <div class="field-group">

                                        <label>
                                            Heading Start
                                        </label>

                                        <input
                                            type="text"
                                            class="content-input"
                                            name="content[home_rooms_heading_start]"
                                            value="{{ $items['home_rooms_heading_start']->value ?? 'Comfortable Rooms for' }}"
                                        >

                                    </div>



                                    <div class="field-group">

                                        <label>
                                            Highlight
                                        </label>

                                        <input
                                            type="text"
                                            class="content-input"
                                            name="content[home_rooms_heading_highlight]"
                                            value="{{ $items['home_rooms_heading_highlight']->value ?? 'Every Need' }}"
                                        >

                                    </div>


                                </div>



                                <div class="three-column">


                                    <div class="room-box">


                                        <h4>
                                            Single Room
                                        </h4>


                                        <div class="field-group">

                                            <label>
                                                Title
                                            </label>

                                            <input
                                                type="text"
                                                class="content-input"
                                                name="content[home_single_room_title]"
                                                value="{{ $items['home_single_room_title']->value ?? 'Single Room' }}"
                                            >

                                        </div>


                                        <div class="field-group">

                                            <label>
                                                Description
                                            </label>

                                            <textarea
                                                class="content-textarea"
                                                name="content[home_single_room_description]"
                                            >{{ $items['home_single_room_description']->value ?? 'Perfect for focused study and peaceful living.' }}</textarea>

                                        </div>


                                        <div class="field-group">

                                            <label>
                                                Image
                                            </label>

                                            <input
                                                type="file"
                                                name="images[home_single_room_image]"
                                                class="image-input"
                                                accept=".jpg,.jpeg,.png,.webp"
                                            >

                                        </div>


                                    </div>



                                    <div class="room-box">


                                        <h4>
                                            Double Sharing
                                        </h4>


                                        <div class="field-group">

                                            <label>
                                                Title
                                            </label>

                                            <input
                                                type="text"
                                                class="content-input"
                                                name="content[home_double_room_title]"
                                                value="{{ $items['home_double_room_title']->value ?? 'Double Sharing' }}"
                                            >

                                        </div>


                                        <div class="field-group">

                                            <label>
                                                Description
                                            </label>

                                            <textarea
                                                class="content-textarea"
                                                name="content[home_double_room_description]"
                                            >{{ $items['home_double_room_description']->value ?? 'Comfortable and affordable for two residents.' }}</textarea>

                                        </div>


                                        <div class="field-group">

                                            <label>
                                                Image
                                            </label>

                                            <input
                                                type="file"
                                                name="images[home_double_room_image]"
                                                class="image-input"
                                                accept=".jpg,.jpeg,.png,.webp"
                                            >

                                        </div>


                                    </div>



                                    <div class="room-box">


                                        <h4>
                                            Triple Sharing
                                        </h4>


                                        <div class="field-group">

                                            <label>
                                                Title
                                            </label>

                                            <input
                                                type="text"
                                                class="content-input"
                                                name="content[home_triple_room_title]"
                                                value="{{ $items['home_triple_room_title']->value ?? 'Triple Sharing' }}"
                                            >

                                        </div>


                                        <div class="field-group">

                                            <label>
                                                Description
                                            </label>

                                            <textarea
                                                class="content-textarea"
                                                name="content[home_triple_room_description]"
                                            >{{ $items['home_triple_room_description']->value ?? 'Spacious shared room with a friendly atmosphere.' }}</textarea>

                                        </div>


                                        <div class="field-group">

                                            <label>
                                                Image
                                            </label>

                                            <input
                                                type="file"
                                                name="images[home_triple_room_image]"
                                                class="image-input"
                                                accept=".jpg,.jpeg,.png,.webp"
                                            >

                                        </div>


                                    </div>


                                </div>


                            </div>


                        </div>



                        <!-- =====================================
                             HOME CTA
                        ====================================== -->

                        <div class="section-card">


                            <div class="section-card-header">


                                <div class="section-title-wrap">


                                    <div class="section-number">

                                        04

                                    </div>


                                    <div>

                                        <h3>
                                            Admission CTA
                                        </h3>

                                        <p>
                                            Call-to-action content shown
                                            before the footer.
                                        </p>

                                    </div>


                                </div>


                                <div class="visible-badge">

                                    <i class="fa-solid fa-eye"></i>

                                    Visible on Website

                                </div>


                            </div>



                            <div class="section-body">


                                <div class="field-group">

                                    <label>
                                        CTA Tag
                                    </label>

                                    <input
                                        type="text"
                                        class="content-input"
                                        name="content[home_cta_tag]"
                                        value="{{ $items['home_cta_tag']->value ?? 'READY TO JOIN?' }}"
                                    >

                                </div>



                                <div class="field-group">

                                    <label>
                                        Heading
                                    </label>

                                    <input
                                        type="text"
                                        class="content-input"
                                        name="content[home_cta_heading]"
                                        value="{{ $items['home_cta_heading']->value ?? 'Apply for New Admission' }}"
                                    >

                                </div>



                                <div class="field-group">

                                    <label>
                                        Description
                                    </label>

                                    <textarea
                                        class="content-textarea"
                                        name="content[home_cta_description]"
                                    >{{ $items['home_cta_description']->value ?? 'Fill out the admission form and submit your application to Niazi Hostel.' }}</textarea>

                                </div>


                            </div>


                        </div>



                        <!-- =====================================
                             FOOTER
                        ====================================== -->

                        <div class="section-card">


                            <div class="section-card-header">


                                <div class="section-title-wrap">


                                    <div class="section-number">

                                        05

                                    </div>


                                    <div>

                                        <h3>
                                            Footer Content
                                        </h3>

                                        <p>
                                            Contact and footer information.
                                        </p>

                                    </div>


                                </div>


                                <div class="visible-badge">

                                    <i class="fa-solid fa-eye"></i>

                                    Visible on Website

                                </div>


                            </div>



                            <div class="section-body">


                                <div class="field-group">

                                    <label>
                                        Footer Description
                                    </label>

                                    <textarea
                                        class="content-textarea"
                                        name="content[footer_description]"
                                    >{{ $items['footer_description']->value ?? 'Safe, clean and comfortable hostel accommodation for students and job holders.' }}</textarea>

                                </div>



                                <div class="three-column">


                                    <div class="field-group">

                                        <label>
                                            Phone
                                        </label>

                                        <input
                                            type="text"
                                            class="content-input"
                                            name="content[footer_phone]"
                                            value="{{ $items['footer_phone']->value ?? '+92 3261446249' }}"
                                        >

                                    </div>



                                    <div class="field-group">

                                        <label>
                                            Email
                                        </label>

                                        <input
                                            type="text"
                                            class="content-input"
                                            name="content[footer_email]"
                                            value="{{ $items['footer_email']->value ?? 'niazihostel234@.com' }}"
                                        >

                                    </div>



                                    <div class="field-group">

                                        <label>
                                            Address
                                        </label>

                                        <input
                                            type="text"
                                            class="content-input"
                                            name="content[footer_address]"
                                            value="{{ $items['footer_address']->value ?? 'Lahore, Pakistan' }}"
                                        >

                                    </div>


                                </div>


                            </div>


                        </div>



                        <div class="bottom-save">


                            <button
                                type="submit"
                                class="save-all-btn"
                            >

                                <i class="fa-solid fa-floppy-disk"></i>

                                Save All Changes

                            </button>


                        </div>


                    </form>


                @endif


            </section>


        </div>


    </main>


</div>


</body>

</html>