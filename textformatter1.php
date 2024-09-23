<?php include "header.php"; ?>
<title>typegrow</title>
</head>

<body>

    <?php include "menu.php"; ?>

    <section class="m-5">
        <div>
            <h1 class="fw-bold text-center">
                LinkedIn Text Formatter
            </h1>
        </div>
        <div class="container editor-container preview-section">
            <div class="row">
                <div class="col-md-6">
                    <!-- Text Editor -->
                    <div id="editor-toolbar" class="mb-2">
                        <button class="ql-bold"></button>
                        <button class="ql-italic"></button>
                        <button class="ql-underline"></button>
                        <button class="ql-strike"></button>
                        <button class="ql-link"></button>
                        <button class="ql-image"></button>
                        <button class="ql-clean"></button>
                    </div>
                    <div id="editor"></div>
                    <button id="copyText" class="btn animated-button mt-3">Copy text</button>
                </div>
                <div class="col-md-6 preview-section">
                    <!-- Post Preview Section -->
                    <h5 class="small text-start pt-2">preview-box</h5>
                    <div class="preview-box">

                        <div class="main d-flex gap-2">
                            <div class="left">
                                <img src="includes\assets\images\picofme (1).png" width="50px" class="sideimg">
                            </div>
                            <div class="right">
                                <h4 class="fs-5 d-flex d-inline">priyal soni</h4>
                                <p class="text-start icons-p text-muted">Growth at Linkedgrowth|Heliping you grow
                                    LinkedIn
                                    audience with
                                    AI</p>
                            </div>

                        </div>
                        <div class="main-content text-start">
                            <textarea type="text" class="format-input normal border-0" placeholder="Start writing and your post will appear here..
