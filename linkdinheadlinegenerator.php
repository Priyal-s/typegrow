<?php include "header.php"; ?>
<title>typegrow</title>
</head>

<body>
    <?php include "menu.php"; ?>
    <div class="headlinecontainer mx-auto m-4">
        <h1 class="fw-bold text-center pb-2">LinkedIn Headline Generator</h1>
        <p class="text-center fs-5 mb-5">Generate an engaging LinkedIn headline for free using AI and get more profile
            visits.</p>

        <div class="form-group mb-2">
            <label for="occupation" class="d-block mb-2 fw-demi-bold fs-5">Describe what you do:</label>
            <input type="text" id="occupation" class="form-control p-2" placeholder="I'm a....">
        </div>

        <div class="form-group mb-3">
            <label for="emojis">Use Emojis:</label>
            <input type="checkbox" id="emojis" class="me-3">
        </div>

        <div id="generateHeadline" class="mt-2 animated-button p-3 btn btn-dark d-block">Generate LinkedIn Headline
        </div>

        <div id="results" class="fw-semibold fs-5 mt-2"></div>
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
        <div class="container col-lg-10">
            <h1 class="text-center mb-5 fs-1 fw-bold">Frequently Asked Questions (FAQs)</h1>
            <div class="accordion" id="accordionExample">
                <!-- Accordion Item 1 -->
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed border-0 fw-semibold fs-5" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Why this Typegrow?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body border-0 shadow-none">
                            Typegrow is an all-in-one LinkedIn growth tool trusted by over 1,000 creators and companies.
                            Typegrow helps you create and schedule better content with less effort using AI.
                        </div>
                    </div>
                </div>
                <!-- Accordion Item 2 -->
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed  border-0 fw-semibold fs-5" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Who is Typegrow for?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body border-0 shadow-none">
                            Typegrow is for individuals or companies who want to grow personal brands on LinkedIn.
                            Whether you're an individual content creator or an agency, Typegrow helps you drive more
                            business from LinkedIn.
                        </div>
                    </div>
                </div>
                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed border-0 fw-semibold  fs-5" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            Is Typegrow safe to use?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body border-0 shadow-none">
                            Typegrow uses the official LinkedIn API to connect to your LinkedIn account and post content
                            from your or your company pages. This means that Typegrow keeps your account 100% safe to
                            use. We do not position ourselves as an automation tool and our focus is on providing you
                            with the right features to create better content and build inbound leads.
                        </div>
                    </div>
                </div>
                <!-- Accordion Item 4 -->
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed  border-0 fw-semibold  fs-5" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour">
                            How much does Typegrow cost?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body border-0 shadow-none">
                            Typegrow is currently completely free to use. However, we are working on a paid plan to
                            bring you more features and functionality.
                        </div>
                    </div>
                </div>
                <!-- Accordion Item 5 -->
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed  border-0 fw-semibold fs-5" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                            aria-controls="collapseFive">
                            Can I post from a company page?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body border-0 shadow-none">
                            Sure! You can add all your company pages your LinkedIn account has access to and post from
                            them. You'll be able to easily choose whether you want to post from your personal profile or
                            from company pages.
                        </div>
                    </div>
                </div>
                <!-- Accordion Item 6 -->
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed border-0 fw-semibold  fs-5" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                            aria-controls="collapseSix">
                            Can an agency use Typegrow for my clients?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body border-0 shadow-none">
                            Yes, Typegrow can be used by agencies to manage and schedule content for their clients,
                            making it easier to handle multiple accounts efficiently.
                        </div>
                    </div>
                </div>
                <!-- Accordion Item 7 -->
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed border-0 fw-semibold  fs-5" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                            aria-controls="collapseSeven">
                            Do I need to keep my browser open for Typegrow to work?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body border-0 shadow-none">
                            No, you do not need to keep your browser open for Typegrow to work. Once you schedule
                            content, Typegrow handles the posting automatically.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <?php include "footer.php"; ?>


    <script>
        document.getElementById('generateHeadline').addEventListener('click', function () {
            // Get input values
            const occupation = document.getElementById('occupation').value;
            const useEmojis = document.getElementById('emojis').checked;

            // Generate the headline
            let headline = generateHeadline(occupation, useEmojis);

            // Display the headline in the results div
            document.getElementById('results').innerText = headline;
        });

        function generateHeadline(occupation, useEmojis) {
            if (!occupation) {
                return "Please enter your occupation to generate a headline.";
            }

            // Simulated headline generation
            let headline = `I'm a passionate ${occupation} helping others succeed.`;

            // Add emojis if the checkbox is checked
            if (useEmojis) {
                headline += " 🚀😊";
            }

            return headline;
        }
    </script>
</body>

</html>