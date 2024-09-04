<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet
  <!-- Google tag (gtag.js) -->
  <script async defer src="https://www.googletagmanager.com/gtag/js?id=G-PNM05H2BF7"></script>
  <script>
    setTimeout(function() {
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'G-PNM05H2BF7');
    }, 2000); // Delay in milliseconds
  </script>
  <style>
    ::-webkit-scrollbar {
      width: 6px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #222222;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      border-radius: 6px;
      background: #ff5b46;
    }

    #loading-screen {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .loading-spinner {
      border: solid 4px #ff5b4647;
      border-left-color: #ff5b46;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }


    @charset "UTF-8";

    :root {
      --bs-blue: #0d6efd;
      --bs-indigo: #6610f2;
      --bs-purple: #6f42c1;
      --bs-pink: #d63384;
      --bs-red: #dc3545;
      --bs-orange: #fd7e14;
      --bs-yellow: #ffc107;
      --bs-green: #198754;
      --bs-teal: #20c997;
      --bs-cyan: #0dcaf0;
      --bs-black: #000;
      --bs-white: #fff;
      --bs-gray: #6c757d;
      --bs-gray-dark: #343a40;
      --bs-gray-100: #f8f9fa;
      --bs-gray-200: #e9ecef;
      --bs-gray-300: #dee2e6;
      --bs-gray-400: #ced4da;
      --bs-gray-500: #adb5bd;
      --bs-gray-600: #6c757d;
      --bs-gray-700: #495057;
      --bs-gray-800: #343a40;
      --bs-gray-900: #212529;
      --bs-primary: #0d6efd;
      --bs-secondary: #6c757d;
      --bs-success: #198754;
      --bs-info: #0dcaf0;
      --bs-warning: #ffc107;
      --bs-danger: #dc3545;
      --bs-light: #f8f9fa;
      --bs-dark: #212529;
      --bs-primary-rgb: 13, 110, 253;
      --bs-secondary-rgb: 108, 117, 125;
      --bs-success-rgb: 25, 135, 84;
      --bs-info-rgb: 13, 202, 240;
      --bs-warning-rgb: 255, 193, 7;
      --bs-danger-rgb: 220, 53, 69;
      --bs-light-rgb: 248, 249, 250;
      --bs-dark-rgb: 33, 37, 41;
      --bs-primary-text-emphasis: #052c65;
      --bs-secondary-text-emphasis: #2b2f32;
      --bs-success-text-emphasis: #0a3622;
      --bs-info-text-emphasis: #055160;
      --bs-warning-text-emphasis: #664d03;
      --bs-danger-text-emphasis: #58151c;
      --bs-light-text-emphasis: #495057;
      --bs-dark-text-emphasis: #495057;
      --bs-primary-bg-subtle: #cfe2ff;
      --bs-secondary-bg-subtle: #e2e3e5;
      --bs-success-bg-subtle: #d1e7dd;
      --bs-info-bg-subtle: #cff4fc;
      --bs-warning-bg-subtle: #fff3cd;
      --bs-danger-bg-subtle: #f8d7da;
      --bs-light-bg-subtle: #fcfcfd;
      --bs-dark-bg-subtle: #ced4da;
      --bs-primary-border-subtle: #9ec5fe;
      --bs-secondary-border-subtle: #c4c8cb;
      --bs-success-border-subtle: #a3cfbb;
      --bs-info-border-subtle: #9eeaf9;
      --bs-warning-border-subtle: #ffe69c;
      --bs-danger-border-subtle: #f1aeb5;
      --bs-light-border-subtle: #e9ecef;
      --bs-dark-border-subtle: #adb5bd;
      --bs-white-rgb: 255, 255, 255;
      --bs-black-rgb: 0, 0, 0;
      --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
      --bs-body-font-family: var(--bs-font-sans-serif);
      --bs-body-font-size: 1rem;
      --bs-body-font-weight: 400;
      --bs-body-line-height: 1.5;
      --bs-body-color: #212529;
      --bs-body-color-rgb: 33, 37, 41;
      --bs-body-bg: #fff;
      --bs-body-bg-rgb: 255, 255, 255;
      --bs-emphasis-color: #000;
      --bs-emphasis-color-rgb: 0, 0, 0;
      --bs-secondary-color: rgba(33, 37, 41, 0.75);
      --bs-secondary-color-rgb: 33, 37, 41;
      --bs-secondary-bg: #e9ecef;
      --bs-secondary-bg-rgb: 233, 236, 239;
      --bs-tertiary-color: rgba(33, 37, 41, 0.5);
      --bs-tertiary-color-rgb: 33, 37, 41;
      --bs-tertiary-bg: #f8f9fa;
      --bs-tertiary-bg-rgb: 248, 249, 250;
      --bs-heading-color: inherit;
      --bs-link-color: #0d6efd;
      --bs-link-color-rgb: 13, 110, 253;
      --bs-link-decoration: underline;
      --bs-link-hover-color: #0a58ca;
      --bs-link-hover-color-rgb: 10, 88, 202;
      --bs-code-color: #d63384;
      --bs-highlight-color: #212529;
      --bs-highlight-bg: #fff3cd;
      --bs-border-width: 1px;
      --bs-border-style: solid;
      --bs-border-color: #dee2e6;
      --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
      --bs-border-radius: 0.375rem;
      --bs-border-radius-sm: 0.25rem;
      --bs-border-radius-lg: 0.5rem;
      --bs-border-radius-xl: 1rem;
      --bs-border-radius-xxl: 2rem;
      --bs-border-radius-2xl: var(--bs-border-radius-xxl);
      --bs-border-radius-pill: 50rem;
      --bs-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
      --bs-box-shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
      --bs-box-shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.175);
      --bs-box-shadow-inset: inset 0 1px 2px rgba(0, 0, 0, 0.075);
      --bs-focus-ring-width: 0.25rem;
      --bs-focus-ring-opacity: 0.25;
      --bs-focus-ring-color: rgba(13, 110, 253, 0.25);
      --bs-form-valid-color: #198754;
      --bs-form-valid-border-color: #198754;
      --bs-form-invalid-color: #dc3545;
      --bs-form-invalid-border-color: #dc3545
    }

    *,
    ::after,
    ::before {
      box-sizing: border-box
    }

    @media (prefers-reduced-motion:no-preference) {
      :root {
        scroll-behavior: smooth
      }
    }

    body {
      margin: 0;
      font-family: var(--bs-body-font-family);
      font-size: var(--bs-body-font-size);
      font-weight: var(--bs-body-font-weight);
      line-height: var(--bs-body-line-height);
      color: var(--bs-body-color);
      text-align: var(--bs-body-text-align);
      background-color: var(--bs-body-bg);
      -webkit-text-size-adjust: 100%;
      -webkit-tap-highlight-color: transparent
    }

    hr {
      margin: 1rem 0;
      color: inherit;
      border: 0;
      border-top: var(--bs-border-width) solid;
      opacity: .25
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin-top: 0;
      margin-bottom: .5rem;
      font-weight: 500;
      line-height: 1.2;
      color: var(--bs-heading-color)
    }

    .h1,
    h1 {
      font-size: calc(1.375rem + 1.5vw)
    }

    @media (min-width:1200px) {

      .h1,
      h1 {
        font-size: 2.5rem
      }
    }

    .h2,
    h2 {
      font-size: calc(1.325rem + .9vw)
    }

    @media (min-width:1200px) {

      .h2,
      h2 {
        font-size: 2rem
      }
    }

    .h3,
    h3 {
      font-size: calc(1.3rem + .6vw)
    }

    @media (min-width:1200px) {

      .h3,
      h3 {
        font-size: 1.75rem
      }
    }

    .h4,
    h4 {
      font-size: calc(1.275rem + .3vw)
    }

    @media (min-width:1200px) {

      .h4,
      h4 {
        font-size: 1.5rem
      }
    }

    .h5,
    h5 {
      font-size: 1.25rem
    }

    .h6,
    h6 {
      font-size: 1rem
    }

    p {
      margin-top: 0;
      margin-bottom: 1rem
    }

    address {
      margin-bottom: 1rem;
      font-style: normal;
      line-height: inherit
    }

    ul {
      padding-left: 2rem
    }

    ul {
      margin-top: 0;
      margin-bottom: 1rem
    }

    ul ul {
      margin-bottom: 0
    }

    strong {
      font-weight: bolder
    }

    a {
      color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
      text-decoration: underline
    }

    a:hover {
      --bs-link-color-rgb: var(--bs-link-hover-color-rgb)
    }

    a:not([href]):not([class]),
    a:not([href]):not([class]):hover {
      color: inherit;
      text-decoration: none
    }

    img,
    svg {
      vertical-align: middle
    }

    table {
      caption-side: bottom;
      border-collapse: collapse
    }

    label {
      display: inline-block
    }

    button {
      border-radius: 0
    }

    button:focus:not(:focus-visible) {
      outline: 0
    }

    button,
    input,
    select,
    textarea {
      margin: 0;
      font-family: inherit;
      font-size: inherit;
      line-height: inherit
    }

    button,
    select {
      text-transform: none
    }

    [role=button] {
      cursor: pointer
    }

    select {
      word-wrap: normal
    }

    select:disabled {
      opacity: 1
    }

    [type=button],
    [type=submit],
    button {
      -webkit-appearance: button
    }

    [type=button]:not(:disabled),
    [type=submit]:not(:disabled),
    button:not(:disabled) {
      cursor: pointer
    }

    ::-moz-focus-inner {
      padding: 0;
      border-style: none
    }

    textarea {
      resize: vertical
    }

    ::-webkit-datetime-edit-day-field,
    ::-webkit-datetime-edit-fields-wrapper,
    ::-webkit-datetime-edit-hour-field,
    ::-webkit-datetime-edit-minute,
    ::-webkit-datetime-edit-month-field,
    ::-webkit-datetime-edit-text,
    ::-webkit-datetime-edit-year-field {
      padding: 0
    }

    ::-webkit-inner-spin-button {
      height: auto
    }

    ::-webkit-search-decoration {
      -webkit-appearance: none
    }

    ::-webkit-color-swatch-wrapper {
      padding: 0
    }

    ::-webkit-file-upload-button {
      font: inherit;
      -webkit-appearance: button
    }

    ::file-selector-button {
      font: inherit;
      -webkit-appearance: button
    }

    [hidden] {
      display: none !important
    }

    .lead {
      font-size: 1.25rem;
      font-weight: 300
    }

    .display-4 {
      font-size: calc(1.475rem + 2.7vw);
      font-weight: 300;
      line-height: 1.2
    }

    @media (min-width:1200px) {
      .display-4 {
        font-size: 3.5rem
      }
    }

    .img-fluid {
      max-width: 100%;
      height: auto
    }

    .container,
    .container-fluid {
      --bs-gutter-x: 1.5rem;
      --bs-gutter-y: 0;
      width: 100%;
      padding-right: calc(var(--bs-gutter-x) * .5);
      padding-left: calc(var(--bs-gutter-x) * .5);
      margin-right: auto;
      margin-left: auto
    }

    @media (min-width:576px) {
      .container {
        max-width: 540px
      }
    }

    @media (min-width:768px) {
      .container {
        max-width: 720px
      }
    }

    @media (min-width:992px) {
      .container {
        max-width: 960px
      }
    }

    @media (min-width:1200px) {
      .container {
        max-width: 1140px
      }
    }

    @media (min-width:1400px) {
      .container {
        max-width: 1320px
      }
    }

    :root {
      --bs-breakpoint-xs: 0;
      --bs-breakpoint-sm: 576px;
      --bs-breakpoint-md: 768px;
      --bs-breakpoint-lg: 992px;
      --bs-breakpoint-xl: 1200px;
      --bs-breakpoint-xxl: 1400px
    }

    .row {
      --bs-gutter-x: 1.5rem;
      --bs-gutter-y: 0;
      display: flex;
      flex-wrap: wrap;
      margin-top: calc(-1 * var(--bs-gutter-y));
      margin-right: calc(-.5 * var(--bs-gutter-x));
      margin-left: calc(-.5 * var(--bs-gutter-x))
    }

    .row>* {
      flex-shrink: 0;
      width: 100%;
      max-width: 100%;
      padding-right: calc(var(--bs-gutter-x) * .5);
      padding-left: calc(var(--bs-gutter-x) * .5);
      margin-top: var(--bs-gutter-y)
    }

    .col-6 {
      flex: 0 0 auto;
      width: 50%
    }

    .col-11 {
      flex: 0 0 auto;
      width: 91.66666667%
    }

    .col-12 {
      flex: 0 0 auto;
      width: 100%
    }

    .offset-1 {
      margin-left: 8.33333333%
    }

    .g-0 {
      --bs-gutter-x: 0
    }

    .g-0 {
      --bs-gutter-y: 0
    }

    @media (min-width:576px) {
      .col-sm-6 {
        flex: 0 0 auto;
        width: 50%
      }
    }

    @media (min-width:768px) {
      .col-md-3 {
        flex: 0 0 auto;
        width: 25%
      }

      .col-md-4 {
        flex: 0 0 auto;
        width: 33.33333333%
      }

      .col-md-5 {
        flex: 0 0 auto;
        width: 41.66666667%
      }

      .col-md-8 {
        flex: 0 0 auto;
        width: 66.66666667%
      }

      .col-md-12 {
        flex: 0 0 auto;
        width: 100%
      }
    }

    @media (min-width:992px) {
      .col-lg-2 {
        flex: 0 0 auto;
        width: 16.66666667%
      }

      .col-lg-3 {
        flex: 0 0 auto;
        width: 25%
      }

      .col-lg-4 {
        flex: 0 0 auto;
        width: 33.33333333%
      }

      .col-lg-5 {
        flex: 0 0 auto;
        width: 41.66666667%
      }

      .col-lg-6 {
        flex: 0 0 auto;
        width: 50%
      }

      .col-lg-7 {
        flex: 0 0 auto;
        width: 58.33333333%
      }
    }

    .table {
      --bs-table-color-type: initial;
      --bs-table-bg-type: initial;
      --bs-table-color-state: initial;
      --bs-table-bg-state: initial;
      --bs-table-color: var(--bs-emphasis-color);
      --bs-table-bg: var(--bs-body-bg);
      --bs-table-border-color: var(--bs-border-color);
      --bs-table-accent-bg: transparent;
      --bs-table-striped-color: var(--bs-emphasis-color);
      --bs-table-striped-bg: rgba(var(--bs-emphasis-color-rgb), 0.05);
      --bs-table-active-color: var(--bs-emphasis-color);
      --bs-table-active-bg: rgba(var(--bs-emphasis-color-rgb), 0.1);
      --bs-table-hover-color: var(--bs-emphasis-color);
      --bs-table-hover-bg: rgba(var(--bs-emphasis-color-rgb), 0.075);
      width: 100%;
      margin-bottom: 1rem;
      vertical-align: top;
      border-color: var(--bs-table-border-color)
    }

    .table>:not(caption)>*>* {
      padding: .5rem .5rem;
      color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
      background-color: var(--bs-table-bg);
      border-bottom-width: var(--bs-border-width);
      box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)))
    }

    .form-control {
      display: block;
      width: 100%;
      padding: .375rem .75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: var(--bs-body-color);
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      background-color: var(--bs-body-bg);
      background-clip: padding-box;
      border: var(--bs-border-width) solid var(--bs-border-color);
      border-radius: var(--bs-border-radius);
      transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
      .form-control {
        transition: none
      }
    }

    .form-control:focus {
      color: var(--bs-body-color);
      background-color: var(--bs-body-bg);
      border-color: #86b7fe;
      outline: 0;
      box-shadow: 0 0 0 .25rem rgba(13, 110, 253, .25)
    }

    .form-control::-webkit-date-and-time-value {
      min-width: 85px;
      height: 1.5em;
      margin: 0
    }

    .form-control::-webkit-datetime-edit {
      display: block;
      padding: 0
    }

    .form-control::-moz-placeholder {
      color: var(--bs-secondary-color);
      opacity: 1
    }

    .form-control::placeholder {
      color: var(--bs-secondary-color);
      opacity: 1
    }

    .form-control:disabled {
      background-color: var(--bs-secondary-bg);
      opacity: 1
    }

    .form-control::-webkit-file-upload-button {
      padding: .375rem .75rem;
      margin: -.375rem -.75rem;
      -webkit-margin-end: .75rem;
      margin-inline-end: .75rem;
      color: var(--bs-body-color);
      background-color: var(--bs-tertiary-bg);
      pointer-events: none;
      border-color: inherit;
      border-style: solid;
      border-width: 0;
      border-inline-end-width: var(--bs-border-width);
      border-radius: 0;
      -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
      transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    .form-control::file-selector-button {
      padding: .375rem .75rem;
      margin: -.375rem -.75rem;
      -webkit-margin-end: .75rem;
      margin-inline-end: .75rem;
      color: var(--bs-body-color);
      background-color: var(--bs-tertiary-bg);
      pointer-events: none;
      border-color: inherit;
      border-style: solid;
      border-width: 0;
      border-inline-end-width: var(--bs-border-width);
      border-radius: 0;
      transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
      .form-control::-webkit-file-upload-button {
        -webkit-transition: none;
        transition: none
      }

      .form-control::file-selector-button {
        transition: none
      }
    }

    .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
      background-color: var(--bs-secondary-bg)
    }

    .form-control:hover:not(:disabled):not([readonly])::file-selector-button {
      background-color: var(--bs-secondary-bg)
    }

    textarea.form-control {
      min-height: calc(1.5em + .75rem + calc(var(--bs-border-width) * 2))
    }

    .form-select {
      --bs-form-select-bg-img: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
      display: block;
      width: 100%;
      padding: .375rem 2.25rem .375rem .75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: var(--bs-body-color);
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      background-color: var(--bs-body-bg);
      background-image: var(--bs-form-select-bg-img), var(--bs-form-select-bg-icon, none);
      background-repeat: no-repeat;
      background-position: right .75rem center;
      background-size: 16px 12px;
      border: var(--bs-border-width) solid var(--bs-border-color);
      border-radius: var(--bs-border-radius);
      transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
      .form-select {
        transition: none
      }
    }

    .form-select:focus {
      border-color: #86b7fe;
      outline: 0;
      box-shadow: 0 0 0 .25rem rgba(13, 110, 253, .25)
    }

    .form-select:disabled {
      background-color: var(--bs-secondary-bg)
    }

    .form-select:-moz-focusring {
      color: transparent;
      text-shadow: 0 0 0 var(--bs-body-color)
    }

    .btn-lg {
      --bs-btn-padding-y: 0.5rem;
      --bs-btn-padding-x: 1rem;
      --bs-btn-font-size: 1.25rem;
      --bs-btn-border-radius: var(--bs-border-radius-lg)
    }

    .fade {
      transition: opacity .15s linear
    }

    @media (prefers-reduced-motion:reduce) {
      .fade {
        transition: none
      }
    }

    .fade:not(.show) {
      opacity: 0
    }

    .collapse:not(.show) {
      display: none
    }

    .dropdown {
      position: relative
    }

    .dropdown-toggle {
      white-space: nowrap
    }

    .dropdown-toggle::after {
      display: inline-block;
      margin-left: .255em;
      vertical-align: .255em;
      content: "";
      border-top: .3em solid;
      border-right: .3em solid transparent;
      border-bottom: 0;
      border-left: .3em solid transparent
    }

    .dropdown-toggle:empty::after {
      margin-left: 0
    }

    .nav {
      --bs-nav-link-padding-x: 1rem;
      --bs-nav-link-padding-y: 0.5rem;
      --bs-nav-link-font-weight: ;
      --bs-nav-link-color: var(--bs-link-color);
      --bs-nav-link-hover-color: var(--bs-link-hover-color);
      --bs-nav-link-disabled-color: var(--bs-secondary-color);
      display: flex;
      flex-wrap: wrap;
      padding-left: 0;
      margin-bottom: 0;
      list-style: none
    }

    .nav-link {
      display: block;
      padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
      font-size: var(--bs-nav-link-font-size);
      font-weight: var(--bs-nav-link-font-weight);
      color: var(--bs-nav-link-color);
      text-decoration: none;
      background: 0 0;
      border: 0;
      transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
      .nav-link {
        transition: none
      }
    }

    .nav-link:focus,
    .nav-link:hover {
      color: var(--bs-nav-link-hover-color)
    }

    .nav-link:focus-visible {
      outline: 0;
      box-shadow: 0 0 0 .25rem rgba(13, 110, 253, .25)
    }

    .nav-link.disabled,
    .nav-link:disabled {
      color: var(--bs-nav-link-disabled-color);
      pointer-events: none;
      cursor: default
    }

    .nav-tabs {
      --bs-nav-tabs-border-width: var(--bs-border-width);
      --bs-nav-tabs-border-color: var(--bs-border-color);
      --bs-nav-tabs-border-radius: var(--bs-border-radius);
      --bs-nav-tabs-link-hover-border-color: var(--bs-secondary-bg) var(--bs-secondary-bg) var(--bs-border-color);
      --bs-nav-tabs-link-active-color: var(--bs-emphasis-color);
      --bs-nav-tabs-link-active-bg: var(--bs-body-bg);
      --bs-nav-tabs-link-active-border-color: var(--bs-border-color) var(--bs-border-color) var(--bs-body-bg);
      border-bottom: var(--bs-nav-tabs-border-width) solid var(--bs-nav-tabs-border-color)
    }

    .nav-tabs .nav-link {
      margin-bottom: calc(-1 * var(--bs-nav-tabs-border-width));
      border: var(--bs-nav-tabs-border-width) solid transparent;
      border-top-left-radius: var(--bs-nav-tabs-border-radius);
      border-top-right-radius: var(--bs-nav-tabs-border-radius)
    }

    .nav-tabs .nav-link:focus,
    .nav-tabs .nav-link:hover {
      isolation: isolate;
      border-color: var(--bs-nav-tabs-link-hover-border-color)
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
      color: var(--bs-nav-tabs-link-active-color);
      background-color: var(--bs-nav-tabs-link-active-bg);
      border-color: var(--bs-nav-tabs-link-active-border-color)
    }

    .tab-content>.tab-pane {
      display: none
    }

    .tab-content>.active {
      display: block
    }

    .navbar {
      --bs-navbar-padding-x: 0;
      --bs-navbar-padding-y: 0.5rem;
      --bs-navbar-color: rgba(var(--bs-emphasis-color-rgb), 0.65);
      --bs-navbar-hover-color: rgba(var(--bs-emphasis-color-rgb), 0.8);
      --bs-navbar-disabled-color: rgba(var(--bs-emphasis-color-rgb), 0.3);
      --bs-navbar-active-color: rgba(var(--bs-emphasis-color-rgb), 1);
      --bs-navbar-brand-padding-y: 0.3125rem;
      --bs-navbar-brand-margin-end: 1rem;
      --bs-navbar-brand-font-size: 1.25rem;
      --bs-navbar-brand-color: rgba(var(--bs-emphasis-color-rgb), 1);
      --bs-navbar-brand-hover-color: rgba(var(--bs-emphasis-color-rgb), 1);
      --bs-navbar-nav-link-padding-x: 0.5rem;
      --bs-navbar-toggler-padding-y: 0.25rem;
      --bs-navbar-toggler-padding-x: 0.75rem;
      --bs-navbar-toggler-font-size: 1.25rem;
      --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      --bs-navbar-toggler-border-color: rgba(var(--bs-emphasis-color-rgb), 0.15);
      --bs-navbar-toggler-border-radius: var(--bs-border-radius);
      --bs-navbar-toggler-focus-width: 0.25rem;
      --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
      position: relative;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x)
    }

    .navbar>.container,
    .navbar>.container-fluid {
      display: flex;
      flex-wrap: inherit;
      align-items: center;
      justify-content: space-between
    }

    .navbar-brand {
      padding-top: var(--bs-navbar-brand-padding-y);
      padding-bottom: var(--bs-navbar-brand-padding-y);
      margin-right: var(--bs-navbar-brand-margin-end);
      font-size: var(--bs-navbar-brand-font-size);
      color: var(--bs-navbar-brand-color);
      text-decoration: none;
      white-space: nowrap
    }

    .navbar-brand:focus,
    .navbar-brand:hover {
      color: var(--bs-navbar-brand-hover-color)
    }

    .navbar-nav {
      --bs-nav-link-padding-x: 0;
      --bs-nav-link-padding-y: 0.5rem;
      --bs-nav-link-font-weight: ;
      --bs-nav-link-color: var(--bs-navbar-color);
      --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
      --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
      display: flex;
      flex-direction: column;
      padding-left: 0;
      margin-bottom: 0;
      list-style: none
    }

    .navbar-nav .nav-link.active,
    .navbar-nav .nav-link.show {
      color: var(--bs-navbar-active-color)
    }

    .navbar-collapse {
      flex-basis: 100%;
      flex-grow: 1;
      align-items: center
    }

    .navbar-toggler {
      padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
      font-size: var(--bs-navbar-toggler-font-size);
      line-height: 1;
      color: var(--bs-navbar-color);
      background-color: transparent;
      border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
      border-radius: var(--bs-navbar-toggler-border-radius);
      transition: var(--bs-navbar-toggler-transition)
    }

    @media (prefers-reduced-motion:reduce) {
      .navbar-toggler {
        transition: none
      }
    }

    .navbar-toggler:hover {
      text-decoration: none
    }

    .navbar-toggler:focus {
      text-decoration: none;
      outline: 0;
      box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width)
    }

    .navbar-toggler-icon {
      display: inline-block;
      width: 1.5em;
      height: 1.5em;
      vertical-align: middle;
      background-image: var(--bs-navbar-toggler-icon-bg);
      background-repeat: no-repeat;
      background-position: center;
      background-size: 100%
    }


    .testimonial_slider.owl-carousel .owl-nav {
      position: absolute;
      top: 43%;
      transform: translateY(-50%);
      width: 100%;
    }

    .testimonial_slider.owl-carousel .owl-nav button {
      background: transparent !important;
    }

    .testimonial_slider.owl-carousel .owl-nav button img {
      width: 30px !important;
    }

    .testimonial_slider.owl-carousel .owl-nav .owl-prev {
      left: 0%;
      top: 11px;
      position: absolute;
    }

    .testimonial_slider .owl-item {
      padding: 0px 0.5%;
    }

    .testimonial_slider.owl-carousel .owl-nav .owl-next {
      top: 0;
      right: 0%;
      position: absolute;
    }

    @media (min-width:992px) {
      .navbar-expand-lg {
        flex-wrap: nowrap;
        justify-content: flex-start
      }

      .navbar-expand-lg .navbar-nav {
        flex-direction: row
      }

      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x)
      }

      .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto
      }

      .navbar-expand-lg .navbar-toggler {
        display: none
      }
    }

    .accordion {
      --bs-accordion-color: var(--bs-body-color);
      --bs-accordion-bg: var(--bs-body-bg);
      --bs-accordion-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
      --bs-accordion-border-color: var(--bs-border-color);
      --bs-accordion-border-width: var(--bs-border-width);
      --bs-accordion-border-radius: var(--bs-border-radius);
      --bs-accordion-inner-border-radius: calc(var(--bs-border-radius) - (var(--bs-border-width)));
      --bs-accordion-btn-padding-x: 1.25rem;
      --bs-accordion-btn-padding-y: 1rem;
      --bs-accordion-btn-color: var(--bs-body-color);
      --bs-accordion-btn-bg: var(--bs-accordion-bg);
      --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='none' stroke='%23212529' stroke-linecap='round' stroke-linejoin='round'%3e%3cpath d='M2 5L8 11L14 5'/%3e%3c/svg%3e");
      --bs-accordion-btn-icon-width: 1.25rem;
      --bs-accordion-btn-icon-transform: rotate(-180deg);
      --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
      --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='none' stroke='%23052c65' stroke-linecap='round' stroke-linejoin='round'%3e%3cpath d='M2 5L8 11L14 5'/%3e%3c/svg%3e");
      --bs-accordion-btn-focus-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
      --bs-accordion-body-padding-x: 1.25rem;
      --bs-accordion-body-padding-y: 1rem;
      --bs-accordion-active-color: var(--bs-primary-text-emphasis);
      --bs-accordion-active-bg: var(--bs-primary-bg-subtle)
    }

    .accordion-button {
      position: relative;
      display: flex;
      align-items: center;
      width: 100%;
      padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
      font-size: 1rem;
      color: var(--bs-accordion-btn-color);
      text-align: left;
      background-color: var(--bs-accordion-btn-bg);
      border: 0;
      border-radius: 0;
      overflow-anchor: none;
      transition: var(--bs-accordion-transition)
    }

    @media (prefers-reduced-motion:reduce) {
      .accordion-button {
        transition: none
      }
    }

    .accordion-button:not(.collapsed) {
      color: var(--bs-accordion-active-color);
      background-color: var(--bs-accordion-active-bg);
      box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color)
    }

    .accordion-button:not(.collapsed)::after {
      background-image: var(--bs-accordion-btn-active-icon);
      transform: var(--bs-accordion-btn-icon-transform)
    }

    .accordion-button::after {
      flex-shrink: 0;
      width: var(--bs-accordion-btn-icon-width);
      height: var(--bs-accordion-btn-icon-width);
      margin-left: auto;
      content: "";
      background-image: var(--bs-accordion-btn-icon);
      background-repeat: no-repeat;
      background-size: var(--bs-accordion-btn-icon-width);
      transition: var(--bs-accordion-btn-icon-transition)
    }

    @media (prefers-reduced-motion:reduce) {
      .accordion-button::after {
        transition: none
      }
    }

    .accordion-button:hover {
      z-index: 2
    }

    .accordion-button:focus {
      z-index: 3;
      outline: 0;
      box-shadow: var(--bs-accordion-btn-focus-box-shadow)
    }

    .accordion-header {
      margin-bottom: 0
    }

    .accordion-item {
      color: var(--bs-accordion-color);
      background-color: var(--bs-accordion-bg);
      border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color)
    }

    .accordion-item:first-of-type {
      border-top-left-radius: var(--bs-accordion-border-radius);
      border-top-right-radius: var(--bs-accordion-border-radius)
    }

    .accordion-item:first-of-type>.accordion-header .accordion-button {
      border-top-left-radius: var(--bs-accordion-inner-border-radius);
      border-top-right-radius: var(--bs-accordion-inner-border-radius)
    }

    .accordion-item:not(:first-of-type) {
      border-top: 0
    }

    .accordion-item:last-of-type {
      border-bottom-right-radius: var(--bs-accordion-border-radius);
      border-bottom-left-radius: var(--bs-accordion-border-radius)
    }

    .accordion-item:last-of-type>.accordion-header .accordion-button.collapsed {
      border-bottom-right-radius: var(--bs-accordion-inner-border-radius);
      border-bottom-left-radius: var(--bs-accordion-inner-border-radius)
    }

    .accordion-item:last-of-type>.accordion-collapse {
      border-bottom-right-radius: var(--bs-accordion-border-radius);
      border-bottom-left-radius: var(--bs-accordion-border-radius)
    }

    .accordion-body {
      padding: var(--bs-accordion-body-padding-y) var(--bs-accordion-body-padding-x)
    }

    .accordion-flush>.accordion-item {
      border-right: 0;
      border-left: 0;
      border-radius: 0
    }

    .accordion-flush>.accordion-item:first-child {
      border-top: 0
    }

    .accordion-flush>.accordion-item:last-child {
      border-bottom: 0
    }

    .accordion-flush>.accordion-item>.accordion-header .accordion-button,
    .accordion-flush>.accordion-item>.accordion-header .accordion-button.collapsed {
      border-radius: 0
    }

    .accordion-flush>.accordion-item>.accordion-collapse {
      border-radius: 0
    }

    @keyframes progress-bar-stripes {
      0% {
        background-position-x: 1rem
      }
    }

    .spinner-border,
    .spinner-grow {
      display: inline-block;
      width: var(--bs-spinner-width);
      height: var(--bs-spinner-height);
      vertical-align: var(--bs-spinner-vertical-align);
      border-radius: 50%;
      animation: var(--bs-spinner-animation-speed) linear infinite var(--bs-spinner-animation-name)
    }

    @keyframes spinner-border {
      to {
        transform: rotate(360deg)
      }
    }

    .spinner-border {
      --bs-spinner-width: 2rem;
      --bs-spinner-height: 2rem;
      --bs-spinner-vertical-align: -0.125em;
      --bs-spinner-border-width: 0.25em;
      --bs-spinner-animation-speed: 0.75s;
      --bs-spinner-animation-name: spinner-border;
      border: var(--bs-spinner-border-width) solid currentcolor;
      border-right-color: transparent
    }

    @keyframes spinner-grow {
      0% {
        transform: scale(0)
      }

      50% {
        opacity: 1;
        transform: none
      }
    }

    .spinner-grow {
      --bs-spinner-width: 2rem;
      --bs-spinner-height: 2rem;
      --bs-spinner-vertical-align: -0.125em;
      --bs-spinner-animation-speed: 0.75s;
      --bs-spinner-animation-name: spinner-grow;
      background-color: currentcolor;
      opacity: 0
    }

    @media (prefers-reduced-motion:reduce) {

      .spinner-border,
      .spinner-grow {
        --bs-spinner-animation-speed: 1.5s
      }
    }

    .placeholder {
      display: inline-block;
      min-height: 1em;
      vertical-align: middle;
      cursor: wait;
      background-color: currentcolor;
      opacity: .5
    }

    @keyframes placeholder-glow {
      50% {
        opacity: .2
      }
    }

    @keyframes placeholder-wave {
      100% {
        -webkit-mask-position: -200% 0%;
        mask-position: -200% 0%
      }
    }

    .float-end {
      float: right !important
    }

    .opacity-75 {
      opacity: .75 !important
    }

    .overflow-x-hidden {
      overflow-x: hidden !important
    }

    .d-block {
      display: block !important
    }

    .d-grid {
      display: grid !important
    }

    .d-flex {
      display: flex !important
    }

    .d-none {
      display: none !important
    }

    .position-relative {
      position: relative !important
    }

    .position-absolute {
      position: absolute !important
    }

    .top-0 {
      top: 0 !important
    }

    .start-0 {
      left: 0 !important
    }

    .border {
      border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important
    }

    .border-0 {
      border: 0 !important
    }

    .border-top {
      border-top: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important
    }

    .border-bottom {
      border-bottom: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important
    }

    .w-25 {
      width: 25% !important
    }

    .w-100 {
      width: 100% !important
    }

    .h-100 {
      height: 100% !important
    }

    .flex-column {
      flex-direction: column !important
    }

    .flex-column-reverse {
      flex-direction: column-reverse !important
    }

    .flex-wrap {
      flex-wrap: wrap !important
    }

    .justify-content-start {
      justify-content: flex-start !important
    }

    .justify-content-end {
      justify-content: flex-end !important
    }

    .justify-content-center {
      justify-content: center !important
    }

    .justify-content-between {
      justify-content: space-between !important
    }

    .align-items-start {
      align-items: flex-start !important
    }

    .align-items-end {
      align-items: flex-end !important
    }

    .align-items-center {
      align-items: center !important
    }

    .m-0 {
      margin: 0 !important
    }

    .mx-auto {
      margin-right: auto !important;
      margin-left: auto !important
    }

    .my-1 {
      margin-top: .25rem !important;
      margin-bottom: .25rem !important
    }

    .my-2 {
      margin-top: .5rem !important;
      margin-bottom: .5rem !important
    }

    .mt-0 {
      margin-top: 0 !important
    }

    .mt-3 {
      margin-top: 1rem !important
    }

    .mt-4 {
      margin-top: 1.5rem !important
    }

    .mt-5 {
      margin-top: 3rem !important
    }

    .me-3 {
      margin-right: 1rem !important
    }

    .me-auto {
      margin-right: auto !important
    }

    .mb-0 {
      margin-bottom: 0 !important
    }

    .mb-2 {
      margin-bottom: .5rem !important
    }

    .mb-3 {
      margin-bottom: 1rem !important
    }

    .mb-4 {
      margin-bottom: 1.5rem !important
    }

    .mb-5 {
      margin-bottom: 3rem !important
    }

    .p-0 {
      padding: 0 !important
    }

    .px-0 {
      padding-right: 0 !important;
      padding-left: 0 !important
    }

    .px-5 {
      padding-right: 3rem !important;
      padding-left: 3rem !important
    }

    .py-3 {
      padding-top: 1rem !important;
      padding-bottom: 1rem !important
    }

    .py-4 {
      padding-top: 1.5rem !important;
      padding-bottom: 1.5rem !important
    }

    .pt-0 {
      padding-top: 0 !important
    }

    .pt-1 {
      padding-top: .25rem !important
    }

    .pt-2 {
      padding-top: .5rem !important
    }

    .pt-3 {
      padding-top: 1rem !important
    }

    .pt-4 {
      padding-top: 1.5rem !important
    }

    .pt-5 {
      padding-top: 3rem !important
    }

    .pe-4 {
      padding-right: 1.5rem !important
    }

    .pb-2 {
      padding-bottom: .5rem !important
    }

    .pb-3 {
      padding-bottom: 1rem !important
    }

    .pb-4 {
      padding-bottom: 1.5rem !important
    }

    .pb-5 {
      padding-bottom: 3rem !important
    }

    .gap-1 {
      gap: .25rem !important
    }

    .gap-2 {
      gap: .5rem !important
    }

    .gap-3 {
      gap: 1rem !important
    }

    .gap-4 {
      gap: 1.5rem !important
    }

    .gap-5 {
      gap: 3rem !important
    }

    .row-gap-5 {
      row-gap: 3rem !important
    }

    .fs-4 {
      font-size: calc(1.275rem + .3vw) !important
    }

    .fs-6 {
      font-size: 1rem !important
    }

    .fst-italic {
      font-style: italic !important
    }

    .fw-medium {
      font-weight: 500 !important
    }

    .fw-semibold {
      font-weight: 600 !important
    }

    .fw-bold {
      font-weight: 700 !important
    }

    .fw-bolder {
      font-weight: bolder !important
    }

    .lh-lg {
      line-height: 2 !important
    }

    .text-center {
      text-align: center !important
    }

    .text-decoration-none {
      text-decoration: none !important
    }

    .text-uppercase {
      text-transform: uppercase !important
    }

    .text-capitalize {
      text-transform: capitalize !important
    }

    .text-danger {
      --bs-text-opacity: 1;
      color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important
    }

    .text-light {
      --bs-text-opacity: 1;
      color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important
    }

    .text-white {
      --bs-text-opacity: 1;
      color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important
    }

    .bg-black {
      --bs-bg-opacity: 1;
      background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important
    }

    .bg-transparent {
      --bs-bg-opacity: 1;
      background-color: transparent !important
    }

    .bg-body-tertiary {
      --bs-bg-opacity: 1;
      background-color: rgba(var(--bs-tertiary-bg-rgb), var(--bs-bg-opacity)) !important
    }

    .rounded-2 {
      border-radius: var(--bs-border-radius) !important
    }

    .rounded-3 {
      border-radius: var(--bs-border-radius-lg) !important
    }

    .visible {
      visibility: visible !important
    }

    .z-1 {
      z-index: 1 !important
    }

    .z-2 {
      z-index: 2 !important
    }

    .z-3 {
      z-index: 3 !important
    }

    @media (min-width:576px) {
      .d-sm-flex {
        display: flex !important
      }
    }

    @media (min-width:768px) {
      .d-md-inline {
        display: inline !important
      }

      .d-md-block {
        display: block !important
      }

      .d-md-flex {
        display: flex !important
      }

      .d-md-none {
        display: none !important
      }

      .justify-content-md-start {
        justify-content: flex-start !important
      }

      .justify-content-md-between {
        justify-content: space-between !important
      }

      .align-items-md-center {
        align-items: center !important
      }

      .mx-md-0 {
        margin-right: 0 !important;
        margin-left: 0 !important
      }

      .my-md-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important
      }

      .mt-md-5 {
        margin-top: 3rem !important
      }

      .pt-md-4 {
        padding-top: 1.5rem !important
      }

      .pt-md-5 {
        padding-top: 3rem !important
      }

      .pb-md-4 {
        padding-bottom: 1.5rem !important
      }

      .gap-md-2 {
        gap: .5rem !important
      }

      .gap-md-4 {
        gap: 1.5rem !important
      }
    }

    @media (min-width:992px) {
      .d-lg-block {
        display: block !important
      }

      .d-lg-none {
        display: none !important
      }

      .flex-lg-row {
        flex-direction: row !important
      }

      .justify-content-lg-center {
        justify-content: center !important
      }

      .justify-content-lg-between {
        justify-content: space-between !important
      }

      .mt-lg-0 {
        margin-top: 0 !important
      }

      .mb-lg-0 {
        margin-bottom: 0 !important
      }

      .ms-lg-auto {
        margin-left: auto !important
      }

      .pt-lg-3 {
        padding-top: 1rem !important
      }

      .gap-lg-2 {
        gap: .5rem !important
      }

      .text-lg-start {
        text-align: left !important
      }
    }

    @media (min-width:1400px) {
      .gap-xxl-5 {
        gap: 3rem !important
      }
    }

    @media (min-width:1200px) {
      .fs-4 {
        font-size: 1.5rem !important
      }


    }

    @import url("https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&family=Viga&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&family=Viga&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&family=Viga&display=swap");

    html {
      overflow-x: hidden;
    }

    img {
      max-width: 100%;
    }

    body {
      font-size: 16px;
      overflow-x: hidden;
      position: relative;
    }

    .arrow {
      bottom: 0;
    }

    .brand img {
      border-radius: 20px;
    }

    .text-shadow {
      text-shadow: 3px 3px 0 #ffffff, 3px 3px 0 #686868, 3px 3px 0 rgb(72 72 72), 4px 3px rgb(102 102 102), 4px 4px rgb(145 145 145) !important;
    }

    .fs-22 {
      font-size: 22px;
    }

    .fs-24 {
      font-size: 24px !important;
    }

    .fs-13 {
      font-size: 13px;
    }

    .fs-70 {
      font-size: 70px;
    }

    .fw-700 {
      font-weight: 700;
    }

    .fw-800 {
      font-weight: 800;
    }

    .theme-color {
      color: #ff7b6a !important;
    }

    .dim-black {
      color: #222222;
    }

    .light-yellow {
      color: #ffdd00;
    }

    .pb-88 {
      padding-bottom: 88px;
    }

    .pb-88 {
      padding-bottom: 88px;
    }

    .pb-70 {
      padding-bottom: 70px;
    }

    .mb-70 {
      margin-bottom: 70px;
    }

    .mb-30 {
      margin-bottom: 30px;
    }

    .mb-24 {
      margin-bottom: 24px;
    }

    .mt-35 {
      margin-top: 35px;
    }

    .mt-30 {
      margin-top: 30px;
    }

    .mb-30 {
      margin-bottom: 30px;
    }

    .ws-nowrap {
      white-space: nowrap;
    }

    .banner_content h1.text-shadow,
    .text-shadow {
      text-shadow: 3px 3px 0 #ffffff, 3px 3px 0 #686868, 3px 3px 0 rgb(72 72 72), 4px 3px rgb(102 102 102), 4px 4px rgb(145 145 145) !important;
    }

    .contact {
      overflow-x: hidden !important;
    }

    .custom-submenu ul.dropdown li {
      list-style-type: none;
    }

    .navbar {
      position: relative;
    }

    .drop-inner-list li {
      margin-top: 40px;
    }

    .drop-inner-list li a {
      color: #222222;
    }

    .drop-inner-list.drop-inner-2 li:first-child {
      margin-top: -119px;
    }

    .close-icon i {
      display: none;
      position: absolute;
      top: 10px;
      left: 18px;
      width: 30px;
      height: 30px;
      border: 1px solid #000;
    }

    .drop-inner-list img {
      max-width: 30px;
    }

    .custom-submenu {
      transition: all 0.6s ease-in-out !important;
    }

    .bg_navbar {
      padding-top: 12px !important;
      padding-bottom: 12px !important;
    }

    .drop-inner-list a {
      padding-bottom: 0 !important;
    }

    .custom-submenu .dropdown-toggle {
      padding-bottom: 49px;
      background: transparent;
      color: #222222 !important;
      text-decoration: none;
    }

    .dropdown.secondry-navs {
      position: absolute;
      top: 91%;
      left: 0;
      background-color: #fff;
      padding: 10px;
      border: 1px solid #ddd;
      z-index: 999;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s, visibility 0.3s;
      width: 100% !important;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
      padding-bottom: 60px;
    }

    .custom-submenu:hover .dropdown.secondry-navs {
      opacity: 1;
      visibility: visible;
    }

    .dropdown.secondry-navs {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s ease-in-out;
    }

    .custom-submenu:hover .dropdown.secondry-navs {
      max-height: 100vh;
    }

    .mad-portfolio-sec {
      overflow-x: hidden;
    }

    .mad-portfolio-sec .container {
      padding-bottom: 75px;
    }

    .mad-busniess-icon-wrap {
      width: 60px;
      height: 60px;
      border-radius: 10px;
      background-color: #f8f8f8;
    }

    .drop-inner-list li a {
      text-decoration: none !important;
    }

    .portfolio-slide-props {
      background-size: contain;
      background-repeat: no-repeat;
      height: 871px;
    }

    .portfolio-slide-1 {
      background-image: url(../images/home/slider/portfolio-app-1.png);
    }

    .mad-portfolio-sec {
      margin-left: 287px;
    }

    .slide-content-2 {
      padding: 130px 0 0 0;
    }

    .slide-content-2-right-wrap {
      bottom: 80px;
    }

    .main-portfolio-slider-wrap {
      height: 808px;
    }

    .slide-content-all p {
      font-size: 18px;
    }

    .hd-gradiant {
      font-family: "Viga", sans-serif;
      font-size: 40px;
      background: linear-gradient(98.81deg, #53e88b -0.82%, #15be77 101.53%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .hd-ssm {
      font-family: "Inter", sans-serif;
      font-size: 13px;
      font-weight: 600;
      color: #09051c;
    }

    .web-dev-portfolio-sec .portfolio-slide-1 {
      background-image: unset;
      background-color: #84722f;
      max-width: 1350px;
      margin-top: 100px;
      border-radius: 24px;
    }

    .web-dev-portfolio-sec .main-portfolio-slider-wrap {
      height: 987px;
      overflow: hidden;
    }

    .web-dev-portfolio-sec .portfolio-slide-1 .pizza-img {
      top: 131px;
      left: 322px;
      max-width: 548px;
      min-height: 584px;
      object-fit: cover;
    }

    .web-dev-portfolio-sec .portfolio-slide-1 .right-img {
      right: 208px;
      bottom: -138px;
      top: unset;
      max-width: 590px;
      object-fit: contain;
      min-height: 823px;
    }

    .web-dev-portfolio-sec .portfolio-slide-1 .right-img {
      right: 166px;
    }

    .web-dev-portfolio-sec .portfolio-slide-1 .left-img {
      top: -67px;
      right: 0;
      min-height: 573px;
      max-width: 590px;
      padding-right: 0;
    }

    .web-dev-portfolio-sec .portfolio-slide-1 .california-pizza-img {
      max-width: 230px;
    }

    .portfolio-slide-props .offset-1 {
      margin-left: 87px !important;
    }

    .portfolio-slide-1.food-ninja-cover-img {
      background-image: url(../images/food-ninja-portfolio-cover.webp);
      margin-bottom: 34px;
      background-color: transparent;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .portfolio_box.foodninja-cover h4 {
      font-size: 70px;
    }

    .portfolio_box.foodninja-cover.custom {
      padding-top: 268px;
    }

    footer {
      padding: 50px 0 0;
    }

    .footer_list li a {
      color: #222222;
      text-decoration: none;
    }

    .footer_list li a:hover {
      color: #ff5b46;
    }

    .main-blogs-image {
      border-top-left-radius: 30px !important;
      border-top-right-radius: 30px !important;
      min-height: 307px !important;
      object-fit: cover;
    }

    .faq2 .accordion_body ul {
      padding-left: 0 !important;
    }

    .main-form-label {
      font-family: "Poppins", sans-serif !important;
      color: #fff !important;
      margin-bottom: 2px;
      font-size: 16px;
      line-height: 33px;
    }

    .main-contact-sec-form-wrap {
      background-color: #181e22;
      padding: 40px;
    }

    .main-form-input {
      margin-bottom: 0 !important;
      padding: 6px 12px !important;
      background-color: #3d3d3d !important;
      height: 56.12px;
      font-weight: 600;
      font-size: 15px;
      line-height: 22px;
      color: #fff;
      margin-bottom: 4px;
      border: 0.828017px solid rgba(255, 255, 255, 0.35);
    }

    .main-form-input:focus {
      box-shadow: none;
      border-color: rgba(255, 255, 255, 0.35);
    }

    .main-form-input::placeholder {
      font-size: 15px;
    }

    .main-bottom-center-content {
      min-height: 210px;
    }

    .form-select-wrap select {
      background-color: #181e22;
      color: #fff;
      background: url("../images/select-arrow-down.webp") no-repeat right;
    }

    .form-select-wrap select option {
      background-color: #fff;
    }

    .main-form-input.text-area {
      height: 109px;
      resize: none;
    }

    .main-contact-sec-form-wrap .mb-30 {
      margin-bottom: 16px;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    input[type="number"] {
      -moz-appearance: textfield;
    }

    .theme-color.dark {
      color: #ff5b46 !important;
    }

    @keyframes slideDown {
      0% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(20px);
      }

      0% {
        transform: translateY(0px);
      }
    }

    .main-contact-sec-form-wrap .orange_btn_hover:hover {
      transform: unset;
    }

    .orange_bg {
      border: 1px solid transparent !important;
    }

    .portfolio-slide-1.food-ninja-cover-img.finance-cover-img {
      background-image: url("../images/finance-case-study/finance-app-cover-img.webp");
    }

    .portfolio-slide-1.food-ninja-cover-img.ecommerce-cover-img {
      background-image: url("../images/ecommerce-case-study/ecommerce-app-cover-img.webp");
    }

    .portfolio-slide-1.food-ninja-cover-img.coffeebeen-cover-img {
      background-image: url("../images/coffeebeen-case-study/coffeebeen-cover-img.webp");
    }

    .coffee-been-logo-wrap d-flex justify-content-center d-md-block mb-2 mb-md-0 img {
      margin-bottom: 10px;
    }

    .video-wrapper video {
      height: 493px;
      width: 100%;
      object-fit: cover;
    }

    video::-webkit-media-controls {
      visibility: hidden;
    }

    video::-webkit-media-controls-enclosure {
      visibility: visible;
    }

    .quote-btn {
      border-radius: 7px;
      text-decoration: none;
      padding: 15px 40px;
    }

    @media (min-width: 1900px) and (max-width: 1930px) {
      .main-form-input {
        height: 76.12px;
      }

      .main-form-label {
        font-size: 21px;
        line-height: 47px;
      }

      .main-form-input.text-area {
        height: 199.32px;
      }

      .main-form-input::placeholder {
        font-size: 21px;
      }

      .main-contact-sec-form-wrap {
        padding: 60px;
      }

      .xxl-mt-50 {
        margin-top: 50px;
      }
    }

    @media (min-width: 1921px) {
      .portfolio-slide-1.food-ninja-cover-img {
        min-height: 100vh;
        max-width: 100vw;
      }

      .web-dev-portfolio-sec .portfolio-slide-1 {
        max-width: 100vw;
      }
    }

    @media (min-width: 2000px) and (max-width: 2099px) {
      .mad-portfolio-sec {
        margin-left: 335px;
      }
    }

    @media (min-width: 2100px) and (max-width: 2199px) {
      .mad-portfolio-sec {
        margin-left: 385px;
      }
    }

    @media (min-width: 2200px) and (max-width: 2299px) {
      .mad-portfolio-sec {
        margin-left: 432px;
      }
    }

    @media (min-width: 2300px) and (max-width: 2399px) {
      .mad-portfolio-sec {
        margin-left: 486px;
      }
    }

    @media (min-width: 2400px) and (max-width: 2499px) {
      .mad-portfolio-sec {
        margin-left: 531px;
      }
    }

    @media (min-width: 2500px) and (max-width: 2599px) {
      .mad-portfolio-sec {
        margin-left: 604px;
      }
    }

    @media (max-width: 1440px) {
      .slide-content-all h4 {
        font-size: 32px;
      }

      .portfolio_box.foodninja-cover h4,
      .web-dev-portfolio-sec .slide-content-all h4 {
        font-size: 50px;
      }

      .mad-portfolio-sec {
        margin-left: 50px;
      }

      .main-portfolio-slider-wrap {
        overflow-y: hidden;
      }

      .web-dev-portfolio-sec .portfolio-slide-1 .pizza-img {
        left: 222px;
        top: 164px;
      }
    }

    @media (max-width: 1366px) {
      .web-dev-portfolio-sec .portfolio-slide-1 .pizza-img {
        left: 199px;
        top: 162px;
      }

      .portfolio_box.foodninja-cover h4,
      .web-dev-portfolio-sec .slide-content-all h4 {
        font-size: 40px;
      }

      .portfolio-slide-props .offset-1 {
        margin-left: 42px !important;
      }

      .portfolio-slide-1.food-ninja-cover-img {
        margin-bottom: -93px;
      }

      .mad-portfolio-sec {
        margin-left: 104px;
      }

      .testimonial_slider img {
        margin: 0 auto;
        max-width: 350px;
      }

      .testimonial_slider.owl-carousel .owl-nav .owl-next {
        right: -35px;
      }
    }

    @media (max-width: 1336px) {
      .mad-portfolio-sec {
        margin-left: 93px;
      }

      .testimonial_slider.owl-carousel .owl-nav {
        top: 50%;
      }
    }

    @media (max-width: 1280px) {
      .mad-portfolio-sec {
        margin-left: 68px;
        padding: 50px 0;
      }

      .web-dev-portfolio-sec .portfolio-slide-1 .right-img {
        max-width: 499px;
        bottom: -161px;
      }

      .web-dev-portfolio-sec .portfolio-slide-1 .pizza-img {
        max-width: 430px;
        min-height: 457px;
        left: 238px;
        top: 197px;
      }
    }

    @media (max-width: 1200px) {
      .mad-portfolio-sec {
        margin-left: 31px;
      }

      .web-dev-portfolio-sec .portfolio-slide-1 .right-img {
        bottom: -182px;
      }

      .web-dev-portfolio-sec .portfolio-slide-1 .left-img {
        max-width: 510px;
      }

      .web-dev-portfolio-sec .portfolio-slide-1 .pizza-img {
        left: 159px;
        top: 257px;
      }

      .portfolio_box.foodninja-cover h4,
      .web-dev-portfolio-sec .slide-content-all h4 {
        font-size: 35px;
      }
    }

    @media (max-width: 1024px) {
      .web-dev-portfolio-sec .portfolio-slide-1 .right-img {
        right: 93px;
      }

      .web-dev-portfolio-sec .portfolio-slide-1 .pizza-img {
        left: 183px;
      }

      .hero-banner .orange_box {
        max-width: 99px;
      }
    }

    @media (max-width: 992px) {
      .brand img {
        max-width: 200px;
      }

      .ws-nowrap {
        white-space: wrap;
      }

      .mad-portfolio-sec {
        margin-left: 0;
      }

      .secondry-navs {
        transform: translate(-100%);
        flex-direction: column;
        position: fixed;
        top: 0;
        left: 0;
        width: 250px;
        height: 100%;
        transition: all ease-in-out 1s;
        justify-content: unset !important;
        padding-top: 9rem;
        z-index: 99;
        border-top-right-radius: 20px;
      }

      .secondry-navs li {
        margin-bottom: 2rem;
      }

      .secondry-navs.active {
        transform: translate(0);
        background-color: #fff;
        box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
        height: 100vh;
        display: block;
        overflow-y: auto;
        top: 0;
        padding-top: 44px;
        padding-left: 16px;
      }

      .close-icon i {
        display: flex !important;
        justify-content: center;
        align-items: center;
        border-radius: 100%;
      }

      .drop-inner-list {
        padding-left: 0;
      }

      .drop-inner-list li {
        margin-top: 30px !important;
      }

      .drop-inner-list.drop-inner-2 li:first-child {
        margin-top: 4px !important;
      }

      .dropdown.secondry-navs,
      .custom-submenu:hover .dropdown.secondry-navs {
        opacity: unset;
        visibility: unset;
        max-height: unset;
      }

      .services-drop {
        display: none;
      }

      .dropdown-toggle.menu-toggle {
        padding-bottom: 0;
      }

      .main-portfolio-slider-wrap {
        height: 637px;
      }

      .portfolio_button img {
        max-width: 200px !important;
      }

      .portfolio_btn p {
        font-size: 18px;
      }
    }

    @media (max-width: 768px) {
      .pb-88 {
        padding-bottom: 50px;
      }

      .nav2 ul {
        width: 100% !important;
      }

      .navbar-collapse button {
        margin: 0 auto;
        display: flex;
      }

      .testimonial {
        padding: 40px 0;
      }

      .border_orange2.sm-height-reduce {
        height: 5px;
      }

      .navbar-nav {
        align-items: center !important;
      }

      .slide-content-2-right-wrap .portfolio_button {
        flex-direction: column;
        align-items: center;
      }

      .slide-content-all {
        text-align: center;
      }

      .portfolio-slide-props .offset-1 {
        margin-left: 0;
      }

      .portfolio-slide-props {
        background-size: cover;
        background-position: center;
        height: 871px;
      }

      .main-portfolio-slider-wrap {
        height: 903px;
      }

      .slide-content-2 {
        padding: 0;
      }

      .slide-content-all h4 {
        font-size: 24px;
      }

      .slide-content-2-right-wrap {
        position: unset !important;
      }

      .slide-content-2-right-wrap {
        bottom: unset;
      }

      .main-portfolio-overlay {
        position: absolute;
        height: 93%;
        width: 100%;
        background-color: #00000045;
        z-index: 1;
        bottom: 0;
      }

      .portfolio-slide-props {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }

      .portfolio-slide-1.food-ninja-cover-img {
        height: 700px;
        margin-bottom: -4px;
        border-radius: 30px;
      }

      .portfolio-slide-1.food-ninja-cover-img .main-portfolio-overlay {
        height: 100%;
        border-radius: 30px;
      }

      .portfolio-slide-1.food-ninja-cover-img .row {
        justify-content: center;
        align-items: center;
      }

      .portfolio-slide-1.food-ninja-cover-img .portfolio_button {
        flex-direction: column;
      }

      .portfolio-slide-1.food-ninja-cover-img .offset-1 {
        margin-left: 0 !important;
      }

      .main-portfolio-overlay.height-100 {
        height: 100%;
        border-radius: 30px;
      }

      .sm-j-center {
        justify-content: center !important;
      }

      .portfolio-slide-props .offset-1 {
        margin-left: 0 !important;
      }

      .sm-m-auto {
        margin: 0 auto;
      }

      .sm-flex {
        display: flex;
      }

      .web-dev-portfolio-sec .portfolio-slide-1 .pizza-img {
        left: 119px;
        top: 27px;
      }

      .portfolio-slide-props {
        height: 694px;
        overflow: hidden;
      }

      .web-dev-portfolio-sec .main-portfolio-slider-wrap {
        height: 819px;
      }

      .web-dev-portfolio-sec .portfolio-slide-1 {
        margin-top: 30px;
      }

      .portfolio_box.foodninja-cover h4 {
        font-size: 34px;
      }

      .web-dev-portfolio-sec .main-portfolio-slider-wrap {
        height: 759px;
      }

      .main-contact-sec-form-wrap {
        padding: 20px;
      }

      .banner_content.mx-auto {
        margin-left: auto !important;
        margin-right: auto !important;
      }

      .nav2 .quote-btn {
        margin: 0 auto !important;
        display: flex;
        max-width: 180px;
      }

      .circle_banner,
      .flip_image {
        display: none;
      }
    }

    @media (max-width: 575px) {
      .banner_content h1 {
        font-size: 32px;
      }

      .mad-portfolio-sec .container,
      .mad-portfolio-sec {
        padding: 50px 0;
      }

      .mad-business-sec .mb-70 {
        margin-bottom: 30px;
      }

      .mad-portfolio-sec {
        padding: 0;
      }

      .counters_sec {
        padding-bottom: 30px !important;
      }
    }

    .mad-busniess-icon-parent:hover .mad-busniess-icon-wrap {
      background-color: #ff5b46;
    }

    @import url("https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&display=swap");

    * {
      font-family: "Albert Sans", sans-serif;
      color: #222222;
    }

    button {
      border-radius: 8px !important;
      white-space: nowrap;
    }

    body {
      scroll-behavior: smooth;
      font-size: 16px;
    }

    .sec_head {
      font-size: 55px;
      line-height: 70px;
    }

    .faq_head {
      font-size: 50px !important;
      line-height: 65px;
      white-space: nowrap;
    }

    .accordion-item button {
      white-space: wrap !important;
    }

    .fw-medium {
      font-weight: 500;
    }

    .fw-semibold {
      font-weight: 600;
    }

    .fw-bold,
    .fw-bolder {
      font-weight: 700;
    }

    .overflow-x-hidden {
      overflow-x: hidden !important;
    }

    .z-1 {
      z-index: 1;
    }

    .z-2 {
      z-index: 2;
    }

    .z-3 {
      z-index: 3;
    }

    .bg-black {
      background: #000000;
    }

    .opacity-75 {
      opacity: 0.75;
    }

    @keyframes zoomInOut {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.2);
      }

      100% {
        transform: scale(1);
      }
    }

    .zoom-in-out {
      animation: zoomInOut 10s ease infinite alternate;
    }

    @keyframes moveLeftRight {
      0% {
        transform: translateX(-5px);
      }

      50% {
        transform: translateX(-30px);
      }

      100% {
        transform: translateX(0);
      }
    }

    .move-left-right {
      animation: moveLeftRight 7s ease infinite alternate;
    }

    .arrow {
      position: absolute;
      max-width: 50px !important;
      left: 0%;
      right: 0%;
      bottom: 10%;
      margin: 0 auto;
      animation: arrowAnimation 2s linear infinite;
      width: 50px;
    }

    .big_para {
      font-size: 22px;
      line-height: 35px;
    }

    .additional-content {
      overflow: hidden;
      line-height: 1.5em;
      height: 7.5em;
    }

    @keyframes zoomInOutCirlce {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.2);
      }

      100% {
        transform: scale(1);
      }
    }

    .zoom-in-out-circle {
      animation: zoomInOutCirlce 4s ease infinite alternate;
    }

    img.right_circle_1 {
      position: absolute;
      top: 10px;
      left: -9px;
    }

    img.right_circle_2 {
      position: absolute;
      top: -48px;
      right: 37px;
    }

    img.right_circle_3 {
      position: absolute;
      bottom: -270px;
      right: -10px;
    }

    .services .content p {
      line-height: 35px;
    }

    .accordion-body {
      padding: 10px 0;
    }

    @keyframes arrowAnimation {
      0% {
        opacity: 1;
      }

      50%,
      100% {
        opacity: 0;
      }
    }

    .counters_sec h2 {
      line-height: 65px;
    }

    .vidtxt img {
      width: 92px;
      height: 92px;
      cursor: pointer;
    }

    .vidtxt .video-circle1,
    .vidtxt .video-circle2,
    .vidtxt .video-circle3 {
      border-radius: 200px;
      bottom: 0;
      left: 0;
      z-index: -1;
      animation: 4s cubic-bezier(0.36, 0.11, 0.89, 0.32) infinite scaleIn;
    }

    .vidtxt .video-circle1,
    .vidtxt .video-circle2,
    .vidtxt .video-circle3 {
      position: absolute;
      background: #ffffff;
      width: 92px;
      height: 92px;
    }

    @keyframes scaleIn {
      0% {
        transform: scale(0.5, 0.5);
        opacity: 0.5;
      }

      100% {
        transform: scale(1.5, 1.5);
        opacity: 0;
      }
    }

    .partner_box {
      margin-bottom: 50px;
    }

    .partner_box p.fs-6 {
      line-height: 25px;
    }

    .partner_box_row {
      padding: 80px 0 0;
    }

    .example {
      padding: 50px 0;
    }

    .example p {
      line-height: 30px;
    }

    .serve {
      padding: 100px 0 0;
    }

    .faq2 {
      padding: 75px 0;
    }

    .faq2 .accordion-button {
      padding: 25px 0;
      border-radius: 0 !important;
    }

    .question {
      font-size: 22px;
      line-height: 30px;
    }

    .blogs {
      padding: 75px 0 0;
    }

    .blog_btn:hover rect {
      fill: #ff5b46 !important;
    }

    .contact {
      padding: 150px 0 0;
    }

    h2 {
      color: #222222;
    }

    p {
      margin: 0;
    }

    .text-justify {
      text-align: justify;
    }

    .about h2 {
      font-size: 45px;
      line-height: 60px;
    }

    .about p {
      line-height: 40px;
    }

    h2 span {
      position: relative;
      text-shadow: 3px 3px 0 #ffffff, 3px 3px 0 #424242, 3px 3px 0 rgb(255 255 255 / 30%), 4px 3px rgb(255 255 255 / 30%), 4px 4px rgb(255 255 255 / 30%) !important;
    }

    .contact h4 {
      font-size: 55px;
      line-height: 60px;
      width: 90%;
    }

    .contact h4 span {
      position: relative;
      color: white;
    }

    .border_orange {
      position: absolute !important;
      height: 15px;
      width: 99%;
      background: #ff5b46;
      bottom: 6px;
      left: 0;
      z-index: -1;
    }

    .border_orange3 {
      position: absolute !important;
      height: 15px;
      width: 0;
      background: #ff5b46;
      bottom: 6px;
      left: 0;
      z-index: -1;
      animation: expandBorder 6s linear infinite;
    }

    @keyframes expandBorder {
      0% {
        width: 0;
      }

      50% {
        width: 99%;
      }

      100% {
        width: 0%;
      }
    }

    .example_span {
      position: relative !important;
    }

    .border_orange2 {
      position: absolute !important;
      height: 15px;
      width: 99%;
      background: #ff5b46;
      bottom: 6px;
      left: 0;
      z-index: -1;
    }

    .nav2 {
      max-width: 950px;
    }

    .banner_bg_color {
      background: #f9f9f9;
    }

    .orange_text {
      color: #ff5b46;
    }

    .orange_bg {
      background: #ff5b46;
      border: 1px solid transparent;
    }

    .black_text {
      color: #222222;
    }

    .black_bg {
      background: #222222;
    }

    .black_btn_hover:hover {
      background: transparent;
      border: 1px solid #222222 !important;
      color: #222222 !important;
      transform: scale(0.9);
      transition: 0.3s all ease-in-out;
    }

    .orange_btn_hover:hover {
      background: transparent;
      border: 1px solid #ff5b46 !important;
      color: #ff5b46 !important;
      transform: scale(0.9);
      transition: 0.3s all ease-in-out;
      border-radius: 8px !important;
    }

    .bg_navbar {
      background: #ffffff;
      border-radius: 7px;
      padding: 15px 30px;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    nav ul li {
      font-weight: 600;
      color: #222222;
    }

    .nav_logo {
      max-width: 55px;
    }

    .nav-link {
      color: #222222 !important;
    }

    .nav-link:hover {
      color: #ff5b46 !important;
    }

    .banner_content h1 {
      font-weight: 600;
      font-size: 55px;
      line-height: 85px;
      color: #222222;
      opacity: 1;
      text-shadow: 3px 3px 0 #bebebe, 3px 3px 0 #424242, 3px 3px 0 rgb(255 255 255 / 30%), 4px 3px rgb(255 255 255 / 30%), 4px 4px rgb(255 255 255 / 30%) !important;
    }

    .banner_content h1 span {
      color: #ff5b46;
    }

    .flip_image {
      height: 522px;
      object-fit: cover;
      width: 100%;
      z-index: 3;
    }

    .circle_banner {
      left: 10%;
      bottom: 10px;
      opacity: 0.5;
      width: 100%;
      max-width: 550px;
      z-index: 1;
    }

    .orange_circle {
      max-width: 160px;
      left: -14%;
      top: 1%;
    }

    .orange_box {
      max-width: 170px;
      bottom: 2%;
      left: -16%;
    }

    .counter {
      color: #ff5b46;
      text-shadow: 3px 3px 0 #ffffff, 3px 3px 0 #686868, 3px 3px 0 rgb(72 72 72), 4px 3px rgb(102 102 102), 4px 4px rgb(145 145 145) !important;
    }

    .counterBox {
      max-width: 300px;
      margin-left: auto;
    }

    .counterBox h4 {
      font-size: 60px;
    }

    .counterBox p {
      max-width: max-content;
    }

    .services {
      padding: 90px 0 0;
    }

    button.portfolio_btn {
      width: 100% !important;
      max-width: 100% !important;
      background: transparent;
      color: white;
      width: 200px;
      border: none;
      display: flex;
      justify-content: end;
      margin-top: 110px;
    }

    .accordion-button.collapsed::after {
      background: url("../images/plus.svg");
      background-repeat: no-repeat !important;
    }

    .accordion-button:not(.collapsed)::after {
      background: url("../images/minus.svg") !important;
      background-repeat: no-repeat !important;
    }

    .accordion-button:not(.collapsed) {
      background-color: transparent !important;
    }

    .accordion-button {
      box-shadow: none !important;
      border-bottom: 1px solid;
    }

    .collapse,
    .show {
      transition: 1.2s all ease-in-out !important;
    }

    .accordion-item {
      border: none !important;
    }

    .faq_sec .faqNumber {
      color: transparent;
      -webkit-text-stroke-width: 1px;
      -webkit-text-stroke-color: #222222;
      font-weight: 600;
      font-size: 55px;
      line-height: 85px;
      margin: 0px;
    }

    .orange_hr {
      background: #ff5b46;
      height: 5px;
      border: none;
      opacity: 1;
      max-width: 65px;
    }

    .testimonial_slider {
      padding: 90px 0;
    }

    .partner_sec {
      padding: 75px 0;
    }

    .testimonial {
      padding: 100px 0 0;
    }

    .partner_sec h2,
    .partner_sec h2 span {
      text-shadow: 3px 3px 0 #ffffff, 3px 3px 0 #686868, 3px 3px 0 rgb(72 72 72), 4px 3px rgb(102 102 102), 4px 4px rgb(145 145 145) !important;
    }

    .business_sec img {
      max-width: 178px;
      width: 100%;
    }

    .formbg h2 {
      color: transparent;
      -webkit-text-stroke-width: 1px;
      -webkit-text-stroke-color: #fff;
      font-weight: 800;
      font-size: 180px;
    }

    .news-bulletin {
      animation: newsTicker 8s linear infinite;
      white-space: nowrap;
      max-width: 1000px;
      margin: 0 auto;
    }

    @keyframes newsTicker {
      0% {
        transform: translateX(100%);
      }

      100% {
        transform: translateX(-100%);
      }
    }

    .bg-image {
      background-image: url("../images/home/formleft.webp");
      background-size: cover;
      background-position: center;
    }

    .footer_head {
      padding-bottom: 15px;
      border-bottom: 2px solid #ff5b46;
      font-size: 25px;
    }

    .footer_list {
      list-style: none;
    }

    .footer_list li {
      padding: 4px;
      font-size: 20px;
      white-space: nowrap;
    }

    .theme-hover:hover {
      color: #ff5b46;
    }

    .test_para {
      font-size: 26px !important;
    }

    .rightAlign_img {
      position: relative;
    }

    .rightAlign_img .img_2 {
      margin-left: 35%;
      padding-top: 20px;
      max-width: 100px;
    }

    .circle_img {
      margin-left: 30%;
      max-width: 80px;
      padding-top: 30px;
    }

    .read-more {
      font-weight: 600;
    }

    img.acc_main_img {
      max-width: 250px;
      float: right;
      margin-top: -40px;
    }

    span.acc-head {
      padding-left: 30px;
    }

    .accordion-tab-section .accordion-button {
      border-bottom: 1px solid #22222225 !important;
      border-radius: 0 !important;
      padding: 15px 0px;
    }

    .questionNumber {
      font-size: 20px;
    }

    .portfolio_box h4 {
      color: white;
      font-size: 42px;
    }

    .portfolio_box p {
      font-size: 22px;
    }

    .nav2 ul {
      width: 80%;
    }

    .partner_Slider .slick-slide {
      margin: 0 20px;
    }

    @media (max-width: 1442px) {
      .banner_content h1 {
        font-size: 48px;
      }

      .formbg h2 {
        font-size: 150px;
      }

      .question {
        font-size: 20px;
        line-height: 30px;
      }

      .border_orange {
        position: absolute !important;
        height: 10px;
      }

      .footer_list li {
        padding: 4px;
        font-size: 18px;
        white-space: nowrap;
      }

      .footer_head {
        font-size: 22px;
      }

      .testimonial {
        padding: 70px 0 0;
      }

      .portfolio_box {
        top: 24% !important;
        left: 4% !important;
        z-index: 3;
      }

      .portfolio_box h4 {
        font-size: 32px;
      }

      .sec_head {
        font-size: 48px !important;
      }

      .faq_head {
        font-size: 40px !important;
        line-height: 55px;
      }

      .about h2 {
        font-size: 40px;
        line-height: 50px;
      }

      .big_para {
        font-size: 19px !important;
        line-height: 30px;
      }

      .test_para {
        font-size: 21px !important;
      }
    }

    @media (max-width: 1336px) {

      .testimonial,
      .testimonial_slider {
        padding: 80px 0 0;
      }

      .footer_head {
        white-space: nowrap;
      }
    }

    .about p {
      line-height: 28px !important;
    }

    .footer_bottom p {
      font-size: 20px;
    }

    .portfolio_box p {
      font-size: 18px;
    }

    .portfolio_button img {
      max-width: 185px;
    }

    @media (max-width: 992px) {
      .partner_sec {
        padding: 40px 0;
      }

      .formbg h2 {
        font-size: 120px;
      }

      .question {
        font-size: 18px;
        line-height: 30px;
      }

      .footer_head {
        padding-bottom: 15px;
        border-bottom: 2px solid #ff5b46;
        font-size: 20px;
      }

      .banner_content h1 {
        font-size: 40px;
        line-height: 50px;
      }

      .big_para {
        font-size: 16px !important;
        line-height: 28px;
      }

      .about h2 {
        font-size: 32px;
        line-height: 40px;
      }

      .portfolio_box h4 {
        font-size: 26px;
      }

      .portfolio_box p {
        font-size: 16px;
      }

      .portfolio_button img {
        max-width: 120px;
      }

      button.portfolio_btn svg {
        width: 18px;
      }

      .portfolio_btn p {
        font-size: 14px;
      }

      .sec_head {
        font-size: 36px !important;
        line-height: 52px;
      }

      .faq_head {
        font-size: 32px !important;
        line-height: 48px;
      }

      .test_para {
        font-size: 16px !important;
      }
    }

    @media (max-width: 768px) {
      p.business_main_para {
        max-width: 500px;
      }

      .banner_content {
        padding: 0 2px;
      }

      .sec_head,
      .big_para {
        padding: 0 5px;
      }

      .services {
        padding: 30px 5px 0;
      }

      .testimonial,
      .testimonial_slider {
        padding: 40px 0 0;
      }

      .partner_sec {
        padding: 20px 5px;
      }

      .partner_box_row {
        padding: 30px 5px 0;
      }

      .partner_box {
        margin-bottom: 15px;
      }

      .serve {
        padding: 30px 5px 0;
      }

      .faq2 {
        padding: 30px 5px;
      }

      .blogs {
        padding: 30px 5px 0;
      }

      .contact {
        padding: 50px 5px 0;
      }

      .formbg h4 {
        line-height: 40px !important;
      }

      footer {
        padding: 30px 5px 0;
      }

      .counterBox p {
        white-space: nowrap;
        font-size: 13px !important;
      }

      .img_1 {
        max-width: 60px !important;
        padding-left: 20px;
      }

      .img_2 {
        max-width: 90px !important;
        padding-left: 20px;
      }

      .portfolio_box {
        position: relative !important;
        margin: 0 auto !important;
        z-index: 3;
        text-align: center;
        left: 0 !important;
        right: 0 !important;
        margin: 0 auto;
        padding: 0px !important;
      }

      .portfolio_btn {
        position: relative !important;
        margin: 20px auto 0 !important;
        z-index: 3;
        float: right;
        justify-content: center;
        left: 0 !important;
        right: 0 !important;
        margin: 0 auto;
      }

      .border_orange2.sm-height-reduce {
        height: 5px;
      }

      .nav2 ul {
        width: 100% !important;

      }

      .navbar-collapse button {
        margin: 0 auto;
        display: flex;
      }
    }

    @media (max-width: 480px) {
      .testimonial_slider p {
        text-align: center;
      }

      .sec_head {
        font-size: 30px !important;
        line-height: 40px;
      }

      .faq_head {
        font-size: 26px !important;
        line-height: 40px;
      }

      .question {
        font-size: 16px;
        line-height: 30px;
      }

      .footer_head {
        padding-bottom: 15px;
        border-bottom: 2px solid #ff5b46;
        font-size: 18px;
      }

      .footer_bottom p {
        font-size: 16px;
      }

      br {
        display: none !important;
      }
    }

    .hover-underline-animation {
      display: inline-block;
      position: relative;
      color: #ff5b46;
    }

    .hover-underline-animation:after {
      content: "";
      position: absolute;
      width: 100%;
      transform: scaleX(0);
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: #ff5b46;
      transform-origin: bottom right;
      transition: transform 0.25s ease-out;
    }

    .hover-underline-animation:hover:after {
      transform: scaleX(1);
      transform-origin: bottom left;
    }

    .icon {
      fill: #222222;
      transition: background-color 0.3s ease;
    }

    .icon::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: grey;
      border-radius: 8px;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .contact input,
    .contact textarea {
      background: #3d3d3d !important;
    }

    .portfolio_box {
      color: white;
    }

    button.portfolio_btn svg {
      width: 50px;
    }

    .accordion-button:not(.collapsed)::after {
      transform: rotate(0deg) !important;
      transform: translateY(14px) !important;
    }

    .accordion-button.collapsed::after {
      transform: translateY(10px) !important;
    }

    .nav2 .quote-btn,
    .nav2 button {
      font-size: 18px;
      white-space: nowrap;
    }

    .custom-submenu .dropdown-toggle {
      padding: 0;
      background: transparent;
      color: #222222 !important;
      text-decoration: none;
    }

    .custom-submenu ul.dropdown li {
      list-style-type: none;
    }

    .navbar {
      position: relative;
    }

    .drop-inner-list li {
      margin-top: 55px;
    }

    .drop-inner-list li a {
      color: #222222;
    }

    .drop-inner-list.drop-inner-2 li:first-child {
      margin-top: -119px;
    }

    .close-icon i {
      display: none;
      position: absolute;
      top: 10px;
      left: 18px;
      width: 30px;
      height: 30px;
      border: 1px solid #000;
    }

    .drop-inner-list img {
      max-width: 30px;
    }

    .bg_navbar {
      padding-top: 12px !important;
      padding-bottom: 12px !important;
    }

    .drop-inner-list a {
      padding-bottom: 0 !important;
    }

    .custom-submenu .dropdown-toggle {
      padding-bottom: 49px;
      background: transparent;
      color: #222222 !important;
      text-decoration: none;
    }

    .dropdown.secondry-navs {
      position: absolute;
      top: 91%;
      left: 0;
      background-color: #fff;
      padding: 10px;
      border: 1px solid #ddd;
      z-index: 999;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s, visibility 0.3s;
      width: 100% !important;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
      padding-bottom: 60px;
    }

    .custom-submenu:hover .dropdown.secondry-navs {
      opacity: 1;
      visibility: visible;
    }

    .dropdown.secondry-navs {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s ease-in-out;
    }

    .custom-submenu:hover .dropdown.secondry-navs {
      max-height: 100vh;
    }
    @media (max-width: 1336px) {
      .nav2 {
        max-width: 900px;
      }

      .counterBox h4 {
        font-size: 52px;
      }

      .nav2 .quote-btn,
      .nav2 button {
        font-size: 15px;
        padding: 20px 35px !important;
      }

      .nav2 ul {
        width: 75% !important;
        justify-content: center;
      }
    }

    @media (max-width: 1200px) {
      .testimonial_slider.owl-carousel .owl-nav .owl-next {
        right: -12px;
      }

      .testimonial_slider.owl-carousel .owl-nav .owl-prev {
        left: 28px;
      }
    }

    @media (max-width: 992px) {
      .portfolio_btn {
        top: 10% !important;
        right: -3% !important;
      }

      .counterBox h4 {
        font-size: 42px;
      }

      .secondry-navs {
        transform: translate(-100%);
        flex-direction: column;
        position: fixed;
        top: 0;
        left: 0;
        width: 250px;
        height: 100%;
        transition: all ease-in-out 1s;
        justify-content: unset !important;
        padding-top: 9rem;
        z-index: 99;
        border-top-right-radius: 20px;
      }

      .secondry-navs li {
        margin-bottom: 2rem;
      }

      .secondry-navs.active {
        transform: translate(0);
        background-color: #fff;
        box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
        height: 100vh;
        display: block;
        overflow-y: auto;
        top: 0;
        padding-top: 44px;
        padding-left: 16px;
      }

      .close-icon i {
        display: flex !important;
        justify-content: center;
        align-items: center;
        border-radius: 100%;
      }

      .drop-inner-list {
        padding-left: 0;
      }

      .drop-inner-list li {
        margin-top: 30px !important;
      }

      .drop-inner-list.drop-inner-2 li:first-child {
        margin-top: 4px !important;
      }

      .dropdown.secondry-navs,
      .custom-submenu:hover .dropdown.secondry-navs {
        opacity: unset;
        visibility: unset;
        max-height: unset;
      }

      .services-drop {
        display: none;
      }

      .dropdown-toggle.menu-toggle {
        padding-bottom: 0;
      }
    }

    @media (max-width: 768px) {
      .acc_main_img {
        max-width: 200px !important;
      }

      .flip_image {
        height: auto;
        object-fit: cover;
        width: 100%;
        z-index: 3;
      }

      .circle_banner {
        left: 15%;
        bottom: 2%;
        width: 100%;
        max-width: 380px;
      }

      .counterBox h4 {
        font-size: 36px;
      }

      .navbar-nav {
        align-items: center !important;
      }
    }

    @media (max-width: 575px) {
      .portfolio_button {
        padding-top: 30px;
      }

      .circle_banner {
        left: 15%;
        bottom: 1%;
        width: 100%;
        max-width: 320px;
      }

      .portfolio_box.custom {
        padding: 0 !important;
      }

      .video-wrapper video {
        height: 204px !important;
      }

    }

    .navbar-toggler:focus {
      box-shadow: none !important;
    }
  </style>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php $pageTitle; ?></title>
  <meta name="description" content="<?php echo $pageDescription; ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="./images/fav-icon.webp">
  <script>
    function loadScript(src, callback) {
      var script = document.createElement('script');
      script.src = src;
      script.async = true;
      script.onload = callback;
      document.head.appendChild(script);
    }
    setTimeout(function() {
      loadScript('https://static.zdassets.com/ekr/snippet.js?key=18f85f41-59dc-49de-b277-7e774b3231f9');
    }, 2000); // Delay in milliseconds
  </script>
  <script>
    window.addEventListener('load', function() {
      var loadingScreen = document.getElementById('loading-screen');
      loadingScreen.style.display = 'none';
    });
  </script>
</head>

<body>
  <div id="loading-screen">
    <div class="loading-spinner"></div>
  </div>