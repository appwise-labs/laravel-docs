<!--
Thanks to https://www.ditdot.hr/en/dark-mode-website-tutorial
-->
<style>
    html {
        box-sizing: border-box;
        overflow: -moz-scrollbars-vertical;
        overflow-y: scroll;
    }

    .dark-mode *,
    .dark-mode *:before,
    .dark-mode *:after {
        box-sizing: inherit;
    }

    body.dark-mode {
        margin: 0;
    }

    .dark-mode .swagger-ui a {
        color: #4990e2;
        text-decoration: none;
    }

    body.dark-mode,
    .dark-mode .swagger-ui,
    .dark-mode .swagger-ui input,
    .dark-mode .swagger-ui textarea,
    .dark-mode .swagger-ui input[type="text"],
    .dark-mode .swagger-ui select,
    .dark-mode .swagger-ui .btn,
    .dark-mode .swagger-ui .info .title,
    .dark-mode .swagger-ui .opblock-tag,
    .dark-mode .swagger-ui section.models h4,
    .dark-mode .swagger-ui .dialog-ux .modal-ux-header h3,
    .dark-mode .swagger-ui .dialog-ux .modal-ux-content h4,
    .dark-mode .swagger-ui .dialog-ux .modal-ux-content p {
        color: #ffffff;
    }

    .dark-mode .swagger-ui a.nostyle,
    .dark-mode .swagger-ui .parameter__name,
    .dark-mode .swagger-ui .parameter__type,
    .dark-mode .swagger-ui .parameter__deprecated,
    .dark-mode .swagger-ui .parameter__in,
    .dark-mode .swagger-ui table thead tr th,
    .dark-mode .swagger-ui .response-col_status,
    .dark-mode .swagger-ui table thead tr td,
    .dark-mode .swagger-ui .opblock .opblock-section-header h4,
    .dark-mode .swagger-ui label,
    .dark-mode .swagger-ui .tab li,
    .dark-mode .swagger-ui .opblock .opblock-section-header label,
    .dark-mode .swagger-ui .opblock .opblock-summary-operation-id,
    .dark-mode .swagger-ui .opblock .opblock-summary-path,
    .dark-mode .swagger-ui .opblock .opblock-summary-path__deprecated,
    .dark-mode .swagger-ui .scheme-container,
    .dark-mode .swagger-ui .scheme-container .schemes > label,
    .dark-mode .swagger-ui .opblock-description-wrapper p,
    .dark-mode .swagger-ui .opblock-external-docs-wrapper p,
    .dark-mode .swagger-ui .opblock-title_normal p,
    .dark-mode .swagger-ui .info li,
    .dark-mode .swagger-ui .info p,
    .dark-mode .swagger-ui .info table,
    .dark-mode .swagger-ui .model,
    .dark-mode .swagger-ui .model-title,
    .dark-mode .swagger-ui .model .property.primitive,
    .dark-mode .swagger-ui .responses-inner h4,
    .dark-mode .swagger-ui .responses-inner h5,
    .dark-mode .swagger-ui .renderedMarkdown,
    .dark-mode .swagger-ui .opblock-tag small {
        color: #cccccc;
    }

    .dark-mode .swagger-ui .opblock.opblock-post .opblock-summary-method,
    .dark-mode .swagger-ui .opblock-post .btn.execute {
        background: #007841;
    }

    .dark-mode .swagger-ui .opblock.opblock-post .opblock-summary,
    .dark-mode .swagger-ui .opblock-post .btn.execute {
        border-color: #007841;
    }

    .dark-mode .swagger-ui .opblock-post .opblock-summary-description {
        color: #007841;
    }

    .dark-mode .swagger-ui .opblock.opblock-patch .opblock-summary-method,
    .dark-mode .swagger-ui .opblock-patch .btn.execute {
        background: #266e5e;
    }

    .dark-mode .swagger-ui .opblock.opblock-patch .opblock-summary,
    .dark-mode .swagger-ui .opblock-patch .btn.execute {
        border-color: #266e5e;
    }

    .dark-mode .swagger-ui .opblock-patch .opblock-summary-description {
        color: #266e5e;
    }

    .dark-mode .swagger-ui .opblock.opblock-get .opblock-summary-method,
    .dark-mode .swagger-ui .opblock-get .btn.execute {
        background: #0064c9;
    }

    .dark-mode .swagger-ui .opblock.opblock-get .opblock-summary,
    .dark-mode .swagger-ui .opblock-get .btn.execute {
        border-color: #0064c9;
    }

    .dark-mode .swagger-ui .opblock-get .opblock-summary-description {
        color: #0064c9;
    }

    .dark-mode .swagger-ui .opblock.opblock-put .opblock-summary-method,
    .dark-mode .swagger-ui .opblock-put .btn.execute {
        background: #a55b00;
    }

    .dark-mode .swagger-ui .opblock.opblock-put .opblock-summary,
    .dark-mode .swagger-ui .opblock-put .btn.execute {
        border-color: #a55b00;
    }

    .dark-mode .swagger-ui .opblock-put .opblock-summary-description {
        color: #a55b00;
    }

    .dark-mode .swagger-ui .opblock.opblock-delete .opblock-summary-method,
    .dark-mode .swagger-ui .opblock-delete .btn.execute {
        background: #990000;
    }

    .dark-mode .swagger-ui .opblock.opblock-delete .opblock-summary,
    .dark-mode .swagger-ui .opblock-delete .btn.execute {
        border-color: #990000;
    }

    .dark-mode .swagger-ui .opblock-delete .opblock-summary-description {
        color: #990000;
    }

    body.dark-mode,
    .dark-mode .swagger-ui .info .title,
    .dark-mode .swagger-ui .scheme-container,
    .dark-mode .swagger-ui select,
    .dark-mode .swagger-ui textarea,
    .dark-mode .swagger-ui input[type="text"],
    .dark-mode .swagger-ui input[type="email"],
    .dark-mode .swagger-ui input[type="file"],
    .dark-mode .swagger-ui input[type="password"],
    .dark-mode .swagger-ui input[type="search"],
    .dark-mode .swagger-ui textarea,
    .dark-mode .swagger-ui .topbar,
    .dark-mode .swagger-ui .dialog-ux .modal-ux {
        background-color: rgb(15, 23, 36);
    }

    .dark-mode .swagger-ui .opblock .opblock-section-header,
    .dark-mode .swagger-ui input[type="email"].invalid,
    .dark-mode .swagger-ui input[type="file"].invalid,
    .dark-mode .swagger-ui input[type="password"].invalid,
    .dark-mode .swagger-ui input[type="search"].invalid,
    .dark-mode .swagger-ui input[type="text"].invalid,
    .dark-mode .swagger-ui textarea.invalid {
        background-color: transparent;
    }

    .dark-mode .swagger-ui input[disabled],
    .dark-mode .swagger-ui select[disabled],
    .dark-mode .swagger-ui textarea[disabled] {
        border: none;
        color: rgb(146, 171, 207);
    }

    .dark-mode input[type="file"]::-webkit-file-upload-button {
        color: rgb(146, 171, 207);
        background-color: rgb(146, 171, 207);
        color: rgb(15, 23, 36);
        border: none;
        border-radius: 25px;
    }

    .dark-mode input[type="text"]::placeholder {
        color: rgb(146, 171, 207);
        opacity: 1;
    }

    .dark-mode .swagger-ui .btn,
    .dark-mode .swagger-ui select {
        border-color: #ccc;
    }

    .dark-mode .swagger-ui select {
        background: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill="white" d="M13.418 7.859a.695.695 0 01.978 0 .68.68 0 010 .969l-3.908 3.83a.697.697 0 01-.979 0l-3.908-3.83a.68.68 0 010-.969.695.695 0 01.978 0L10 11l3.418-3.141z"/></svg>') right 10px center no-repeat;
    }

    .dark-mode .swagger-ui .model-toggle:after {
        background: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill="white" d="M13.418 7.859a.695.695 0 01.978 0 .68.68 0 010 .969l-3.908 3.83a.697.697 0 01-.979 0l-3.908-3.83a.68.68 0 010-.969.695.695 0 01.978 0L10 11l3.418-3.141z"/></svg>') 50% no-repeat;
    }

    .dark-mode .swagger-ui svg {
        fill: #ccc;
    }

    .dark-mode .swagger-ui .topbar,
    .dark-mode .swagger-ui .opblock .opblock-section-header,
    .dark-mode .swagger-ui table thead tr td,
    .dark-mode .swagger-ui table thead tr th {
        border-bottom: 1px solid rgb(59, 65, 81);
    }

    .dark-mode .swagger-ui .opblock-tag,
    .dark-mode .swagger-ui .dialog-ux .modal-ux,
    .dark-mode .swagger-ui section.models .model-container {
        border: 1px solid rgb(59, 65, 81);
    }

    .dark-mode .swagger-ui section.models.is-open h4,
    .dark-mode .swagger-ui section.models,
    .dark-mode .swagger-ui .dialog-ux .modal-ux-header,
    .dark-mode .swagger-ui .auth-container {
        border-color: rgb(59, 65, 81);
    }

    .dark-mode .swagger-ui span.model-title__text {
        color: #10bf9c;
    }

    .dark-mode .swagger-ui .property-row td:first-child {
        color: #e57044;
        font-weight: normal;
    }

    .dark-mode .swagger-ui .prop-type {
        color: #d95dbd;
    }

    .dark-mode .swagger-ui .model .property.primitive {
        color: rgb(59, 65, 81);
    }

    .dark-mode .swagger-ui .auth-btn-wrapper .modal-btn {
        margin-right: 1rem;
    }

    .dark-mode .swagger-ui .opblock:hover {
        border-width: 2px;
    }

    .dark-mode pre {
        background-color: rgb(15, 23, 36) !important;
    }

    .dark-mode small pre {
        background-color: transparent !important;
    }
