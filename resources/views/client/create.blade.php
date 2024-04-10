<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>تسجيل سلطان الجمبري</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Cairo:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Cairo, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit;
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 45px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 45px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }

        /* ==========================================================================
        #FONT
        ========================================================================== */
        .font-robo {
            font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
        }

        .font-poppins {
            font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
        }

        .font-opensans {
            font-family: "Cairo", "Arial", "Helvetica Neue", sans-serif;
        }

        /* ==========================================================================
        #GRID
        ========================================================================== */
        .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .row .col-2:last-child .input-group-desc {
            margin-bottom: 0;
        }

        .row-space {
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .row-refine {
            margin: 0 -15px;
        }

        .row-refine .col-3 .input-group-desc,
        .row-refine .col-9 .input-group-desc {
            margin-bottom: 0;
        }

        .col-2 {
            width: -webkit-calc((100% - 30px) / 2);
            width: -moz-calc((100% - 30px) / 2);
            width: calc((100% - 30px) / 2);
        }

        @media (max-width: 767px) {
            .col-2 {
                width: 100%;
            }
        }

        .form-row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .form-row .name {
            width: 125px;
            color: #555;
            font-size: 15px;
            font-weight: 700;
        }

        .form-row .value {
            width: -webkit-calc(100% - 125px);
            width: -moz-calc(100% - 125px);
            width: calc(100% - 125px);
        }

        @media (max-width: 767px) {
            .form-row {
                display: block;
            }

            .form-row .name,
            .form-row .value {
                display: block;
                width: 100%;
            }

            .form-row .name {
                margin-bottom: 7px;
            }
        }

        .col-3,
        .col-9 {
            padding: 0 15px;
            position: relative;
            width: 100%;
            min-height: 1px;
        }

        .col-3 {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 25%;
            -moz-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        @media (max-width: 767px) {
            .col-3 {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 35%;
                -moz-box-flex: 0;
                -ms-flex: 0 0 35%;
                flex: 0 0 35%;
                max-width: 35%;
            }
        }

        .col-9 {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 75%;
            -moz-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
        }

        @media (max-width: 767px) {
            .col-9 {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 65%;
                -moz-box-flex: 0;
                -ms-flex: 0 0 65%;
                flex: 0 0 65%;
                max-width: 65%;
            }
        }

        /* ==========================================================================
        #BOX-SIZING
        ========================================================================== */
        /**
        * More sensible default box-sizing:
        * css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice
        */
        html {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        * {
            padding: 0;
            margin: 0;
        }

        *,
        *:before,
        *:after {
            -webkit-box-sizing: inherit;
            -moz-box-sizing: inherit;
            box-sizing: inherit;
        }

        /* ==========================================================================
        #RESET
        ========================================================================== */
        /**
        * A very simple reset that sits on top of Normalize.css.
        */
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        blockquote,
        p,
        pre,
        dl,
        dd,
        ol,
        ul,
        figure,
        hr,
        fieldset,
        legend {
            margin: 0;
            padding: 0;
        }

        /**
        * Remove trailing margins from nested lists.
        */
        li>ol,
        li>ul {
            margin-bottom: 0;
        }

        /**
        * Remove default table spacing.
        */
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        /**
        * 1. Reset Chrome and Firefox behaviour which sets a `min-width: min-content;`
        *    on fieldsets.
        */
        fieldset {
            min-width: 0;
            /* [1] */
            border: 0;
        }

        button {
            outline: none;
            background: none;
            border: none;
        }

        /* ==========================================================================
        #PAGE WRAPPER
        ========================================================================== */
        .page-wrapper {
            min-height: 100vh;
        }

        body {
            font-family: "Cairo", "Arial", "Helvetica Neue", sans-serif;
            font-weight: 400;
            font-size: 14px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 400;
        }

        h1 {
            font-size: 36px;
        }

        h2 {
            font-size: 30px;
        }

        h3 {
            font-size: 24px;
        }

        h4 {
            font-size: 18px;
        }

        h5 {
            font-size: 15px;
        }

        h6 {
            font-size: 13px;
        }

        /* ==========================================================================
        #BACKGROUND
        ========================================================================== */
        .bg-blue {
            background: #2c6ed5;
        }

        .bg-red {
            background: #fa4251;
        }

        .bg-gra-01 {
            background: -webkit-gradient(linear, left bottom, left top, from(#fbc2eb), to(#a18cd1));
            background: -webkit-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
            background: -moz-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
            background: -o-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
            background: linear-gradient(to top, #fbc2eb 0%, #a18cd1 100%);
        }

        .bg-gra-02 {
            background: -webkit-gradient(linear, left bottom, right top, from(#fc2c77), to(#6c4079));
            background: -webkit-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
            background: -moz-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
            background: -o-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
            background: linear-gradient(to top right, #fc2c77 0%, #6c4079 100%);
        }

        .bg-gra-03 {
            background: -webkit-gradient(linear, left bottom, right top, from(#08aeea), to(#b721ff));
            background: -webkit-linear-gradient(bottom left, #08aeea 0%, #b721ff 100%);
            background: -moz-linear-gradient(bottom left, #08aeea 0%, #b721ff 100%);
            background: -o-linear-gradient(bottom left, #08aeea 0%, #b721ff 100%);
            background: linear-gradient(to top right, #08aeea 0%, #b721ff 100%);
        }

        /* ==========================================================================
        #SPACING
        ========================================================================== */
        .p-t-100 {
            padding-top: 100px;
        }

        .p-t-130 {
            padding-top: 130px;
        }

        .p-t-180 {
            padding-top: 180px;
        }

        .p-t-45 {
            padding-top: 45px;
        }

        .p-t-20 {
            padding-top: 20px;
        }

        .p-t-15 {
            padding-top: 15px;
        }

        .p-t-10 {
            padding-top: 10px;
        }

        .p-t-30 {
            padding-top: 30px;
        }

        .p-b-100 {
            padding-bottom: 100px;
        }

        .p-b-50 {
            padding-bottom: 45px;
        }

        .m-r-45 {
            margin-right: 45px;
        }

        .m-r-55 {
            margin-right: 55px;
        }

            {
            margin-bottom: 55px;
        }

        /* ==========================================================================
        #WRAPPER
        ========================================================================== */
        .wrapper {
            margin: 0 auto;
        }

        .wrapper--w960 {
            max-width: 960px;
        }

        .wrapper--w790 {
            max-width: 790px;
        }

        .wrapper--w780 {
            max-width: 780px;
        }

        .wrapper--w680 {
            max-width: 680px;
        }

        /* ==========================================================================
        #BUTTON
        ========================================================================== */
        .btn {
            display: inline-block;
            line-height: 45px;
            padding: 0 45px;
            -webkit-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            transition: all 0.4s ease;
            cursor: pointer;
            font-size: 15px;
            text-transform: uppercase;
            font-weight: 700;
            color: #fff;
            font-family: inherit;
        }

        .btn--radius {
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        .btn--radius-2 {
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .btn--pill {
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
        }

        .btn--green {
            background: #57b846;
        }

        .btn--green:hover {
            background: #4dae3c;
        }

        .btn--blue {
            background: #4272d7;
        }

        .btn--blue:hover {
            background: #3868cd;
        }

        .btn--red {
            background: #ff4b5a;
        }

        .btn--red:hover {
            background: #eb3746;
        }

        /* ==========================================================================
        #DATE PICKER
        ========================================================================== */
        td.active {
            background-color: #2c6ed5;
        }

        input[type="date" i] {
            padding: 14px;
        }

        .table-condensed td,
        .table-condensed th {
            font-size: 14px;
            font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
            font-weight: 400;
        }

        .daterangepicker td {
            width: 40px;
            height: 30px;
        }

        .daterangepicker {
            border: none;
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            display: none;
            border: 1px solid #e0e0e0;
            margin-top: 5px;
        }

        .daterangepicker::after,
        .daterangepicker::before {
            display: none;
        }

        .daterangepicker thead tr th {
            padding: 10px 0;
        }

        .daterangepicker .table-condensed th select {
            border: 1px solid #ccc;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            font-size: 14px;
            padding: 5px;
            outline: none;
        }

        /* ==========================================================================
        #FORM
        ========================================================================== */
        input {
            outline: none;
            margin: 0;
            border: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            width: 100%;
            font-size: 14px;
            font-family: inherit;
        }

        .radio-container {
            display: inline-block;
            position: relative;
            padding-left: 30px;
            cursor: pointer;
            font-size: 16px;
            color: #666;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .radio-container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .radio-container input:checked~.checkmark {
            background-color: #e5e5e5;
        }

        .radio-container input:checked~.checkmark:after {
            display: block;
        }

        .radio-container .checkmark:after {
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 12px;
            height: 12px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            background: #57b846;
        }

        .checkmark {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #e5e5e5;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            -webkit-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
            -moz-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
            box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .input--style-5 {
            background: #e5e5e5;
            height: 45px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            padding: 0 22px;
            font-size: 16px;
            color: #555;
            outline: none;
            border: none;
        }

        .input-group-desc {
            position: relative;
        }

        @media (max-width: 767px) {
            .input-group-desc {
                margin-bottom: 40px;
            }
        }

        .input-group {
            position: relative;
            margin: 0;
        }

        .label {
            color: #555;
            font-size: 15px;
            font-weight: 700;
        }

        .label--block {
            width: 100%;
        }

        .label--desc {
            position: absolute;
            text-transform: capitalize;
            display: block;
            color: #999;
            font-size: 14px;
            margin: 0;
            margin-top: 7px;
            left: 0;
        }

        /* ==========================================================================
        #SELECT2
        ========================================================================== */
        .select--no-search .select2-search {
            display: none !important;
        }

        .select2-container--open .select2-dropdown--below {
            border: none;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            border: 1px solid #e0e0e0;
            margin-top: 5px;
            overflow: hidden;
        }

        .select2-container--default .select2-results__option {
            padding-left: 22px;
        }

        .rs-select2 .select2-container {
            width: 100% !important;
            outline: none;
            background: #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .rs-select2 .select2-container .select2-selection--single {
            outline: none;
            border: none;
            height: 45px;
            background: transparent;
        }

        .rs-select2 .select2-container .select2-selection--single .select2-selection__rendered {
            height: 45px;
            padding-left: 0;
            color: #555;
            font-size: 16px;
            font-family: inherit;
            padding-left: 22px;
            padding-right: 45px;
        }

        .rs-select2 .select2-container .select2-selection--single .select2-selection__arrow {
            height: 45px;
            right: 15px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .rs-select2 .select2-container .select2-selection--single .select2-selection__arrow b {
            display: none;
        }

        .rs-select2 .select2-container .select2-selection--single .select2-selection__arrow:after {
            font-family: "Material-Design-Iconic-Font";
            content: '\f2f9';
            font-size: 24px;
            color: #999;
            -webkit-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .rs-select2 .select2-container.select2-container--open .select2-selection--single .select2-selection__arrow::after {
            -webkit-transform: rotate(-180deg);
            -moz-transform: rotate(-180deg);
            -ms-transform: rotate(-180deg);
            -o-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }

        /* ==========================================================================
        #TITLE
        ========================================================================== */
        .title {
            font-size: 24px;
            text-transform: uppercase;
            font-weight: 700;
            text-align: center;
            color: #fff;
        }

        /* ==========================================================================
        #CARD
        ========================================================================== */
        .card {
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            background: #fff;
        }

        .card-5 {
            background: #fff;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        }

        .card-5 .card-heading {
            padding: 20px 0;
            background: #1a1a1a;
            -webkit-border-top-left-radius: 10px;
            -moz-border-radius-topleft: 10px;
            border-top-left-radius: 10px;
            -webkit-border-top-right-radius: 10px;
            -moz-border-radius-topright: 10px;
            border-top-right-radius: 10px;
            background-size: 100%;
            height: 160px;
            background-position: center
        }

        .card-5 .card-body {
            padding: 52px 85px;
            padding-bottom: 73px;
        }

        @media (max-width: 767px) {
            .card-5 .card-body {
                padding: 40px 30px;
                padding-bottom: 45px;
            }
        }

        .my-input {
            all: revert;
            box-sizing: border-box;
            width: 100%;
            background: #e5e5e5;
            height: 45px;
            padding: 0 22px;
            font-size: 16px;
            color: #555;
            outline: none;
            border: none;
            font-family: "Cairo";
            -moz-appearance: textfield;
        }

        .my-input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        .my-btn {
            all: revert;
            box-sizing: border-box;
            height: 45px;
            width: 45px;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }

        .my-submit {
            background: #2c2965;
        }

        .my-submit[disabled] {
            background: #b1b1b1;
            cursor: auto;
        }

        #resources {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin: 20px 0;
        }

        #resources td, #resources th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #resources tr:nth-child(even){background-color: #f2f2f2;}

        #resources tr:hover {background-color: #ddd;}

        #resources th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #21205c;
        color: white;
        }
    </style>
</head>

<body class="antialiased bg-dots-darker">
    <div class="page-wrapper p-t-45 p-b-50" id="app">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <!-- <div class="card-heading" style="background-image: url('{{ asset('assets/banner.jpg') }}')"></div> -->
                <div class="card-body">
                    <div class="form-row">
                        <div class="name">الاسم <br /> Name</div>
                        <div class="value">
                            <div class="input-group-desc">
                                <input class="input--style-5" type="text" name="name" placeholder="الاسم"
                                    required v-model="name">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">رقم التليفون <br /> Phone number</div>
                        <div class="value">
                            <div class="input-group-desc">
                                <input class="input--style-5" type="number" name="phone" placeholder="رقم التليفون"
                                    required v-model="phone">
                            </div>
                        </div>
                    </div>

                    <div style="display: flex; justify-content: end">
                        <button class="btn btn--radius-2 my-submit" @click.prevent="register"
                            :disabled="disabled">تسجيل / Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script>
        const {
            createApp,
            ref,
            computed
        } = Vue

        createApp({
            setup() {

                const name = ref('');
                const phone = ref('');

                const loading = ref(false)
                const disabled = computed(() => {
                    return loading.value || !name.value || !phone.value
                })

                const register = () => {
                    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    loading.value = true;

                    fetch("{{ route('client') }}", {
                        method: "POST",
                        headers: {
                            "Content-type": "application/json; charset=UTF-8",
                            'X-CSRF-TOKEN': token
                        },
                        body: JSON.stringify({
                            name: name.value,
                            phone: phone.value,
                        }),
                    }).then(res => {
                        if (res.status === 200) {
                            name.value = '';
                            phone.value = '';
                        } else {
                            throw new Error('Request failed!');
                        }
                    }).catch(err => {
                        alert('حدث خطأ برجاء المحاولة مرة أخرى')
                        window.location.reload()
                    }).finally(() => {
                        loading.value = false;
                    });
                }

                return {
                    name,
                    phone,
                    register,
                    disabled,
                }
            }
        }).mount('#app')
    </script>
</body>

</html>
