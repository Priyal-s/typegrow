<?php include "header.php"; ?>
<title>typegrow</title>
</head>

<body>

    <?php include "menu.php"; ?>
    <div class="container">
        <div class="header">
            <h1 class="fw-bold ">LinkedIn Character Counter</h1>
            <p class="fw-semi-bold">Use this free tool to check the character count in your LinkedIn post,<br> about
                section, or message exactly
                as it will appear on LinkedIn.</p>
        </div>

        <div class="textarea-container">
            <textarea id="textArea" placeholder="Type or copy your text here..."></textarea>
        </div>

        <div class="counter-container">
            <div class="counter-box">
                <span>Character Typed</span>
                <span id="typedCount">0 / 3000</span>
            </div>
            <div class="counter-box">
                <span>Character Remaining</span>
                <span id="remainingCount">3000</span>
            </div>
            <div class="counter-box">
                <span>See More Limit</span>
                <span id="seeMoreLimit">0 / 210</span>
            </div>
            <div class="counter-box">
                <span>Connection Message</span>
                <span id="connectionMessage">0 / 300</span>
            </div>
            <div class="counter-box">
                <span>About Section</span>
                <span id="aboutSection">0 / 2600</span>
            </div>
            <div class="counter-box">
                <span>Headline</span>
                <span id="headline">0 / 220</span>
            </div>
        </div>

        <div class="btn-container">
            <button class="btn-copy" onclick="copyText()">Copy Text</button>
            <button class="btn-clear" onclick="clearText()">Clear Text</button>
            <button class="btn-paste" onclick="pasteFromClipboard()">Paste from Clipboard</button>
        </div>
    </div>

    <div class="counterborder">
        <div class="instructions-container  ">
            <div class="instructions-header">
                <h2 class="fw-bolder fs-2">How to use character counter for LinkedIn?</h2>
            </div>

            <div class="step mb-4">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h4 class="mb-3">Enter Your Text</h4>
                    <p class="">Type directly or paste your content into the text box using the "Copy clipboard" button.
                        Character
                        counter instantly updates and shows you how many characters you've used against the limit.</p>
                </div>
            </div>

            <div class="step mb-4">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h4 class="mb-3">Monitor Character Usage</h4>
                    <p class="">Keep an eye on the 'Characters Typed' and 'Characters Remaining' indicators to ensure
                        your content
                        fits LinkedIn's limits for posts, about sections, and messages.</p>
                </div>
            </div>

            <div class="step mb-4">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h4 class="mb-3">Use Truncation to Your Advantage</h4>
                    <p class="">Adjust your post to get the most important information before the truncation limit. This
                        ensures your
                        main point is visible without clicking the 'see more' button.</p>
                </div>
            </div>

            <div class="step mb-4">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h4 class="mb-3">Copy or Clear Your Text</h4>
                    <p class="">Use the 'Copy Text' button to easily copy-paste your content to LinkedIn. If you need to
                        start over,
                        the 'Clear Text' button helps you to start over with a clean text box.</p>
                </div>
            </div>
        </div>
    </div>


    <section class="section-2 p-5">
        <div class="container">
            <h1 class="text-center mb-5 fs-1 fw-bold">Frequently Asked Questions (FAQs)</h1>
            <div class="accordion" id="accordionExample">
                <!-- Accordion Item 1 -->
                <div class="accordion-item border-0 shadow-none mb-3">
                    <h2 class="accordion-header  ">
                        <button class="accordion-button collapsed  shadow-none border-0 fw-semibold fs-5 aacccolr" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Why this Typegrow?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body border-0 shadow-none aacccolr">
                            Typegrow is an all-in-one LinkedIn growth tool trusted by over 1,000 creators and companies.
                            Typegrow helps you create and schedule better content with less effort using AI.
                        </div>
                    </div>
                </div>
                <!-- Accordion Item 2 -->
                <div class="accordion-item border-0 shadow-none mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed  shadow-none border-0 fw-semibold  fs-5  aacccolr" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
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
                        <button class="accordion-button collapsed  shadow-none border-0 fw-semibold  fs-5  aacccolr" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
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
                        <button class="accordion-button collapsed shadow-none border-0 fw-semibold fs-5 aacccolr" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
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
                        <button class="accordion-button collapsed  shadow-none  border-0 fw-semibold fs-5 aacccolr" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
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
                        <button class="accordion-button collapsed  shadow-none border-0 fw-semibold fs-5  aacccolr" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
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
                        <button class="accordion-button collapsed shadow-none border-0 fw-semibold fs-5  aacccolr" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                            aria-controls="collapseSeven">
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

    <div class="tools-container">
        <h2 class="fw-bold fs-1 animate__animated animate__fadeInDown  animate__delay-3s">More free tools</h2>
        <div class="tools-grid border-0  ">
            <div class="tool-item  animate__animated  animate__fadeInDown animate__delay-5s">
                <i class="fas fa-images tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link col-auto">LinkedIn Carousel Generator</a>
            </div>
            <div class="tool-item animate__animated animate__fadeInDown animate__delay-5s">
                <i class="fas fa-anchor tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link col-auto">LinkedIn Hook Generator</a>
            </div>
            <div class="tool-item animate__animated animate__fadeInDown animate__delay-5s">
                <i class="fas fa-heading tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link col-auto ">LinkedIn Headline Generator</a>
            </div>
            <div class="tool-item animate__animated animate__fadeInDown animate__delay-5s">
                <i class="fas fa-hashtag tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link  col-auto">LinkedIn Hashtag Generator</a>
            </div>
            <div class="tool-item animate__animated animate__fadeInDown animate__delay-5s">
                <i class="fas fa-text-height tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link col-auto">LinkedIn Text Formatter</a>
            </div>
            <div class="tool-item animate__animated animate__fadeInDown animate__delay-5s">
                <i class="fas fa-file-alt tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link col-auto">LinkedIn Post Generator</a>
            </div>
            <div class="tool-item animate__animated animate__fadeInDown animate__delay-5s">
                <i class="fas fa-list-ol tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link col-auto">LinkedIn Character Counter</a>
            </div>
            <div class="tool-item animate__animated animate__fadeInDown animate__delay-5s">
                <i class="fas fa-download tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link col-auto">LinkedIn Video Downloader</a>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>

    <script>
        const textArea = document.getElementById('textArea');
        const typedCount = document.getElementById('typedCount');
        const remainingCount = document.getElementById('remainingCount');
        const seeMoreLimit = document.getElementById('seeMoreLimit');
        const connectionMessage = document.getElementById('connectionMessage');
        const aboutSection = document.getElementById('aboutSection');
        const headline = document.getElementById('headline');

        textArea.addEventListener('input', updateCounts);

        function updateCounts() {
            const textLength = textArea.value.length;
            typedCount.textContent = `${textLength} / 3000`;
            remainingCount.textContent = `${3000 - textLength}`;
            seeMoreLimit.textContent = `${textLength} / 210`;
            connectionMessage.textContent = `${textLength} / 300`;
            aboutSection.textContent = `${textLength} / 2600`;
            headline.textContent = `${textLength} / 220`;
        }

        function copyText() {
            textArea.select();
            document.execCommand('copy');
            alert('Text copied to clipboard!');
        }

        function clearText() {
            textArea.value = '';
            updateCounts();
        }

        function pasteFromClipboard() {
            navigator.clipboard.readText()
                .then(text => {
                    textArea.value = text;
                    updateCounts();
                })
                .catch(err => {
                    alert('Failed to read clipboard contents.');
                });
        }
    </script>
</body>

</html>