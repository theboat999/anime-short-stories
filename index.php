<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Include Example</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <?php include 'header.html'; ?>
    
    <div class="content">
        <h2>FEEL FREE TO SELECT A SHORT STORY</h2>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.getElementById('header');
            const boxes = document.querySelectorAll('.box');

            boxes.forEach(box => {
                box.addEventListener('mouseover', function() {
                    const bgImage = this.getAttribute('data-bg');
                    header.style.backgroundImage = `url(${bgImage})`;
                    header.style.backgroundSize = 'cover'; // Ensure the image covers the header
                    header.style.backgroundPosition = 'center'; // Center the image
                    header.style.backgroundRepeat = 'no-repeat'; // Prevent tiling
                });

                box.addEventListener('mouseout', function() {
                    header.style.backgroundImage = 'none';
                });

                box.addEventListener('click', function() {
                    const image = this.querySelector('img').src;
                    if (image.includes('image1.jpg')) {
                        fetch('story1.html')
                            .then(response => response.text())
                            .then(data => {
                                document.querySelector('.content').innerHTML = data;
                            })
                    } else if (image.includes('image2.jpg')) {
                        fetch('story2.html')
                            .then(response => response.text())
                            .then(data=>{
                                document.querySelector('.content').innerHTML = data;
                            })
                    } else if (image.includes('image3.jpg')) {
                        fetch('story3.html')
                            .then(response => response.text())
                            .then(data=>{
                                document.querySelector('.content').innerHTML = data;
                            })
                    } else if (image.includes('image4.jpg')) {
                        fetch('story4.html')
                        .then(response => response.text())
                        .then(data=>{
                            document.querySelector('.content').innerHTML = data;
                        })
                    } else if (image.includes('image5.jpg')) {
                        fetch('story5.html')
                        .then(response => response.text())
                        .then(data=>{
                            document.querySelector('.content').innerHTML = data;
                        })
                    }
                });
            });
        });
    </script>
</body>
</html>
