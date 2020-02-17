{{--<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Fira Code iScript';
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>--}}
{{--<style>
    .result {
        width: 100%;
        min: 360px;
        min-height: 360px;
    }
    .solution-hiding {
        pointer-events: none;
    }

    .solution-hidden {
        height: 0;
        overflow: hidden;
    }

    .solution-hidden .solution-main,
    .solution-hiding .solution-main {
        transform: translateY(-25px) scaleY(0.95);
        opacity: 0;
    }

    .solution-main {
        z-index: 1;
        color: rgb(51, 47, 81);
        color: var(--gray-800);
        opacity: 1;
        transition: all 0.1s;
    }

    .solution-toggle {
        position: absolute;
        z-index: 10;
        top: 0.5rem;
        right: 10px;
        padding-left: 0.75rem;
        padding-right: 0.75rem;
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
        font-size: 0.75rem;
        line-height: 1;
        cursor: pointer;
    }

    .solution-toggle-show {
        top: 0;
        background-color: rgb(148, 242, 200);
        background-color: var(--green-300);
        box-shadow: var(--shadow-sm);
        border-bottom-right-radius: 0.125rem;
        border-bottom-left-radius: 0.125rem;
        z-index: 0;
        clip-path: polygon(0 0, 100% 0, 100% 100%, 9px 100%, 0 calc(100% - 5px));
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 9px 100%, 0 calc(100% - 5px));
    }

    .solution-toggle-show a {
        text-decoration: none;
    }

    .solution-background {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        top: -6px;
        margin: 0 10px;
        background-color: rgb(148, 242, 200);
        /*! background-color: var(--green-300); */
        box-shadow: var(--shadow-default);
        border-width: 1px;
        border-color: rgba(25, 0, 100, 0.1);
        border-color: var(--tint-300);
        overflow: hidden;
        border-bottom-right-radius: 0.125rem;
        border-bottom-left-radius: 0.125rem;
    }

    .solution-title {
        font-weight: 600;
        font-size: 1.5rem;
        line-height: 1.25;
        margin-bottom: 1rem;
    }

    .solution-content {
        max-width: 56rem;
    }

</style>--}}
<style>

    /* Document
       ========================================================================== */

    /**
     * 1. Correct the line height in all browsers.
     * 2. Prevent adjustments of font size after orientation changes in iOS.
     */

    html {
        line-height: 1.15; /* 1 */
        -webkit-text-size-adjust: 100%; /* 2 */
    }

    /* Sections
       ========================================================================== */

    /**
     * Remove the margin in all browsers.
     */

    body {
        margin: 0;
    }

    /**
     * Render the `main` element consistently in IE.
     */

    main {
        display: block;
    }

    /**
     * Correct the font size and margin on `h1` elements within `section` and
     * `article` contexts in Chrome, Firefox, and Safari.
     */

    /* Grouping content
       ========================================================================== */

    /**
     * 1. Add the correct box sizing in Firefox.
     * 2. Show the overflow in Edge and IE.
     */

    /**
     * 1. Correct the inheritance and scaling of font size in all browsers.
     * 2. Correct the odd `em` font sizing in all browsers.
     */

    pre {
        font-family: monospace, monospace; /* 1 */
        font-size: 1em; /* 2 */
    }

    /* Text-level semantics
       ========================================================================== */

    /**
     * Remove the gray background on active links in IE 10.
     */

    a {
        background-color: transparent;
    }

    /**
     * 1. Remove the bottom border in Chrome 57-
     * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
     */

    /**
     * Add the correct font weight in Chrome, Edge, and Safari.
     */

    b,
    strong {
        font-weight: bolder;
    }

    /**
     * 1. Correct the inheritance and scaling of font size in all browsers.
     * 2. Correct the odd `em` font sizing in all browsers.
     */

    code {
        font-family: monospace, monospace; /* 1 */
        font-size: 1em; /* 2 */
    }

    /**
     * Add the correct font size in all browsers.
     */

    /**
     * Prevent `sub` and `sup` elements from affecting the line height in
     * all browsers.
     */

    /* Embedded content
       ========================================================================== */

    /**
     * Remove the border on images inside links in IE 10.
     */

    /* Forms
       ========================================================================== */

    /**
     * 1. Change the font styles in all browsers.
     * 2. Remove the margin in Firefox and Safari.
     */

    button,
    input,
    select,
    textarea {
        font-family: inherit; /* 1 */
        font-size: 100%; /* 1 */
        line-height: 1.15; /* 1 */
        margin: 0; /* 2 */
    }

    /**
     * Show the overflow in IE.
     * 1. Show the overflow in Edge.
     */

    button,
    input { /* 1 */
        overflow: visible;
    }

    /**
     * Remove the inheritance of text transform in Edge, Firefox, and IE.
     * 1. Remove the inheritance of text transform in Firefox.
     */

    button,
    select { /* 1 */
        text-transform: none;
    }

    /**
     * Correct the inability to style clickable types in iOS and Safari.
     */

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
        -webkit-appearance: button;
    }

    /**
     * Remove the inner border and padding in Firefox.
     */

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
        border-style: none;
        padding: 0;
    }

    /**
     * Restore the focus styles unset by the previous rule.
     */

    button:-moz-focusring,
    [type="button"]:-moz-focusring,
    [type="reset"]:-moz-focusring,
    [type="submit"]:-moz-focusring {
        outline: 1px dotted ButtonText;
    }

    /**
     * Correct the padding in Firefox.
     */

    /**
     * 1. Correct the text wrapping in Edge and IE.
     * 2. Correct the color inheritance from `fieldset` elements in IE.
     * 3. Remove the padding so developers are not caught out when they zero out
     *    `fieldset` elements in all browsers.
     */

    legend {
        box-sizing: border-box; /* 1 */
        color: inherit; /* 2 */
        display: table; /* 1 */
        max-width: 100%; /* 1 */
        padding: 0; /* 3 */
        white-space: normal; /* 1 */
    }

    /**
     * Add the correct vertical alignment in Chrome, Firefox, and Opera.
     */

    /**
     * Remove the default vertical scrollbar in IE 10+.
     */

    textarea {
        overflow: auto;
    }

    /**
     * 1. Add the correct box sizing in IE 10.
     * 2. Remove the padding in IE 10.
     */

    [type="checkbox"],
    [type="radio"] {
        box-sizing: border-box; /* 1 */
        padding: 0; /* 2 */
    }

    /**
     * Correct the cursor style of increment and decrement buttons in Chrome.
     */

    [type="number"]::-webkit-inner-spin-button,
    [type="number"]::-webkit-outer-spin-button {
        height: auto;
    }

    /**
     * 1. Correct the odd appearance in Chrome and Safari.
     * 2. Correct the outline style in Safari.
     */

    [type="search"] {
        -webkit-appearance: textfield; /* 1 */
        outline-offset: -2px; /* 2 */
    }

    /**
     * Remove the inner padding in Chrome and Safari on macOS.
     */

    [type="search"]::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    /**
     * 1. Correct the inability to style clickable types in iOS and Safari.
     * 2. Change font properties to `inherit` in Safari.
     */

    ::-webkit-file-upload-button {
        -webkit-appearance: button; /* 1 */
        font: inherit; /* 2 */
    }

    /* Interactive
       ========================================================================== */

    /*
     * Add the correct display in Edge, IE 10+, and Firefox.
     */

    /*
     * Add the correct display in all browsers.
     */

    /* Misc
       ========================================================================== */

    /**
     * Add the correct display in IE 10+.
     */

    template {
        display: none;
    }

    /**
     * Add the correct display in IE 10.
     */

    [hidden] {
        display: none;
    }

    /**
     * Manually forked from SUIT CSS Base: https://github.com/suitcss/base
     * A thin layer on top of normalize.css that provides a starting point more
     * suitable for web applications.
     */

    /**
     * 1. Prevent padding and border from affecting element width
     * https://goo.gl/pYtbK7
     * 2. Change the default font family in all browsers (opinionated)
     */

    html {
        box-sizing: border-box; /* 1 */
        font-family: sans-serif; /* 2 */
    }

    *,
    *::before,
    *::after {
        box-sizing: inherit;
    }

    /**
     * Removes the default spacing and border for appropriate elements.
     */


    dl,
    dd,
    h2,
    h3,
    h5,
    p,
    pre {
        margin: 0;
    }

    button {
        background: transparent;
        padding: 0;
    }

    /**
     * Work around a Firefox/IE bug where the transparent `button` background
     * results in a loss of the default `button` focus styles.
     */

    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color;
    }

    ol,
    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    /**
     * Tailwind custom reset styles
     */

    /**
     * 1. Use the system font stack as a sane default.
     * 2. Use Tailwind's default "normal" line-height so the user isn't forced
     * to override it to ensure consistency even when using the default theme.
     */

    html {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; /* 1 */
        line-height: 1.5; /* 2 */
    }

    /**
     * Allow adding a border to an element by just adding a border-width.
     *
     * By default, the way the browser specifies that an element should have no
     * border is by setting it's border-style to `none` in the user-agent
     * stylesheet.
     *
     * In order to easily add borders to elements by just setting the `border-width`
     * property, we change the default border-style for all elements to `solid`, and
     * use border-width to hide them instead. This way our `border` utilities only
     * need to set the `border-width` property instead of the entire `border`
     * shorthand, making our border utilities much more straightforward to compose.
     *
     * https://github.com/tailwindcss/tailwindcss/pull/116
     */

    *,
    *::before,
    *::after {
        border-width: 0;
        border-style: solid;
        border-color: rgb(232, 229, 239);
        border-color: var(--gray-300);
    }

    /*
     * Ensure horizontal rules are visible by default
     */

    /**
     * Undo the `border-style: none` reset that Normalize applies to images so that
     * our `border-{width}` utilities have the expected effect.
     *
     * The Normalize reset is unnecessary for us since we default the border-width
     * to 0 on all elements.
     *
     * https://github.com/tailwindcss/tailwindcss/issues/362
     */

    textarea {
        resize: vertical;
    }

    input::-webkit-input-placeholder,
    textarea::-webkit-input-placeholder {
        color: #a0aec0;
    }

    input::-moz-placeholder,
    textarea::-moz-placeholder {
        color: #a0aec0;
    }

    input:-ms-input-placeholder,
    textarea:-ms-input-placeholder {
        color: #a0aec0;
    }

    input::-ms-input-placeholder,
    textarea::-ms-input-placeholder {
        color: #a0aec0;
    }

    input::placeholder,
    textarea::placeholder {
        color: #a0aec0;
    }

    button,
    [role="button"] {
        cursor: pointer;
    }


    h2,
    h3,
    h5 {
        font-size: inherit;
        font-weight: inherit;
    }

    /**
     * Reset links to optimize for opt-in styling instead of
     * opt-out.
     */

    a {
        color: inherit;
        text-decoration: inherit;
    }

    /**
     * Reset form element properties that are easy to forget to
     * style explicitly so you don't inadvertently introduce
     * styles that deviate from your design system. These styles
     * supplement a partial reset that is already applied by
     * normalize.css.
     */

    button,
    input,
    select,
    textarea {
        padding: 0;
        line-height: inherit;
        color: inherit;
    }

    /**
     * Use the configured 'mono' font family for elements that
     * are expected to be rendered with a monospace font, falling
     * back to the system monospace stack if there is no configured
     * 'mono' font family.
     */

    pre,
    code {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    }

    /**
     * Make replaced elements `display: block` by default as that's
     * the behavior you want almost all of the time. Inspired by
     * CSS Remedy, with `svg` added as well.
     *
     * https://github.com/mozdevs/cssremedy/issues/14
     */


    svg,
    canvas {
        display: block;
        vertical-align: middle;
    }

    /**
     * Constrain images and videos to the parent width and preserve
     * their instrinsic aspect ratio.
     *
     * https://github.com/mozdevs/cssremedy/issues/14
     */

    :root {
        --white: rgb(255, 255, 255);
        --blue-400: rgb(122, 122, 255);
        --green-100: rgb(227, 255, 242);
        --green-300: rgb(148, 242, 200);
        --green-400: rgb(114, 224, 175);
        --green-500: rgb(34, 212, 146);
        --purple-100: rgb(251, 245, 255);
        --purple-200: rgb(236, 211, 253);
        --purple-300: rgb(214, 188, 250);
        --purple-400: rgb(183, 148, 244);
        --purple-500: rgb(121, 0, 245);
        --purple-600: rgb(113, 7, 220);
        --purple-800: rgb(79, 15, 143);
        --red-100: rgb(255, 235, 243);
        --red-300: rgb(250, 133, 162);
        --red-400: rgb(250, 78, 121);
        --yellow-100: rgb(255, 253, 235);
        --yellow-200: rgb(255, 248, 196);
        --yellow-300: rgb(255, 243, 148);
        --yellow-400: rgb(255, 234, 79);
        --tint-50: rgba(0, 0, 150, 0.015);
        --tint-100: rgba(0, 0, 150, 0.025);
        --tint-200: rgba(0, 0, 100, 0.07);
        --tint-300: rgba(25, 0, 100, 0.1);
        --tint-400: rgba(20, 0, 100, 0.2);
        --tint-500: rgba(30, 20, 90, 0.35);
        --tint-600: rgba(30, 20, 70, 0.5);
        --tint-700: rgba(15, 10, 60, 0.75);
        --gray-50: rgb(252, 252, 253);
        --gray-100: rgb(247, 247, 252);
        --gray-200: rgb(238, 238, 245);
        --gray-300: rgb(232, 229, 239);
        --gray-400: rgb(209, 204, 224);
        --gray-500: rgb(176, 173, 197);
        --gray-600: rgb(142, 137, 162);
        --gray-700: rgb(75, 71, 109);
        --gray-800: rgb(51, 47, 81);
        /* dark theme */
        --dark-white: rgb(38, 38, 50);
        --dark-blue-400: rgb(85, 0, 255);
        --dark-green-100: rgb(32, 97, 90);
        --dark-green-300: rgb(55, 111, 123);
        --dark-green-500: rgb(63, 152, 142);
        --dark-purple-100: rgb(60, 46, 96);
        --dark-purple-200: rgb(81, 50, 128);
        --dark-purple-300: rgb(104, 85, 147);
        --dark-purple-400: rgb(106, 87, 148);
        --dark-purple-500: rgb(126, 107, 167);
        --dark-purple-600: rgb(145, 127, 183);
        --dark-purple-800: rgb(158, 140, 194);
        --dark-red-100: rgb(255, 235, 243);
        --dark-red-300: rgb(250, 133, 162);
        --dark-red-400: rgb(250, 78, 121);
        --dark-yellow-100: rgb(61, 57, 49);
        --dark-yellow-200: rgb(90, 78, 53);
        --dark-yellow-300: rgb(119, 103, 70);
        --dark-yellow-400: rgb(145, 121, 90);
        --dark-tint-50: rgba(240, 240, 245, 0.05);
        --dark-tint-100: rgba(240, 240, 245, 0.075);
        --dark-tint-200: rgba(240, 240, 245, 0.1);
        --dark-tint-300: rgba(240, 240, 245, 0.125);
        --dark-tint-400: rgba(240, 240, 245, 0.25);
        --dark-tint-500: rgba(240, 240, 245, 0.45);
        --dark-tint-600: rgba(240, 240, 245, 0.55);
        --dark-tint-700: rgba(240, 240, 245, 0.65);
        --dark-gray-0: rgb(30, 30, 40);
        --dark-gray-50: rgb(38, 38, 50);
        --dark-gray-100: rgb(48, 48, 58);
        --dark-gray-200: rgb(51, 51, 65);
        --dark-gray-300: rgb(75, 75, 85);
        --dark-gray-400: rgb(142, 142, 160);
        --dark-gray-500: rgb(152, 152, 170);
        --dark-gray-600: rgb(165, 165, 175);
        --dark-gray-700: rgb(216, 216, 223);
        --dark-gray-800: rgb(230, 230, 235);
        --dark-shadow-sm: '0 2px 0 var(--gray-0)';
        --dark-shadow-default: '0 2px 0 var(--gray-50), 2px 4px 0 var(--gray-0)';
        --dark-shadow-lg: '0 2px 0 var(--gray-100), 2px 4px 0 var(--gray-50), 4px 6px 0 var(--gray-0)';
        --dark-shadow-input: 'inset 0 2px 0 var(--gray-100)';
    }

    html {
        box-sizing: border-box;
        font-size: 14px;
        background-color: rgb(238, 238, 245);
        background-color: var(--gray-200);
        overflow-x: hidden;
        overflow-y: scroll;
    }

    @media (min-width: 1024px) {
        html {
            font-size: 16px;
        }
    }

    /* Exclude iframes like 1Password save modals */

    *:not(iframe),
    *:after,
    *:before {
        /*position: relative;*/
    }

    *:focus {
        outline: 0 !important;
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        color: rgb(51, 47, 81);
        color: var(--gray-800);
        line-height: 1.5;
        width: 100%;
    }

    /* Dark theme */

    @media (prefers-color-scheme: dark) {
        html.theme-auto {
            --white: var(--dark-white);
            --blue-400: var(--dark-blue-400);
            --green-100: var(--dark-green-100);
            --green-300: var(--dark-green-300);
            --green-400: var(--dark-green-400);
            --green-500: var(--dark-green-500);
            --purple-100: var(--dark-purple-100);
            --purple-200: var(--dark-purple-200);
            --purple-300: var(--dark-purple-300);
            --purple-400: var(--dark-purple-400);
            --purple-500: var(--dark-purple-500);
            --purple-600: var(--dark-purple-600);
            --purple-800: var(--dark-purple-800);
            --red-100: var(--dark-red-100);
            --red-300: var(--dark-red-300);
            --red-400: var(--dark-red-400);
            --yellow-100: var(--dark-yellow-100);
            --yellow-200: var(--dark-yellow-200);
            --yellow-300: var(--dark-yellow-300);
            --yellow-400: var(--dark-yellow-400);
            --tint-50: var(--dark-tint-50);
            --tint-100: var(--dark-tint-100);
            --tint-200: var(--dark-tint-200);
            --tint-300: var(--dark-tint-300);
            --tint-400: var(--dark-tint-400);
            --tint-500: var(--dark-tint-500);
            --tint-600: var(--dark-tint-600);
            --tint-700: var(--dark-tint-700);
            --gray-0: var(--dark-gray-0);
            --gray-50: var(--dark-gray-50);
            --gray-100: var(--dark-gray-100);
            --gray-200: var(--dark-gray-200);
            --gray-300: var(--dark-gray-300);
            --gray-400: var(--dark-gray-400);
            --gray-500: var(--dark-gray-500);
            --gray-600: var(--dark-gray-600);
            --gray-700: var(--dark-gray-700);
            --gray-800: var(--dark-gray-800);
            --shadow-sm: '0 2px 0 var(--gray-50)';
            --shadow-default: '0 2px 0 var(--gray-100), 2px 4px 0 var(--gray-50)';
            --shadow-lg: '0 2px 0 var(--gray-200), 2px 4px 0 var(--gray-100), 4px 6px 0 var(--gray-50)';
            --shadow-input: 'inset 0 2px 0 var(--gray-100)';
        }

        html.theme-auto {
            background-color: rgb(30, 30, 40);
            background-color: var(--dark-gray-0);
        }

        html.theme-auto .checkbox:before {
            background-color: rgb(51, 47, 81);
            background-color: var(--gray-800);
        }

        html.theme-auto .tab-nav,
        html.theme-auto .dropdown {
            background-color: rgb(209, 204, 224);
            background-color: var(--gray-400);
        }
    }

    html.theme-dark {
        --white: var(--dark-white);
        --blue-400: var(--dark-blue-400);
        --green-100: var(--dark-green-100);
        --green-300: var(--dark-green-300);
        --green-400: var(--dark-green-400);
        --green-500: var(--dark-green-500);
        --purple-100: var(--dark-purple-100);
        --purple-200: var(--dark-purple-200);
        --purple-300: var(--dark-purple-300);
        --purple-400: var(--dark-purple-400);
        --purple-500: var(--dark-purple-500);
        --purple-600: var(--dark-purple-600);
        --purple-800: var(--dark-purple-800);
        --red-100: var(--dark-red-100);
        --red-300: var(--dark-red-300);
        --red-400: var(--dark-red-400);
        --yellow-100: var(--dark-yellow-100);
        --yellow-200: var(--dark-yellow-200);
        --yellow-300: var(--dark-yellow-300);
        --yellow-400: var(--dark-yellow-400);
        --tint-50: var(--dark-tint-50);
        --tint-100: var(--dark-tint-100);
        --tint-200: var(--dark-tint-200);
        --tint-300: var(--dark-tint-300);
        --tint-400: var(--dark-tint-400);
        --tint-500: var(--dark-tint-500);
        --tint-600: var(--dark-tint-600);
        --tint-700: var(--dark-tint-700);
        --gray-0: var(--dark-gray-0);
        --gray-50: var(--dark-gray-50);
        --gray-100: var(--dark-gray-100);
        --gray-200: var(--dark-gray-200);
        --gray-300: var(--dark-gray-300);
        --gray-400: var(--dark-gray-400);
        --gray-500: var(--dark-gray-500);
        --gray-600: var(--dark-gray-600);
        --gray-700: var(--dark-gray-700);
        --gray-800: var(--dark-gray-800);
        --shadow-sm: '0 2px 0 var(--gray-50)';
        --shadow-default: '0 2px 0 var(--gray-100), 2px 4px 0 var(--gray-50)';
        --shadow-lg: '0 2px 0 var(--gray-200), 2px 4px 0 var(--gray-100), 4px 6px 0 var(--gray-50)';
        --shadow-input: 'inset 0 2px 0 var(--gray-100)';
    }

    html.theme-dark {
        background-color: rgb(30, 30, 40);
        background-color: var(--dark-gray-0);
    }

    html.theme-dark .checkbox:before {
        background-color: rgb(51, 47, 81);
        background-color: var(--gray-800);
    }

    html.theme-dark .tab-nav,
    html.theme-dark .dropdown {
        background-color: rgb(209, 204, 224);
        background-color: var(--gray-400);
    }

    .alert {
        padding-left: 1rem;
        padding-right: 1rem;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        color: rgb(75, 71, 109);
        color: var(--gray-700);
        border-width: 0;
        border-left-width: 2px;
        border-color: rgba(0, 0, 150, 0.025);
        border-color: var(--tint-100);
    }

    .alert-warning {
        background-color: rgb(255, 253, 235);
        background-color: var(--yellow-100);
        border-color: rgb(255, 234, 79);
        border-color: var(--yellow-400);
    }

    .alert-empty {
        color: rgba(30, 20, 90, 0.35);
        color: var(--tint-500);
        padding-top: 2rem;
        padding-bottom: 2rem;
        text-align: center;
    }

    .button {
        display: inline-flex;
        align-items: center;
        justify-items: center;
        align-content: center;
        justify-content: center;
        padding-left: 1rem;
        padding-right: 1rem;
        min-height: 2.5rem;
        border-width: 0;
        background-color: rgb(121, 0, 245);
        background-color: var(--purple-500);
        overflow: hidden;
        border-radius: 0.125rem;
        color: rgb(255, 255, 255);
        color: var(--white);
        line-height: 1;
        text-decoration: none;
    }

    .button:after {
        content: '';
        display: block;
        position: absolute;
        left: 100%;
        bottom: 0;
        width: 200%;
        height: 100vh;
        background-color: rgba(30, 20, 90, 0.35);
        background-color: var(--tint-500);
        transform: translateX(-1rem) skewX(-65deg);
        transform-origin: 0% 100%;
        transition: transform 0.75s ease-out;
    }

    .button:hover:after {
        transform: translateX(-1.5rem) skewX(-65deg);
        transition-duration: 0.3s;
    }

    .button:not(:disabled):active:after {
        transition-delay: 0.2s;
        transition-duration: 0.3s;
        transform: translateX(-100%) skewX(-65deg);
    }

    .button-secondary {
        display: inline-flex;
        align-items: center;
        justify-items: center;
        align-content: center;
        justify-content: center;
        padding-left: 1rem;
        padding-right: 1rem;
        min-height: 2.5rem;
        border-width: 0;
        background-color: rgb(121, 0, 245);
        background-color: var(--purple-500);
        overflow: hidden;
        border-radius: 0.125rem;
        color: rgb(255, 255, 255);
        color: var(--white);
        line-height: 1;
        text-decoration: none;
        background-color: rgba(0, 0, 100, 0.07);
        background-color: var(--tint-200);
        color: rgba(15, 10, 60, 0.75);
        color: var(--tint-700);
    }

    .button-secondary:hover {
        background-color: rgba(25, 0, 100, 0.1);
        background-color: var(--tint-300);
    }

    .button-secondary:not(:disabled):active {
        background-color: rgba(30, 20, 90, 0.35);
        background-color: var(--tint-500);
        opacity: 0.5;
    }

    .button:focus,
    .button-secondary:focus {
        outline: 0;
    }

    .button:disabled,
    .button-secondary:disabled {
        cursor: not-allowed;
        opacity: 0.25;
    }

    .button-sm {
        font-size: 0.875rem;
    }

    .button.button-sm,
    .button-secondary.button-sm {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        min-height: 1.5rem;
        border-radius: 0.125rem;
    }

    .button-lg {
        font-size: 1.125rem;
    }

    .button.button-lg,
    .button-secondary.button-lg {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        min-height: 3rem;
    }

    .button-lg.button:after {
        transform: translateX(-2rem) skewX(-65deg);
    }

    .button-lg.button:hover:after {
        transform: translateX(-3rem) skewX(-65deg);
    }

    .card {
        position: relative;
        display: grid;
        align-items: stretch;
        border-width: 1px;
        border-color: rgba(25, 0, 100, 0.1);
        border-color: var(--tint-300);
        background-color: rgb(255, 255, 255);
        background-color: var(--white);
        box-shadow: var(--shadow-sm);
        border-radius: 0.125rem;
    }

    .card-details {
        overflow: hidden;
    }

    .card-details-overflow {
        display: grid;
        grid-gap: 1rem;
        padding: 1.5rem;
        overflow-x: auto;
    }

    @media (min-width: 768px) {
        .card {
            grid-template-columns: 16rem 1fr;
        }

        .card-has-header {
            grid-template-rows: auto 1fr;
        }

        .card.card-no-props {
            display: block;
        }

        .card-header,
        .card-body
        {
            grid-column-end: span 2;
            padding: 5px;
            margin: 5px;
        }

        .card-details-overflow {
            padding: 2rem;
        }
    }

    .checkbox-label {
        display: grid;
        justify-content: flex-start;
        grid-template-columns: auto;
        grid-auto-flow: column;
        grid-gap: 0.5rem;
        min-height: 0;
        cursor: pointer;
        color: rgb(51, 47, 81);
        color: var(--gray-800);
    }

    .checkbox {
        width: 1.5em;
        height: 1.5em;
        border-style: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .checkbox:before {
        position: absolute;
        width: 1.5em;
        height: 1.5em;
        border-width: 1px;
        border-color: rgba(0, 0, 100, 0.07);
        border-color: var(--tint-200);
        background-color: rgb(252, 252, 253);
        background-color: var(--gray-50);
        box-shadow: var(--shadow-default);
        border-radius: 0.125rem;
        overflow: hidden;
        content: '';
    }

    .checkbox:after {
        position: absolute;
        top: 50%;
        left: 50%;
        color: rgb(121, 0, 245);
        color: var(--purple-500);
        font-size: 1.2em;
        font-weight: 900;
        line-height: 1;
        content: '✓';
        transition: transform 0.1s;
        transform: translate(-50%, -50%) scale(0);
    }

    .checkbox:focus,
    .checkbox:hover {
        outline: 0;
    }

    .checkbox:focus:before {
        border-color: rgba(25, 0, 100, 0.1);
        border-color: var(--tint-300);
        background-color: rgb(255, 255, 255);
        background-color: var(--white);
    }

    .checkbox:hover:before {
        border-color: rgba(25, 0, 100, 0.1);
        border-color: var(--tint-300);
    }

    .checkbox:checked:after {
        transform: translate(-50%, -50%) scale(1);
    }

    .checkbox:disabled {
        opacity: 0.5;
    }

    .code {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        color: rgb(75, 71, 109);
        color: var(--gray-700);
    }

    .code-inline {
        display: inline-block;
        margin-top: -0.25rem;
        margin-bottom: -0.25rem;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
        border-radius: 0.125rem;
        background-color: rgb(247, 247, 252);
        background-color: var(--gray-100);
        border-width: 1px;
        border-color: rgba(0, 0, 150, 0.025);
        border-color: var(--tint-100);
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        color: rgb(75, 71, 109);
        color: var(--gray-700);
        word-break: break-all;
    }

    .code-block {
        display: block;
        padding-left: 1rem;
        padding-right: 1rem;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        border-radius: 0.125rem;
        background-color: rgb(247, 247, 252);
        background-color: var(--gray-100);
        border-width: 1px;
        border-color: rgba(0, 0, 150, 0.025);
        border-color: var(--tint-100);
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        color: rgb(75, 71, 109);
        color: var(--gray-700);
    }

    .code-inline pre,
    .code-block pre {
        white-space: pre-wrap;
    }

    .definition-list {
        display: grid;
        grid-column-gap: 1.5rem;
        grid-row-gap: 0.5rem;
    }

    .definition-list .definition-list {
        border-left-width: 2px;
        border-color: rgb(232, 229, 239);
        border-color: var(--gray-300);
        padding-left: 1rem;
    }

    @media (min-width: 640px) {
        .definition-list {
            grid-template-columns: 8rem 1fr;
        }

        .definition-list .definition-list {
            grid-template-columns: auto 1fr;
        }
    }

    @media (min-width: 1024px) {
        .definition-list {
            grid-template-columns: 14rem 1fr;
        }
    }

    .definition-list-title {
        font-weight: 600;
        margin-bottom: 0.75rem;
    }

    @media (min-width: 640px) {
        .definition-list-title {
            margin-left: 9.5rem;
        }
    }

    @media (min-width: 1024px) {
        .definition-list-title {
            margin-left: 15.5rem;
        }
    }

    .definition-label {
        color: rgba(30, 20, 70, 0.5);
        color: var(--tint-600);
        word-wrap: break-word;
        line-height: 1.25;
    }

    @media (min-width: 640px) {
        .definition-label {
            text-align: right;
        }
    }

    .definition-value {
        word-break: break-all;
        margin-bottom: 1rem;
        line-height: 1.25;
    }

    @media (min-width: 640px) {
        .definition-value {
            margin-bottom: 0;
        }
    }

    .definition-label:empty:after,
    .definition-value:empty:after {
        content: '—';
        color: rgb(232, 229, 239);
        color: var(--gray-300);
    }

    .definition-list-empty {
        color: rgb(232, 229, 239);
        color: var(--gray-300);
    }

    @media (min-width: 640px) {
        .definition-list-empty {
            grid-column-start: 2;
        }

        .definition-list .definition-list .definition-list-empty {
            grid-column-start: 1;
        }
    }

    .dropdown {
        position: absolute;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        overflow-y: auto;
        max-height: '66vh';
        border-width: 1px;
        border-top-width: 0;
        border-color: rgba(0, 0, 100, 0.07);
        border-color: var(--tint-200);
        color: rgb(255, 255, 255);
        color: var(--white);
        background-color: rgb(75, 71, 109);
        background-color: var(--gray-700);
    }

    .layout-col {
        max-width: 80rem;
        padding-left: 1rem;
        padding-right: 1rem;
        margin-left: auto;
        margin-right: auto;
    }

    @media (min-width: 640px) {
        .layout-col {
            padding-left: 2.5rem;
            padding-right: 2.5rem;
        }
    }

    .link {
        text-decoration: underline;
        -webkit-text-decoration-color: rgb(209, 204, 224);
        text-decoration-color: rgb(209, 204, 224);
        -webkit-text-decoration-color: var(--gray-400);
        text-decoration-color: var(--gray-400);
    }

    .link:hover {
        color: rgb(121, 0, 245);
        color: var(--purple-500);
        -webkit-text-decoration-color: rgb(214, 188, 250);
        text-decoration-color: rgb(214, 188, 250);
        -webkit-text-decoration-color: var(--purple-300);
        text-decoration-color: var(--purple-300);
    }

    .links a {
        text-decoration: underline;
        -webkit-text-decoration-color: rgb(209, 204, 224);
        text-decoration-color: rgb(209, 204, 224);
        -webkit-text-decoration-color: var(--gray-400);
        text-decoration-color: var(--gray-400);
    }

    .links a:hover {
        color: rgb(121, 0, 245);
        color: var(--purple-500);
        -webkit-text-decoration-color: rgb(214, 188, 250);
        text-decoration-color: rgb(214, 188, 250);
        -webkit-text-decoration-color: var(--purple-300);
        text-decoration-color: var(--purple-300);
    }

    .link-dimmed {
        font-weight: 400;
        text-decoration: underline;
        color: rgba(30, 20, 70, 0.5);
        color: var(--tint-600);
        -webkit-text-decoration-color: rgba(20, 0, 100, 0.2);
        text-decoration-color: rgba(20, 0, 100, 0.2);
        -webkit-text-decoration-color: var(--tint-400);
        text-decoration-color: var(--tint-400);
    }

    .link-dimmed:hover {
        color: rgba(15, 10, 60, 0.75);
        color: var(--tint-700);
        -webkit-text-decoration-color: rgba(30, 20, 90, 0.35);
        text-decoration-color: rgba(30, 20, 90, 0.35);
        -webkit-text-decoration-color: var(--tint-500);
        text-decoration-color: var(--tint-500);
    }

    .link-solution {
        text-decoration: underline;
        color: rgb(75, 71, 109);
        color: var(--gray-700);
        -webkit-text-decoration-color: rgba(20, 0, 100, 0.2);
        text-decoration-color: rgba(20, 0, 100, 0.2);
        -webkit-text-decoration-color: var(--tint-400);
        text-decoration-color: var(--tint-400);
    }

    .link-solution:hover {
        color: rgb(51, 47, 81);
        color: var(--gray-800);
        -webkit-text-decoration-color: rgba(30, 20, 90, 0.35);
        text-decoration-color: rgba(30, 20, 90, 0.35);
        -webkit-text-decoration-color: var(--tint-500);
        text-decoration-color: var(--tint-500);
    }

    .grid {
        display: grid;
    }

    .cols-2 {
        grid-template-columns: repeat(2, 1fr);
    }

    .cols-auto {
        grid-template-columns: auto;
        grid-auto-flow: column;
    }

    .cols-auto-1fr {
        grid-template-columns: auto 1fr;
    }

    .gap-1 {
        grid-gap: 0.25rem;
    }

    .gap-2 {
        grid-gap: 0.5rem;
    }

    .gapy-2 {
        grid-row-gap: 0.5rem;
    }

    .gap-4 {
        grid-gap: 1rem;
    }

    .gapx-4 {
        grid-column-gap: 1rem;
    }

    .gapx-6 {
        grid-column-gap: 1.5rem;
    }

    .span-2 {
        grid-column-end: span 2;
    }

    .place-center {
        align-items: center;
        justify-items: center;
        align-content: center;
        justify-content: center;
    }

    .icon {
        fill: currentColor;
        height: 1em;
        line-height: 1;
        width: 1em;
        display: inline-block;
        vertical-align: baseline;
        vertical-align: initial;
    }

    .scrollbar::-webkit-scrollbar,
    .scrollbar::-webkit-scrollbar-corner {
        width: 4px;
        height: 4px;
    }

    .scrollbar::-webkit-scrollbar-track {
        background-color: rgb(255, 255, 255);
        background-color: var(--white);
    }

    .scrollbar::-webkit-scrollbar-track:horizontal,
    .scrollbar-lg::-webkit-scrollbar-track:horizontal {
        border-top: solid 1px rgba(0, 0, 0, 0.1);
    }

    .scrollbar::-webkit-scrollbar-track:vertical,
    .scrollbar-lg::-webkit-scrollbar-track:vertical {
        border-left: solid 1px rgba(0, 0, 0, 0.1);
    }

    .scrollbar::-webkit-scrollbar-thumb {
        background-color: rgb(209, 204, 224);
        background-color: var(--gray-400);
        border-radius: 2px;
    }

    .scrollbar-lg::-webkit-scrollbar,
    .scrollbar-lg::-webkit-scrollbar-corner {
        width: 8px;
        height: 8px;
    }

    .scrollbar-lg::-webkit-scrollbar-track {
        background-color: rgb(252, 252, 253);
        background-color: var(--gray-50);
    }

    .scrollbar-lg::-webkit-scrollbar-thumb {
        background-color: rgb(142, 137, 162);
        background-color: var(--gray-600);
        border-radius: 4px;
    }

    :root {
        --stack-height: var(--tab-main-height);
    }

    .stack {
        display: grid;
        grid-template: calc(0.4 * calc(100vh - 3rem)) calc(0.6 * calc(100vh - 3rem)) / 1fr;
        grid-template: calc(0.4 * var(--stack-height)) calc(0.6 * var(--stack-height)) / 1fr;
    }

    @media (min-width: 640px) {
        .stack {
            align-items: stretch;
            grid-template: calc(100vh - 3rem) / 20rem 1fr;
            grid-template: var(--stack-height) / 20rem 1fr;
        }
    }

    .stack-nav {
        height: 100%;
        background-color: rgb(255, 255, 255);
        background-color: var(--white);
        border-bottom-width: 1px;
        border-color: rgb(232, 229, 239);
        border-color: var(--gray-300);
        font-size: 0.75rem;
        overflow: hidden;
        display: grid;
        grid-template: 1fr / 100%;
    }

    @media (min-width: 640px) {
        .stack-nav {
            display: grid;
            grid-template: auto 1fr / 100%;
            border-bottom-width: 0;
            border-right-width: 1px;
        }
    }

    .stack-nav-actions {
        display: none;
    }

    @media (min-width: 640px) {
        .stack-nav-actions {
            display: grid;
            align-items: center;
            justify-content: space-between;
            grid-template-columns: auto;
            grid-auto-flow: column;
            padding-top: 1rem;
            padding-bottom: 1rem;
            background-color: rgb(247, 247, 252);
            background-color: var(--gray-100);
        }
    }

    .stack-nav-arrows {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        justify-content: center;
        align-items: center;
        grid-gap: 0.25rem;
        width: 2.5rem;
        padding-left: 0.75rem;
        padding-right: 0.75rem;
    }

    .stack-nav-arrow {
        color: rgb(176, 173, 197);
        color: var(--gray-500);
        font-size: 0.75rem;
    }

    .stack-nav-arrow:hover {
        color: rgb(75, 71, 109);
        color: var(--gray-700);
    }

    .stack-frames {
        overflow: hidden;
        border-top-width: 1px;
        border-color: rgb(238, 238, 245);
        border-color: var(--gray-200);
    }

    .stack-frames-scroll {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        overflow-x: hidden;
        overflow-y: auto;
    }

    .stack-frame-group {
        border-bottom-width: 1px;
        border-color: rgb(232, 229, 239);
        border-color: var(--gray-300);
        background-color: rgb(255, 255, 255);
        background-color: var(--white);
    }

    .stack-frame {
        display: grid;
        align-items: flex-end;
        grid-template-columns: 2rem auto auto;
    }

    @media (min-width: 640px) {
        .stack-frame {
            grid-template-columns: 3rem 1fr auto;
        }
    }

    .stack-frame:not(:first-child) {
        margin-top: -0.5rem;
    }

    .stack-frame-selected,
    .stack-frame-selected .stack-frame-header {
        background-color: rgb(251, 245, 255);
        background-color: var(--purple-100);
        z-index: 10;
    }

    .stack-frame-group-vendor .stack-frame-selected,
    .stack-frame-group-vendor .stack-frame-selected .stack-frame-header {
        /* @apply bg-gray-100; */
    }

    .stack-frame-number {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        padding-top: 1rem;
        padding-bottom: 1rem;
        color: rgb(183, 148, 244);
        color: var(--purple-400);
        font-feature-settings: "tnum";
        font-variant-numeric: tabular-nums;
        text-align: center;
    }

    .stack-frame-group-vendor .stack-frame-number {
        color: rgb(209, 204, 224);
        color: var(--gray-400);
    }

    .stack-frame-header {
        margin-right: -2.5rem;
    }

    .stack-frame-text {
        display: grid;
        align-items: center;
        grid-gap: 0.5rem;
        border-left-width: 2px;
        padding-left: 0.75rem;
        padding-top: 1rem;
        padding-bottom: 1rem;
        border-color: rgb(214, 188, 250);
        border-color: var(--purple-300);
        color: rgb(75, 71, 109);
        color: var(--gray-700);
    }

    .stack-frame-group-vendor .stack-frame-text {
        border-color: rgb(232, 229, 239);
        border-color: var(--gray-300);
    }

    .stack-frame-selected .stack-frame-text {
        border-color: rgb(121, 0, 245);
        border-color: var(--purple-500);
    }

    .stack-frame-group-vendor .stack-frame-selected .stack-frame-text {
        border-color: rgb(176, 173, 197);
        border-color: var(--gray-500);
    }

    .stack-frame-line {
        padding-left: 0.5rem;
        padding-right: 0.25rem;
        padding-top: 1rem;
        padding-bottom: 1rem;
        text-align: right;
    }

    .stack-main {
        display: grid;
        height: 100%;
        overflow: hidden;
        background-color: rgb(247, 247, 252);
        background-color: var(--gray-100);
        grid-template: auto 1fr / 100%;
    }

    .stack-main-header {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        border-bottom-width: 1px;
        border-color: rgb(238, 238, 245);
        border-color: var(--gray-200);
        font-size: 0.75rem;
    }

    @media (min-width: 640px) {
        .stack-main-header {
            padding-top: 1rem;
            padding-bottom: 1rem;
            font-size: 1rem;
        }
    }

    .stack-main-content {
        overflow: hidden;
    }

    .stack-viewer {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        overflow: auto;
        background-color: rgb(255, 255, 255);
        background-color: var(--white);
        font-size: 0.75rem;
    }

    .stack-ruler {
        position: -webkit-sticky;
        position: sticky;
        flex: none;
        left: 0;
        z-index: 20;
    }

    .stack-lines {
        min-height: 100%;
        border-right-width: 1px;
        border-color: rgb(238, 238, 245);
        border-color: var(--gray-200);
        background-color: rgb(247, 247, 252);
        background-color: var(--gray-100);
        padding-top: 1rem;
        padding-bottom: 1rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .stack-line {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        color: rgb(176, 173, 197);
        color: var(--gray-500);
        line-height: 2;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .stack-line-highlight {
        background-color: rgb(236, 211, 253);
        background-color: var(--purple-200);
    }

    .stack-line-selected {
        background-color: rgb(255, 248, 196);
        background-color: var(--yellow-200);
    }

    .stack-line-highlight.stack-line-selected {
        background-color: rgb(255, 243, 148);
        background-color: var(--yellow-300);
    }

    .stack-code {
        flex-grow: 1;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .stack-code-line {
        padding-left: 1.5rem;
        color: rgb(75, 71, 109);
        color: var(--gray-700);
        line-height: 2;
    }

    .stack-code-line:hover {
        background-color: rgb(251, 245, 255);
        background-color: var(--purple-100);
    }

    .stack-code-line .editor-link {
        display: inline-block;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        opacity: 0;
        color: rgb(183, 148, 244);
        color: var(--purple-400);
    }

    .stack-code-line .editor-link:hover {
        color: rgb(121, 0, 245);
        color: var(--purple-500);
    }

    .stack-code-line:hover .editor-link {
        opacity: 1;
    }

    .stack-code-line-highlight {
        background-color: rgb(251, 245, 255);
        background-color: var(--purple-100);
    }

    .stack-code-line-selected {
        background-color: rgb(255, 253, 235);
        background-color: var(--yellow-100);
    }

    .stack-code-line-highlight.stack-code-line-selected {
        background-color: rgb(255, 248, 196);
        background-color: var(--yellow-200);
    }

    .solution-hiding {
        pointer-events: none;
    }

    .solution-hidden {
        height: 0;
        overflow: hidden;
    }

    .solution-hidden .solution-main,
    .solution-hiding .solution-main {
        transform: translateY(-25px) scaleY(0.95);
        opacity: 0;
    }

    .solution-main {
        z-index: 1;
        color: rgb(51, 47, 81);
        color: var(--gray-800);
        opacity: 1;
        transition: all 0.1s;
    }

    .solution-toggle {
        position: absolute;
        z-index: 10;
        top: 0.5rem;
        right: 10px;
        padding-left: 0.75rem;
        padding-right: 0.75rem;
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
        font-size: 0.75rem;
        line-height: 1;
        cursor: pointer;
    }

    .solution-toggle-show {
        top: 0;
        background-color: rgb(148, 242, 200);
        background-color: var(--green-300);
        box-shadow: var(--shadow-sm);
        border-bottom-right-radius: 0.125rem;
        border-bottom-left-radius: 0.125rem;
        z-index: 0;
        clip-path: polygon(0 0, 100% 0, 100% 100%, 9px 100%, 0 calc(100% - 5px));
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 9px 100%, 0 calc(100% - 5px));
    }

    .solution-toggle-show a {
        text-decoration: none;
    }

    .solution-background {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        top: -6px;
        margin: 0 10px;
        background-color: rgb(148, 242, 200);
        background-color: var(--green-300);
        box-shadow: var(--shadow-default);
        border-width: 1px;
        border-color: rgba(25, 0, 100, 0.1);
        border-color: var(--tint-300);
        overflow: hidden;
        border-bottom-right-radius: 0.125rem;
        border-bottom-left-radius: 0.125rem;
    }

    .solution-title {
        font-weight: 600;
        font-size: 1.5rem;
        line-height: 1.25;
        margin-bottom: 1rem;
    }

    .solution-content {
        max-width: 56rem;
    }

    @media (min-width: 768px) {
        .solution-content {
            margin-left: 15rem;
        }
    }

    .solution code {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        color: rgb(75, 71, 109);
        color: var(--gray-700);
        display: inline-block;
        margin-top: -0.25rem;
        margin-bottom: -0.25rem;
        padding-left: 0.25rem;
        padding-right: 0.25rem;
        border-radius: 0.125rem;
        background-color: rgba(0, 0, 150, 0.025);
        background-color: var(--tint-100);
        border-width: 1px;
        border-color: rgba(0, 0, 150, 0.025);
        border-color: var(--tint-100);
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        color: rgb(75, 71, 109);
        color: var(--gray-700);
        word-break: break-all;
        line-height: 1.25;
    }

    :root {
        --tab-main-height: calc(100vh - 3rem);
    }

    .tabs {
        z-index: 10;
    }

    .tab-main {
        z-index: 1;
        border-left-width: 1px;
        border-right-width: 1px;
        border-bottom-width: 1px;
        border-color: rgba(25, 0, 100, 0.1);
        border-color: var(--tint-300);
        min-height: calc(100vh - 3rem);
        min-height: var(--tab-main-height);
    }

    .tab-content {
        background-color: rgb(255, 255, 255);
        background-color: var(--white);
        font-size: 0.875rem;
        min-height: calc(100vh - 3rem);
        min-height: var(--tab-main-height);
    }

    .tab-content-section {
        padding-top: 2rem;
        padding-bottom: 2rem;
        border-top-width: 2px;
        border-color: rgba(0, 0, 100, 0.07);
        border-color: var(--tint-200);
    }

    .tab-content-section:first-child {
        border-top-width: 0;
    }

    .tab-nav {
        position: sticky;
        position: -webkit-sticky;
        display: grid;
        justify-content: center;
        grid-template-columns: auto;
        grid-auto-flow: column;
        grid-gap: 0.5rem;
        top: 0;
        width: 100%;
        z-index: 10;
        background-color: rgb(75, 71, 109);
        background-color: var(--gray-700);
        padding: 0.25rem;
        box-shadow: var(--shadow-default);
        border-top-left-radius: 0.125rem;
        border-top-right-radius: 0.125rem;
        font-size: 0.75rem;
    }

    .tab-bar {
        display: grid;
        grid-template-columns: auto;
        grid-auto-flow: column;
        justify-content: flex-start;
        grid-gap: 0.25rem;
        overflow-x: auto;
        overflow-y: hidden;
    }

    .tab-bar::-webkit-scrollbar {
        height: 2px;
    }

    @media (min-width: 640px) {
        .tab-bar {
            justify-content: center;
        }
    }

    .tab {
        padding-left: 1rem;
        padding-right: 1rem;
        color: rgb(232, 229, 239);
        color: var(--gray-300);
        white-space: nowrap;
        border-radius: 0.125rem;
        height: 2.5rem;
        font-size: 0.875rem;
    }

    .tab-delimiter {
        border-left-width: 1px;
        border-color: rgb(142, 137, 162);
        border-color: var(--gray-600);
    }

    .tab:hover {
        background-color: rgba(20, 0, 100, 0.2);
        background-color: var(--tint-400);
        color: rgb(255, 255, 255);
        color: var(--white);
    }

    .tab-active,
    .tab-active:hover {
        background-color: rgba(30, 20, 70, 0.5);
        background-color: var(--tint-600);
        color: rgb(255, 255, 255);
        color: var(--white);
    }

    .ui-url {
        display: inline-block;
        line-height: 1.25;
        font-size: 0.875rem;
        font-weight: 400;
        text-decoration: underline;
        color: rgba(30, 20, 70, 0.5);
        color: var(--tint-600);
        -webkit-text-decoration-color: rgba(20, 0, 100, 0.2);
        text-decoration-color: rgba(20, 0, 100, 0.2);
        -webkit-text-decoration-color: var(--tint-400);
        text-decoration-color: var(--tint-400);
    }

    .ui-url:hover {
        color: rgba(15, 10, 60, 0.75);
        color: var(--tint-700);
        -webkit-text-decoration-color: rgba(30, 20, 90, 0.35);
        text-decoration-color: rgba(30, 20, 90, 0.35);
        -webkit-text-decoration-color: var(--tint-500);
        text-decoration-color: var(--tint-500);
    }

    .ui-path {
        display: inline-block;
        line-height: 1.25;
    }

    .ui-exception-message {
        font-weight: 600;
        line-height: 1.25;
        word-wrap: break-word;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 5;
        overflow: hidden;
    }

    .ui-exception-message-full {
        -webkit-line-clamp: unset;
    }

    .ui-exception-class {
        display: inline-block;
        line-height: 1.25;
        color: rgb(142, 137, 162);
        color: var(--gray-600);
    }

    .ui-line-number {
        display: inline-block;
        padding-left: 0.25rem;
        padding-right: 0.25rem;
        border-radius: 0.125rem;
        background-color: rgba(0, 0, 150, 0.015);
        background-color: var(--tint-50);
        color: rgba(30, 20, 90, 0.35);
        color: var(--tint-500);
        font-size: 0.75rem;
        line-height: 1.25;
        top: 0.15rem;
    }

    .dark .hljs {
        display: block;
        overflow-x: auto;
        padding: 0.5em;
        color: #abb2bf;
        background: #282c34;
    }

    .dark .hljs-comment,
    .dark .hljs-quote {
        color: #5c6370;
        font-style: italic;
    }

    .dark .hljs-doctag,
    .dark .hljs-keyword,
    .dark .hljs-formula {
        color: #c678dd;
    }

    .dark .hljs-section,
    .dark .hljs-name,
    .dark .hljs-selector-tag,
    .dark .hljs-deletion,
    .dark .hljs-subst {
        color: #e06c75;
    }

    .dark .hljs-literal {
        color: #56b6c2;
    }

    .dark .hljs-string,
    .dark .hljs-regexp,
    .dark .hljs-addition,
    .dark .hljs-attribute,
    .dark .hljs-meta-string {
        color: #98c379;
    }

    .dark .hljs-built_in,
    .dark .hljs-class .dark .hljs-title {
        color: #e6c07b;
    }

    .dark .hljs-attr,
    .dark .hljs-variable,
    .dark .hljs-template-variable,
    .dark .hljs-type,
    .dark .hljs-selector-class,
    .dark .hljs-selector-attr,
    .dark .hljs-selector-pseudo,
    .dark .hljs-number {
        color: #d19a66;
    }

    .dark .hljs-symbol,
    .dark .hljs-bullet,
    .dark .hljs-link,
    .dark .hljs-meta,
    .dark .hljs-selector-id,
    .dark .hljs-title {
        color: #61aeee;
    }

    .dark .hljs-emphasis {
        font-style: italic;
    }

    .dark .hljs-strong {
        font-weight: bold;
    }

    .dark .hljs-link {
        text-decoration: underline;
    }

    .light .hljs {
        display: block;
        overflow-x: auto;
        padding: 0.5em;
        color: #383a42;
        background: #fafafa;
    }

    .light .hljs-comment,
    .light .hljs-quote {
        color: #a0a1a7;
        font-style: italic;
    }

    .light .hljs-doctag,
    .light .hljs-keyword,
    .light .hljs-formula {
        color: #a626a4;
    }

    .light .hljs-section,
    .light .hljs-name,
    .light .hljs-selector-tag,
    .light .hljs-deletion,
    .light .hljs-subst {
        color: #e45649;
    }

    .light .hljs-literal {
        color: #0184bb;
    }

    .light .hljs-string,
    .light .hljs-regexp,
    .light .hljs-addition,
    .light .hljs-attribute,
    .light .hljs-meta-string {
        color: #50a14f;
    }

    .light .hljs-built_in,
    .light .hljs-class .light .hljs-title {
        color: #c18401;
    }

    .light .hljs-attr,
    .light .hljs-variable,
    .light .hljs-template-variable,
    .light .hljs-type,
    .light .hljs-selector-class,
    .light .hljs-selector-attr,
    .light .hljs-selector-pseudo,
    .light .hljs-number {
        color: #986801;
    }

    .light .hljs-symbol,
    .light .hljs-bullet,
    .light .hljs-link,
    .light .hljs-meta,
    .light .hljs-selector-id,
    .light .hljs-title {
        color: #4078f2;
    }

    .light .hljs-emphasis {
        font-style: italic;
    }

    .light .hljs-strong {
        font-weight: bold;
    }

    .light .hljs-link {
        text-decoration: underline;
    }

    /*
        Dumps are hidden asap in errorPage.blade
        What follows is !important
    */

    .tabs pre.sf-dump {
        display: block !important;
    }

    .sf-dump-public.sf-dump-highlight,
    .sf-dump-protected.sf-dump-highlight,
    .sf-dump-private.sf-dump-highlight,
    .sf-dump-str.sf-dump-highlight,
    .sf-dump-key.sf-dump-highlight {
        background-color: rgb(251, 245, 255) !important;
        background-color: var(--purple-100) !important;
        border-color: rgb(236, 211, 253) !important;
        border-color: var(--purple-200) !important;
    }

    .sf-dump-public.sf-dump-highlight-active,
    .sf-dump-protected.sf-dump-highlight-active,
    .sf-dump-private.sf-dump-highlight-active,
    .sf-dump-str.sf-dump-highlight-active,
    .sf-dump-key.sf-dump-highlight-active {
        background-color: rgb(255, 253, 235) !important;
        background-color: var(--yellow-100) !important;
        border-color: rgb(255, 248, 196) !important;
        border-color: var(--yellow-200) !important;
    }

    pre.sf-dump .sf-dump-search-wrapper > * {
        border-color: rgb(232, 229, 239) !important;
        border-color: var(--gray-300) !important;
    }

    pre.sf-dump .sf-dump-search-wrapper > input.sf-dump-search-input {
        font-size: 0.75rem !important;
        background-color: rgb(51, 47, 81) !important;
        background-color: var(--gray-800) !important;
    }

    pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next,
    pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous {
        background-color: rgba(0, 0, 150, 0.025) !important;
        background-color: var(--tint-100) !important;
    }

    pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-count {
        font-size: 0.875rem !important;
    }

    pre.sf-dump,
    pre.sf-dump .sf-dump-default {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
        background-color: rgb(247, 247, 252) !important;
        background-color: var(--gray-100) !important;
        color: rgb(51, 47, 81) !important;
        color: var(--gray-800) !important;
    }

    pre.sf-dump .sf-dump-num {
        color: rgb(250, 133, 162) !important;
        color: var(--red-300) !important;
    }

    pre.sf-dump .sf-dump-const {
        font-weight: 400 !important;
    }

    pre.sf-dump .sf-dump-str {
        font-weight: 400 !important;
        color: rgb(142, 137, 162) !important;
        color: var(--gray-600) !important;
    }

    pre.sf-dump .sf-dump-note {
        color: rgb(122, 122, 255) !important;
        color: var(--blue-400) !important;
    }

    pre.sf-dump .sf-dump-ref {
        color: rgb(142, 137, 162) !important;
        color: var(--gray-600) !important;
    }

    pre.sf-dump .sf-dump-public,
    pre.sf-dump .sf-dump-protected,
    pre.sf-dump .sf-dump-private {
        color: rgb(121, 0, 245) !important;
        color: var(--purple-500) !important;
    }

    pre.sf-dump .sf-dump-meta {
        color: rgb(121, 0, 245) !important;
        color: var(--purple-500) !important;
    }

    pre.sf-dump .sf-dump-key {
        color: rgb(113, 7, 220) !important;
        color: var(--purple-600) !important;
    }

    pre.sf-dump .sf-dump-index {
        color: rgb(122, 122, 255) !important;
        color: var(--blue-400) !important;
    }

    pre.sf-dump .sf-dump-ellipsis {
        color: rgb(113, 7, 220) !important;
        color: var(--purple-600) !important;
    }

    .bg-gray-100 {
        background-color: rgb(247, 247, 252) !important;
        background-color: var(--gray-100) !important;
    }

    .bg-tint-200 {
        background-color: rgba(0, 0, 100, 0.07) !important;
        background-color: var(--tint-200) !important;
    }

    .bg-tint-300 {
        background-color: rgba(25, 0, 100, 0.1) !important;
        background-color: var(--tint-300) !important;
    }

    .bg-tint-600 {
        background-color: rgba(30, 20, 70, 0.5) !important;
        background-color: var(--tint-600) !important;
    }

    .hover\:bg-tint-100:hover {
        background-color: rgba(0, 0, 150, 0.025) !important;
        background-color: var(--tint-100) !important;
    }

    .hover\:bg-tint-400:hover {
        background-color: rgba(20, 0, 100, 0.2) !important;
        background-color: var(--tint-400) !important;
    }

    .hover\:bg-tint-700:hover {
        background-color: rgba(15, 10, 60, 0.75) !important;
        background-color: var(--tint-700) !important;
    }

    .border-gray-700 {
        border-color: rgb(75, 71, 109) !important;
        border-color: var(--gray-700) !important;
    }

    .border-tint-200 {
        border-color: rgba(0, 0, 100, 0.07) !important;
        border-color: var(--tint-200) !important;
    }

    .border-tint-300 {
        border-color: rgba(25, 0, 100, 0.1) !important;
        border-color: var(--tint-300) !important;
    }

    .rounded-full {
        border-radius: 9999px !important;
    }

    .rounded-t {
        border-top-left-radius: 0.25rem !important;
        border-top-right-radius: 0.25rem !important;
    }

    .border-none {
        border-style: none !important;
    }

    .border-t-2 {
        border-top-width: 2px !important;
    }

    .border-b {
        border-bottom-width: 1px !important;
    }

    .cursor-pointer {
        cursor: pointer !important;
    }

    .inline-block {
        display: inline-block !important;
    }

    .flex {
        display: flex !important;
    }

    .inline-flex {
        display: inline-flex !important;
    }

    .hidden {
        display: none !important;
    }

    .items-center {
        align-items: center !important;
    }

    .items-baseline {
        align-items: baseline !important;
    }

    .justify-start {
        justify-content: flex-start !important;
    }

    .justify-end {
        justify-content: flex-end !important;
    }

    .justify-center {
        justify-content: center !important;
    }

    .font-mono {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
    }

    .font-normal {
        font-weight: 400 !important;
    }

    .font-medium {
        font-weight: 500 !important;
    }

    .font-semibold {
        font-weight: 600 !important;
    }

    .h-5 {
        height: 1.25rem !important;
    }

    .h-8 {
        height: 2rem !important;
    }

    .h-full {
        height: 100% !important;
    }

    .mx-0 {
        margin-left: 0 !important;
        margin-right: 0 !important;
    }

    .ml-0 {
        margin-left: 0 !important;
    }

    .mt-1 {
        margin-top: 0.25rem !important;
    }

    .mr-1 {
        margin-right: 0.25rem !important;
    }

    .mb-1 {
        margin-bottom: 0.25rem !important;
    }

    .mt-2 {
        margin-top: 0.5rem !important;
    }

    .mr-2 {
        margin-right: 0.5rem !important;
    }

    .mb-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-2 {
        margin-left: 0.5rem !important;
    }

    .mb-3 {
        margin-bottom: 0.75rem !important;
    }

    .mt-4 {
        margin-top: 1rem !important;
    }

    .mr-4 {
        margin-right: 1rem !important;
    }

    .mb-4 {
        margin-bottom: 1rem !important;
    }

    .ml-6 {
        margin-left: 1.5rem !important;
    }

    .mt-8 {
        margin-top: 2rem !important;
    }

    .mt-12 {
        margin-top: 3rem !important;
    }

    .ml-auto {
        margin-left: auto !important;
    }

    .min-h-0 {
        min-height: 0 !important;
    }

    .min-w-8 {
        min-width: 2rem !important;
    }

    .opacity-25 {
        opacity: 0.25 !important;
    }

    .opacity-50 {
        opacity: 0.5 !important;
    }

    .opacity-75 {
        opacity: 0.75 !important;
    }

    .overflow-visible {
        overflow: visible !important;
    }

    .p-4 {
        padding: 1rem !important;
    }

    .p-12 {
        padding: 3rem !important;
    }

    .py-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }

    .px-2 {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
    }

    .py-4 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }

    .px-4 {
        padding-left: 1rem !important;
        padding-right: 1rem !important;
    }

    .px-6 {
        padding-left: 1.5rem !important;
        padding-right: 1.5rem !important;
    }

    .pt-2 {
        padding-top: 0.5rem !important;
    }

    .pt-10 {
        padding-top: 2.5rem !important;
    }

    .pointer-events-none {
        pointer-events: none !important;
    }

    .static {
        position: static !important;
    }

    .absolute {
        position: absolute !important;
    }

    .relative {
        position: relative !important;
    }

    .sticky {
        position: -webkit-sticky !important;
        position: sticky !important;
    }

    .inset-0 {
        top: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
    }

    .top-0 {
        top: 0 !important;
    }

    .right-0 {
        right: 0 !important;
    }

    .bottom-0 {
        bottom: 0 !important;
    }

    .left-0 {
        left: 0 !important;
    }

    .top-full {
        top: 100% !important;
    }

    .left-full {
        left: 100% !important;
    }

    .text-left {
        text-align: left !important;
    }

    .text-white {
        color: rgb(255, 255, 255) !important;
        color: var(--white) !important;
    }

    .text-green-300 {
        color: rgb(148, 242, 200) !important;
        color: var(--green-300) !important;
    }

    .text-purple-400 {
        color: rgb(183, 148, 244) !important;
        color: var(--purple-400) !important;
    }

    .text-purple-800 {
        color: rgb(79, 15, 143) !important;
        color: var(--purple-800) !important;
    }

    .text-gray-200 {
        color: rgb(238, 238, 245) !important;
        color: var(--gray-200) !important;
    }

    .text-gray-300 {
        color: rgb(232, 229, 239) !important;
        color: var(--gray-300) !important;
    }

    .text-gray-400 {
        color: rgb(209, 204, 224) !important;
        color: var(--gray-400) !important;
    }

    .text-gray-500 {
        color: rgb(176, 173, 197) !important;
        color: var(--gray-500) !important;
    }

    .text-gray-800 {
        color: rgb(51, 47, 81) !important;
        color: var(--gray-800) !important;
    }

    .text-tint-600 {
        color: rgba(30, 20, 70, 0.5) !important;
        color: var(--tint-600) !important;
    }

    .hover\:text-white:hover {
        color: rgb(255, 255, 255) !important;
        color: var(--white) !important;
    }

    .hover\:text-purple-500:hover {
        color: rgb(121, 0, 245) !important;
        color: var(--purple-500) !important;
    }

    .text-xs {
        font-size: 0.75rem !important;
    }

    .text-sm {
        font-size: 0.875rem !important;
    }

    .text-2xl {
        font-size: 1.5rem !important;
    }

    .italic {
        font-style: italic !important;
    }

    .uppercase {
        text-transform: uppercase !important;
    }

    .underline {
        text-decoration: underline !important;
    }

    .no-underline {
        text-decoration: none !important;
    }

    .tracking-wider {
        letter-spacing: 0.05em !important;
    }

    .align-middle {
        vertical-align: middle !important;
    }

    .whitespace-no-wrap {
        white-space: nowrap !important;
    }

    .w-4 {
        width: 1rem !important;
    }

    .w-full {
        width: 100% !important;
    }

    .z-1 {
        z-index: 1 !important;
    }

    .z-10 {
        z-index: 10 !important;
    }

    @media (min-width: 640px) {

        .sm\:start-2 {
            grid-column-start: 2;
        }

        .sm\:block {
            display: block !important;
        }

        .sm\:ml-6 {
            margin-left: 1.5rem !important;
        }
    }

    @media (min-width: 768px) {

        .md\:block {
            display: block !important;
        }
    }

</style>
<style>
    .container, h1 {
        margin-right: auto;
        margin-left: auto;
    }
    h1 {
        text-align: center;
    }
    form > input,
    form > button,
    .form input, li {
        border-radius: 5px;
        margin: 5px;
        padding: 5px;
    }

    .container {
        max-width: 900px;
    }
    form, .form {
        display: flex;
        flex-direction: column;
    }
    form > input,
    form > button,
    .form input {
        text-align: center;
    }
    form > input[type=submit],
    form > button[type=submit],
    .form input[type=submit] {
        background-color: #50a14f;
        color: #fff;
    }
    li {
        background-color: #50a14f;
        color: #fff;
    }
</style>
