const ball = document.getElementById("ball");
            let x = 0;
            let y = 0;
            let xSpeed = 5;
            let ySpeed = 5;
            function animate() {
            x += xSpeed;
            y += ySpeed;
            if (x + 50 > window.innerWidth || x < 0) {
               xSpeed = -xSpeed;
            }
            if (y + 50 > window.innerHeight || y < 0) {
               ySpeed = -ySpeed;
            }
            ball.style.left = x + "px";
            ball.style.top = y + "px";
            requestAnimationFrame(animate);
         }
        animate();