You can add images, links, #hashtags and emojis 🤩

 This line will appear below the see more..." readonly="" fdprocessedid="6fj2z" style="height: 138px;"></textarea>

                            <div class="texticons d-flex">
                                <div class="icons-innerleft d-flex text-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 16 16">
                                            <g>
                                                <path d="M8 0a8 8 0 018 8 8 8 0 01-8 8 8 8 0 01-8-8 8 8 0 018-8z"
                                                    fill="none" />
                                                <circle cx="8" cy="8" r="7" fill="#378fe9" />
                                                <path
                                                    d="M11.93 7.25h-.55c-.05 0-.15-.19-.4-.46-.37-.4-.78-.91-1.07-1.19a7.13 7.13 0 01-1.73-2.24c-.24-.51-.26-.74-.75-.74a.78.78 0 00-.67.81c0 .14.07.63.1.8a7.54 7.54 0 001 2.2H4.12a.88.88 0 00-.65.28.84.84 0 00-.23.66.91.91 0 00.93.85h.16a.82.82 0 00-.55.24.77.77 0 00-.21.54.81.81 0 00.74.8.8.8 0 00.33 1.42.76.76 0 00-.09.55.87.87 0 00.85.63h2.29a3.8 3.8 0 00.89-.11l1.42-.4h1.9c1.02-.04 1.29-4.64.03-4.64z"
                                                    fill="#d0e8ff" fill-rule="evenodd" />
                                                <path
                                                    d="M7.43 6.43H4.11a.88.88 0 00-.88 1 .92.92 0 00.93.84h.16a.82.82 0 00-.55.24.77.77 0 00-.21.56.83.83 0 00.74.81.81.81 0 00-.31.63.81.81 0 00.65.8.78.78 0 00-.09.56.86.86 0 00.85.62h2.29a3.8 3.8 0 00.89-.11l1.42-.47h1.9c1 0 1.27-4.64 0-4.64a5 5 0 01-.55 0s-.15-.19-.4-.46h0c-.37-.4-.78-.91-1.07-1.19a7.08 7.08 0 01-1.7-2.25 2.14 2.14 0 00-.32-.52.83.83 0 00-1.16.09 1.39 1.39 0 00-.25.38 1.71 1.71 0 00-.09.3 2.38 2.38 0 00.07.84 4.12 4.12 0 00.27.84 6.65 6.65 0 00.66 1 .18.18 0 01.07.08"
                                                    fill="none" stroke="#004182" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 16 16">
                                            <g>
                                                <path d="M8 0a8 8 0 018 8 8 8 0 01-8 8 8 8 0 01-8-8 8 8 0 018-8z"
                                                    fill="none" />
                                                <circle cx="8" cy="8" r="7" fill="#df704d" />
                                                <path
                                                    d="M7.71 5A2.64 2.64 0 004 8.75l4 4 4-4A2.64 2.64 0 0012 5a2.61 2.61 0 00-1.85-.77h0A2.57 2.57 0 008.3 5l-.3.3z"
                                                    fill="#fff3f0" stroke="#77280c" fill-rule="evenodd" />
                                                <path
                                                    d="M11.43 5.18a2 2 0 01.53.63c.9 1.67-.6 2.72-1.54 3.67-.6.61-1.22 1.22-1.85 1.8M5.79 4.81a2.1 2.1 0 00-.79.11 1.8 1.8 0 00-1 .82A2.6 2.6 0 003.77 7v.09"
                                                    fill="none" />
                                                <path
                                                    d="M7.71 5A2.6 2.6 0 004 5a2.66 2.66 0 000 3.7l4 4 4-4A2.66 2.66 0 0012 5a2.58 2.58 0 00-1.85-.78h0A2.58 2.58 0 008.3 5l-.3.25z"
                                                    fill="none" stroke="#77280c" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="small text-muted mt-1">35</span>
                                </div>

                                <div class="icons-innerright">
                                    <p class="icons-p mt-1">26comments.&nbsp;6posts</p>
                                </div>
                            </div>
                        </div>

                        <div class="row ending">
                            <div class="col">
                                <div class="d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        fill="currentColor" viewBox="0 0 24 24" focusable="false"
                                        class="PreviewEngageButton_iconEngage__BL4MY">
                                        <path
                                            d="M19.46 11l-3.91-3.91a7 7 0 01-1.69-2.74l-.49-1.47A2.76 2.76 0 0010.76 1 2.75 2.75 0 008 3.74v1.12a9.19 9.19 0 00.46 2.85L8.89 9H4.12A2.12 2.12 0 002 11.12a2.16 2.16 0 00.92 1.76A2.11 2.11 0 002 14.62a2.14 2.14 0 001.28 2 2 2 0 00-.28 1 2.12 2.12 0 002 2.12v.14A2.12 2.12 0 007.12 22h7.49a8.08 8.08 0 003.58-.84l.31-.16H21V11zM19 19h-1l-.73.37a6.14 6.14 0 01-2.69.63H7.72a1 1 0 01-1-.72l-.25-.87-.85-.41A1 1 0 015 17l.17-1-.76-.74A1 1 0 014.27 14l.66-1.09-.73-1.1a.49.49 0 01.08-.7.48.48 0 01.34-.11h7.05l-1.31-3.92A7 7 0 0110 4.86V3.75a.77.77 0 01.75-.75.75.75 0 01.71.51L12 5a9 9 0 002.13 3.5l4.5 4.5H19z">
                                        </path>
                                    </svg>
                                    <span>like</span>
                                </div>
                            </div>
                            <div class="col d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                                    viewBox="0 0 24 24" focusable="false" class="PreviewEngageButton_iconEngage__BL4MY">
                                    <path
                                        d="M7 9h10v1H7zm0 4h7v-1H7zm16-2a6.78 6.78 0 01-2.84 5.61L12 22v-4H8A7 7 0 018 4h8a7 7 0 017 7zm-2 0a5 5 0 00-5-5H8a5 5 0 000 10h6v2.28L19 15a4.79 4.79 0 002-4z">
                                    </path>
                                </svg>
                                <span>Comments</span>
                            </div>
                            <div class="col">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        fill="currentColor" viewBox="0 0 24 24" focusable="false"
                                        class="PreviewEngageButton_iconEngage__BL4MY">
                                        <path
                                            d="M23 12l-4.61 7H16l4-6H8a3.92 3.92 0 00-4 3.84V17a4 4 0 00.19 1.24L5.12 21H3l-.73-2.22A6.4 6.4 0 012 16.94 6 6 0 018 11h12l-4-6h2.39z">
                                        </path>
                                    </svg>
                                    <span>
                                        Repost
                                    </span>
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        fill="currentColor" viewBox="0 0 24 24" focusable="false"
                                        class="PreviewEngageButton_iconEngage__BL4MY">
                                        <path d="M21 3L0 10l7.66 4.26L16 8l-6.26 8.34L14 24l7-21z"></path>
                                    </svg>
                                    <span>send</span>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="container formatter-container">
            <div class="row mx-auto">
                <!-- Normal -->
                <div class="col-md-4 format-box mb-4 ">
                    <label>Normal</label>
                    <input type="text" class="format-input normal" placeholder="Normal Text" readonly>
                    <button class="animated-button copy-btn">Copy text</button>
                </div>

                <!-- Bold -->
                <div class="col-md-4 format-box mb-4 ">
                    <label>Bold</label>
                    <input type="text" class="format-input bold" placeholder="Bold Text" readonly>
                    <button class="animated-button copy-btn">Copy text</button>
                </div>

                <!-- Italic -->
                <div class="col-md-4 format-box mb-4 ">
                    <label>Italic</label>
                    <input type="text" class="format-input italic" placeholder="Italic Text" readonly>
                    <button class="animated-button copy-btn">Copy text</button>
                </div>

                <!-- Underline -->
                <div class="col-md-4 format-box mb-4 ">
                    <label>Underline</label>
                    <input type="text" class="format-input underline" placeholder="Underline Text" readonly>
                    <button class="animated-button copy-btn">Copy text</button>
                </div>

                <!-- Strikethrough -->
                <div class="col-md-4  format-box mb-4 ">
                    <label>Strikethrough</label>
                    <input type="text" class="format-input strikethrough" placeholder="Strikethrough Text" readonly>
                    <button class="animated-button copy-btn">Copy text</button>
                </div>

                <!-- Bold Italic -->
                <div class="col-md-4 format-box mb-4 ">
                    <label>Bold Italic</label>
                    <input type="text" class="format-input bold-italic" placeholder="Bold Italic Text" readonly>
                    <button class="animated-button copy-btn">Copy text</button>
                </div>

                <!-- Bold Underline -->
                <div class="col-md-4 format-box mb-4 ">
                    <label>Bold Underline</label>
                    <input type="text" class="format-input bold-underline" placeholder="Bold Underline Text" readonly>
                    <button class="animated-button copy-btn ">Copy text</button>
                </div>
            </div>
        </div>
    </section>

    <section class="tools">  
      <div class="tools-container">
        <h2 class="fw-bold fs-1 animate__animated animate__fadeInDown  animate__delay-2s">More free tools</h2>
        <div class="tools-grid border-0  ">
            <div class="tool-item  animate__animated  animate__fadeInDown animate__delay-3s">
                <i class="fas fa-images tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link col-auto">LinkedIn Carousel Generator</a>
            </div>
            <div class="tool-item animate__animated animate__fadeInDown animate__delay-3s">
                <i class="fas fa-anchor tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link col-auto">LinkedIn Hook Generator</a>
            </div>
            <div class="tool-item animate__animated animate__fadeInDown animate__delay-3s">
                <i class="fas fa-heading tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link col-auto ">LinkedIn Headline Generator</a>
            </div>
            <div class="tool-item animate__animated animate__fadeInDown animate__delay-3s">
                <i class="fas fa-hashtag tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link  col-auto">LinkedIn Hashtag Generator</a>
            </div>
            <div class="tool-item animate__animated animate__fadeInDown animate__delay-3s">
                <i class="fas fa-text-height tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link col-auto">LinkedIn Text Formatter</a>
            </div>
            <div class="tool-item animate__animated animate__fadeInDown animate__delay-3s">
                <i class="fas fa-file-alt tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link col-auto">LinkedIn Post Generator</a>
            </div>
            <div class="tool-item animate__animated animate__fadeInDown animate__delay-3s">
                <i class="fas fa-list-ol tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link col-auto">LinkedIn Character Counter</a>
            </div>
            <div class="tool-item animate__animated animate__fadeInDown animate__delay-3s">
                <i class="fas fa-download tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link col-auto">LinkedIn Video Downloader</a>
            </div>
        </div>
    </div>
    </section>

    <section class="section-2 p-5">
        <div class="container">
            <h1 class="text-center mb-5 fs-1 fw-bold">Frequently Asked Questions (FAQs)</h1>
            <div class="accordion" id="accordionExample">
                <!-- Accordion Item 1 -->
                <div class="accordion-item border-0 shadow-none mb-3">
                    <h2 class="accordion-header  ">
                        <button class="accordion-button collapsed  shadow-none border-0 fw-semibold fs-5 aacccolr"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Why this Typegrow?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                        <div class="accordion-body border-0 shadow-none aacccolr">
                            Typegrow is an all-in-one LinkedIn growth tool trusted by over 1,000 creators and companies.
                            Typegrow helps you create and schedule better content with less effort using AI.
                        </div>
                    </div>
                </div>
                <!-- Accordion Item 2 -->
                <div class="accordion-item border-0 shadow-none mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed  shadow-none border-0 fw-semibold  fs-5  aacccolr"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Who is Typegrow for?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body border-0 shadow-none  aacccolr">
                            Typegrow is for individuals or companies who want to grow personal brands on LinkedIn.
                            Whether you're an individual content creator or an agency, Typegrow helps you drive more
                            business from LinkedIn.
                        </div>
                    </div>
                </div>
                <!-- Accordion Item 3 -->
                <div class="accordion-item border-0 shadow-none mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed  shadow-none border-0 fw-semibold  fs-5  aacccolr"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            Is Typegrow safe to use?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body border-0 shadow-none  aacccolr">
                            Typegrow uses the official LinkedIn API to connect to your LinkedIn account and post content
                            from your or your company pages. This means that Typegrow keeps your account 100% safe to
                            use. We do not position ourselves as an automation tool and our focus is on providing you
                            with the right features to create better content and build inbound leads.
                        </div>
                    </div>
                </div>
                <!-- Accordion Item 4 -->
                <div class="accordion-item border-0 shadow-none mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed shadow-none border-0 fw-semibold fs-5 aacccolr"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour">
                            How much does Typegrow cost?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                        <div class="accordion-body border-0 shadow-none  aacccolr">
                            Typegrow is currently completely free to use. However, we are working on a paid plan to
                            bring you more features and functionality.
                        </div>
                    </div>
                </div>
                <!-- Accordion Item 5 -->
                <div class="accordion-item border-0 shadow-none mb-3 ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed  shadow-none  border-0 fw-semibold fs-5 aacccolr"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                            aria-controls="collapseFive">
                            Can I post from a company page?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body border-0 shadow-none  aacccolr">
                            Sure! You can add all your company pages your LinkedIn account has access to and post from
                            them. You'll be able to easily choose whether you want to post from your personal profile or
                            from company pages.
                        </div>
                    </div>
                </div>
                <!-- Accordion Item 6 -->
                <div class="accordion-item border-0 shadow-none mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed  shadow-none border-0 fw-semibold fs-5  aacccolr"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                            aria-controls="collapseSix">
                            Can an agency use Typegrow for my clients?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body border-0 shadow-none  aacccolr">
                            Yes, Typegrow can be used by agencies to manage and schedule content for their clients,
                            making it easier to handle multiple accounts efficiently.
                        </div>
                    </div>
                </div>
                <!-- Accordion Item 7 -->
                <div class="accordion-item border-0 shadow-none mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed shadow-none border-0 fw-semibold fs-5  aacccolr"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                            aria-expanded="false" aria-controls="collapseSeven">
                            Do I need to keep my browser open for Typegrow to work?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body border-0 shadow-none  aacccolr">
                            No, you do not need to keep your browser open for Typegrow to work. Once you schedule
                            content, Typegrow handles the posting automatically.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <?php include "footer.php"; ?>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            // Initialize Quill editor
            var quill = new Quill('#editor', {
                modules: {
                    toolbar: '#editor-toolbar'
                },
                theme: 'snow'
            });

            // Update input fields and post preview when text is typed in the editor
            quill.on('text-change', function () {
                const delta = quill.getContents();
                const plainText = quill.getText().trim();
                const htmlContent = quill.root.innerHTML;

                // Update the normal text
                $('.normal').val(plainText);

                // Update the bold text
                $('.bold').val(plainText).css('font-weight', 'bold');

                // Update the italic text
                $('.italic').val(plainText).css('font-style', 'italic');

                // Update the underline text
                $('.underline').val(plainText).css('text-decoration', 'underline');

                // Update the strikethrough text
                $('.strikethrough').val(plainText).css('text-decoration', 'line-through');

                // Update the bold italic text
                $('.bold-italic').val(plainText).css({ 'font-weight': 'bold', 'font-style': 'italic' });

                // Update the bold underline text
                $('.bold-underline').val(plainText).css({ 'font-weight': 'bold', 'text-decoration': 'underline' });




                // Update the post preview with formatted content
                document.getElementById('postPreview').innerHTML = htmlContent;
            });

            // Copy text functionality for format buttons
            $('.copy-btn').click(function () {
                const inputField = $(this).siblings('.format-input');
                inputField.select();
                document.execCommand('copy');
                alert('Text copied: ' + inputField.val());
            });

            // Copy text functionality for Quill editor
            document.getElementById('copyText').addEventListener('click', function () {
                const editorContent = quill.root.innerHTML;
                navigator.clipboard.writeText(editorContent).then(() => {
                    alert('Text copied to clipboard!');
                }).catch(err => {
                    console.error('Failed to copy text: ', err);
                });
            });
        });
    </script>

</body>

</html>