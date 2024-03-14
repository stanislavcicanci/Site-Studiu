<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href={{ URL('/images/Logo.svg') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href={{ URL('CSS/login.css') }}  rel="stylesheet">
    <title>MiniStore</title>
</head>
<body>
        <div class="back">
            <div class="home_b d-flex align-items-center">
                <i class="bi bi-arrow-left"></i>
                <h3>Home</h3>
            </div>
        </div>

        <div class="content d-flex flex-wrap align-items-center justify-content-center">
            <img src={{ URL('images/Login.png') }} alt="">
            <div class="continut_log d-block justify-content-center align-items-center">
              <div class="text">
                <h2 style="color: #72AEC8">Welcome</h2><h2 class="text-center">back</h2>
              </div>
                <p>Enter all the necessary information to make the account entry</p>
            <div class="input">
                <i class="bi bi-person-circle"></i>
                <label for="user" class="user">Username</label>
                <input type="text" id="user">
            </div>
            <div class="input">
                <i class="bi bi-lock"></i>
                <label for="password" class="password">Password</label>
                <input type="text" id="password">
            </div>

            
            <div class="cont_log d-block justify-content-center align-items-center">
                <button>Next</button> <p>or</p> <a href={{ route('signup') }} style="color: #72AEC8">Sign Up</a>
            </div>
            </div>

        </div>

</body>
</html>
<script>
    let inputs = document.querySelectorAll('input');
    let labels = document.querySelectorAll('label');

    inputs.forEach((inputElement, index) => {
        let icon = inputElement.parentElement.querySelector('i');

        inputElement.addEventListener('focus', () => {
            labels[index].style.fontSize = "14px";
            labels[index].style.color = "#72AEC8";
            labels[index].style.transition = "top 1s, font-size 1s, transform 1s, color 1s";
            labels[index].style.transform = "translateY(-30px)";
        });

        inputElement.addEventListener('blur', () => {
            if (inputElement.value === '') {
                labels[index].style.top = "0";
                labels[index].style.fontSize = "16px";
                labels[index].style.color = "#000000";
                labels[index].style.transition = "top 1s, font-size 1s, transform 1s, color 1s";
                labels[index].style.transform = "translateY(0)";
            }
        });

        inputElement.addEventListener('input', () => {
            if (inputElement.value !== '') {
                labels[index].style.fontSize = "14px";
                labels[index].style.color = "#72AEC8";
                labels[index].style.transition = "top 1s, font-size 1s, transform 1s, color 1s";
                labels[index].style.transform = "translateY(-30px)";
                icon.classList.add('green');
            } else {
                icon.classList.remove('green');
            }
        });
    });

    document.addEventListener('click', (event) => {
        if (!event.target.closest('label')) {
            labels.forEach(labelElement => {
                if (!labelElement.previousElementSibling || labelElement.previousElementSibling !== document.activeElement) {
                    if (labelElement.previousElementSibling.value === '') {
                        labelElement.style.top = "0";
                        labelElement.style.fontSize = "16px";
                        labelElement.style.color = "#000000";
                        labelElement.style.transition = "top 1s, font-size 1s, transform 1s, color 1s";
                        labelElement.style.transform = "translateY(0)";
                    }
                }
            });
        }
    });
</script>