</style>

<style>
    .dark-mode-toggle {
        position: absolute;

        top: 50px;
        right: 32.5px;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(97,175,254,.1);
        border-radius: 34px;
        border: 1px solid rgba(97,175,254,.1);
        transition: 0.6s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 28px;
        width: 28px;
        left: 2px;
        bottom: 2px;
        background-color: white;
        border-radius: 50%;
        transition: 0.4s;
    }

    input:checked + .slider {
        background-color: #0064c9;
    }

    input:checked + .slider:before {
        transform: translateX(26px);
    }

    .slider-icon {
        transform: rotate(250deg);
        position: absolute;
        right: 6px;
        top: 7px;
    }
</style>

<div class="dark-mode-toggle">
    <label class="switch">
        <input type="checkbox" id="dark-mode-switch">
        <span class="slider">
            <svg class="slider-icon" viewBox="0 0 24 24" fill="none" height="20" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="20" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
            </svg>
        </span>
    </label>
</div>

<script>
    /*
    Copyright (c) 2020 - present, DITDOT Ltd. - MIT Licence
    https://www.ditdot.hr/en
    https://github.com/ditdot-dev/dark-mode-example
    */

    function load() {
        const switchElement = document.getElementById("dark-mode-switch");
        const useDark = window.matchMedia("(prefers-color-scheme: dark)");

        // Toggles the "dark-mode" class
        function toggleDarkMode(state) {
            if(state) {
                document.body.classList.add('dark-mode');
            }
            else {
                document.body.classList.remove('dark-mode')
            }

            darkModeState = state;

            switchElement.checked = state;
        }

        // Sets localStorage state
        function setDarkModeLocalStorage(state) {
            localStorage.setItem("dark-mode", state);
            if(localStorage.getItem("dark-mode") === (useDark.matches ? 'true' : 'false')) {
                localStorage.removeItem("dark-mode");
            }
        }

        // Initial setting
        let initialSetting = useDark.matches;

        if(localStorage.getItem("dark-mode") != null) {
            initialSetting = localStorage.getItem("dark-mode") === "true";
        }

        toggleDarkMode(initialSetting);

        // Listen for changes in the OS settings.
        // Note: the arrow function shorthand works only in modern browsers,
        // for older browsers define the function using the function keyword.
        useDark.addListener((evt) => {
            toggleDarkMode(evt.matches);
        });

        // Toggles the "dark-mode" class on click and sets localStorage state
        switchElement.addEventListener("change", (e) => {
            let darkModeState = e.currentTarget.checked;

            toggleDarkMode(darkModeState);
            setDarkModeLocalStorage(darkModeState);
        });
    }

    document.addEventListener("DOMContentLoaded", load);
</script>
