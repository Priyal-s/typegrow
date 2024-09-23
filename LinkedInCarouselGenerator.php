<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkedIn Carousel Generator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
        }

        .input-container {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            justify-content: center;
        }

        .input-container input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 50%;
        }

        .input-container button {
            padding: 10px 15px;
            background-color: #0073b1;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .carousel-item {
            padding: 20px;
            border: 1px dashed #ddd;
            border-radius: 8px;
            background-color: #f0f8ff;
            text-align: center;
        }

        .carousel-item h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .carousel-item p {
            font-size: 14px;
            color: #333;
        }

        .slide-controls {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            gap: 5px;
        }

        .slide-controls button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            color: #555;
        }

        .icon-style {
            color: #0073b1;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header text-center">
        <h1>LinkedIn Carousel Generator</h1>
        <p>Create a LinkedIn carousel post for free with AI. Our carousel generator turns your topics into engaging slides.</p>
    </div>

    <div class="input-container">
        <input type="text" id="carouselTopic" placeholder="Enter a topic for your LinkedIn carousel...">
        <button onclick="generateCarousel()">Generate Carousel</button>
    </div>

    <!-- Carousel Structure -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="carouselContainer">
            <!-- Dynamic slides will be injected here -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    const topicsContent = {
        'PHP': [
            {
                feature: 'Amazing Catchy Title Goes Right Here!',
                explanation: 'Your amazing description goes here.'
            },
            {
                feature: 'Section Title',
                explanation: 'Reserved for a text that will leave viewers wanting more.'
            },
            {
                feature: 'Section Title',
                explanation: 'Reserved for a text that will leave viewers wanting more.'
            }
        ],
        'JavaScript': [
            {
                feature: 'Dynamic Title for JavaScript',
                explanation: 'JavaScript enhances interactivity on websites.'
            },
            {
                feature: 'JavaScript DOM',
                explanation: 'Manipulate elements easily with JS DOM methods.'
            },
            {
                feature: 'Async JavaScript',
                explanation: 'Handle async processes seamlessly with promises.'
            }
        ]
    };

    function generateCarousel() {
        const container = document.getElementById('carouselContainer');
        const topic = document.getElementById('carouselTopic').value.trim();

        if (!topic) {
            alert('Please enter a topic!');
            return;
        }

        const slideContents = topicsContent[topic] || [
            {
                feature: `Introduction to ${topic}`,
                explanation: `Learn the basics and importance of ${topic} in today's world.`
            },
            {
                feature: `Key Points about ${topic}`,
                explanation: `Discover the essential elements that make ${topic} relevant.`
            },
            {
                feature: `Getting Started with ${topic}`,
                explanation: `A beginner's guide on how to dive into ${topic} and start exploring.`
            }
        ];

        container.innerHTML = '';

        slideContents.forEach((content, index) => {
            addSlide(content.feature, content.explanation, container, index === 0);
        });

        document.getElementById('carouselTopic').value = '';
    }

    function addSlide(feature, explanation, container, isActive = false) {
        const slide = document.createElement('div');
        slide.className = `carousel-item${isActive ? ' active' : ''}`;
        slide.innerHTML = `
            <div class="carousel-item-content">
                <div class="slide-controls">
                    <button onclick="editSlide(this)"><i class="fas fa-edit icon-style"></i></button>
                    <button onclick="deleteSlide(this)"><i class="fas fa-trash icon-style"></i></button>
                    <button onclick="customizeSlide(this)"><i class="fas fa-wrench icon-style"></i></button>
                </div>
                <h2>${feature}</h2>
                <p>${explanation}</p>
            </div>
        `;

        container.appendChild(slide);
    }

    function editSlide(button) {
        const slide = button.closest('.carousel-item');
        const title = slide.querySelector('h2');
        const newTitle = prompt('Edit slide title:', title.textContent);
        if (newTitle) title.textContent = newTitle;
    }

    function deleteSlide(button) {
        const slide = button.closest('.carousel-item');
        slide.remove();
    }

    function customizeSlide(button) {
        const slide = button.closest('.carousel-item');
        const title = slide.querySelector('h2');
        const explanation = slide.querySelector('p');
        const newTitle = prompt('Customize slide title:', title.textContent);
        const newExplanation = prompt('Customize slide explanation:', explanation.textContent);
        if (newTitle) title.textContent = newTitle;
        if (newExplanation) explanation.textContent = newExplanation;
    }
</script>
</body>
</html>
