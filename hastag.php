<?php include "header.php"; ?>
<title>typegrow</title>
</head>

<body>

    <?php include "menu.php"; ?>


    <div class="container mb-5">
        <div class="header">
            <h1 class="fw-bold">LinkedIn Hashtag Generator</h1>
            <p>Use our free hashtag generator to find the best hashtags for your<br> LinkedIn posts and increase your
                reach.</p>
        </div>

        <!-- Post Input Section -->
        <div class="p-3 form-group col-md-8 text-start mx-auto mb-2 p-2">
            <label for="postContent" class="m-2 fw-semibold fs-5">What is your LinkedIn post about?
            </label>
            <textarea id="postContent" class="form-control col-md-6" rows="2"
                placeholder="Type your post content here..."></textarea>
        </div>

        <!-- Generate Button -->
        <button id="generateHashtags" class=" animated-button btn btn-dark btn-block col-md-8 mt-2 p-3">Generate Hashtags</button>

        <!-- Hashtag Results -->
        <div id="hashtagResult" class="hashtag-result" style="display: none;">
            <h5>Related Hashtags:</h5>
            <div id="hashtagsContainer"></div>
        </div>
    </div>

    <div class="counterborder">
        <div class="instructions-container  ">
            <div class="instructions-header">
                <h2 class="fw-bolder fs-2">How to use Typegrow's Hashtag Generator
                </h2>
            </div>

            <div class="step mb-4">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h4 class="mb-3">Describe your post
                    </h4>
                    <p class="">Start by writing or pasting the content of your LinkedIn post into the input field. When
                        describing your content, be as specific as possible, as this will help us generate the best
                        hashtags. You can also include the post type in your description (text, carousel, image, video)
                        to give the generator the right context.
                    </p>
                </div>
            </div>

            <div class="step mb-4">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h4 class="mb-3">Generate hashtag suggestions
                    </h4>
                    <p class="">You can click the generate button and in the few seconds, our tool will present you with
                        a list of the most effective hashtags for your post. Every hashtag is based on your specific
                        content and what's popular right now.
                    </p>
                </div>
            </div>

            <div class="step mb-4">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h4 class="mb-3">Paste them at the end of your LinkedIn post
                    </h4>
                    <p class="">Once you have selected the right hashtags, you'll want to paste them at the end of your
                        LinkedIn post. By placing the hashtags at the bottom of your post, rather than the top or
                        middle, you'll help your LinkedIn audience discover your content and make it easier for screen
                        readers to read it.
                    </p>
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
                        <button class="accordion-button collapsed  shadow-none border-0 fw-semibold fs-5 aacccolr"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Why this Typegrow?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
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


    <div class="tools-container">
        <h2>More free tools</h2>
        <div class="tools-grid border-0">
            <div class="tool-item">
                <i class="fas fa-images tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link small">LinkedIn Carousel Generator</a>
            </div>
            <div class="tool-item">
                <i class="fas fa-anchor tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link small">LinkedIn Hook Generator</a>
            </div>
            <div class="tool-item">
                <i class="fas fa-heading tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link small">LinkedIn Headline Generator</a>
            </div>
            <div class="tool-item">
                <i class="fas fa-hashtag tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link small">LinkedIn Hashtag Generator</a>
            </div>
            <div class="tool-item">
                <i class="fas fa-text-height tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link small">LinkedIn Text Formatter</a>
            </div>
            <div class="tool-item">
                <i class="fas fa-file-alt tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link small">LinkedIn Post Generator</a>
            </div>
            <div class="tool-item">
                <i class="fas fa-list-ol tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link small">LinkedIn Character Counter</a>
            </div>
            <div class="tool-item">
                <i class="fas fa-download tool-icon fontsiziesss"></i>
                <a href="#" class="tool-link small">LinkedIn Video Downloader</a>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>

    <script>
        // Example array of hashtags for demo purposes
        const hashtagSuggestions = {
            'marketing': ['#marketing', '#digitalmarketing', '#contentmarketing', '#marketingstrategy'],
            'career': ['#career', '#jobsearch', '#careergoals', '#professionaldevelopment'],
            'leadership': ['#leadership', '#management', '#leadershipdevelopment', '#businessleadership'],
            'technology': ['#technology', '#technews', '#innovation', '#futuretech'],
            'business': ['#business', '#entrepreneurship', '#businessgrowth', '#smallbusiness']
        };

        // Generate Hashtags Function
        function generateHashtags(postContent) {
            let hashtags = [];
            for (let key in hashtagSuggestions) {
                if (postContent.toLowerCase().includes(key)) {
                    hashtags = hashtags.concat(hashtagSuggestions[key]);
                }
            }
            return hashtags.length ? hashtags : ['#LinkedIn', '#Professional', '#Networking'];
        }

        // Event Listener for Generate Button
        document.getElementById('generateHashtags').addEventListener('click', function () {
            const postContent = document.getElementById('postContent').value.trim();
            const hashtags = generateHashtags(postContent);

            // Clear previous results
            const hashtagsContainer = document.getElementById('hashtagsContainer');
            hashtagsContainer.innerHTML = '';

            // Display new results
            hashtags.forEach(hashtag => {
                const hashtagElement = document.createElement('span');
                hashtagElement.className = 'hashtag';
                hashtagElement.textContent = hashtag;
                hashtagsContainer.appendChild(hashtagElement);
            });

            // Show the results section
            document.getElementById('hashtagResult').style.display = 'block';
        });
    </script>




</body>

</html>