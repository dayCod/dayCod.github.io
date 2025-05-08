<style>
    :root {
        --font-family-inconsolata: "Inconsolata", monospace;
        --font-family-quicksand: "Quicksand", sans-serif;
        --font-family-lora: "Lora", serif;
    }

    * {
        font-family: var(--font-family-quicksand);
        font-optical-sizing: auto;
        font-style: normal;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        height: 1000px;
    }

    /* Medium-inspired styling for rendered Markdown within .markdown-style class */
    .markdown-style {
        font-family: var(--font-family-lora) !important;
        line-height: 1.65;
        max-width: 720px;
        margin: 0 auto;
        padding: 30px 20px;
        color: #171717;
        background-color: #fff;
    }

    /* Headings */
    .markdown-style h1,
    .markdown-style h2,
    .markdown-style h3,
    .markdown-style h4,
    .markdown-style h5,
    .markdown-style h6 {
        font-family: 'Source Sans Pro', 'Helvetica Neue', Arial, sans-serif;
        color: #171717;
        margin: 1.5em 0 0.5em;
        font-weight: 700;
    }

    .markdown-style h1 {
        font-size: 2.5em;
        line-height: 1.2;
    }

    .markdown-style h2 {
        font-size: 2em;
        line-height: 1.3;
    }

    .markdown-style h3 {
        font-size: 1.6em;
    }

    .markdown-style h4 {
        font-size: 1.3em;
    }

    /* Paragraphs */
    .markdown-style p {
        margin: 1.2em 0;
        font-size: 1.1em;
        text-align: left;
    }

    /* Links */
    .markdown-style a {
        color: #03a87c;
        text-decoration: none;
        border-bottom: 1px solid rgba(3, 168, 124, 0.2);
        transition: all 0.2s ease;
    }

    .markdown-style a:hover {
        color: #028a67;
        border-bottom: 1px solid #03a87c;
    }

    /* Lists */
    .markdown-style ul,
    .markdown-style ol {
        margin: 1.2em 0;
        padding-left: 2.5em;
    }

    .markdown-style li {
        margin: 0.8em 0;
        font-size: 1.1em;
    }

    /* Blockquotes */
    .markdown-style blockquote {
        border-left: 4px solid #e2e2e2;
        margin: 1.5em 0;
        padding: 0.5em 1.5em;
        font-style: italic;
        color: #555;
    }

    .markdown-style blockquote p {
        margin: 0;
        font-size: 1.1em;
    }

    /* Code blocks */
    .markdown-style pre,
    .markdown-style code {
        font-family: 'Source Code Pro', 'Courier New', monospace;
        background-color: #f7f7f7;
        border-radius: 5px;
    }

    .markdown-style code {
        padding: 2px 6px;
        font-size: 0.95em;
        color: #d63333;
    }

    .markdown-style pre {
        padding: 1.2em;
        overflow-x: auto;
        margin: 1.5em 0;
        line-height: 1.45;
    }

    /* Inline code */
    .markdown-style p code {
        background-color: #f0f0f0;
    }

    /* Tables */
    .markdown-style table {
        width: 100%;
        border-collapse: collapse;
        margin: 1.5em 0;
        font-size: 1em;
    }

    .markdown-style th,
    .markdown-style td {
        border: 1px solid #e2e2e2;
        padding: 0.8em;
        text-align: left;
    }

    .markdown-style th {
        background-color: #fafafa;
        font-weight: 600;
    }

    /* Images */
    .markdown-style img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 1.5em auto;
        border-radius: 3px;
    }

    /* Horizontal rule */
    .markdown-style hr {
        border: none;
        border-top: 1px solid #e2e2e2;
        margin: 2.5em 0;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .markdown-style {
            padding: 20px 15px;
            font-size: 1em;
        }

        .markdown-style h1 {
            font-size: 2em;
        }

        .markdown-style h2 {
            font-size: 1.6em;
        }

        .markdown-style table {
            font-size: 0.95em;
        }
    }
</style>
