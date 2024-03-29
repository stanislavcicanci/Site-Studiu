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
    <link href={{ URL('CSS/signup.css') }}  rel="stylesheet">
    <title>MiniStore</title>
</head>
<body>
        <div class="back">
            <div class="home_b d-flex align-items-center">
                <a href={{ route('home') }}><i class="bi bi-arrow-left"></i></a>
               <a href={{ route('home') }}> <h3>Home</h3></a>
            </div>
        </div>

        <form action="{{ route('signup.post') }}" method="POST" class="content d-flex flex-wrap align-items-center">
            @csrf
            <div class="mesajele mt-5">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            </div>
            <img src={{ URL('images/Signup.png') }} alt="">
            <div class="continut_log d-block justify-content-center align-items-center">
              <div class="text">
                <h2 style="color: #72AEC8">Sign </h2><h2 class="text-center">Up</h2>
              </div>
              <div class="input">
                <i class="bi bi-person-circle"></i>
                <label for="user_f" class="user_f">Username</label>
                <input type="text" id="user_f" name='username'>
            </div>
            <div class="input">
                <i class="bi bi-envelope-at"></i>
                <label for="mail" class="mail">E-mail</label>
                <input type="email" id="mail" name='email'>
            </div>
            <div class="input">
                <i class="bi bi-key" style="rotate: 45deg"></i>
                <label for="password" class="password">Password</label>
                <input type="password" id="password" name='password'>
            </div>
            <div class="input">
                <i class="bi bi-key-fill" style="rotate: 45deg"></i>
                <label for="password_c" class="password_c">Confirm Password</label>
                <input type="password" id="password_c" name="confirm_password">
            </div>

            
            <div class="cont_log d-flex justify-content-center align-items-center">
                <button type="submit">Next</button> <p>or <a href={{ route('login') }} style="color: #72AEC8">Log in</a></p>
            </div>
            </div>

        </form>

</body>
</html>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let inputs = document.querySelectorAll('.input input');
        let labels = document.querySelectorAll('.input label');

        inputs.forEach((inputElement, index) => {
            let icon = inputElement.parentElement.querySelector('i');

            inputElement.addEventListener('focus', () => {
                labels[index].style.fontSize = "14px";
                labels[index].style.color = "#72AEC8";
                labels[index].style.transition = "top 0.5s, font-size 0.5s, transform 0.5s, color 0.5s";
                labels[index].style.transform = "translateY(-30px)";
             
            });

            inputElement.addEventListener('blur', () => {
                if (inputElement.value === '') {
                    labels[index].style.top = "0";
                    labels[index].style.fontSize = "16px";
                    labels[index].style.color = "#000000";
                    labels[index].style.transition = "top 0.5s, font-size 0.5s, transform 0.5s, color 0.5s";
                    labels[index].style.transform = "translateY(0)";
                   
                }
            });

            inputElement.addEventListener('input', () => {
                if (inputElement.value !== '') {
                    labels[index].style.fontSize = "14px";
                    labels[index].style.color = "#72AEC8";
                    labels[index].style.transition = "top 0.5s, font-size 0.5s, transform 0.5s, color 0.5s";
                    labels[index].style.transform = "translateY(-30px)";
                    icon.classList.add('active');
                } else {
                    icon.classList.remove('active');
                }
            });

            inputElement.addEventListener('keypress', (event) => {
                if (event.key === 'Enter') {
                    event.preventDefault();

                    const nextIndex = index + 1;
                    if (nextIndex < inputs.length) {
                        inputs[nextIndex].focus();
                    } else {
                        inputElement.blur();
               
                        document.querySelector('button[type="submit"]').click();
                    }
                }
            });
        });

        document.addEventListener('click', (event) => {
            if (!event.target.closest('.input')) {
                labels.forEach((labelElement, index) => {
                    let inputElement = inputs[index];
                    if (inputElement.value === '') {
                        labelElement.style.top = "0";
                        labelElement.style.fontSize = "16px";
                        labelElement.style.color = "#000000";
                        labelElement.style.transition = "top 1s, font-size 1s, transform 1s, color 1s";
                        labelElement.style.transform = "translateY(0)";
                    }
                });
            }
        });
    });
</script>
