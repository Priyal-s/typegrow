<?php include "header.php"; ?>
<title>typegrow</title>


<?php include "menu.php"; ?>


<body>

    <div class="container">
        <header>
            <h1 class="fw-bold">LinkedIn Post Generator</h1>
            <p class="fs-5">Generate high quality posts with AI like a top LinkedIn creator. No <br> email or login
                required - just enter
                your topic.</p>
        </header>

        <div class="post-generator">
            <div class="input-section mb-2">
                <label for="post-topic" class="text-start m-2 fs-5 fw-semibold">Enter your post topic</label>
                <input type="text" id="post-topic" placeholder="Add few details for your LinkedIn post">

                <div class="emoji-toggle m-2">
                    <label for="use-emojis">Use Emojis</label>
                    <input type="checkbox" id="use-emojis" checked>
                </div>

                <button id="generate-post" class="btn btn-dark">Generate LinkedIn Post</button>

            </div>
            <div class="d-flex">
                <div class="post-editor col-md-6">
                    <div class="editor-toolbar">
                        <!-- Toolbar buttons can go here (Bold, Italics, etc.) -->
                        <button class="ql-bold"></button>
                        <button class="ql-italic"></button>
                        <button class="ql-underline"></button>
                        <button class="ql-strike"></button>
                        <button class="ql-link"></button>
                        <button class="ql-image"></button>
                        <button class="ql-clean"></button>

                    </div>
                    <textarea id="post-content" placeholder="Generated post content will appear here..."></textarea>
                </div>

                <div class="post-preview col-md-6">
                    <h2>Post Preview</h2>
                    <div class="preview-content">
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

                    </div>

                </div>




            </div>
        </div>
    </div>


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
    document.getElementById('generate-post').addEventListener('click', function () {
        // Get the input values
        const postTopic = document.getElementById('post-topic').value;
        const useEmojis = document.getElementById('use-emojis').checked;

        // Simulate generating related content
        let relatedContent = generateRelatedContent(postTopic);

        // Add emojis if the checkbox is checked
        if (useEmojis) {
            relatedContent += ' 😊';
        }

        // Display the generated content in the text editor and preview section
        document.getElementById('post-content').value = relatedContent; // Correctly updating textarea value
        document.querySelector('.preview-content').innerText = relatedContent; // Preview update
    });

    // Function to generate related content (Replace this with an API call to a real text generator)
    function generateRelatedContent(topic) {
        if (!topic) {
            return "Please enter a topic to generate related content.";
        }

        // Simulated related content (For a real application, use an AI text generator here)
        return `When discussing ${topic}, it's essential to consider various perspectives. 
For instance, the impact of ${topic} on current trends and future developments 
can't be overlooked. Whether it's in the context of business, technology, or 
social dynamics, ${topic} plays a crucial role.`;
    }
</script>

</body>

</html>