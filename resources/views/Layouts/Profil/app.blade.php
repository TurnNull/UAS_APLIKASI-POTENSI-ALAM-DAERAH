<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio AMli</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav id="nav-header" class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex flex-items justify-between relative">
                <div class="px-4">
                    <a href="#home" class="font-bold text-lg text-primary block py-6">AliArRidha</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="humberger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition origin-top-left duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition origin-bottom-left duration-300 ease-in-out"></span>
                    </button>
                    <div id="nav-menu" class="hidden absolute p-5 bg-white shadow-lg rounded-sm max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary group-hover:underline group-hover:underline-offset-4 underline-offset-0 transition-all duration-300">Home</a>
                            </li>
                            <li class="group">
                                <a href="" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary group-hover:underline group-hover:underline-offset-4 underline-offset-0 transition-all duration-300">About Me</a>
                            </li>
                            <li class="group">
                                <a href="" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary group-hover:underline group-hover:underline-offset-4 underline-offset-0 transition-all duration-300">Gallery</a>
                            </li>
                            <li class="group">
                                <a href="" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary group-hover:underline group-hover:underline-offset-4 underline-offset-0 transition-all duration-300">Blog</a>
                            </li>
                            <li class="group">
                                <a href="" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary group-hover:underline group-hover:underline-offset-4 underline-offset-0 transition-all duration-300">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section id="hero" class="my-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary md:text-xl">
                        Hallo everyone~, I'am <span class="block font-bold text-dark text-4xl lg:text-5xl mt-1">Muhammad Husain Ali Ridha</span>
                    </h1>
                    <h2 class="font-medium text-secondary text-lg mb-5 leading-relaxed lg:text-2xl">
                        Beginner Programmer | <span class="type-myTitle text-dark"></span></h2>
                    <p class="font-medium text-secondary mb-10">
                        "Clean code is <span class="text-dark">my dream</span>"
                    </p>
                    <a href="" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:bg-secondary hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">None above</a>
                </div>
                <div class="w-full relative self-end px-4 lg:w-1/2">
                    <div class="w-full relative mx-auto h-auto overflow-hidden rounded-xl mt-10 lg:mt-0 lg:right-0 drop-shadow-md lg:hover:rounded-bl-[24rem] lg:hover:drop-shadow-[0_35px_35px_rgba(0,0,0,0.30)] lg:transition-all lg:duration-700">
                        <img src="dist/img/profile_img.jpg" alt="profile_image" class="w-full h-auto relative mx-auto rounded-3xl scale-110 transition-all duration-500 hover:scale-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="mb-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg mb-3">About Me</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-xl lg:text-4xl">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                    <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio soluta nostrum pariatur dignissimos beatae eveniet molestiae alias ex voluptas natus assumenda mollitia molestias consequatur eligendi quisquam quo corporis, aperiam ullam?</p>
                </div>
                <div class="w-full px-4 lg:w-1/2 text-end">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Follow me</h3>
                    <p class="font-medium text-base text-secondary mb-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni, rerum. Reprehenderit rerum possimus, vitae similique minus culpa doloremque modi ut?</p>
                    <div class="flex item-center justify-end">
                        <a href="https:/instagram.com/Ali.Ar_Ridha" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-primary text-primary hover:border-secondary hover:bg-primary hover:text-white" target="_blank">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                        </a>
                        <a href="https:/facebook.com/AliArRidha07" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-primary text-primary hover:border-secondary hover:bg-primary hover:text-white" target="_blank">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/></svg>
                        </a>
                        <a href="https:/github.com/TurnNull" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-primary text-primary hover:border-secondary hover:bg-primary hover:text-white" target="_blank">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="mb-36">
        <div class="container">
            <div class="max-w-xl py-4 mx-auto mb-12 relative text-center border-2 border-secondary">
                <h4 class="px-3 font-bold uppercase text-primary bg-white text-lg mb-3 absolute -top-4 right-1/2 transform translate-x-1/2">Contact</h4>
                <h2 class="font-bold text-dark text-3xl mb-5 max-w-xl lg:text-4xl">Lorem ipsum dolor sit</h2>
                <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="max-w-2xl mx-auto border-2 relative border-secondary p-4 shadow-xl">
                <form>
                    <legend class="absolute -top-5 left-4 font-extrabold text-2xl uppercase text-white bg-secondary px-3">Send Me Your Message</legend>
                    <div class="w-full">
                        <div class="w-full my-4">
                            <label for="name" class="font-semibold text-base">Name</label>
                            <input type="text" id="name" class="w-full mt-2 bg-white border border-dark px-3 py-2 focus:text-white focus:bg-dark focus:border-none focus:outline-none focus:drop-shadow-[4px_8px_10px_rgba(107,33,168,0.85)] transition-all duration-300">
                        </div>
                        <div class="w-full mb-4">
                            <label for="email" class="font-semibold text-base">Email</label>
                            <input type="text" id="email" class="w-full mt-2 bg-white border border-dark px-3 py-2 focus:text-white focus:bg-dark focus:border-none focus:outline-none focus:drop-shadow-[4px_8px_10px_rgba(107,33,168,0.85)] transition-all duration-300">
                        </div>
                        <div class="w-full mb-4">
                            <label for="message" class="font-semibold text-base">Message</label>
                            <textarea type="text" id="message" class="w-full h-32 mt-2 bg-white border border-dark px-3 py-2 focus:text-white focus:bg-dark focus:border-none focus:outline-none focus:drop-shadow-[4px_8px_10px_rgba(107,33,168,0.85)] transition-all duration-300"></textarea>
                        </div>
                    </div>
                    <div class="text-end">
                        <button class="relative font-medium group py-1 px-2 hover:drop-shadow-[-3px_-3px_10px_rgba(107,33,168,0.85)] transition-all duration-200">
                            <span class="absolute inset-0 w-full h-full transition duration-400 ease-out transform translate-x-1 translate-y-1 bg-secondary group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                            <span class="absolute inset-0 w-full h-full bg-white border group-hover:border-none border-secondary group-hover:bg-dark"></span>
                            <span class="relative px-4 font-semibold text-base group-hover:text-white group-hover:bg-clip-text group-hover:text-transparent">
                                Submit
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <footer class="bg-dark pt-24 pb-12 text-white">
        <div class="container flex flex-wrap justify-evenly">
            <div class="w-full mb-12 md:w-1/3">
                <h2 class="font-extrabold text-4xl mb-3">ALI AR RIDHA</h2>
                <h3 class="font-semibold text-xl underline underline-offset-3">Contact Me</h3>
                <p class="font-light">husain.7605@gmail.com</p>
            </div>
            <div class="w-full mb-12 md:w-1/3 md:text-center">
                <h3 class="font-semibold text-xl mb-3 underline underline-offset-3">Category Blog</h3>
                <ul>
                    <li class="font-light mb-2">
                        <a href="#">Hobby</a>
                    </li>
                    <li class="font-light mb-2">
                        <a href="#">Programming</a>
                    </li>
                    <li class="font-light mb-2">
                        <a href="#">Games</a>
                    </li>
                </ul>
            </div>
            <div class="w-full mb-12 md:w-1/3 md:text-end">
                <h3 class="font-semibold text-xl mb-3 underline underline-offset-3">Link</h3>
                <ul>
                    <li class="font-light mb-2">
                        <a href="#">Home</a>
                    </li>
                    <li class="font-light mb-2">
                        <a href="#">About Me</a>
                    </li>
                    <li class="font-light mb-2">
                        <a href="#">Gallery</a>
                    </li>
                    <li class="font-light mb-2">
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="w-full pt-10 border-t">
                <div class="flex item-center justify-center mb-5">
                    <a href="https:/instagram.com/Ali.Ar_Ridha" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-white text-white hover:bg-secondary hover:text-white" target="_blank">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                    </a>
                    <a href="https:/facebook.com/AliArRidha07" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-white text-white hover:bg-secondary hover:text-white" target="_blank">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/></svg>
                    </a>
                    <a href="https:/github.com/TurnNull" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-white text-white hover:bg-secondary hover:text-white" target="_blank">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    </a>
                </div>
                <div class="flex justify-center">
                    <p class="font-light text-xs">Created with 💖 by <a href="https://instagram.com/ali.ar_ridha?theme=dark" class="font-bold text-thiry" target="_blank">Ali Ar Ridha</a>, using <a href="https://tailwindcss.com" class="font-bold text-thiry" target="_blank">Tailwind CSS</a></p>
                </div>
            </div>
    </footer>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>